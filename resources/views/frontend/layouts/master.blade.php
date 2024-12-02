<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   @include('frontend.include.css')
</head>

<body>

    <!-- preloader-area-start -->
    @include('frontend.include.preloader')


        <!-- Body-content-area-start -->
           @yield('body-content')
        <!-- Body-content-area-start -->

    
    @include('frontend.include.footer')
    <!-- ./ footer-section -->

    
    @include('frontend.include.scroll_to_top')
    <!--scrollup-->

    <!-- JS here -->
    @include('frontend.include.js')
</body>

</html>