<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\HomePage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class FeaturesController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Feature Section";
        $data['section']     = HomePage::where('url_slug', 'feature_section')->first();
        $data['rows']        = Feature::orderBy('id', 'asc')->get();
        return view('admin.pages.features.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Feature";
        $data['features']  = Feature::where('status', 1)->get();
        return view('admin.pages.features.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'                 => 'required|max:155|unique:features,title',
            'image'                 => 'required|image|mimes:png,jpg,jpeg,webp',
            'content'               => 'required|max:256',
        ]);

        DB::beginTransaction();
        try {
            $feature                   = new Feature();

            $feature->title             = $request->title;
            $feature->content           = $request->content;
            $feature->status            = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');
                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'admin/images/testimonial/';
                $images->move($imagePath, $imageName);
                $feature->image        =  $imagePath . $imageName;
            }
            $feature->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Features Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Features Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.features.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Features";
        $data['row']         = Feature::findOrFail($id);
        return view('admin.pages.features.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'                 => 'required|max:155|unique:features,title,' . $id,
            'image'                 => 'image|mimes:png,jpg,jpeg,webp',
            'content'               => 'required|max:256',
        ]);

        DB::beginTransaction();
        try {
            $feature       = Feature::findOrFail($id);

            $feature->title             = $request->title;
            $feature->content           = $request->content;
            $feature->status            = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');

                if( !empty($feature->image) && file_exists($feature->image) ){
                    unlink($feature->image);
                }

                $imageName         =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath         = 'admin/images/testimonial/';
                $images->move($imagePath, $imageName);
                $feature->image    =  $imagePath . $imageName;
            }
            $feature->update();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Features update Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Features update Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.features.index');
    }

    public function sectionupdate(Request $request, $id)
    {
        // dd( $request->all());

        $request->validate([
            'title'       => 'required',
            'subtitle'    => 'required',
        ]);

        DB::beginTransaction();
        try {
            $homePage                   = HomePage::findOrFail($id);
            $homePage->title            = $request->title;
            $homePage->subtitle         = $request->subtitle;
            $homePage->is_active        = $request->is_active;
            $homePage->save();

        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            Toastr::error("Feature section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Feature section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $feature   =   Feature::findOrFail($id);
        if( !empty($feature->image) && file_exists($feature->image) ){
            @unlink($feature->image);
        }

        $feature->delete();
        Toastr::success("Features deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
