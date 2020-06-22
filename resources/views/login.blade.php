<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RuOption | LOGIN</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
</head>
<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100-login">
                <form action="{{ route('login') }}" class="login100-form validate-form" method="POST">
                    <div class="close-button"><a href="{{ route('home') }}"><i class="fa fa-close auth-close"></i></a></div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <span class="login100-form-title p-b-43">
                        <a href="#" style="font-size: 38px;font-weight: bold;color: #027fd2;">AUTHORIZATION</a>
                    </span>
                    <span class="help-block myhelp-block">{{ $errors->first('email', ':message') }}</span>

                    <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="email_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                            <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                                <svg width="14" height="14" viewBox="0 0 16 20" fill="#027fd2">
                                    <path d="M12.2592 9.66439C11.9854 10.005 11.6778 10.3194 11.3245 10.6032C13.3412 11.746 14.7026 13.8944 14.7026 16.3511C14.7026 17.6786 11.7584 18.7184 7.99996 18.7184C4.24146 18.7184 1.29728 17.6786 1.29728 16.3511C1.29728 13.8944 2.65876 11.746 4.67541 10.6032C4.32216 10.3194 4.01455 10.005 3.7407 9.66439C1.49491 11.0654 0 13.5389 0 16.3511C0 17.203 0.472191 18.3903 2.72184 19.2085C4.1251 19.719 5.99958 20 8 20C10.0004 20 11.8749 19.719 13.2782 19.2085C15.5278 18.3903 16 17.203 16 16.3511C15.9999 13.5389 14.505 11.0654 12.2592 9.66439Z"></path>
                                    <path d="M7.99992 10.5088C10.5212 10.5088 12.4626 8.10131 12.4626 5.25444C12.4626 2.40626 10.5202 0 7.99992 0C5.47869 0 3.53722 2.40753 3.53722 5.2544C3.53722 8.10258 5.47971 10.5088 7.99992 10.5088ZM7.99992 1.28155C9.74531 1.28155 11.1653 3.06376 11.1653 5.2544C11.1653 7.44504 9.74531 9.22725 7.99992 9.22725C6.25454 9.22725 4.8345 7.44504 4.8345 5.2544C4.8345 3.06376 6.25454 1.28155 7.99992 1.28155Z"></path>
                                </svg>
                            </div>
                            <input aria-invalid="false" autocomplete="off" id="email" name="email" placeholder="Login or E-mail" type="text" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="password_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                            <svg width="14" height="12" viewBox="0 0 11 12" fill="#027fd2">
                                <path d="M8.82353 4.23529V2.47059C8.82198 1.10673 7.7168 0.001551 6.35294 0H4.23529C2.87144 0.001551 1.76626 1.10673 1.76471 2.47059V4.23529C0.790499 4.2365 0.00120635 5.02579 0 6V10.2353C0.00120635 11.2095 0.790499 11.9988 1.76471 12H8.82353C9.79774 11.9988 10.587 11.2095 10.5882 10.2353V6C10.587 5.02579 9.79774 4.2365 8.82353 4.23529ZM2.47059 2.47059C2.4718 1.49638 3.26109 0.707089 4.23529 0.705882H6.35294C7.32715 0.707089 8.11644 1.49638 8.11765 2.47059V4.23529H2.47059V2.47059ZM9.88235 10.2353C9.88235 10.82 9.40826 11.2941 8.82353 11.2941H1.76471C1.17997 11.2941 0.705882 10.82 0.705882 10.2353V6C0.705882 5.41527 1.17997 4.94118 1.76471 4.94118H8.82353C9.40826 4.94118 9.88235 5.41527 9.88235 6V10.2353Z"></path>
                                <path d="M5.64708 7.82968V6.70588C5.64708 6.51097 5.48905 6.35294 5.29414 6.35294C5.09923 6.35294 4.9412 6.51097 4.9412 6.70588V7.82968C4.45504 8.00149 4.16328 8.49868 4.25048 9.0069C4.33768 9.51528 4.77851 9.88666 5.29414 9.88666C5.80977 9.88666 6.2506 9.51528 6.3378 9.0069C6.425 8.49868 6.13324 8.00149 5.64708 7.82968ZM5.29414 9.17647C5.09923 9.17647 4.9412 9.01844 4.9412 8.82353C4.9412 8.62862 5.09923 8.47059 5.29414 8.47059C5.48905 8.47059 5.64708 8.62862 5.64708 8.82353C5.64708 9.01844 5.48905 9.17647 5.29414 9.17647Z"></path>
                            </svg>
                        </div>
                            <input aria-invalid="false" autocomplete="off" id="password" name="password" placeholder="Password" type="password" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                        <span><a>Forget your password?</a></span>
                    </div>
                </form>

                <div class="login100-more">
                    <div style="position: relative;top: 30%;">
                        <img src="assets/images/logo.png" class="img-fluid login100-img" alt=""><br>
                        <span class="login100-span">Don't have an account?</span><br><br>
                        <a href="{{ route('register') }}" class="login100-a">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--global js starts-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/login_main.js') }}"></script>
</body>
</html>
