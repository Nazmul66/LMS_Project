@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush

@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header')


<section class="hero-section hero-4 overflow-hidden">
    <div class="shapes">
        <div class="shape shape-1"><img src="{{ asset('frontend/assets/img/shapes/hero-shape-16.png') }}" alt="shape"></div>
        <div class="shape shape-2"><img src="{{ asset('frontend/assets/img/shapes/hero-shape-17.png') }}" alt="shape"></div>
        <div class="shape shape-3"><img src="{{ asset('frontend/assets/img/shapes/hero-shape-18.png') }}" alt="shape"></div>
        <div class="shape shape-4"><img src="{{ asset('frontend/assets/img/shapes/hero-shape-19.png') }}" alt="shape"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="hero-content hero-content-3 hero-content-4">
                    <div class="section-heading mb-20">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Welcome to Online Eduaction</h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">World’s Only E-School <br>Built by <span>Industry Leaders, <br>for Future Leaders</span></h2>
                    </div>
                    <h4 class="bottom-title">Tech-boosted practical-first approach</h4>
                    <div class="hero-btn-wrap">
                        <a href="contact.html" class="ed-primary-btn active">Apply Now <span><i class="fa-solid fa-plus"></i></span></a>
                        {{-- <a href="contact.html" class="ed-primary-btn">Download  Brochure <span><i class="fa-solid fa-plus"></i></span></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="hero-img-wrap-2">
                    <div class="img-shape"><img src="{{ asset('frontend/assets/img/shapes/hero-img-shape-3.png') }}" alt="shape"></div>
                    <div class="img-shape-2"><img src="{{ asset('frontend/assets/img/shapes/hero-img-shape-4.png') }}" alt="shape"></div>
                    <div class="hero-img">
                        <img src="{{ asset('frontend/assets/img/images/hero-img-2.png') }}" alt="hero">
                    </div>
                    <ul class="hero-contact-list">
                        <li><a href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
                        <li><a href="#"><i class="fa-regular fa-microphone-slash"></i></a></li>
                        <li><a href="#"><i class="fa-regular fa-phone"></i></a></li>
                        <li><a href="#"><i class="fa-regular fa-video"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ hero-section -->

<section class="feature-section-4 pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Our Features</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Digital Art And Design Crafting <br>Art With Technology</h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card text-center wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="icon"><img src="{{ asset('frontend/assets/img/icon/feature-icon-1.png') }}" alt="icon"></div>
                    <div class="content">
                        <h3 class="title">Accessibility & Flexibility</h3>
                        <p>Online education should be accessible to learners from diverse backgrounds, offering the flexibility to study anytime.</p>
                        <a href="about.html" class="ed-primary-btn">Learn More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card text-center wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="icon"><img src="{{ asset('frontend/assets/img/icon/feature-icon-2.png') }}" alt="icon"></div>
                    <div class="content">
                        <h3 class="title">Personalized Learning </h3>
                        <p>Online education should be accessible to learners from diverse backgrounds, offering the flexibility to study anytime.</p>
                        <a href="about.html" class="ed-primary-btn">Learn More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card text-center wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="icon"><img src="{{ asset('frontend/assets/img/icon/feature-icon-3.png') }}" alt="icon"></div>
                    <div class="content">
                        <h3 class="title">High-Quality Instruction</h3>
                        <p>Online education should be accessible to learners from diverse backgrounds, offering the flexibility to study anytime.</p>
                        <a href="about.html" class="ed-primary-btn">Learn More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ feature-section -->

<section class="about-section-4 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="faq-img-wrap about-img-wrap-4 wow fade-in-left" data-wow-delay="400ms">
                    <div class="faq-img">
                        <img src="{{ asset('frontend/assets/img/images/about-img-4.png') }}" alt="faq">
                    </div>
                    <div class="faq-text-box">
                        <h4 class="student">Total Students</h4>
                        <ul class="faq-thumb-list">
                            <li><img src="{{ asset('frontend/assets/img/images/faq-thumb-1.png') }}" alt="faq"></li>
                            <li><img src="{{ asset('frontend/assets/img/images/faq-thumb-2.png') }}" alt="faq"></li>
                            <li><img src="{{ asset('frontend/assets/img/images/faq-thumb-3.png') }}" alt="faq"></li>
                            <li><img src="{{ asset('frontend/assets/img/images/faq-thumb-4.png') }}" alt="faq"></li>
                            <li class="number">25+</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content-4">
                    <div class="section-heading mb-20">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>About Our Platform</h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms"><span>What People Think</span> About <br> Our Company</h2>
                    </div>
                    <p class="mb-30 wow fade-in-bottom" data-wow-delay="400ms">Synergistically visualize alternative content before cross functional core Rapidiously administra standardized value via focused benefits. Rapidiously redefine highly <br> efficient niche markets</p>
                    <div class="about-items wow fade-in-bottom" data-wow-delay="500ms">
                        <div class="about-item">
                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="content">
                                <h4 class="title">Competitive Rates</h4>
                                <p class="mb-0">Seamlessly envisioneer tactical <br> data through services.</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="content">
                                <h4 class="title">Online Certificates</h4>
                                <p class="mb-0">Seamlessly envisioneer tactical <br> data through services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn wow fade-in-bottom" data-wow-delay="600ms">
                        <a href="contact.html" class="ed-primary-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ course-section -->

<section class="feature-course pt-120 pb-120">
    <div class="container">
        <div class="course-top heading-space align-items-end">
            <div class="section-heading mb-0">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>10,000+ unique online courses</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Most popular courses​</h2>
            </div>

            contact --}}
        </div>
        <div class="course-tab-content tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-1.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-1.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Kevin Perry</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-2.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-2.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Deniel Ross</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-3.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-3.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Andrew klip</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-1.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-1.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Kevin Perry</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-2.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-2.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Deniel Ross</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-3.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-3.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Andrew klip</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-1.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-1.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Kevin Perry</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-2.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-2.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Deniel Ross</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-3.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-3.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Andrew klip</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-1.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-1.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Kevin Perry</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-2.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-2.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Deniel Ross</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-3.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-3.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Andrew klip</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact-3" role="tabpanel" aria-labelledby="contact-tab-3">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-1.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-1.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Kevin Perry</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-2.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-2.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Deniel Ross</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend/assets/img/images/course-img-3.png') }}" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend/assets/img/images/course-author-3.png') }}" alt="course">
                                        </div>
                                        <div class="author-info">
                                            <h4 class="name">Andrew klip</h4>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <ul class="course-review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li class="point">(4.7)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="price">$59.00</span>
                                <a href="course-details.html" class="course-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ course-section -->

<section class="features-event pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Our Upcoming Events</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Upcoming Events & Webinars</h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="event-thumb">
                        <img src="{{ asset('frontend/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap">
                            <h5 class="date">15 <span>Dec</span></h5>
                        </div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="event-details.html">Engaging Students in Real-World <br>Problems Finding</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="event-details.html" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="event-thumb">
                        <img src="{{ asset('frontend/assets/img/images/event-img-2.png') }}" alt="event">
                        <div class="date-wrap">
                            <h5 class="date">15 <span>Dec</span></h5>
                        </div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="event-details.html">Innovative Teaching Strategies for <br>the 21st Century Classroom</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="event-details.html" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="event-thumb">
                        <img src="{{ asset('frontend/assets/img/images/event-img-3.png') }}" alt="event">
                        <div class="date-wrap">
                            <h5 class="date">15 <span>Dec</span></h5>
                        </div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="event-details.html">Impact of Artificial Intelligence on <br>the Future of Education</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="event-details.html" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ features-event -->

<section class="testimonial-section-3 pt-120 pb-120">
    <div class="shapes">
        <div class="shape shape-1"><img src="{{ asset('frontend/assets/img/shapes/testi-shape-3.png') }}" alt="shape"></div>
        <div class="shape shape-2"><img src="{{ asset('frontend/assets/img/shapes/testi-shape-4.png') }}" alt="shape"></div>
    </div>
    <div class="container">
        <div class="row gy-xl-0 gy-5 align-items-center">
            <div class="col-xl-5 col-lg-12">
                <div class="testi-left-content white-content">
                    <div class="section-heading mb-20 white-content">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Our Testimonials</h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">What Students Think and <br>Say About EdCare</h2>
                    </div>
                    <p class="mb-0 wow fade-in-bottom" data-wow-delay="500ms">Empowering businesses with cutting-edge technology, reliable support, <br> and seamless integration.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="testi-carousel-wrap-2">
                    <div class="testi-carousel-2 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-item-3">
                                    <h3 class="title">Interactive Learning Experience</h3>
                                    <p>"I've been thoroughly impressed with how engaging and interactive the courses are on this. The use of multimedia, quizzes, and live sessions makes learning enjoyable and keeps me motivated.”</p>
                                    <div class="testi-author">
                                        <div class="testi-author-img">
                                            <img src="{{ asset('frontend/assets/img/images/testi-author-3.png') }}" alt="testi">
                                        </div>
                                        <h4 class="name">Markus Adina <span>Writer</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-arrow">
                        <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left"></i></div>
                        <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ testimonial-section -->

<section class="team-section pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Our Instructors</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Meet Our Expert Instructor</h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="team-item-4 wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="team-thumb">
                        <div class="overlay"></div>
                        <img src="{{ asset('frontend/assets/img/team/team-1.png') }}" alt="team">
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="teachers.html">Matthew Daniel</a></h3>
                        <span>Product Manager</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item-4 wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="team-thumb">
                        <div class="overlay"></div>
                        <img src="{{ asset('frontend/assets/img/team/team-2.png') }}" alt="team">
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="teachers.html">Isabella E. Olivia</a></h3>
                        <span>Product Manager</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item-4 wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="team-thumb">
                        <div class="overlay"></div>
                        <img src="{{ asset('frontend/assets/img/team/team-3.png') }}" alt="team">
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="teachers.html">David R. Connor</a></h3>
                        <span>Product Manager</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item-4 wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="team-thumb">
                        <div class="overlay"></div>
                        <img src="{{ asset('frontend/assets/img/team/team-4.png') }}" alt="team">
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="teachers.html">Sophia S. Grace</a></h3>
                        <span>Product Manager</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ team-section -->

<section class="blog-section bg-grey pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>News & Blogs</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Latest News Updates</h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center post-card-2-wrap">
            <div class="col-lg-6 col-md-6">
                <div class="post-card-2 post-card-3 grid-post wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/img/blog/post-10.png') }}" alt="post">
                        <span class="category">Learning</span>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h3 class="title"><a href="blog-details.html">Exploring the Benefits & Challenges of Hybrid Learning Models</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2024</li>
                                <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                            </ul>
                            <a href="blog-details.html" class="ed-primary-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="post-card-2 post-card-3 grid-post wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/img/blog/post-11.png') }}" alt="post">
                        <span class="category">Learning</span>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h3 class="title"><a href="blog-details.html">Modern Approaches for Engaging <br>Today’s Students</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2024</li>
                                <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                            </ul>
                            <a href="blog-details.html" class="ed-primary-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="post-card-2 post-card-3 grid-post wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/img/blog/post-12.png') }}" alt="post">
                        <span class="category">Learning</span>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h3 class="title"><a href="blog-details.html">The Critical Role of Education in a <br>Changing Workforce</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2024</li>
                                <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                            </ul>
                            <a href="blog-details.html" class="ed-primary-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="post-card-2 post-card-3 grid-post wow fade-in-bottom" data-wow-delay="700ms">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/img/blog/post-13.png') }}" alt="post">
                        <span class="category">Learning</span>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h3 class="title"><a href="blog-details.html">How Innovative Pedagogies Are <br>Transforming Education</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2024</li>
                                <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                            </ul>
                            <a href="blog-details.html" class="ed-primary-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ blog-section -->

<section class="insta-section pt-120 pb-120 overflow-hidden">
    <div class="section-heading text-center">
        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Follow Us</h4>
        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Follow EdCare On Instagram</h2>
    </div>
    <div class="row insta-wrap gy-xl-0 gy-4 justify-content-center">
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-1.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-2.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-3.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-4.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-5.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4">
            <div class="insta-item">
                <div class="overlay"></div>
                <div class="insta-thumb">
                    <img src="{{ asset('frontend/assets/img/images/insta-img-6.png') }}" alt="insta">
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ insta-section -->

@endsection


@push('add-js')
    
@endpush