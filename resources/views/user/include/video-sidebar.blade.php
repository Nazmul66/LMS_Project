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
            <div class="sidebar-section-item {{ request()->segment(3) === $row->video_slug ? 'active' : '' }}">
                <div class="section-item-title border-bottom">
                    <a href="{{ route('user.course.videos', [$id, $row->video_slug]) }}" class="pp-2 d-flex">
                        <span class="lecture-status-icon pr-1">
                            <i class="uil uil-file icon_142"></i>
                        </span>
                        <div class="title-container pl-2 flex-grow-1 d-flex">
                            <span class="lecture-name flex-grow-1">
                                {{ $row->video_title }} <small>({{ $row->video_timer }})</small>
                            </span>                                              
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach