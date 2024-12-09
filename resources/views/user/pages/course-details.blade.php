@extends('user.layout.master')

@push('add-css')
    
@endpush

@section('body-content')


<div class="_215b01">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section3125">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="preview_video">
                                <a href="{{ route('user.course.videos', $course->id) }}" class="fcrse_img" data-bs-toggle="modal" data-bs-target="#videoModal">
                                    <img src="{{ asset($course->image) }}" alt="">
                                    <div class="course-overlay">
                                        {{-- <div class="badge_seller">Bestseller</div> --}}
                                        <span class="play_btn1"><i class='bx bx-play'></i></span>
                                        <span class="_215b02">Preview this course</span>
                                    </div>
                                </a>
                            </div>

                            {{-- <div class="_215b10">
                                <a href="#" class="_215b11">										
                                    <span><i class="uil uil-heart"></i></span>Save
                                </a>
                                <a href="#" class="_215b12">										
                                    <span><i class="uil uil-windsock"></i></span>Report abuse
                                </a>
                            </div> --}}
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="_215b03">
                                <h2>{{ $course->title }}</h2>
                                {{-- <span class="_215b04">The only course you need to learn web development - HTML, CSS, JS, Node, and More!</span> --}}
                            </div>

                            {{-- <div class="_215b05">
                                <div class="crse_reviews mr-2">
                                    <i class="uil uil-star"></i>5.3.2
                                </div>
                                (81,665 ratings)
                            </div> --}}

                            {{-- <div class="_215b05">
                                114,521 students enrolled
                            </div> --}}

                            {{-- <div class="_215b06">
                                <div class="_215b07">
                                    <span><i class='uil uil-comment'></i></span> English
                                </div>
                                <div class="_215b08">
                                    <span><i class='uil uil-closed-captioning'></i></span>
                                    <span>English, Dutch
                                        <span class="caption_tooltip">
                                            12 more
                                            <span class="caption-content">
                                                <span>French</span>
                                    <span>Hindi</span>
                                    <span>German [Auto-generated]</span>
                                    <span>Indonesian [Auto-generated]</span>
                                    <span>Italian [Auto-generated]</span>
                                    <span>Japanese [Auto-generated]</span>
                                    <span>Korean</span>
                                    <span>Polish</span>
                                    <span>Portuguese [Auto-generated]</span>
                                    <span>Spanish [Auto-generated]</span>
                                    <span>Traditional Chinese</span>
                                    <span>Turkish [Auto-generated]</span>
                                    </span>
                                    </span>
                                    </span>
                                </div>
                            </div> --}}
                            <div class="_215b06">
                                <div class="_215b07">
                                    <span><i class='bx bx-cart'></i></span> ${{ $course->price }}
                                </div>
                            </div>

                            <div class="_215b05">
                                Last updated {{ date('d/Y', strtotime($course->updated_at)) }}
                            </div>

                            <ul class="_215b31">
                                <li>
                                    <button class="btn_adcart">
                                        <a href="{{ route('user.course.videos', $course->id) }}" style="color: #FFF;">Preview This Course</a>
                                    </button>
                                </li>
                            </ul>
                            {{-- <ul class="_215b31">
                                <li><button class="btn_adcart">Add to Cart</button></li>
                                <li><button class="btn_buy">Buy Now</button></li>
                            </ul>
                            <div class="_215fgt1">
                                30-Day Money-Back Guarantee
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="_215b15 _byt1458">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="user_dt5">
                    <div class="user_dt_left">
                        <div class="live_user_dt">
                            <div class="user_img5">
                                <a href="#"><img src="{{ asset($course->instructor_image) }}" alt=""></a>
                            </div>
                            <div class="user_cntnt">
                                <a href="#" class="_df7852">{{ $course->name }}</a>
                                <span >{{ $course->designation }}</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="user_dt_right">
                        <ul>
                            <li>
                                <a href="#" class="lkcm152"><i class="uil uil-eye"></i><span>1452</span></a>
                            </li>
                            <li>
                                <a href="#" class="lkcm152"><i class="uil uil-thumbs-up"></i><span>100</span></a>
                            </li>
                            <li>
                                <a href="#" class="lkcm152"><i class="uil uil-thumbs-down"></i><span>20</span></a>
                            </li>
                            <li>
                                <a href="#" class="lkcm152"><i class="uil uil-share-alt"></i><span>9</span></a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <div class="course_tabs">
                    <nav>
                        <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-about-tab" data-bs-toggle="tab" href="#nav-about" role="tab" aria-selected="true">About</a>
                            <a class="nav-item nav-link" id="nav-courses-tab" data-bs-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Courses Content</a>
                            {{-- <a class="nav-item nav-link" id="nav-reviews-tab" data-bs-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a> --}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="_215b17">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="course_tab_content">
                    <div class="tab-content" id="nav-tabContent">

                        {{-- About --}}
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                            <div class="_htg451">
                                <div class="_htg452">

                                    {!! $course->description !!}

                                    {{-- <h3>Requirements</h3>
                                    <ul>
                                        <li>Have a computer with Internet</li>
                                        <li>Be ready to learn an insane amount of awesome stuff</li>
                                        <li>Prepare to build real web apps!</li>
                                    </ul>

                                    <h3>Description</h3>
                                    <p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you need to learn web development</strong>. There are a lot of options for online developer training, but this course is without a doubt the
                                        most comprehensive and effective on the market. Here's why:</p>
                                    <ul>
                                        <li>This is the only online course taught by a professional bootcamp instructor.</li>
                                        <li>94% of my in-person bootcamp students go on to get full-time developer jobs. Most of them are complete beginners when I start working with them.</li>
                                        <li>The previous 2 bootcamp programs that I taught cost $14,000 and $21,000.  This course is just as comprehensive but with brand new content for a fraction of the price.</li>
                                        <li>Everything I cover is up-to-date and relevant to today's developer industry. No PHP or other dated technologies. This course does not cut any corners.</li>
                                        <li>This is the only complete beginner full-stack developer course that covers NodeJS.</li>
                                        <li>We build 13+ projects, including a gigantic production application called YelpCamp. No other course walks you through the creation of such a substantial application.</li>
                                        <li>The course is constantly updated with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.</li>
                                    </ul>
                                    <p>When you're learning to program you often have to sacrifice learning the exciting and current technologies in favor of the "beginner friendly" classes. With this course, you get the best of both worlds. This
                                        is a course designed for the complete beginner, yet it covers some of the most exciting and relevant topics in the industry.</p>
                                    <p>Throughout the course we cover tons of tools and technologies including:</p>
                                    <ul>
                                        <li><strong>HTML5</strong></li>
                                        <li><strong>CSS3</strong></li>
                                        <li><strong>JavaScript</strong></li>
                                        <li><strong>Bootstrap 4</strong></li>
                                        <li><strong>SemanticUI</strong></li>
                                        <li><strong>DOM Manipulation</strong></li>
                                        <li><strong>jQuery</strong></li>
                                        <li><strong>Unix(Command Line) Commands</strong></li>
                                        <li><strong>NodeJS</strong></li>
                                        <li><strong>NPM</strong></li>
                                        <li><strong>ExpressJS</strong></li>
                                        <li><strong>REST</strong></li>
                                        <li><strong>MongoDB</strong></li>
                                        <li><strong>Database Associations</strong></li>
                                        <li><strong>Authentication</strong></li>
                                        <li><strong>PassportJS</strong></li>
                                        <li><strong>Authorization</strong></li>
                                    </ul>

                                    <p>This course is also unique in the way that it is structured and presented. Many online courses are just a long series of "watch as I code" videos. This course is different. I've incorporated everything I learned
                                        in my years of teaching to make this course not only more effective but more engaging. The course includes:</p>
                                    <ul>
                                        <li>Lectures</li>
                                        <li>Code-Alongs</li>
                                        <li>Projects</li>
                                        <li>Exercises</li>
                                        <li>Research Assignments</li>
                                        <li>Slides</li>
                                        <li>Downloads</li>
                                        <li>Readings</li>
                                    </ul>
                                    <p>If you have any questions, please don't hesitate to contact me. I got into this industry because I love working with people and helping students learn. Sign up today and see how fun, exciting, and rewarding
                                        web development can be!</p>


                                    <h3>Who this course is for :</h3>
                                    <ul>
                                        <li>This course is for anyone who wants to learn about web development, regardless of previous experience</li>
                                        <li>It's perfect for complete beginners with zero experience</li>
                                        <li>It's also great for anyone who does have some experience in a few of the technologies(like HTML and CSS) but not all</li>
                                        <li>If you want to take ONE COURSE to learn everything you need to know about web development, take this course</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>


                        {{-- Course Content --}}
                        <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                            <div class="crse_content">
                                <h3>Course content</h3>
                                  @foreach ($course_modules as $item)
                                        @php
                                            $course_videos = App\Models\CourseVideo::where('course_module_id', $item->id)->where('status', 1)->get();
                                        @endphp

                                    <a href="javascript:void(0)" class="accordion-header">
                                        <div class="section-header-left">
                                            <span class="section-title-wrapper">
                                                <i class='bx bx-slideshow'></i>
                                                <span class="section-title-text">{{ $item->name }}</span>
                                            </span>
                                        </div>
                                        <div class="section-header-right">
                                            <span class="num-items-in-section">{{ $course_videos->count() }} lectures</span>
                                            <span class="section-header-length">Duration</span>
                                        </div>
                                    </a>

                                        @foreach ($course_videos as $row)
                                            <div class="ui-accordion-content">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='bx bx-play-circle'></i>
                                                        <div class="top">
                                                            <div class="title">{{ $row->video_title }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">{{ $row->video_timer }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                  @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection


@push('add-js')
    
@endpush