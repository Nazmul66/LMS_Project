@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush


@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')


@include('frontend.include.breadcrumb', ['title' => 'Course Details'])
<!-- ./ page-header -->

<section class="course-details pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="course-details-content">
                    <div class="course-details-img">
                        <img src="{{ asset($course->image) }}" alt="course">
                    </div>
                    
                    <div class="details-inner">
                        {{-- <ul class="details-meta">
                            <li>Best Seller</li>
                            <li>Latest</li>
                        </ul> --}}

                        <h2 class="title">{{ $course->title }}</h2>
                        <ul class="course-details-list">
                            <li><img src="{{ asset('frontend/assets/img/service/course-details-author.png') }}" alt="author"><span>Instructor:</span> {{ $course->name }}</li>
                            {{-- <li><i class="fa-solid fa-tags"></i>Web Development</li> --}}

                            <li><i class="fa-light fa-calendar"></i>{{ date('d M, Y', strtotime($course->created_at))  }}</li>

                            {{-- <li class="review-wrap">
                                <ul>
                                    <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                    <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                    <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                    <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                    <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                </ul>
                                (4.88)
                            </li> --}}
                        </ul>
                    </div>

                    <div class="course-details-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fa-sharp fa-regular fa-bookmark"></i>Overview</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class='bx bx-purchase-tag-alt' style="font-size: 24px;"></i>Curriculam</button>
                            </li>

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="fa-regular fa-user"></i>Instructor</button>
                            </li> --}}

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" type="button" role="tab" aria-controls="contact-2" aria-selected="false"><i class="fa-regular fa-star"></i>Reviews</button>
                            </li> --}}
                        </ul>



                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="tab-overview">

                                    {!! $course->description !!}

                                    {{-- <h3 class="title">Description</h3>
                                    <p class="mb-30">Rapidiously develop parallel e-markets via worldwide paradigms. Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services.
                                        Phosfluorescently deploy extensive paradigms vis-a-vis cross-unit manufactured products. Uniquely coordinate impactful services whereas team building e-services. Globally grow multimedia based benefits vis-a-vis client-based niches.
                                    </p>
                                    <p class="mb-40">Professionally expedite synergistic technology without out-of-the-box human capital. Enthusiastically coordinate state of the art leadership after professional manufactured products. Distinctively enhance future-proof e-services whereas functionalized partnerships. Quickly streamline focused paradigms via orthogonal "outside the box" thinking. Rapidiously administrate 2.0 total linkage for cross-platform channels.</p>
                                    <h3 class="title">What Will You Learn?</h3>
                                    <p class="mb-0">Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services extensive paradigms cross-unit manufactured products.</p> --}}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="curriculam-area">
                                    <div class="accordion" id="accordionExample">

                                        @foreach ($course_modules as $s => $item)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading{{ $s + 1 }}">
                                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $s + 1 }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $s + 1 }}">
                                                        {{ $item->name }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $s + 1 }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $s + 1 }}" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="curri-list">
                                                            @php
                                                                $course_videos = App\Models\CourseVideo::where('course_module_id', $item->id)->where('status', 1)->get();
                                                            @endphp

                                                            @foreach ($course_videos as $row)
                                                                <li>
                                                                    <span>
                                                                        <i class='bx bx-video' style="font-size: 24px;"></i>  {{ $row->video_title }}
                                                                    </span> 

                                                                    <span>{{ $row->video_timer }} <i class='bx bx-time-five' style="font-size: 24px;"></i>
                                                                    </span>
                                                                </li>
                                                            @endforeach

                                                            {{-- <li><span><i class='bx bx-video' style="font-size: 24px;"></i></i>  Building a Strong Vocabulary for Everyday Communication</span> <span>45.05 <i class='bx bx-time-five' style="font-size: 24px;"></i></span></li>

                                                            <li><span><i class="fa-regular fa-file-contract"></i>  Understanding Basic Sentence Structure and Grammar</span> <span>1.6hr <i class='bx bx-time-five' style="font-size: 24px;"></i></span></li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-xl-3 col-lg-12">
                <div class="course-sidebar price-box">
                    {{-- <h4 class="price">$90.00 <span>25% off</span></h4> --}}
                    <h4 class="price">${{ number_format($course->price, 2) }}</h4>

                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                         
                        <input type="hidden" name="course_id" value="{{ $course->id }}">

                        <button type="submit" class="ed-primary-btn">Add to Cart</button>
                    </form>
                    {{-- <a href="cart.html" class="ed-primary-btn buy-btn">Buy Now</a> --}}
                </div>

                <div class="course-sidebar sticky-widget">
                    <h4 class="sidebar-title">Course Information</h4>
                    <ul class="course-sidebar-list">
                        <li><i class='bx bx-home' style="font-size: 20px;"></i>Instructor: <span>Kevin Perry</span></li>
                        <li><i class='bx bx-book-bookmark' style="font-size: 20px;"></i>Lessons: <span>{{ $course->lesson }}</span></li>
                        <li><i class='bx bx-time-five' style="font-size: 20px;"></i>Duration: <span>{{ $course->duration }}</span></li>
                        <li><i class='bx bx-purchase-tag-alt' style="font-size: 20px;"></i>Course level: <span>{{ $course->course_level }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@push('add-js')
    
@endpush