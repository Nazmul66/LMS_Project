<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="{{ route('user.dashboard') }}" class="menu--link @yield('dashboard')" title="Dashboard">
                        <i class='bx bxs-dashboard menu--icon'></i>
                        <span class="menu--label">Dashboard</span>
                    </a>
                </li>

                <li class="menu--item">
                    <a href="{{ route('user.order') }}" class="menu--link @yield('order')" title="Courses">
                        <i class='bx bx-book menu--icon'></i>
                        <span class="menu--label">Order</span>
                    </a>
                </li>

                <li class="menu--item">
                    <a href="{{ route('user.user.profile') }}" class="menu--link @yield('user-profile')" title="Courses">
                        <i class='bx bx-book menu--icon'></i>
                        <span class="menu--label">My Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>