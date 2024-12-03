<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index()
    {
        $data['title']     = 'Manage Course List';
        $data['courses']   = Course::orderBy('id', 'desc')->get();
        // dd($data['plans']);
        return view('admin.pages.course.index', $data);
    }

    public function create()
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title'] = "Create Course";
        return view('admin.pages.course.create', $data);
    }

    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $request->validate([
            'title'             => 'required|unique:courses,title',
            'image'             => 'required|image|mimes:png,jpg,jpeg,webp',
            'instructor_image'  => 'required|image|mimes:png,jpg,jpeg,webp',
            'name'              => 'required|string',
            'designation'       => 'required|string',
            'lesson'            => 'required|integer',
            'course_level'      => 'required',
            'duration'          => 'required',
            'price'             => 'required|integer',
            'description'       => 'required',
        ]);

        DB::beginTransaction();
        try {
            $course                   = new Course();

            $course->user_id          = 0;
            $course->title            = $request->title;
            $course->name             = $request->name;
            $course->designation      = $request->designation;
            $course->lesson           = $request->lesson;
            $course->course_level     = $request->course_level;
            $course->duration         = $request->duration;
            $course->price            = $request->price;
            $course->description      = $request->description;
            $course->status           = $request->status;
            $course->created_at       = date('Y-m-d H:i:s');
            $course->updated_at       = date('Y-m-d H:i:s');

            if ($request->hasFile('image')) {
                $images = $request->file('image');

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/course/';
                $images->move($imagePath, $imageName);
    
                $course->image        =  $imagePath . $imageName;
            }

            if ($request->hasFile('instructor_image')) {
                $instructor_image = $request->file('instructor_image');

                $imageName          = rand(1, 99999999) . '.' . $instructor_image->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/course/';
                $instructor_image->move($imagePath, $imageName);
    
                $course->instructor_image   =  $imagePath . $imageName;
            }

            $course->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Course create error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course created successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title'] = "Update Course";
        $data['course'] = Course::find($id);
        return view('admin.pages.course.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $request->validate([
            'title'             => 'required|unique:courses,title,' . $id,
            'image'             => 'image|mimes:png,jpg,jpeg,webp',
            'instructor_image'  => 'image|mimes:png,jpg,jpeg,webp',
            'name'              => 'required|string',
            'designation'       => 'required|string',
            'lesson'            => 'required|integer',
            'course_level'      => 'required',
            'duration'          => 'required',
            'price'             => 'required|integer',
            'description'       => 'required',
        ]);

        DB::beginTransaction();
        try {
            $course                   = Course::findOrFail($id);

            $course->user_id          = 0;
            $course->title            = $request->title;
            $course->name             = $request->name;
            $course->designation      = $request->designation;
            $course->lesson           = $request->lesson;
            $course->course_level     = $request->course_level;
            $course->duration         = $request->duration;
            $course->price            = $request->price;
            $course->description      = $request->description;
            $course->status           = $request->status;
            $course->updated_at       = date('Y-m-d H:i:s');

            if ($request->hasFile('image')) {
                $images = $request->file('image');

                if( !empty($course->image) && file_exists($course->image)) {
                    @unlink($course->image);
                }

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/course/';
                $images->move($imagePath, $imageName);
    
                $course->image        =  $imagePath . $imageName;
            }

            if ($request->hasFile('instructor_image')) {
                $instructor_image = $request->file('instructor_image');

                if( !empty($course->instructor_image) && file_exists($course->instructor_image)) {
                    @unlink($course->instructor_image);
                }

                $imageName          = rand(1, 99999999) . '.' . $instructor_image->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/course/';
                $instructor_image->move($imagePath, $imageName);
    
                $course->instructor_image   =  $imagePath . $imageName;
            }

            $course->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Course update error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course.index');
    }



    public function delete($id)
    {
        $course = Course::findOrFail($id);

        if( !empty($course->image) && file_exists($course->image)) {
            @unlink($course->image);
        }

        if( !empty($course->instructor_image) && file_exists($course->instructor_image)) {
            @unlink($course->instructor_image);
        }

        $course->delete();

        Toastr::success('Course delete successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
