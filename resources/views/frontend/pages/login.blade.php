@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')


{{-- @include('frontend.include.breadcrumb', ['title' => 'Contact Us']) --}}
<!-- ./ page-header -->

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="overflow-hidden card">
                    <div class="bg-primary-subtle">
                        <div class="row">
                            <div class="col-7 col">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Skote.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end col">
                                <img src="{{ asset('frontend/assets/img/login_image.png') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    <div class="pt-0 card-body">
                        <div>
                            <a class="logo-light-element" href="/">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light"><img src="{{ asset('frontend/static/media/logo.a0143fa8ed5f53bf9ab4425b9a374176.svg') }}" alt="" class="rounded-circle" height="34" /></span>
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label form-label">Email</label>
                                    <input name="email" placeholder="Enter email...." type="email" value="{{ old('email') }}" class="form-control" required autofocus autocomplete="" />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label form-label">Password</label>
                                    <input name="password" placeholder="Enter Password" type="password" required autocomplete="" class="form-control" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox" required />
                                    <label class="form-check-label" for="checkbox">Remember me</label>
                                </div> --}}

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Don't have an account ? <a class="fw-medium text-primary" href="{{ url('register') }}"> Signup now </a></p>
                    {{-- <p>© 2024 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@push('add-js')
    
@endpush