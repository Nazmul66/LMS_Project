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

                    <form action="{{ route('admin.course_module.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">  

                            <input type="hidden" name="course_id" value="{{ $id }}">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span
                                            class="text-danger">*</span></label>

                                    <input name="name" id="name" class="form-control"
                                        placeholder="Write here....." type="text"
                                        value="{{ old('name') }}">
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

    @endpush
