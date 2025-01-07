<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CourseModule;
use App\Models\CourseVideo;
use App\Models\Order;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $courses = Cart::leftJoin('courses', 'courses.id', 'carts.course_id')
                    ->leftJoin('users', 'users.id', 'carts.user_id')
                    ->leftJoin('orders', 'orders.order_id', 'carts.order_id')
                    ->select('courses.*','orders.status')
                    ->where('users.id', Auth::user()->id)
                    ->where('orders.status', 1)
                    ->get();
        return view('user.pages.dashboard', compact('courses'));
    }


    public function order()
    {
        $orders = Order::leftJoin('users', 'users.id', 'orders.user_id')
                ->leftJoin('carts', 'carts.order_id', 'orders.order_id')
                ->select('orders.*', 'users.name', 'carts.course_id', 'users.email')
                ->where('orders.user_id', Auth::user()->id)
                ->get();
        return view('user.pages.order', compact('orders'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function my_course()
    // {

    //     return view('user.pages.course', compact('courses'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function course_details($id)
    {
        // dd($id);
        $order   = Order::where('user_id', Auth::user()->id)->first();
        $course = Cart::leftJoin('courses', 'courses.id', 'carts.course_id')
                   ->leftJoin('users', 'users.id', 'carts.user_id')
                   ->select('courses.*')
                   ->where('carts.order_id', $order->order_id)
                   ->where('courses.id', $id)
                   ->first();
        $course_modules = CourseModule::where('course_id', $course->id)->where('status', 1)->get();
        return view('user.pages.course-details', compact('course', 'course_modules'));
    }

    /**
     * Display the specified resource.
     */
    public function course_module(string $id)
    {
        $course_modules       = CourseModule::where('course_id', $id)->where('status', 1)->get();
        $course_module_first  = CourseModule::where('course_id', $id)->where('status', 1)->first();
        $course_video_first   = CourseVideo::where('course_module_id', $course_module_first->id)->where('status', 1)->first();
        return view('user.pages.course-module', compact('course_modules', 'course_video_first', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function course_videos($id, string $slug)
    {
        // dd($id, $slug);
        $course_modules       = CourseModule::where('course_id', $id)->where('status', 1)->get();
        $course_video_first   = CourseVideo::where('video_slug', $slug)->where('status', 1)->first();

        return view('user.pages.course-videos', compact('course_modules', 'course_video_first', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function user_profile()
    {
        return view('user.pages.user-profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function user_update(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'        => 'required|max:155',
            'image'       => 'image|mimes:png,jpg,jpeg,webp',
        ]);

        $user = User::where('id', $request->user_id)->first();

        DB::beginTransaction();
        try {
            $user->name         = $request->name;
            $user->phone        = $request->phone;
            $user->city         = $request->city;
            $user->zip_code     = $request->zip_code;
            $user->address      = $request->address;
            
            if ($request->hasFile('image')) {
                $images = $request->file('image');

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'user/images/user-profile/';
                $images->move($imagePath, $imageName);

                $user->image        =  $imagePath . $imageName;
            }

            $user->save();
        } 
        catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            Toastr::error('User Profile updated error', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('User Profile updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function user_password_change(Request $request)
    {
        // dd($request->all());
        $user = User::where('id', $request->user_id)->first();

        if ( $request->password === $request->confirm_password) {
               $user->password = Hash::make($request->password);
               $user->save();
        } else {
            Toastr::error('Password credential error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }

        Toastr::success('Password Updated', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
