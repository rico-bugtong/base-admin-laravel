<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            RGB
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item {{ active_class(['profile/*']) }}">
                <a class="nav-link mb-2" data-toggle="collapse" href="#profile" role="button" aria-expanded="{{ is_active_route(['profile/*']) }}" aria-controls="profile">
                    <img src="{{ url('assets/images/profile.svg') }}" alt="profile" width="35px">
                    <span class="link-title">ITDev Admin</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['profile/*']) }}" id="profile">
                    <ul class="nav sub-menu" style="margin-left:36px">
                        <li class="nav-item">
                            <a href="{{ url('/profile/profile') }}" class="nav-link {{ active_class(['profile/profile']) }}">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/auth/login') }}" class="nav-link {{ active_class(['auth/login']) }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><hr></li>
            
            {{-- <li class="nav-item nav-category">Main</li> --}}
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon fa fa-home"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['/users']) }}">
                <a href="{{ url('/users') }}" class="nav-link">
                    <i class="link-icon fa fa-users"></i>
                    <span class="link-title">User Management</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['forms/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="{{ is_active_route(['forms/*']) }}" aria-controls="forms">
                    <i class="link-icon fa fa-file"></i>
                    <span class="link-title">Forms</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['forms/*']) }}" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/forms/basic-elements') }}" class="nav-link {{ active_class(['forms/basic-elements']) }}">Basic Elements</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/forms/advanced-elements') }}" class="nav-link {{ active_class(['forms/advanced-elements']) }}">Advanced Elements</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['tables/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="{{ is_active_route(['tables/*']) }}" aria-controls="tables">
                    <i class="link-icon fa fa-table"></i>
                    <span class="link-title">Tables</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['tables/*']) }}" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/tables/data-table') }}" class="nav-link {{ active_class(['tables/data-table']) }}">Data Table</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item nav-category">Links</li> --}}
            <li class="nav-item {{ active_class(['general/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#general" role="button" aria-expanded="{{ is_active_route(['general/*']) }}" aria-controls="general">
                    <i class="link-icon fa fa-link"></i>
                    <span class="link-title">Sample Pages</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['general/*']) }}" id="general">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/general/blank-page') }}" class="nav-link {{ active_class(['general/blank-page']) }}">Blank page</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/general/faq') }}" class="nav-link {{ active_class(['general/faq']) }}">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/general/invoice') }}" class="nav-link {{ active_class(['general/invoice']) }}">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/general/pricing') }}" class="nav-link {{ active_class(['general/pricing']) }}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/general/timeline') }}" class="nav-link {{ active_class(['general/timeline']) }}">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/error/404') }}" class="nav-link {{ active_class(['error/404']) }}">404</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['auth/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#auth" role="button" aria-expanded="{{ is_active_route(['auth/*']) }}" aria-controls="auth">
                    <i class="link-icon fa fa-unlock-alt"></i>
                    <span class="link-title">Authentication</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['auth/*']) }}" id="auth">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/auth/login') }}" class="nav-link {{ active_class(['auth/login']) }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/auth/register') }}" class="nav-link {{ active_class(['auth/register']) }}">Register</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
