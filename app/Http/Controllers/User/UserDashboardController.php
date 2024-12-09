<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CourseModule;
use App\Models\CourseVideo;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('user.pages.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function my_course()
    {
        $order   = Order::where('user_id', Auth::user()->id)->first();
        $courses = Cart::leftJoin('courses', 'courses.id', 'carts.course_id')
                   ->leftJoin('users', 'users.id', 'carts.user_id')
                   ->select('courses.*')
                   ->where('carts.order_id', $order->order_id)
                   ->get();
        return view('user.pages.course', compact('courses'));
    }

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
    public function course_videos(string $id)
    {
        $course_modules       = CourseModule::where('course_id', $id)->where('status', 1)->get();
        $course_module_first  = CourseModule::where('course_id', $id)->where('status', 1)->first();
        $course_video_first       = CourseVideo::where('course_module_id', $course_module_first->id)->where('status', 1)->first();
        return view('user.pages.course-videos', compact('course_modules', 'course_video_first'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
