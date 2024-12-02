@extends('frontend.layouts.master')

@push('add-title')
    
@endpush


@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')

<section class="error-section pt-120 pb-120">
    <div class="container">
        <div class="error-content text-center">
            <img src="{{ asset('frontend/assets/img/images/error-img.png') }}" alt="img">
            <h2 class="text">404 - Page Not Found</h2>
            <p class="mb-20 mt-20">The page you are looking for does not exist</p>
            <a class="ed-primary-btn" href="index.html">Back To Home Page</a>
        </div>
    </div>
</section>

@endsection