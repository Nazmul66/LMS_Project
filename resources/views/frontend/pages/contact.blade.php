@extends('frontend.layouts.master')

@push('add-title')
    
@endpush

@push('add-css')
    
@endpush

@section('contact', 'active')

@section('body-content')

<!-- header-area-start -->
@include('frontend.include.header2')


@include('frontend.include.breadcrumb', ['title' => 'Contact Us'])
<!-- ./ page-header -->

<section class="contact-section pt-120 pb-120">
    <div class="container">
        <div class="row gy-lg-0 gy-5">
            <div class="col-lg-7">
                <div class="blog-contact-form contact-form">
                    <h2 class="title mb-0">Leave A Reply</h2>
                    <p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
                    <div class="request-form">
                        <form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                        <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {{-- <div class="form-item">
                                        <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Select Subject</span>
                                            <ul class="list"><li data-value="" class="option selected focus">Select Subject</li><li data-value="vdt" class="option">Plan One</li><li data-value="can" class="option">Plan Two</li><li data-value="uk" class="option">Plan Three</li></ul>
                                        </div>
                                    </div> --}}

                                    <div class="form-item">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone">
                                        {{-- <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item message-item">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                        <div class="icon"><i class="fa-light fa-messages"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button id="submit" class="ed-primary-btn" type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="contact-content">
                    <div class="contact-top">
                        <h3 class="title">Office Information</h3>
                    </div>
                    <div class="contact-list">
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Phone Number & Email</h4>
                                <span><a href="tel:+65485965789">{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}</a></span>
                                <span><a href="mailto:{{ getSetting()->email ? getSetting()->email : getSetting()->email_optional }}">{{ getSetting()->email ? getSetting()->email : getSetting()->email_optional }}</a></span>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Our Office Address</h4>
                                <p>{{ getSetting()->address }}</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-clock"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Official Work Time</h4>
                                <span>{{ getSetting()->office_time_open }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ contact-section -->


@endsection


@push('add-js')
    
@endpush