@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    <style>
        .profile-user-wid {
            margin-top: -26px;
        }
        .avatar-md {
            height: 4.5rem;
            width: 4.5rem;
        }
        .avatar-title {
            align-items: center;
            background-color: #556ee6;
            color: #fff;
            display: flex;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }
        .rounded-circle {
            border-radius: 50% !important;
        }
    </style>
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
                                    <h5 class="text-primary">Free Register</h5>
                                    <p>Get your free Skote account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end col">
                                <img src="{{ asset('frontend/assets/img/login_image.png') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    <div class="pt-0 card-body">
                        <div>
                            <a href="{{ url('/') }}">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light"><img src="{{ asset('frontend/assets/img/register_image.svg') }}" alt="" class="rounded-circle" height="34" /></span>
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label form-label" for="name">Username</label>
                                    <input name="name" id="name" placeholder="Enter name" type="text" class="form-control" required autocomplete="username" value="{{ old('name') }}" />
                                </div>

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


                                <div class="mb-3">
                                    <label class="form-label form-label">Confirm Password</label>
                                    <input name="password_confirmation" placeholder="Enter Confirm Password" type="password" required autocomplete="" class="form-control" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>


                                <div class="mt-4"><button class="btn btn-primary btn-block" type="submit">Register</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Already have an account ? <a class="font-weight-medium text-primary" href="{{ url('login') }}"> Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@push('add-js')
    
@endpush