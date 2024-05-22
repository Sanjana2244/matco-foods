<!-- Header START -->
<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a class="side-nav-toggle" href="javascript:void(0);">
                    <i class="ti-view-grid"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="user-profile dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    {{-- <img class="profile-img img-fluid" src="/backend-assets/images/user.jpg" alt=""> --}}
                    <div class="user-info">
                        <span class="name pdd-right-5">Nate Leong</span>
                        <i class="ti-angle-down font-size-10"></i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    {{-- <li>
                        <a href="">
                            <i class="ti-settings pdd-right-10"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="ti-user pdd-right-10"></i>
                            <span>Profile</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="/" target="_blank">
                            <i class="ti-eye pdd-right-10"></i>
                            <span>View Site</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="ti-power-off pdd-right-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Header END -->