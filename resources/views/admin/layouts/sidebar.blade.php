<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                </li>

                <li class="@yield('course')">
                    <a href="{{ route('admin.course.index') }}" class="waves-effect">
                        <i class="bx bx bx-dollar-circle"></i>
                        <span key="t-course">Course</span>
                    </a>
                </li>

                {{-- <li class="@yield('course_video')">
                    <a href="{{ route('admin.course_video.index') }}" class="waves-effect">
                        <i class="bx bx bx-dollar-circle"></i>
                        <span key="t-course">Course Videos</span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('admin.setting.general.setting') }}" class="waves-effect">
                        <i class='bx bx-cog'></i>
                        <span key="t-section">settings</span>
                    </a>
                </li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <li>
                         <button type="submit" style="border: none;
                         background: transparent; padding: 0;">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> 
                            <span key="t-logout">Logout</span>
                        </button>    
                    </li>
                </form>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
