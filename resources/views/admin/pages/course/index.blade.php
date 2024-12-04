@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.1/css/bootstrap5-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
        <a href="{{ route('admin.course.create') }}" class="btn btn-primary waves-effect waves-light">Add New</a>
    </div>


    {{-- Tables --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 table-hover" id="datatables">
                    <thead>
                        <tr>
                            <th>#SL.</th>
                            <th>Course Image</th>
                            <th>Instructor Image</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($courses as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                <a href="{{ asset( $item->image ) }}" target="__blank">
                                    <img src="{{ asset( $item->image ) }}" alt="{{ $item->title }}" width="50" height="50">
                                </a>
                            </td>
                            <td>
                                <a href="{{ asset( $item->instructor_image ) }}" target="__blank">
                                    <img src="{{ asset( $item->instructor_image ) }}" alt="{{ $item->title }}" width="50" height="50">
                                </a>
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>$ {{ $item->price }}</td>
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
                                            <a href="{{ route('admin.course_module.index', $item->id) }}" class="dropdown-item" style="font-size: 16px;"><i class='bx bx-cog text-primary'></i> Course Module</a>
                                        </li>

                                        <li>
                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#view_modal{{ $item->id }}" class="dropdown-item" style="font-size: 16px;"><i
                                                class='fas fa-eye text-info'></i> View</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admin.course.edit', $item->id)}}" class="dropdown-item" style="font-size: 16px;"><i
                                                    class='bx bxs-edit text-info'></i> Edit</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{route('admin.course.delete', $item->id)}}" style="font-size: 16px;"
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
                                                <label>Course Image : </label>
                                                <a href="{{ asset( $item->image ) }}" target="__blank">
                                                    <img src="{{ asset( $item->image ) }}" alt="{{ $item->title }}" width="50" height="50">
                                                </a>
                                            </div>

                                            <div class="message_content">
                                                <label>Instructor Image : </label>
                                                <a href="{{ asset( $item->instructor_image ) }}" target="__blank">
                                                    <img src="{{ asset( $item->instructor_image ) }}" alt="{{ $item->title }}" width="50" height="50">
                                                </a>
                                            </div>

                                            <div class="message_content">
                                                <label>Course Title : </label>
                                                <span class="text-dark">{{ $item->title }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Instructor Name : </label>
                                                <span class="text-dark">{{ $item->name }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Instructor Designation : </label>
                                                <span class="text-dark">{{ $item->designation }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Instructor Lesson : </label>
                                                <span class="text-dark">{{ $item->lesson }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Course Level : </label>
                                                <span class="text-dark">{{ $item->course_level }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Course Duration : </label>
                                                <span class="text-dark">{{ $item->duration }}</span>
                                            </div>
                                            
                                            <div class="view_modal_content">
                                                <label>Published Date : </label>
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
                                                <label>Description : </label>
                                                <span class="text-dark">{!! $item->description !!}</span>
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
