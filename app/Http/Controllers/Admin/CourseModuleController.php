<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseModule;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CourseModuleController extends Controller
{

    public function index(string $course_id)
    {
        $data['title']            = 'Manage Course Module List';
        $data['course_modules']   = CourseModule::
                                    where('course_id', $course_id)
                                    ->orderBy('id', 'asc')
                                    ->get();
        $data['course_id']        = $course_id;
        return view('admin.pages.course_module.index', $data);
    }

    public function create(string $course_id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']    = "Create Course Module";
        $data['id']       = $course_id;
        return view('admin.pages.course_module.create', $data);
    }

    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $request->validate([
            'name'              => 'required|unique:course_modules,name',
        ]);

        DB::beginTransaction();
        try {
            $courseModule                   = new CourseModule();

            $courseModule->course_id        = $request->course_id;
            $courseModule->name             = $request->name;
            $courseModule->status           = $request->status;
            $courseModule->created_at       = date('Y-m-d H:i:s');
            $courseModule->updated_at       = date('Y-m-d H:i:s');

            $courseModule->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Course Module create error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course Module created successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course_module.index', $courseModule->course_id);
    }


    public function edit($course_id, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']          = "Update Course Module";
        $data['courseModule']   = CourseModule::find($id);
        $data['course_id']      = $course_id;
        return view('admin.pages.course_module.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $request->validate([
            'name'              => 'required|unique:course_modules,name,' . $id,
        ]);

        DB::beginTransaction();
        try {
            $courseModule                   = CourseModule::findOrFail($id);

            $courseModule->course_id        = $request->course_id;
            $courseModule->name             = $request->name;
            $courseModule->status           = $request->status;
            $courseModule->updated_at       = date('Y-m-d H:i:s');

            $courseModule->save();

        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            Toastr::error('Course Module update error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course Module updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course_module.index', $courseModule->course_id);
    }



    public function delete($id)
    {
        $courseModule = CourseModule::findOrFail($id);
        $courseModule->delete();

        Toastr::success('Course Module delete successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}

