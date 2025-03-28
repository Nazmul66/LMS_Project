@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('course', 'mm-active')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.1/css/bootstrap5-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

        <div class="">
            <a href="{{ route('admin.course.index') }}" class="btn btn-primary waves-effect waves-light">Back To Course</a>
            <a href="{{ route('admin.course_module.create', $course_id) }}" class="btn btn-primary waves-effect waves-light">Add New</a>
        </div>
    </div>


    {{-- Tables --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 table-hover" id="datatables">
                    <thead>
                        <tr>
                            <th>#SL.</th>
                            <th>Course Module Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($course_modules as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('admin.course_video.index', $item->id) }}" class="dropdown-item" style="font-size: 16px;"><i class='bx bx-cog text-primary'></i> Course Videos</a>
                                        </li>

                                        <li>
                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#view_modal{{ $item->id }}" class="dropdown-item" style="font-size: 16px;"><i
                                                class='fas fa-eye text-info'></i> View</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admin.course_module.edit',[$course_id, $item->id] )}}" class="dropdown-item" style="font-size: 16px;"><i
                                                    class='bx bxs-edit text-info'></i> Edit</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{route('admin.course_module.delete', $item->id)}}" style="font-size: 16px;"
                                                id="deleteData"><i
                                                    class='bx bxs-trash text-danger'></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>


                            <!-- View Modal -->
                            <div class="modal fade" id="view_modal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="edit_lLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Course List</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="message_content">
                                                <label>Course Module Name : </label>
                                                <span class="text-dark">{{ $item->name }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Status : </label>
                                                @if ($item->status == 1)
                                                    <span class="text-success">Active</span>
                                                @else
                                                    <span class="text-danger">Inactive</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- View Modal -->
    <div class="modal fade" id="view_modal" tabindex="-1" aria-labelledby="edit_lLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Pricing Package List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="view_modal_content">
                        <label>Title : </label>
                        <span class="text-dark">Business.</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Price : </label>
                        <span class="text-dark">$50</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Duration : </label>
                        <span class="text-dark">USD Per Month</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Word Number : </label>
                        <span class="text-dark">80000</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Template : </label>
                        <span class="text-dark">6+</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Language : </label>
                        <span class="text-dark">5+</span>
                    </div>

                    <div class="view_modal_content">
                        <label>AI Blog Generate : </label>
                        <span class="text-success">Yes</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Advance Editor Tool : </label>
                        <span class="text-danger">No</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Consistent Support : </label>
                        <span class="text-success">Yes</span>
                    </div>

                    <div class="view_modal_content">
                        <label>Status : </label>
                        <span class="text-success">Active</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        let table = new DataTable('#datatables', {
            responsive: true
        });
    </script>
@endpush
