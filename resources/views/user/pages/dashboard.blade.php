@extends('user.layout.master')

@push('add-css')
    
@endpush

@section('dashboard', 'active')

@section('body-content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="st_title">My Courses</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="_14d25">
            <div class="row">     

                @if ( $courses->count() > 0 )
                    @foreach ($collection as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="fcrse_1 mt-30">
                            <a href="{{ route('user.course.details', $row->id) }}" class="fcrse_img">
                                <img src="{{ asset($row->image) }}" alt="">
                                <div class="course-overlay">
                                    {{-- <div class="badge_seller">Bestseller</div> --}}
                                    {{-- <div class="crse_reviews">
                                        <i class='bx bx-star'></i>4.5
                                    </div> --}}
                                    <span class="play_btn1"><i class='bx bx-play' ></i></span>
                                    <div class="crse_timer">
                                        {{ $row->duration }}
                                    </div>
                                </div>
                            </a>
                            <div class="fcrse_content">
                                <div class="vdtodt">
                                    {{-- <span class="vdt14">109k views</span> --}}
                                    <span class="vdt14">{{ $row->created_at->diffForHumans() }}</span>
                                </div>
                                <a href="{{ route('user.course.details', $row->id) }}" class="crse14s">{{ Str::substr($row->title, 0, 40) }}...</a>
                                {{-- <a href="#" class="crse-cate">Web Development | Python</a> --}}
                                <div class="auth1lnkprce">
                                    <p class="cr1fot">By <span>{{ $row->name }}</span></p>
                                    <div class="prce142">${{ $row->price }}</div>
                                    <button class="shrt-cart-btn" title="cart"><i class='bx bx-cart'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="alert alert-success text-center" role="alert">
                    There's no course here
              </div>
                @endif



                {{-- <div class="col-lg-3 col-md-4">
                    <div class="fcrse_1 mt-30">
                        <a href="course_detail_view.html" class="fcrse_img">
                            <img src="images/courses/img-2.jpg" alt="">
                            <div class="course-overlay">
                                <div class="badge_seller">Bestseller</div>
                                <div class="crse_reviews">
                                    <i class='bx bx-star'></i>4.5
                                </div>
                                <span class="play_btn1"><i class='bx bx-play' ></i></span>
                                <div class="crse_timer">
                                    28 hours
                                </div>
                            </div>
                        </a>
                        <div class="fcrse_content">
                            <div class="vdtodt">
                                <span class="vdt14">5M views</span>
                                <span class="vdt14">15 days ago</span>
                            </div>
                            <a href="course_detail_view.html" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
                            <a href="#" class="crse-cate">Development | JavaScript</a>
                            <div class="auth1lnkprce">
                                <p class="cr1fot">By <a href="#">Jassica William</a></p>
                                <div class="prce142">$5</div>
                                <button class="shrt-cart-btn" title="cart"><i class='bx bx-cart'></i></button>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>

@endsection


@push('add-js')
    
@endpush