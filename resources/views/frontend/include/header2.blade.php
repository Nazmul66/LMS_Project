<!-- header-area-start -->
<header class="header header-3 sticky-active">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    <ul class="top-bar-list">
                        <li>
                            <i class='bx bx-phone-call' style="font-size: 24px;"></i>
                            <a href="tel:{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}">
                                {{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}
                            </a>
                        </li>
                        <li><i class='bx bx-map' style="font-size: 24px;"></i><span>{{ getSetting()->address ?? "" }}</span></li>
                        <li><i class='bx bx-time-five' style="font-size: 24px;"></i><span>
                            {{ getSetting()->office_time_open ?? "" }}</span></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <div class="register-box">
                        <div class="icon"><i class="fa-regular fa-user"></i></div>

                        @if ( Auth::check() )
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <button type="submit" style="color: #FFF;">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login </a>
                        @endif
                    </div>
                    <div class="top-social-wrap">
                        <span>Follow Us</span>
                        <ul class="social-list">
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
            </div>
        </div>
    </div>

    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo d-lg-block">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset(getSetting()->logo) }}" alt="Logo">
                    </a>
                </div>

                <div class="header-menu-wrap">
                    <div class="mobile-menu-items">
                        <ul class="sub-menu">
                                    <li class="active">
                                        <a href="{{ route('home') }}">Home</a>
                                        {{-- <ul>
                                            <li><a href="index.html">Main Demo</a></li>
                                            <li><a href="index-2.html">Online Education</a></li>
                                            <li><a href="index-3.html">Digital Education</a></li>
                                            <li><a href="index-4.html">Online Course</a></li>
                                            <li><a href="index-5.html">Eduction Platform</a></li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="menu-item-has-children">
                                        <a href="course.html">Courses</a>
                                        <ul>
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="course-details.html">Course Details</a></li>
                                        </ul>
                                    </li> --}}

                                    <li>
                                        <a href="{{ route('cart') }}">Cart</a>
                                        {{-- <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul> --}}
                                    </li>

                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="teachers.html">Instructor</a></li>
                                            <li><a href="pricing.html">Pricing Table</a></li>
                                            <li><a href="event.html">Event</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="error-page.html">404 Error</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="menu-item-has-children">
                                        <a href="blog-grid.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Post</a></li>
                                            <li><a href="blog.html">Blog Standard</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                    </div>
                </div>

                <!-- /.header-menu-wrap -->
                <div class="header-right-wrap">
                    <div class="header-right">
                        {{-- <div class="header-right-icon d-xl-block d-lg-none">
                            <a href="#"><i class="fa-sharp fa-regular fa-heart"></i></a>
                            <span class="number">0</span>
                        </div> --}}

                        <div class="header-right-icon shop-btn">
                            <a href="{{ route('cart') }}"><i class='bx bx-cart-alt' style="font-size: 24px;"></i></a>
                            <span class="number">{{ getTotalCart() }}</span>
                        </div>

                        {{-- <a href="contact.html" class="ed-primary-btn header-btn">Start Free Trial</a> --}}
                        {{-- <div class="header-logo d-none d-lg-none">
                            <a href="index.html">
                                <img src="{{ asset('frontend/assets/img/logo/logo-1.png') }}" alt="Logo">
                            </a>
                        </div> --}}

                        <div class="header-right-item d-lg-none d-md-block">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle"
                                ><i class="fa-sharp fa-solid fa-bars"></i
                            ></a>
                        </div>
                    </div>
                    <!-- /.header-right -->
                </div>
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
</header>
<!-- /.Main Header -->

{{-- <div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div> --}}
<!-- /#popup-search-box -->

<div class="mobile-side-menu">
    <div class="side-menu-content">

        <div class="side-menu-head">
            <a href="{{ route('home') }}"><img src="{{ asset(getSetting()->logo) }}" alt="logo"></a>
            <button class="mobile-side-menu-close"><i class='bx bx-x' style="font-size: 24px;"></i></button>
        </div>

        <div class="side-menu-wrap"></div>

        <ul class="side-menu-list">
            <li><i class="fa-light fa-location-dot"></i>Address : <span>{{ getSetting()->address }}</span></li>

            <li>
                <i class="fa-light fa-phone"></i>Phone : <a href="tel:{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}">{{ getSetting()->phone ? getSetting()->phone : getSetting()->phone_optional }}</a>
            </li>

            <li>
                <i class="fa-light fa-envelope"></i>Email : <a href="mailto:{{ getSetting()->email ? getSetting()->email : getSetting()->email_optional }}">{{ getSetting()->email ? getSetting()->email : getSetting()->email_optional }}</a></li>
        </ul>
    </div>
</div>
<!-- /.mobile-side-menu -->
<div class="mobile-side-menu-overlay"></div>

