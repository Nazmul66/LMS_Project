
<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.include.css')
</head>

<body>
    <!-- Header Start -->
       @include('user.include.header')
    <!-- Header End -->


    <!-- Left Sidebar Start -->
       @include('user.include.sidebar')
    <!-- Left Sidebar End -->


    <!-- Body Start -->
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                
                @yield('body-content')

            </div>
        </div>

        @include('user.include.footer')
    </div>
    <!-- Body End -->

     @include('user.include.js')
</body>
</html>