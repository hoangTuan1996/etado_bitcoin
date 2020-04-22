<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{ route('admin.dashboard') }}">
            <img
                src="{{URL::asset('assets/images/brand/logo-3.png')}}"
                class="header-brand-img light-logo1" alt="logo">
        </a><!-- LOGO -->
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a>
    </div><!--logo-->
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ URL::asset('assets/images/users/10.jpg') }}" alt="user-img" class="avatar-xl rounded-circle">
            </div>
            <div class="user-info">
                <h6 class=" mb-0 text-dark">Admin</h6>
                <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
            </div>
        </div>
    </div><!--info-user-->
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-settings"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-mail"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-user"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-power"></i>
                </a>
            </li>
        </ul>
    </div><!--user-control-->
    <ul class="side-menu">
        <li><h3>Menu</h3></li>
        <li>
            <a class="side-menu__item" href="{{ route('admin.dashboard') }}"><i
                    class="side-menu__icon ti-home"></i><span
                    class="side-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{ route('admin.usersPinetwork.index') }}"><i
                    class="side-menu__icon fa fa-user-circle"></i><span
                    class="side-menu__label">User Pinetwork</span></a>
        </li>
        <li><h3>Tài khoản</h3></li>
        <li>
            <a class="side-menu__item" href="{{ route('admin.users.index') }}"><i
                    class="side-menu__icon ti-user"></i><span
                    class="side-menu__label">Tài khoản</span></a>
        </li>
    </ul>
</aside>
<!--/APP-SIDEBAR-->
