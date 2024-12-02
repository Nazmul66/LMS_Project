<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Site Title -->
<title>EdCare - @stack('add-title')</title>

<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">

<!-- CSS here -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/keyframe-animation.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

@stack('add-css')