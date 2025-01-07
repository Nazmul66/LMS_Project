@php
    $setting = DB::table('settings')->first();
@endphp

<div id="preloader">
    <div class="spinner-logo">
        @if ( !empty($setting) )
            <img src="{{ asset($setting->logo) }}" alt="logo">
        @else
            <img src="{{ asset('frontend/assets/img/favicon.png') }}" alt="logo">
        @endif
    </div>
    <div class="spinner"></div>
</div>
<!-- ./ preloader -->


