<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | DASHBOARD
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="meuagente">
    <!-- global css -->

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    
    <!-- font Awesome -->

    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
            <!--end of page level css-->

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('admin') }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="{{ asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Sentinel::getUser()->pic)
                                    <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="user" class="profile-pic" />

                                @elseif(Sentinel::getUser()->gender === "male")
                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="user" class="profile-pic" />

                                @elseif(Sentinel::getUser()->gender === "female")
                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="user" class="profile-pic" />

                                @else
                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="user" class="profile-pic" />
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                @if(Sentinel::getUser()->pic)
                                                    <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="user"/>

                                                @elseif(Sentinel::getUser()->gender === "male")
                                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="user">

                                                @elseif(Sentinel::getUser()->gender === "female")
                                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="user">

                                                @else
                                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="user">
                                                @endif
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</h4>
                                                <p class="text-muted">{{ Sentinel::getUser()->email }}</p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li><a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}"><i class="ti-lock"></i> Lock</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-br"></i> Brazil</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ch"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img">
                        @if(Sentinel::getUser()->pic)
                            <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="user" />

                        @elseif(Sentinel::getUser()->gender === "male")
                            <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="user" />

                        @elseif(Sentinel::getUser()->gender === "female")
                            <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="user" />

                        @else
                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="user" />
                        @endif 
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}" class="dropdown-item"><i class="ti-lock"></i> Lock</a>
                            <div class="dropdown-divider"></div> <a href="{{ URL::to('admin/logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <div class="nav_icons">
                        <br>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    @include('admin.layouts._left_menu')
                    <!-- END SIDEBAR MENU -->
                </nav>
            </div>

            <div class="sidebar-footer">
                <!-- item-->
                <a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}" class="link" data-toggle="tooltip" title="Lock"><i class="mdi mdi-lock"></i></a>
                <!-- item-->
                <a href="{{ URL::to('admin/logout') }}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>
        <div class="page-wrapper">

            <!-- Notifications -->
            <div id="notific">
            @include('notifications')
            </div>

                    <!-- Content -->
            @yield('content')
        </div>
        
    </div>
<!-- global js -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAtvyRkcZhDklD0VJgk_q-33_KGqOjnaqU&sensor=false&libraries=places"></script>

<!-- begin page level js -->
@yield('footer_scripts')
        <!-- end page level js -->
</body>
</html>
