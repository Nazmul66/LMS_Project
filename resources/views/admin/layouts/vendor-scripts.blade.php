<!-- JAVASCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- <script src="{{ asset('adminpanel/build/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- toaster Js plugins  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('adminpanel/build/js/plugin.js') }}"></script>

<script src="{{ asset('adminpanel/build/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('adminpanel/build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('adminpanel/build/libs/node-waves/waves.min.js') }}"></script>


<!-- App js -->
<script src="{{ asset('adminpanel/build/js/app.js') }}"></script>

@stack('script')
{{-- @yield('script-bottom') --}}

{!! Toastr::message() !!}


<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{!! $error !!}");
        @endforeach
    @endif

    $(document).on("click", "#deleteData", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#8bc34a',
            cancelButtonColor: '#d33',
            cancelButtonText: "Cancel",
            confirmButtonText: "Yes, delete it",
        }).then((willDelete) => {
            if (willDelete.isConfirmed) {
                window.location.href = link;
            }
        })
    })
    $(document).on("click", "#cancelbtn", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you want to cancel this Transaction?",
            text: "Once canceled, the transaction cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#8bc34a',
            cancelButtonColor: '#d33',
            cancelButtonText: "Cancel",
            confirmButtonText: "Yes, Cancel Transaction",
        }).then((willDelete) => {
            if (willDelete.isConfirmed) {
                window.location.href = link;
            }
        })
    })
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
