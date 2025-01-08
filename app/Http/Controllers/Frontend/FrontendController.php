<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderSuccessMail;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Feature;
use App\Models\Instructor;
use App\Models\Order;
use App\Models\Testimonial;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $data['banner']          = DB::table('homepage_sections')->where('url_slug', 'banner-section')->where('is_active', 1)->first();
        $data['aboutUs']         = DB::table('homepage_sections')->where('url_slug', 'about_section')->where('is_active', 1)->first();
        $data['testimonial']     = DB::table('homepage_sections')->where('url_slug', 'testimonial-section')->where('is_active', 1)->first();
        $data['feature']         = DB::table('homepage_sections')->where('url_slug', 'feature_section')->where('is_active', 1)->first();
        $data['instructor']      = DB::table('homepage_sections')->where('url_slug', 'instructor_section')->where('is_active', 1)->first();
        $data['instructor']      = DB::table('homepage_sections')->where('url_slug', 'instructor_section')->where('is_active', 1)->first();

        $data['courses']      = Course::where('status', 1)->get();
        $data['testimonials'] = Testimonial::where('status', 1)->get();
        $data['features']     = Feature::where('status', 1)->limit(3)->get();
        $data['instructors']  = Instructor::where('status', 1)->get();
        return view('frontend.pages.home', $data);
    }

    // public function login()
    // {
    //     return view('frontend.pages.login');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }


    public function contact_post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|max:255',
            'message'  => 'required',
        ]);

        DB::beginTransaction();
        try {
            $contact                     = new Contact();

            $contact->name               = $request->name;
            $contact->email              = $request->email;
            $contact->phone              = $request->phone;
            $contact->subject            = $request->subject;
            $contact->message            = $request->message;
            $contact->status             = 1;
        }
        catch (\Exception $e) {
            DB::rollback();
            // dd($e);
            Toastr::error('Oops! Something went wrong. Please try again later.', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }

        $contact->save();

        DB::commit();
        Toastr::success('Thank you for reaching out! We appreciate your feedback and will respond as quickly as possible', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cart_store(Request $request)
    {
        // dd($request->all());

        if( !Auth::check() ){
            Toastr::error('Please Login First', 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }

        $cart = Cart::where('course_id', $request->course_id)
                ->where('user_id', Auth::user()->id)
                ->where('order_id', NULL)
                ->first();

            if (!empty($cart) && $cart->qty >= 1) {
                Toastr::error('You can only add one unit of this product to your cart at a time.', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->route('cart');
            } 
            else if( Cart::where('user_id', Auth::user()->id)->first()->course_id == $request->course_id ){

                Toastr::error('Same Product cannot be purchase.', 'Error', ["positionClass" => "toast-top-right"]);
                return back();
            }
            else {
                $course = Course::where('id', $request->course_id)->first();

                if (!empty($course)) {

                $cart = new Cart();
                $cart->course_id    = $course->id;
                $cart->user_id      = Auth::user()->id;
                $cart->order_id     = null;
                $cart->qty          = 1; 
                $cart->price        = $course->price;

                $cart->save();

                Toastr::success('Product added to cart', 'Success', ["positionClass" => "toast-top-right"]);
                return redirect()->route('cart');
            }
        }

        Toastr::error('There is Something error', 'error', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function cart_delete(string $id)
    {
    //    dd($id);
       $cart = Cart::where('course_id', $id)->where('order_id', NULL)->first();

       $cart->delete();
       return redirect()->back();
    }


    public function cart()
    {
        $data['carts'] = Cart::getCartData();
        return view('frontend.pages.cart', $data);
    }

    /**
     * Display the specified resource.
     */
    public function checkout()
    {
        if( !Auth::check() ){
            Toastr::error('Please Login First', 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }

        $data['carts'] = Cart::getCartData();

        if( $data['carts']->count() == 0 ){
            Toastr::error('Please add at least 1 product', 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('home');
        }

        return view('frontend.pages.checkout', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function course_details(string $id)
    {
        $data['course'] = Course::findOrFail($id);
        $data['course_modules'] = CourseModule::where('course_id', $data['course']->id)->where('status', 1)->get();
        return view('frontend.pages.course_details', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function order(Request $request)
    {
        // dd($request->all());
        if( $request->total_product == 0 ){
            Toastr::error('Please add at least 1 product', 'error', ["positionClass" => "toast-top-right"]);
           return redirect()->route('home');
        }

        $order = new Order();

        $order->order_id           = 'ID-' . uniqid();
        $order->user_id            =  Auth::user()->id;
        $order->total_product      = $request->total_product;
        $order->total_amount       = $request->total_amount;
        $order->payment_method     = $request->payment_method;
        $order->payment_number     = $request->payment_number;
        $order->transaction_id     = $request->transaction_id;
        $order->status             = 2;   // pending
        $order->save();


        // update user
        $user                  = User::findOrFail(Auth::user()->id);

        $user->name            = $request->name;
        $user->email           = $request->email;
        $user->phone           = $request->phone;
        $user->address         = $request->address;
        $user->city            = $request->city;
        $user->zip_code        = $request->zip_code;
        $user->update();


        $carts = Cart::where('user_id', Auth::user()->id)->where('order_id', NULL)->get();

        foreach( $carts as $cart ){
            $cart->order_id  =  $order->order_id;
            $cart->update();
        }

        // Mail Order
        $mail_order =  Order::leftJoin('users', 'users.id', 'orders.user_id')
                            ->select('users.*','orders.order_id','orders.total_product','orders.total_amount','orders.payment_method')
                            ->where('orders.order_id', $order->order_id)
                            ->first();
        
        // Mail::to($user->email)->send(new OrderSuccessMail($mail_order));

        Toastr::success('Order Successfully Done', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('order.success', $order->order_id);
    }

    public function order_success(Request $request, string $orderId)
    {
        // Check if the order success page for this order has already been visited
        if (session()->has('visited_order_success') && session('visited_order_success') === $orderId) {
            Toastr::error('Cannot go back to the order success page', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('home');
        }

        session(['visited_order_success' => $orderId]);

        $data['order'] =  Order::leftJoin('users', 'users.id', 'orders.user_id')
                            ->select('users.*','orders.order_id','orders.total_product','orders.total_amount','orders.payment_method')
                            ->where('orders.order_id', $orderId)
                            ->first();
        return view('frontend.pages.order-success', $data);
    }

    public function email_order_success()
    {
        return view('frontend.pages.email-order-success');
    }

}
