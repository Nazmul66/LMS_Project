@extends('admin.layouts.master')

@section('title')
    {{ 'Manage General Setting' }}
@endsection

@push('css')
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Manage General Setting</h4>
    </div>

    {{-- Body --}}
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.setting.general_store') }}" method="post" enctype="multipart/form-data"
                id="settingUpdate">
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Site Settings</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    @if ( !empty($settings->logo) )
                                                        <img src="{{ asset($settings->logo) }}" height="50px">
                                                    @endif

                                                    <div class="mb-3">
                                                        <label class="form-label">Site Logo
                                                            <br><small class="text-danger fw-bold"><strong>(Recommended
                                                                    Size: 180px * 60px)</strong></small>
                                                        </label>
                                                        <input type="file" class="form-control" style="height: auto;"
                                                            name="logo" placeholder="Site Logo..."
                                                            accept=".png,.jpg,.jpeg,.webp">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    @if ( !empty($settings->favicon) )
                                                        <img src="{{ asset($settings->favicon) }}" height="50px">
                                                    @endif

                                                    <div class="mb-3">
                                                        <label class="form-label">Favicon
                                                            <br><small class="text-danger fw-bold"><strong>( Recommended
                                                                    Size: 200px * 200px )</strong></small>
                                                        </label>
                                                        <input type="file" class="form-control" style="height: auto;"
                                                            name="favicon" placeholder="Favicon..."
                                                            accept=".png,.jpg,.jpeg,.webp">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row align-items-end">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Site Name</label>
                                                        <input type="text" class="form-control" name="site_name" placeholder="Site Name..."
                                                        required="" value="{{ $settings->site_name ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Street Address</label>
                                                        <textarea class="form-control" name="address" rows="3" placeholder="Street Address...."
                                                            style="height: 120px !important;">{{ $settings->address ?? "" }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Google Map</label>
                                                        <textarea class="form-control" name="google_map" rows="3" placeholder="Google Map...."
                                                            style="height: 120px !important;">{{ $settings->google_map ?? "" }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- Social --}}
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Social URL</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label">{{ __('Facebook URL') }}</label>
                                                    <input type="url" class="form-control"
                                                        name="facebook_url"
                                                        value="{{ $settings->facebook_url ?? "" }}"
                                                        placeholder="{{ __('Facebook URL') }}...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('Twitter Url') }}</label>
                                                    <input type="url" class="form-control"
                                                        name="twitter_url"
                                                        value="{{ $settings->twitter_url ?? "" }}"
                                                        placeholder="{{ __('Twitter Url') }}...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label">Instagram url</label>
                                                    <input type="url" class="form-control"
                                                        name="instagram_url"
                                                        value="{{ $settings->instagram_url ?? "" }}"
                                                        placeholder="Instagram url...">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label">{{ __('Linkedin url') }}</label>
                                                    <input type="url" class="form-control"
                                                        name="linkedin_url"
                                                        value="{{ $settings->linkedin_url ?? "" }}"
                                                        placeholder="{{ __('Linkedin url') }}...">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">General Settings</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $settings->email ?? "" }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email Optional</label>
                                                    <input type="email" name="email_optional" class="form-control"
                                                        value="{{ $settings->email_optional ?? "" }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" name="phone" class="form-control"
                                                        value="{{ $settings->phone ?? "" }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">(optional) Phone Number</label>
                                                    <input type="text" name="phone_optional" class="form-control"
                                                        value="{{ $settings->phone_optional ?? "" }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Copyright</label>
                                                    <input type="text" name="copyright" class="form-control"
                                                        value="{{ $settings->copyright ?? "" }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Office Time Open</label>
                                                    <input type="text" name="office_time_open" class="form-control"
                                                        value="{{ $settings->office_time_open ?? "" }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success" id="updateButton">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const form = document.getElementById("settingUpdate");
        const submitButton = form.querySelector("button[type='submit']");

        form.addEventListener("submit", function() {

            $("#updateButton").html(`
            <span id="">
                <span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span>
                Updating Setting...
            </span>
        `);

            submitButton.disabled = true;
        });
    </script>
@endpush
