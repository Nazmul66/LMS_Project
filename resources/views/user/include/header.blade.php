<header class="header clearfix">
    {{-- <button type="button" id="toggleMenu" class="toggle_menu">
      <i class='uil uil-bars'></i>
    </button>

    <button id="collapse_menu" class="collapse_menu">
        <i class="uil uil-bars collapse_menu--icon "></i>
        <span class="collapse_menu--label"></span>
    </button> --}}

    <div class="main_logo" id="logo">
        <a href="index.html"><img src="{{ asset('user/images/logo.svg') }}" alt=""></a>
        <a href="index.html"><img class="logo-inverse" src="{{ asset('user/images/ct_logo.svg') }}" alt=""></a>
    </div>

    <div class="header_right">
        <ul>
            <li class="profile-dropdown">
                <a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <img src="{{ asset('user/images/hd_dp.jpg') }}" alt="">
                </a>
                <div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
                    <div class="channel_my">
                        <div class="profile_link">
                            <img src="{{ asset('user/images/hd_dp.jpg') }}" alt="">
                            <div class="pd_content">
                                <div class="rhte85">
                                    <h6>Joginder Singh</h6>
                                </div>
                                <span>gambol943@gmail.com</span>
                            </div>
                        </div>
                        <a href="my_instructor_profile_view.html" class="dp_link_12">View Profile</a>
                    </div>
                    <a href="instructor_dashboard.html" class="item channel_item">Dashboard</a>
                    <a href="membership.html" class="item channel_item">My Courses</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="border: none;
                            background: transparent;" class="item channel_item"> 
                            <span key="t-logout">Sign Out</span>
                        </button>    
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>