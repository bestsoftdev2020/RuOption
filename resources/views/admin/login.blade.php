<!DOCTYPE html>
<html>

<head>
    <title>ADMIN | LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/login.css') }}" />
    <link href="{{ asset('assets/vendors/iCheck/css/square/blue.css') }}" rel="stylesheet"/>
    <!-- end of page level css -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/pages/dashmix.min.css')}}">
</head>

<body>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('../assets/images/photo19@2x.jpg');">
                <div class="row no-gutters justify-content-center bg-primary-dark-op">
                    <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">

                        <!-- Sign In Block -->
                        <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                            <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                                <!-- Header -->
                                <div class="mb-2 text-center">
                                    <a class="link-fx font-w700 font-size-h1" href=#>
                                        <span class="link-fx font-w700 font-size-h1 text-dark">MEU </span><span class="text-primary">agente</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin" action="{{ route('signin') }}" autocomplete="on" method="post" role="form" id="login_form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        @if ($errors->has('email'))
                                            <span class="help-block" style="padding-bottom: 5px; padding-left: 5px;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" value="{!! old('email') !!}"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                                        <!-- <div class="custom-control custom-checkbox custom-control-primary">
                                            <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" checked/>
                                            <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                        </div> -->
                                        <div class="custom-control custom-checkbox custom-control-primary">
                                            <label>
                                                <input type="checkbox" name="remember-me" id="remember-me" value="remember-me"
                                                    class="square-blue"/>
                                                Keep me logged in
                                            </label>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-hero-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/login.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>