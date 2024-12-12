@php
    $courses = App\Models\Course::where('status', 1)->orderBy('id','DESC')->limit(2)->get();
@endphp

<footer class="footer-section pt-120" data-background="{{ asset('frontend/assets/img/bg-img/footer-bg.png') }}">
    <div class="footer-top-wrap">
        <div class="container">
            {{-- <div class="footer-top text-center">
                <h2 class="title">Subscribe Our Newsletter For <br>Latest Updates</h2>
                <div class="footer-form-wrap">
                    <form action="mail.php" class="footer-form">
                        <div class="form-item">
                            <input type="text" id="email-2" name="email" class="form-control" placeholder="Enter Your E-mail">
                        </div>
                        <button class="ed-primary-btn">sign up</button>
                    </form>
                </div>
            </div> --}}

            <div class="row footer-wrap">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-header">Get in touch!</h3>
                        <p class="mb-30">{{ getSetting()->address ?? "" }}</p>
                        <div class="footer-contact">
                            <span class="number">
                                <i class='bx bx-phone-call' style="font-size: 24px;"></i><a href="tel:{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}">{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}</a>
                            </span>
                            <a href="mailto:info@company.com" class="mail d-block">info@company.com</a>
                        </div>
                        <ul class="footer-social">
                            @if ( !empty(getSetting()->facebook_url) )
                                <li>
                                    <a href="{{ asset(getSetting()->facebook_url) }}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif

                            @if ( !empty(getSetting()->instagram_url) )
                                <li>
                                    <a href="{{ asset(getSetting()->instagram_url) }}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif

                            @if ( !empty(getSetting()->twitter_url) )
                                <li>
                                    <a href="{{ asset(getSetting()->twitter_url) }}">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            @endif

                            @if ( !empty(getSetting()->linkedin_url) )
                                <li>
                                    <a href="{{ asset(getSetting()->linkedin_url) }}">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget-2">
                        <h3 class="widget-header">Course Info</h3>
                        {{-- <div class="row">
                            <div class="col-lg- col-md-6"> --}}
                                <ul class="footer-list">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    @if ( !Auth::check() )
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @endif
                                </ul>
                            {{-- </div> --}}

                            {{-- <div class="col-lg-6 col-md-6">
                                <ul class="footer-list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Resource Center</a></li>
                                    <li><a href="team.html">Careers</a></li>
                                    <li><a href="contact.html">Instructor</a></li>
                                    <li><a href="contact.html">Become A Teacher</a></li>
                                </ul>
                            </div> --}}
                        {{-- </div> --}}
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-header">Recent Post</h3>

                        @foreach ($courses as $row)
                            <div class="sidebar-post mb-20">
                                <img src="{{ asset($row->image) }}" alt="post">
                                <div class="post-content">
                                    <h3 class="title">
                                        <a href="{{ route('course-details', $row->id) }}">{{ Str::substr($row->title, 0, 60) }}...</a>
                                    </h3>
                                    <ul class="post-meta">
                                        <li><i class='bx bx-calendar' style="font-size: 20px;"></i>{{ date('M d, Y', strtotime($row->created_at)) }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="sidebar-post">
                            <img src="{{ asset('frontend/assets/img/images/footer-post-2.png') }}" alt="post">
                            <div class="post-content">
                                <h3 class="title"><a href="#">Where Dreams Find a Home</a></h3>
                                <ul class="post-meta">
                                    <li><i class='bx bx-calendar' style="font-size: 20px;"></i>20 April, 2024</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <p>Copyright © <u><a href="{{ url('/') }}">{{ getSetting()->copyright }}</a></u>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>