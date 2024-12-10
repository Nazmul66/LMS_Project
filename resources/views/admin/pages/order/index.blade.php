@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('order', 'mm-active')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
@endpush

@section('content')

    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
    </div>


    {{-- Tables --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 table-hover" id="datatables">
                    <thead>
                        <tr>
                            <th>#SL.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Total Product</th>
                            <th>Total Amount</th>
                            <th>Payment Method</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $key => $row)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <span style="white-space: nowrap;">
                                        {{ $row->name }}
                                    </span>
                                </td>
                                <td>
                                    <a href="mailto:{{ $row->email }}">{{ $row->email }}</a>
                                </td>
                                <td>
                                    <a href="tel:{{ $row->phone }}" style="white-space: nowrap;">{{ $row->phone }}</a>
                                </td>
                                <td>
                                    <span class="text-dark">{{ $row->total_product }}</span>
                                </td>
                                <td>
                                    <span class="text-dark">${{ $row->total_amount }}</span>
                                </td>
                                <td>
                                    <span class="text-dark">{{ $row->payment_method }}</span>
                                </td>
                                <td>
                                    <span class="text-dark"
                                        style="white-space: nowrap;">{{ date('Y-m-d', strtotime($row->created_at)) }}</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#view_modal{{ $row->id }}" style="font-size: 16px;"><i
                                                        class="fas fa-eye"></i> View</button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- View Modal -->
                            <div class="modal fade" id="view_modal{{ $row->id }}" tabindex="-1"
                                aria-labelledby="edit_lLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Order List</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="view_modal_content">
                                                <label>Name : </label>
                                                <span class="text-dark">{{ $row->name }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Email : </label>
                                                <a href="mailto:{{ $row->email }}" class="text-info">{{ $row->email }}</a>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Phone : </label>
                                                <a href="tel:{{ $row->phone }}" class="text-info">{{ $row->phone }}</a>
                                            </div>

                                            <div class="message_content">
                                                <label>Total Product : </label>
                                                <span class="text-dark">{{ $row->total_product }}</span>
                                            </div>

                                            <div class="message_content">
                                                <label>Total Amount : </label>
                                                <span class="text-dark">${{ $row->total_amount }}</span>
                                            </div>

                                            <div class="message_content">
                                                <label>Payment Method : </label>
                                                <span class="text-dark">{{ $row->payment_method }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Date : </label>
                                                <span class="text-dark">{{ date('Y-m-d', strtotime($row->created_at)) }}</span>
                                            </div>

                                            <div class="view_modal_content">
                                                <label>Status : </label>
                                                @if ($row->status == 1)
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

@endsection

@push('script')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        let table = new DataTable('#datatables', {
            responsive: true
        });
    </script>
@endpush