
{{-- <script src="{{ asset('frontend/assets/js/vendor/jquary-3.6.0.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery.isotope.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/daterangepicker.min.js') }}"></script>

<!-- toaster Js plugins  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('frontend/assets/js/vendor/venobox.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/countdown.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/meanmenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/smooth-scroll.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/nice-select.js') }}"></script>

<script src="{{ asset('frontend/assets/js/vendor/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

@stack('add-js')

{!! Toastr::message() !!}

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{!! $error !!}");
        @endforeach
    @endif
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>