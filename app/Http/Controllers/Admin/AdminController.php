<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.profile.index');
    }


    public function admin_update(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'        => 'required|max:155',
            'image'       => 'image|mimes:png,jpg,jpeg,webp',
        ]);

        $admin = User::where('id', $request->user_id)->first();

        DB::beginTransaction();
        try {
            $admin->name    = $request->name;
            $admin->phone    = $request->phone;
            $admin->city    = $request->city;
            $admin->zip_code    = $request->zip_code;
            $admin->address    = $request->address;
            
            if ($request->hasFile('image')) {
                $images = $request->file('image');

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/admin-profile/';
                $images->move($imagePath, $imageName);

                $admin->image        =  $imagePath . $imageName;
            }

            $admin->save();
        } 
        catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            Toastr::error('Admin Profile updated error', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Admin Profile updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function password_change(Request $request)
    {
        // dd($request->all());
        $admin = User::where('id', $request->user_id)->first();

        if ( $request->password === $request->confirm_password) {
                $admin->password = Hash::make($request->password);
                $admin->save();
        } else {
            Toastr::error('Password credential error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }

        Toastr::success('Password Updated', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
