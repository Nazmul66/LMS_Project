<section class="page-header">
    <div class="bg-item">
        <div class="bg-img" data-background="{{ asset('frontend/assets/img/bg-img/page-header-bg.png') }}"></div>
        <div class="overlay"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ asset('frontend/assets/img/shapes/page-header-shape-1.png') }}" alt="shape"></div>
            <div class="shape shape-2"><img src="{{ asset('frontend/assets/img/shapes/page-header-shape-2.png') }}" alt="shape"></div>
            <div class="shape shape-3"><img src="{{ asset('frontend/assets/img/shapes/page-header-shape-3.png') }}" alt="shape"></div>
        </div>
    </div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">{{ $title }}</h1>
            <h4 class="sub-title"><a class="home" href="index.html">Home </a><span class="icon">/</span><a class="inner-page" href="course-details.html"> {{ $title }}</a></h4>
        </div>
    </div>
</section>