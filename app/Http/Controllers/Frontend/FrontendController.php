<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $data['courses'] = Course::where('status', 1)->get();
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

    /**
     * Store a newly created resource in storage.
     */
    public function cart_store(Request $request)
    {
        // dd($request->all());

        $cart = Cart::where('course_id', $request->course_id)
                ->where('user_id', Auth::user()->id)
                ->where('order_id', NULL)
                ->first();

            if (!empty($cart)) {
                $cart->qty += 1;
                $cart->save();

                return redirect()->route('cart');
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

                return redirect()->route('cart');
            }
        }

        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }


    public function cart_delete(string $id)
    {
    //    dd($id);
       $cart = Cart::where('course_id', $id)->first();

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
        $data['carts'] = Cart::getCartData();
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

        $order = new Order();

        $order->order_id        = 'ID-' . uniqid();
        $order->user_id         =  Auth::user()->id;
        $order->name            = $request->name;
        $order->email           = $request->email;
        $order->phone           = $request->phone;
        $order->address         = $request->address;
        $order->city            = $request->city;
        $order->zip_code        = $request->zip_code;
        $order->total_product   = $request->total_product;
        $order->total_amount    = $request->total_amount;
        $order->status          = 2;
        $order->save();


        $user          = User::findOrFail(Auth::user()->id);
        $user->name    = $order->name;
        $user->update();


        $address = new Address();

        $address->user_id       = Auth::user()->id;
        $address->phone         = $order->phone;
        $address->address       = $order->address;
        $address->city          = $order->city;
        $address->zip_code      = $order->zip_code;
        $address->save();


        $carts = Cart::where('user_id', Auth::user()->id)->where('order_id', NULL)->get();

        foreach( $carts as $cart ){
            $cart->order_id  =  $order->order_id;
            $cart->update();
        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
