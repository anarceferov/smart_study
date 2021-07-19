<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home_admin')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Smart Study</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="login.html">Login</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'messages') disabled text-success @endif "
                href="{{route('messages.index')}}">
                <i class="far fa-envelope"></i> <span>Messages</span> @if($statusCount) <span
                    class="badge badge-pill badge-danger"> {{$statusCount}} </span> @endif</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'educations') disabled text-success @endif "
                href="{{route('educations.index')}}">
                <i class="fas fa-graduation-cap"></i> <span>Educations</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'successes') disabled text-success @endif "
                href="{{route('successes.index')}}">
                <i class="fas fa-thumbs-up"></i> <span>Successes</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'countries') disabled text-success @endif"
                href="{{route('countries.index')}}">
                <i class="fas fa-globe"></i> <span>Countries</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'services') disabled text-success @endif "
                href="{{route('services.index')}}">
                <i class="fas fa-user-secret"></i> <span>Services</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'courses') disabled text-success @endif "
                href="{{route('courses.index')}}">
                <i class="fas fa-user-graduate"></i> <span>Courses</span></a>
        </li>

        @if(auth()->user()->role =='admin')
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'users') disabled text-success @endif"
                href="{{route('users.index')}}">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
        @endif

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'blogs') disabled text-success @endif "
                href="{{route('blogs.index')}}">
                <i class="far fa-envelope"></i> <span>Blogs</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-gradient-light topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a href="{{route('home')}}" target="target" class="btn btn-outline-primary"><i
                                class="fas fa-arrow-alt-circle-right"></i> Smart Study</a>
                    </li>



                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="btn btn-outline-danger  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i>
                            Settings
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Çıxış
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>