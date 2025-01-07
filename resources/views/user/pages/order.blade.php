@extends('user.layout.master')

@section('order', 'active')

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <style>
        table tr td,
        table tr th {
            text-align: center; /* Horizontal alignment */
            vertical-align: middle; /* Vertical alignment */
        }
    </style>
@endpush

@section('body-content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="st_title">My Orders</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="_14d25">
            <div class="row">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover" id="datatables">
                        <thead>
                        <tr>
                            <th scope="col">#SL.</th>
                            <th scope="col">Order Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Total Product</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($orders as $row => $item)
                                @php
                                    $course = App\Models\Course::where('id', $item->course_id)->first();
                                @endphp    

                                <tr class="text-center align-middle">
                                    <th scope="row">{{ $row + 1 }}</th>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="mailto: {{ $item->email }}">
                                            {{ $item->email }}
                                        </a>
                                    </td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $item->total_product }}</td>
                                    <td>${{ $item->total_amount }}</td>
                                    <td>{{ $item->payment_method }}</td>
                                    <td>
                                        @if ( $item->status == 1 )
                                            <span class="text-success">Paid</span>
                                        @elseif( $item->status == 2 )
                                            <span class="text-warning">Pending</span>
                                        @else
                                            <span class="text-danger">Cancel</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('add-js')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        let table = new DataTable('#datatables', {
            responsive: true
        });
    </script>
@endpush