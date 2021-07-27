<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        {{-- <form class="search-form">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i data-feather="search"></i>
                </div>
            </div>
            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
        </form> --}}
        <ul class="navbar-nav">
            <li class="nav-item dropdown nav-notifications">
            <a class="nav-link dropdown-toggle" style="display:" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <div class="indicator">
                    <div class="circle"></div>
                </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                {{-- <a href="javascript:;" class="text-muted">Clear all</a> --}}
                </div>
                <div class="dropdown-body">
                <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                    <i data-feather="user-plus"></i>
                    </div>
                    <div class="content">
                    <p>New customer registered</p>
                    <p class="sub-text text-muted">2 sec ago</p>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                    <i data-feather="gift"></i>
                    </div>
                    <div class="content">
                    <p>New Order Recieved</p>
                    <p class="sub-text text-muted">30 min ago</p>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                    <i data-feather="alert-circle"></i>
                    </div>
                    <div class="content">
                    <p>Server Limit Reached!</p>
                    <p class="sub-text text-muted">1 hrs ago</p>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                    <i data-feather="layers"></i>
                    </div>
                    <div class="content">
                    <p>Apps are ready for update</p>
                    <p class="sub-text text-muted">5 hrs ago</p>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                    <i data-feather="download"></i>
                    </div>
                    <div class="content">
                    <p>Download completed</p>
                    <p class="sub-text text-muted">6 hrs ago</p>
                    </div>
                </a>
                </div>
                {{-- <div class="dropdown-footer d-flex align-items-center justify-content-center">
                <a href="javascript:;">View all</a>
                </div> --}}
            </div>
            </li>
            <li class="nav-item dropdown nav-profile">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ url('assets/images/profile.svg') }}" alt="profile">
            </a>
            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                    <img src="{{ url('assets/images/profile.svg') }}" alt="">
                </div>
                <div class="info text-center">
                    <p class="name font-weight-bold mb-0">ITDev Admin</p>
                    <p class="email text-muted mb-3">itdev.admin@personiv.com</p>
                </div>
                </div>
                <div class="dropdown-body">
                <ul class="profile-nav p-0 pt-3">
                    <li class="nav-item">
                    <a href="{{ url('/general/profile') }}" class="nav-link">
                        <i data-feather="user"></i>
                        <span>My Profile</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ url('/auth/login') }}" class="nav-link {{ active_class(['auth/login']) }}">
                        <i data-feather="log-out"></i>
                        <span>Log Out</span>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </li>
        </ul>
    </div>
</nav>
