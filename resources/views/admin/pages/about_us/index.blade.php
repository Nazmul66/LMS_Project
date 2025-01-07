@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@push('css')
    <style>
        @media (min-width: 768px) {
            .col-md-2 {
                flex: 0 0 auto;
                width: 12.666667%;
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 87.333333%;
            }
        }
    </style>
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
    </div>

    {{-- Body --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('admin.about_us.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title <span
                                            class="text-danger">*</span></label>
                                    <input name="title" id="title" placeholder="Write title" type="text"
                                        class="form-control" value="{{ old('title', $row->title) }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Subtitle <span
                                            class="text-danger">*</span></label>
                                    <input name="subtitle" id="subtitle" placeholder="Write subtitle" type="text"
                                        class="form-control" value="{{ old('subtitle', $row->subtitle) }}">
                                </div>
                            </div>
                        </div>


                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="button_text" class="form-label">Banner Button Text <span
                                            class="text-danger">*</span></label>
                                    <input name="button_text" id="button_text" placeholder="Write button text here....."
                                        type="text" class="form-control"
                                        value="{{ old('button_text', $row->button_text) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="button_link" class="form-label">Banner Button link <span
                                            class="text-danger">*</span></label>
                                    <input name="button_link" id="button_link" placeholder="Button link here....."
                                        type="url" class="form-control"
                                        value="{{ old('button_link', $row->button_link) }}">
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">Banner Video Link <span
                                            class="text-danger">*</span></label>
                                    <input name="video_link" id="video_link" placeholder="Banner video link here....."
                                        type="url" class="form-control"
                                        value="{{ old('video_link', $row->video_link) }}">
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">Is Active <span
                                            class="text-danger">*</span></label>
                                    <select name="is_active" id="is_active" class="form-control form-select">
                                        <option value="1" {{ $row->is_active == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $row->is_active == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-2 mb-3">
                                        <img id="previewImage" src="{{ getPhoto($row->image_path) }}" alt="Preview"
                                            style="display: block; width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="question" class="form-label">Banner Video thumbnail <span
                                                class="text-danger">* Recommended (
                                                1050px X 460px )</span></label>
                                        <input id="formFile" type="file" name="image_path"
                                            accept=".jpg, .jpeg, .png, .webp" class="form-control form-control">
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="question" class="form-label">Image <span
                                        class="text-danger">* Recommended (
                                        1050px X 460px )</span></label>
                                <input id="formFile" type="file" name="image_path"
                                    accept=".jpg, .jpeg, .png, .webp" class="form-control form-control">

                                <a href="{{ asset($row->image_path) }}" target="_blank" rel="noopener noreferrer">
                                    <img id="previewImage" src="{{ asset($row->image_path) }}" class="mt-3 mb-3" alt="Preview"
                                            style="display: block; width: 200px; height: 80px;">
                                </a>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">Is Active <span
                                            class="text-danger">*</span></label>
                                    <select name="is_active" id="is_active" class="form-control form-select">
                                        <option value="1" {{ $row->is_active == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $row->is_active == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="contents" class="form-label">Description <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="content" id="contents" placeholder="Write description here...."
                                        rows="8">{{ old('content', $row->content) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            let jReq;
            ClassicEditor
                .create(document.querySelector('#content'))
                .then(newEditor => {
                    jReq = newEditor;
                })
                .catch(error => {
                    console.error(error);
                });
        });
        document.getElementById('formFile').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
