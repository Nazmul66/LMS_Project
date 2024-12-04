<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

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
    public function cart()
    {
        return view('frontend.pages.cart');
    }

    /**
     * Display the specified resource.
     */
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function course_details()
    {
        return view('frontend.pages.course_details');
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
