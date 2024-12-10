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
                
                {{-- <li>
                    <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                </li> --}}

                <li class="@yield('course')">
                    <a href="{{ route('admin.course.index') }}" class="waves-effect">
                        <i class="bx bx bx-dollar-circle"></i>
                        <span key="t-course">Course</span>
                    </a>
                </li>

                <li class="@yield('order')">
                    <a href="{{ route('admin.order.index') }}" class="waves-effect">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                        <span key="t-course">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.profile.index') }}" class="waves-effect">
                        <i class='bx bxs-user'></i>
                        <span key="t-section">Admin Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.setting.general.setting') }}" class="waves-effect">
                        <i class='bx bx-cog'></i>
                        <span key="t-section">settings</span>
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" style="border: none;
                            background: transparent;">
                            <i class="bx bx-power-off align-middle me-1 text-danger"></i> 
                            <span key="t-logout">Logout</span>
                        </button>    
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
