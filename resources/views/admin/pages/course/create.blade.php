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
        <a href="{{ route('admin.course.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
    </div>

    {{-- Body --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row align-items-end">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <img src="{{ asset('adminpanel/images/demo-icon.png') }}" class="d-block" alt="" for="up_image" style="width: 75px; height: 75px;">
                                    <label for="image" class="form-label">Course Image <span class="text-danger">* resulation ( 150px X 70px )</span></label>
                                    <input id="image" type="file" name="image" class="form-control form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <img src="{{ asset('adminpanel/images/demo-icon.png') }}" class="d-block" alt="" for="up_image" style="width: 75px; height: 75px;">
                                    <label for="instructor_image" class="form-label">Instructor Image <span class="text-danger">* resulation ( 150px X 70px )</span></label>
                                    <input id="instructor_image" type="file" name="instructor_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Course Title <span
                                            class="text-danger">*</span></label>
                                    <input name="title" id="title" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('title') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">  
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Instructor Name <span
                                            class="text-danger">*</span></label>

                                    <input name="name" id="name" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Instructor Designation <span
                                            class="text-danger">*</span></label>

                                    <input name="designation" id="designation" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('designation') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="lesson" class="form-label">Instructor Lesson <span
                                            class="text-danger">*</span></label>

                                    <input name="lesson" id="lesson" class="form-control"
                                        placeholder="Write here....." type="number"
                                        value="{{ old('lesson') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">  
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="course_level" class="form-label">Course Level <span class="text-danger">*</span></label>
                                    <input name="course_level" id="course_level" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('course_level') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Course Duration <span
                                            class="text-danger">*</span></label>

                                    <input name="duration" id="duration" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('duration') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Course Price <span
                                            class="text-danger">*</span></label>
                                    <input name="price" id="price" class="form-control"
                                        placeholder="Write here....." type="number"
                                        value="{{ old('price') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" id="description" placeholder="Write description here...." rows="8">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select name="status" class="form-control form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

        <script>
            $(document).ready(function() {
    
                // Ckeditor 5 plugin
                let jReq;
                ClassicEditor
                    .create(document.querySelector('#description'))
                    .then(newEditor => {
                        jReq = newEditor;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @endpush
