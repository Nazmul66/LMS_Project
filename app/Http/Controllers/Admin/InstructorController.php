<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\HomePage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Instructor Section";
        $data['section']     = HomePage::where('url_slug', 'instructor_section')->first();
        $data['rows']        = Instructor::orderBy('id', 'asc')->get();
        return view('admin.pages.instructor.index', $data);
    }

    public function create()
    {
        $data['title']         = "Create Instructor";
        $data['instructor']    = Instructor::where('status', 1)->get();
        return view('admin.pages.instructor.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                 => 'required|max:155|unique:instructors,name',
            'designation'          => 'required|max:155',
            'image'                => 'required|image|mimes:png,jpg,jpeg,webp',
        ]);

        DB::beginTransaction();
        try {
            $instructor                    = new Instructor();

            $instructor->name              = $request->name;
            $instructor->designation       = $request->designation;
            $instructor->status            = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');
                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'admin/images/instructor/';
                $images->move($imagePath, $imageName);
                $instructor->image        =  $imagePath . $imageName;
            }
            $instructor->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Instructors Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Instructors Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.instructor.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Instructors";
        $data['row']         = Instructor::findOrFail($id);
        return view('admin.pages.instructor.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'                 => 'required|max:155|unique:instructors,name,' .$id,
            'designation'          => 'required|max:155',
            'image'                => 'image|mimes:png,jpg,jpeg,webp',
        ]);

        DB::beginTransaction();
        try {
            $instructor         = Instructor::findOrFail($id);

            $instructor->name              = $request->name;
            $instructor->designation       = $request->designation;
            $instructor->status            = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');

                if( !empty($instructor->image) && file_exists($instructor->image) ){
                    unlink($instructor->image);
                }

                $imageName         =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath         = 'admin/images/testimonial/';
                $images->move($imagePath, $imageName);
                $instructor->image    =  $imagePath . $imageName;
            }
            $instructor->update();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Instructors update Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Instructors update Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.instructor.index');
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
            Toastr::error("Instructor section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Instructor section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $instructor   =   Instructor::findOrFail($id);
        if( !empty($instructor->image) && file_exists($instructor->image) ){
            @unlink($instructor->image);
        }

        $instructor->delete();
        Toastr::success("Instructors deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}

