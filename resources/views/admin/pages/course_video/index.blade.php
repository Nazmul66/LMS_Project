@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('course', 'mm-active')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
        
        <div class="">
            <a href="{{ route('admin.course.index') }}" class="btn btn-primary waves-effect waves-light">Back to course module</a>
            <a href="{{ route('admin.course_video.create', $course_module_id) }}" class="btn btn-primary waves-effect waves-light">Add New</a>
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
                            <th>Course Module</th>
                            <th>Video Title</th>
                            <th>Video Timer</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($course_videos as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->course_module_name }}</td>
                            <td>{{ $item->video_title }}</td>
                            <td>{{ $item->video_timer }}</td>
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
                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#view_modal{{ $item->id }}" class="dropdown-item" style="font-size: 16px;"><i
                                                class='fas fa-eye text-info'></i> View</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admin.course_video.edit', [$course_module_id, $item->id])}}" class="dropdown-item" style="font-size: 16px;"><i
                                                    class='bx bxs-edit text-info'></i> Edit</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{route('admin.course_video.delete', $item->id)}}" style="font-size: 16px;"
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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Course Video List</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="message_content">
                                                <label>Course Module Name : </label>
                                                <span class="text-dark">{{ $item->course_module_name }}</span>
                                            </div>

                                            <div class="message_content">
                                                <label>Video Title : </label>
                                                <span class="text-dark">{{ $item->video_title }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Video Timer : </label>
                                                <span class="text-dark">{{ $item->video_timer }}</span>
                                            </div>
                                            
                                            <div class="view_modal_content">
                                                <label>Date : </label>
                                                <span class="text-dark">{{ date('d M Y', strtotime($item->created_at)) }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Status : </label>
                                                @if ($item->status == 1)
                                                    <span class="text-success">Active</span>
                                                @else
                                                    <span class="text-danger">Inactive</span>
                                                @endif
                                            </div>

                                            <div class="view_modal_content">
                                                <span class="text-dark">{!! $item->video_link !!}</span>
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


@endsection

@push('script')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        let table = new DataTable('#datatables', {
            responsive: true
        });
    </script>
@endpush

