@extends('admin.layouts.master')

@section('title')
    {{ 'Manage General Setting' }}
@endsection

@push('css')
<style>
    .custom-btn{
        border: none;
        background: #0d6efd;
        color: #FFF;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 6px;
    }
</style>
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Manage Admin Profile</h4>
    </div>

    {{-- Body --}}
    <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Profile Update</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                            <div class="row align-items-end">
                                                <div class="col-lg-6">
                                                    @if ( Auth::user()->image )
                                                        <img src="{{ asset(Auth::user()->image) }}" height="50px">
                                                    @endif
                        
                                                    <div class="mb-4">
                                                        <label class="form-label">Image
                                                            <br>
                                                            <small class="text-danger fw-bold"><strong>(Recommended
                                                                    Size: 180px * 60px)</strong></small>
                                                        </label>
                                                        <input type="file" class="form-control"
                                                            name="image" accept=".png,.jpg,.jpeg,.webp">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="name" class="form-label">Full Name</label>
                                                        <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="name" placeholder="Write here....">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" disabled value="{{ Auth::user()->email }}" class="form-control" id="email" placeholder="Write here....">
                                                    </div>
                                                </div>
                        
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="phone" class="form-label">Your Phone Number</label>
                                                        <input type="text" name="phone" value="{{ old('phone', Auth::user()->phone) }}" class="form-control" id="phone" placeholder="Write here....">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="city" class="form-label">City</label>
                                                        <input type="text" name="city" value="{{ old('city', Auth::user()->city) }}" class="form-control" id="city">
                                                    </div>
                                                </div>
                        
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="zip_code" class="form-label">Zip Code</label>
                                                        <input type="number" name="zip_code" value="{{ old('address', Auth::user()->zip_code) }}" class="form-control" id="zip_code">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="mb-4">
                                                        <label for="address" class="form-label">Address</label>
                                                        <textarea class="form-control" name="address" id="address" rows="6">{{ old('address', Auth::user()->address) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Password Update</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('admin.profile.password.change') }}" method="post" >
                                        @csrf

                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="password" class="form-label">New Password</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password..." required>
                                                    </div>
                                                </div>
                            
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="con_password" class="form-label">Confirm Password</label>
                                                        <input type="password" name="confirm_password" class="form-control" id="con_password" placeholder="Confirm Password..." required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
