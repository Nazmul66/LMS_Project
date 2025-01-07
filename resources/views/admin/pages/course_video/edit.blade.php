@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('course', 'mm-active')

@push('css')
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
        <a href="{{ route('admin.course_video.index', $course_module_id) }}" class="btn btn-primary waves-effect waves-light">Back</a>
    </div>

    {{-- Body --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('admin.course_video.update', $course_video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="course_module_id" value="{{ $course_module_id }}">

                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="video_title" class="form-label">Video Title <span
                                            class="text-danger">*</span></label>
                                    <input name="video_title" id="video_title" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('video_title', $course_video->video_title) }}">
                                </div>
                            </div>

                            {{-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="video_timer" class="form-label">Video Timer <span
                                            class="text-danger">*</span></label>
                                    <input name="video_timer" id="video_timer" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('video_timer', $course_video->video_timer) }}">
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select name="status" class="form-control form-select">
                                    <option value="1" @if( $course_video->status == 1 ) selected @endif>Active</option>
                                    <option value="0" @if( $course_video->status == 0 ) selected @endif>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="video_link" class="form-label">Video Code <span
                                        class="text-danger">*</span></label>

                                <input name="video_link" id="video_link" class="form-control"
                                placeholder="Write here....." type="text"
                                value="{{ old('video_link', $course_video->video_link) }}">

                                {{-- <textarea class="form-control" name="video_link" id="video_link" placeholder="Paste here...." rows="8">{{ old('video_link', $course_video->video_link) }}</textarea> --}}
                            </div>
                        </div>

                        <div class="video_show">
                              <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/{{ $course_video->video_link }}?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen>
                            </iframe>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    @endpush
