<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function general_setting()
    {
        $data['title'] = 'Settings';
        $settings = Setting::first();

        return view('admin.pages.settings.general_setting', [
            'settings' => $settings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // Update Setting
    public function generalStore(Request $request)
    {
        // dd($request->all());

        DB::beginTransaction();
        try {
            $setting = Setting::first();

            if (!$setting) {
                $setting = new Setting();
            }

            $setting->site_name              = $request->site_name;
            $setting->phone                  = $request->phone;
            $setting->phone_optional         = $request->phone_optional;
            $setting->email                  = $request->email;
            $setting->email_optional         = $request->email_optional;
            $setting->address                = $request->address;

            $setting->facebook_url           = $request->facebook_url;
            $setting->instagram_url          = $request->instagram_url;
            $setting->twitter_url            = $request->twitter_url;
            $setting->linkedin_url           = $request->linkedin_url;
            $setting->copyright              = $request->copyright;
            $setting->office_time_open       = $request->office_time_open;
            $setting->google_map             = $request->google_map;

            if ($request->hasFile('favicon')) {
                $images = $request->file('favicon');

                if( !empty($setting->favicon) && file_exists($setting->favicon)) {
                    @unlink($setting->favicon);
                }

                $imageName          = rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/settings/';
                $images->move($imagePath, $imageName);
    
                $setting->favicon        =  $imagePath . $imageName;
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');

                if( !empty($setting->logo) && file_exists($setting->logo)) {
                    @unlink($setting->logo);
                }

                $imageName          =  rand(1, 99999999) . '.' . $logo->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/settings/';
                $logo->move($imagePath, $imageName);
    
                $setting->logo        =  $imagePath . $imageName;
            }

            // dd($setting);

            $setting->save();

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Settings not Updated');
        }

        DB::commit();
        Toastr::success(trans('Settings Updated Successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
