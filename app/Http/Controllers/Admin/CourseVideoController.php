<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseVideo;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CourseVideoController extends Controller
{

    public function index(string $course_module_id)
    {
        $data['title']            = 'Manage Course Video List';
        $data['course_videos']    = CourseVideo::
                                       leftJoin('course_modules', 'course_modules.id', 'course_videos.course_module_id')
                                       ->select('course_videos.*', 'course_modules.name as course_module_name')
                                       ->where('course_modules.id', $course_module_id)
                                       ->orderBy('id', 'desc')->get();
        // $data['course_videos']    = CourseVideo::orderBy('id', 'desc')->get();

        $data['course_module_id'] = $course_module_id;
        return view('admin.pages.course_video.index', $data);
    }

    public function create(string $course_module_id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']    = "Create Course Video";
        $data['id']       = $course_module_id;
        return view('admin.pages.course_video.create', $data);
    }

    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        // dd($request->all());

        $request->validate([
            'course_module_id'  => 'required|integer',
            'video_title'       => 'required|unique:course_videos,video_title',
            'video_link'        => 'required',
        ]);

        DB::beginTransaction();
        try {
            $course_video                      = new CourseVideo();

            $course_video->course_module_id    = $request->course_module_id;
            $course_video->video_title         = $request->video_title;
            $course_video->video_slug          = Str::slug($request->video_title);
            $course_video->video_timer         = $request->video_timer;
            $course_video->video_link          = $request->video_link;
            $course_video->status              = $request->status;
            $course_video->created_at          = date('Y-m-d H:i:s');
            $course_video->updated_at          = date('Y-m-d H:i:s');

            $course_video->save();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Course Video create error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course Video created successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course_video.index', $course_video->course_module_id);
    }


    public function edit($course_module_id, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']                 = "Update Course Video";
        $data['course_video']          = CourseVideo::find($id);
        $data['course_module_id']      = $course_module_id;
        return view('admin.pages.course_video.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.plan.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $request->validate([
            'video_title'   => 'required|unique:course_videos,video_title,' . $id,
            'video_link'        => 'required',
        ]);

        DB::beginTransaction();
        try {
            $course_video                      = CourseVideo::findOrFail($id);

            $course_video->course_module_id    = $request->course_module_id;
            $course_video->video_title         = $request->video_title;
            $course_video->video_timer         = $request->video_timer;
            $course_video->video_link          = $request->video_link;
            $course_video->status              = $request->status;
            $course_video->updated_at          = date('Y-m-d H:i:s');

            $course_video->update();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Course Video update error', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Course Video updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.course_video.index', $course_video->course_module_id);
    }


    public function delete($id)
    {
        $courseVideo = CourseVideo::findOrFail($id);

        $courseVideo->delete();

        Toastr::success('Course Video delete successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
