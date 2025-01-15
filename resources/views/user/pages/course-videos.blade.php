<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Downloaded Course</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('user/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="{{ asset('user/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/night-mode.css') }}" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/vendor/semantic/semantic.min.css') }}">

    <style>
        .html5-endscreen {
            cursor: default;
            overflow: hidden;
            z-index: 0;
            display: none !important;
        }

        .ytp-chrome-top-buttons {
            white-space: nowrap;
            visibility: hidden;
            display: none;
            opacity: 0px;
        }

        .ytp-impression-link-content {
            visibility: hidden;
            display: none;
            opacity: 0px;
        }

        .ytp-copylink-title {
            margin: auto;
            width: 36px;
            height: 36px;
            display: none !important;
            opacity: 0px;
            visibility: hidden;
        }

        .ytp-chrome-top {
            display: -webkit-flex;
            display: -webkit-box;
            display: flex;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            left: 12px;
            right: 12px;
            top: 0;
            z-index: 58;
            display: none;
        }
    </style>

</head>

<body>
    <!-- Header Start -->
    <div class="lecture-header d-flex">
        <div class="lecture-header-left d-flex">
            <a href="student_courses.html" class="back-to-curriculum" data-bs-toggle="tooltip" data-bs-title="go to purchased courses">
					<i class="fas fa-angle-left"></i>
				</a>
            <a href="javascript:;" class="nav-icon-list d-sm-block d-md-block d-lg-none"><i class="fas fa-list"></i></a>
        </div>
        <div class="lecture-header-right d-flex">
            {{-- <a href="" class="nav-btn disabled">
					<span class="nav-text">
						<i class="fas fa-long-arrow-alt-left mr-2"></i>
						Back
					</span>
				</a> --}}
            {{-- <a class="nav-btn" href="#">
					<span class="nav-text">
						Next						
						<i class="fas fa-long-arrow-alt-right ml-2"></i>
					</span>
				</a> --}}
        </div>
    </div>
    <!-- Header End -->


    <!-- Body Start -->
    <div class="lecture-container-wrap d-flex">
        <div class="lecture-sidebar">
            <h4 class="p-4 lecture-sidebar-course-title">Welcome to Course Bootcamp </h4>

            {{-- <div>
                <p>Current Segment: {{ request()->segment(4) }}</p>
            </div> --}}
        
            <div class="lecture-sidebar-curriculum-wrap">
                <div class="course-course-section">

                    {{-- Others sidebar added --}}
                    @foreach ($course_modules as $item)
                        <div class="section-header pp-2 d-flex">
                            <span class="section-name flex-grow-1 ms-2 d-flex">
                                <strong class="flex-grow-1">{{ $item->name }}</strong>
                            </span>
                        </div>

                        @php
                            $course_videos = App\Models\CourseVideo::where('course_module_id', $item->id)->where('status', 1)->get();
                        @endphp
                        
                        <div class="course-section-body">
                            @foreach ($course_videos as $index => $row)
                                <div class="sidebar-section-item {{ request()->segment(4) === $row->video_slug ? 'active' : '' }}">
                                    <div class="section-item-title border-bottom">
                                        <a href="{{ route('user.course.videos', [$id, $row->video_slug]) }}" class="pp-2 d-flex">
                                            <span class="lecture-status-icon pr-1 me-2">
                                                <i class="bx bx-play-circle"></i>
                                            </span>
                                            <div class="title-container pl-2 flex-grow-1 d-flex">
                                                <span class="lecture-name flex-grow-1">
                                                    {{ $row->video_title }}
                                                </span>                                              
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>


                {{-- <div class="course-course-section">
                    <div class="section-header pp-2 d-flex">
                        <span class="section-name flex-grow-1 ms-2 d-flex">
							<strong class="flex-grow-1">Introduction to Front End Development</strong>
						</span>
                    </div>
                    <div class="course-section-body">
                        <div class="sidebar-section-item  ">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-play-circle icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											Unit Objectives <small>01.40</small>
										</span>
									</div>
								</a>
                            </div>
                        </div>
                        <div class="sidebar-section-item">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-file icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											Note about Setting Up Front-End Developer Environment
										</span>     
									</div>
								</a>
                            </div>
                        </div>
                        <div class="sidebar-section-item  ">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-play-circle icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											Setting Up Front-End Developer Environment <small>03.11</small>
										</span>	
									</div>
								</a>
                            </div>
                        </div>
                        <div class="sidebar-section-item  ">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-file icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											Note about Introduction to the Web
										</span>   
									</div>
								</a>
                            </div>
                        </div>
                        <div class="sidebar-section-item">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-play-circle icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											Introduction to the Web <small>10.08</small>
										</span>										
									</div>
								</a>
                            </div>
                        </div>
                        <div class="sidebar-section-item">
                            <div class="section-item-title">
                                <a href="#" class="pp-2 d-flex">
									<span class="lecture-status-icon pr-1">
										<i class="uil uil-play-circle icon_142"></i>
									</span>
									<div class="title-container pl-2 flex-grow-1 d-flex">
										<span class="lecture-name flex-grow-1">
											The Front End Holy Trinity <small>11.46</small>
										</span>										
									</div>
								</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        
        <div class="lecture-container">
            <h2 class="lecture-title mb-4">A Note On Asking For Help</h2>
            <div class="lecture-content-inner mt-35">
                <div class="lecture-content-inner-video">
                    <div class="video-responsive">
                        <iframe width="640" height="360"
                            src="https://www.youtube.com/embed/{{ $course_video_first->video_link }}?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                            {{-- {!! $course_video_first->video_link !!} --}}
                             {{-- <iframe src="https://www.youtube.com/embed/Ohe_JzKksvA" class="lec-responsive-width"></iframe> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="lecture-content-txt mt-35">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium nisl sit amet nisi vehicula iaculis. Praesent nisl tellus, suscipit vel aliquet id, hendrerit in leo. Nulla facilisi. Aenean consectetur malesuada nibh, eu feugiat
                    augue finibus eu. Quisque ac erat nec libero finibus bibendum ac quis libero. Nulla sed tempor leo. Donec vulputate justo arcu, ac ornare neque gravida id. Sed in ligula mattis, commodo quam a, dictum massa. Donec nec neque vestibulum,
                    faucibus quam eget, posuere nisi. Donec tincidunt placerat rhoncus. Integer sollicitudin feugiat dolor id varius. Aenean ut nibh vel erat rutrum lacinia. Nam tristique faucibus elementum. Donec id turpis a sem finibus scelerisque et
                    ut elit. Aliquam quis nisl augue. Donec volutpat leo eget ligula dictum, vitae faucibus massa gravida.</p>
            </div> --}}
        </div>
    </div>
    <!-- Body End -->

    <!-- Javascripts -->
    <script src="{{ asset('user/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('user/vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <script src="{{ asset('user/js/night-mode.js') }}"></script>


</body>

</html>