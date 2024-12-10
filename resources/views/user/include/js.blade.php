<script src="{{ asset('user/js/jquery-3.7.1.min.js') }}"></script>
{{-- <script src="{{ asset('user/js/vertical-responsive-menu.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('user/vendor/OwlCarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('user/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js') }}"></script>

<!-- toaster Js plugins  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('user/vendor/semantic/semantic.min.js') }}"></script>
<script src="{{ asset('user/js/custom1.js') }}"></script>
<script src="{{ asset('user/js/custom.js') }}"></script>
<script src="{{ asset('user/js/night-mode.js') }}"></script>


@stack('add-js')

{!! Toastr::message() !!}

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{!! $error !!}");
        @endforeach
    @endif
</script>