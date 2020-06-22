<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RuOption | REGISTER</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
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
            <div class="wrap-login100">
                <form action="{{ route('register') }}" class="login100-form validate-form" method="POST" id="reg_form">
                    <div class="close-button-right"><a href="{{ route('home') }}"><i class="fa fa-close auth-close"></i></a></div>
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <span class="login100-form-title p-b-43">
                        <a href="#" style="font-size: 38px;font-weight: bold;color: #027fd2;">CREATE AN ACCOUNT</a>
                    </span>
                    
                    <span class="help-block myhelp-block">{{ $errors->first('email', ':message') }}</span>


                   <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="name_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                            <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                                <svg width="14" height="14" viewBox="0 0 16 20" fill="#027fd2">
                                    <path d="M12.2592 9.66439C11.9854 10.005 11.6778 10.3194 11.3245 10.6032C13.3412 11.746 14.7026 13.8944 14.7026 16.3511C14.7026 17.6786 11.7584 18.7184 7.99996 18.7184C4.24146 18.7184 1.29728 17.6786 1.29728 16.3511C1.29728 13.8944 2.65876 11.746 4.67541 10.6032C4.32216 10.3194 4.01455 10.005 3.7407 9.66439C1.49491 11.0654 0 13.5389 0 16.3511C0 17.203 0.472191 18.3903 2.72184 19.2085C4.1251 19.719 5.99958 20 8 20C10.0004 20 11.8749 19.719 13.2782 19.2085C15.5278 18.3903 16 17.203 16 16.3511C15.9999 13.5389 14.505 11.0654 12.2592 9.66439Z"></path>
                                    <path d="M7.99992 10.5088C10.5212 10.5088 12.4626 8.10131 12.4626 5.25444C12.4626 2.40626 10.5202 0 7.99992 0C5.47869 0 3.53722 2.40753 3.53722 5.2544C3.53722 8.10258 5.47971 10.5088 7.99992 10.5088ZM7.99992 1.28155C9.74531 1.28155 11.1653 3.06376 11.1653 5.2544C11.1653 7.44504 9.74531 9.22725 7.99992 9.22725C6.25454 9.22725 4.8345 7.44504 4.8345 5.2544C4.8345 3.06376 6.25454 1.28155 7.99992 1.28155Z"></path>
                                </svg>
                            </div>
                            <input aria-invalid="false" autocomplete="off" id="name" name="name" placeholder="Login" type="text" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="email_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                            <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                                <svg width="14" height="14" viewBox="0 0 16 20" fill="#027fd2">
                                    <path d="M12.8333 0.25H1.16668C0.523223 0.25 0 0.773223 0 1.41668V9.58335C0 10.2268 0.523223 10.75 1.16668 10.75H12.8334C13.4768 10.75 14 10.2268 14 9.58332V1.41668C14 0.773223 13.4768 0.25 12.8333 0.25ZM1.16668 0.833324H12.8334C12.8763 0.833324 12.9142 0.848992 12.9545 0.857852C11.9445 1.78226 8.59532 4.84618 7.42328 5.90217C7.33157 5.98478 7.18375 6.08332 7.00003 6.08332C6.8163 6.08332 6.66848 5.98478 6.57647 5.9019C5.40455 4.84607 2.05518 1.78199 1.0453 0.857906C1.08571 0.849047 1.12366 0.833324 1.16668 0.833324ZM0.583324 9.58332V1.41668C0.583324 1.35953 0.600551 1.30768 0.615973 1.25546C1.38904 1.963 3.72594 4.10085 5.24122 5.47878C3.73086 6.77616 1.39336 8.99232 0.614141 9.73536C0.600387 9.68575 0.583324 9.63725 0.583324 9.58332ZM12.8333 10.1667H1.16668C1.12008 10.1667 1.07866 10.1504 1.03515 10.14C1.84034 9.37245 4.19273 7.14355 5.67654 5.87417C5.86997 6.04964 6.04666 6.20962 6.18595 6.33513C6.42636 6.55219 6.70775 6.66668 7 6.66668C7.29225 6.66668 7.57365 6.55216 7.81375 6.33541C7.95309 6.20984 8.12993 6.04972 8.32346 5.87417C9.80735 7.14341 12.1594 9.37215 12.9648 10.14C12.9213 10.1504 12.88 10.1667 12.8333 10.1667ZM13.4167 9.58332C13.4167 9.63722 13.3996 9.68575 13.3859 9.73536C12.6064 8.99193 10.2691 6.77602 8.7588 5.47881C10.2741 4.10088 12.6107 1.96322 13.384 1.2554C13.3994 1.30763 13.4167 1.3595 13.4167 1.41665V9.58332Z"></path>
                                </svg>
                            </div>
                            <input aria-invalid="false" autocomplete="off" id="email" name="email" placeholder="E-mail" type="email" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="password1_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                            <svg width="14" height="12" viewBox="0 0 11 12" fill="#027fd2">
                                <path d="M8.82353 4.23529V2.47059C8.82198 1.10673 7.7168 0.001551 6.35294 0H4.23529C2.87144 0.001551 1.76626 1.10673 1.76471 2.47059V4.23529C0.790499 4.2365 0.00120635 5.02579 0 6V10.2353C0.00120635 11.2095 0.790499 11.9988 1.76471 12H8.82353C9.79774 11.9988 10.587 11.2095 10.5882 10.2353V6C10.587 5.02579 9.79774 4.2365 8.82353 4.23529ZM2.47059 2.47059C2.4718 1.49638 3.26109 0.707089 4.23529 0.705882H6.35294C7.32715 0.707089 8.11644 1.49638 8.11765 2.47059V4.23529H2.47059V2.47059ZM9.88235 10.2353C9.88235 10.82 9.40826 11.2941 8.82353 11.2941H1.76471C1.17997 11.2941 0.705882 10.82 0.705882 10.2353V6C0.705882 5.41527 1.17997 4.94118 1.76471 4.94118H8.82353C9.40826 4.94118 9.88235 5.41527 9.88235 6V10.2353Z"></path>
                                <path d="M5.64708 7.82968V6.70588C5.64708 6.51097 5.48905 6.35294 5.29414 6.35294C5.09923 6.35294 4.9412 6.51097 4.9412 6.70588V7.82968C4.45504 8.00149 4.16328 8.49868 4.25048 9.0069C4.33768 9.51528 4.77851 9.88666 5.29414 9.88666C5.80977 9.88666 6.2506 9.51528 6.3378 9.0069C6.425 8.49868 6.13324 8.00149 5.64708 7.82968ZM5.29414 9.17647C5.09923 9.17647 4.9412 9.01844 4.9412 8.82353C4.9412 8.62862 5.09923 8.47059 5.29414 8.47059C5.48905 8.47059 5.64708 8.62862 5.64708 8.82353C5.64708 9.01844 5.48905 9.17647 5.29414 9.17647Z"></path>
                            </svg>
                        </div>
                            <input aria-invalid="false" autocomplete="off" id="password1" name="Password1" placeholder="Password" type="password" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="MuiFormControl-root jss1381">
                        <span class="MuiTypography-root jss1380 MuiTypography-caption">*</span>
                        <div id="password2_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss1376 jss1383 MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                            <svg width="14" height="12" viewBox="0 0 11 12" fill="#027fd2">
                                <path d="M8.82353 4.23529V2.47059C8.82198 1.10673 7.7168 0.001551 6.35294 0H4.23529C2.87144 0.001551 1.76626 1.10673 1.76471 2.47059V4.23529C0.790499 4.2365 0.00120635 5.02579 0 6V10.2353C0.00120635 11.2095 0.790499 11.9988 1.76471 12H8.82353C9.79774 11.9988 10.587 11.2095 10.5882 10.2353V6C10.587 5.02579 9.79774 4.2365 8.82353 4.23529ZM2.47059 2.47059C2.4718 1.49638 3.26109 0.707089 4.23529 0.705882H6.35294C7.32715 0.707089 8.11644 1.49638 8.11765 2.47059V4.23529H2.47059V2.47059ZM9.88235 10.2353C9.88235 10.82 9.40826 11.2941 8.82353 11.2941H1.76471C1.17997 11.2941 0.705882 10.82 0.705882 10.2353V6C0.705882 5.41527 1.17997 4.94118 1.76471 4.94118H8.82353C9.40826 4.94118 9.88235 5.41527 9.88235 6V10.2353Z"></path>
                                <path d="M5.64708 7.82968V6.70588C5.64708 6.51097 5.48905 6.35294 5.29414 6.35294C5.09923 6.35294 4.9412 6.51097 4.9412 6.70588V7.82968C4.45504 8.00149 4.16328 8.49868 4.25048 9.0069C4.33768 9.51528 4.77851 9.88666 5.29414 9.88666C5.80977 9.88666 6.2506 9.51528 6.3378 9.0069C6.425 8.49868 6.13324 8.00149 5.64708 7.82968ZM5.29414 9.17647C5.09923 9.17647 4.9412 9.01844 4.9412 8.82353C4.9412 8.62862 5.09923 8.47059 5.29414 8.47059C5.48905 8.47059 5.64708 8.62862 5.64708 8.82353C5.64708 9.01844 5.48905 9.17647 5.29414 9.17647Z"></path>
                            </svg>
                        </div>
                            <input aria-invalid="false" autocomplete="off" id="password2" name="Password2" placeholder="Repeat the password" type="password" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <span class="help-block myhelp-block">{{ $errors->first('password_confirm', ':message') }}</span>

                    <div class="MuiFormControl-root jss638 jss647">
                        <span class="MuiTypography-root jss644 MuiTypography-caption">*</span>
                        <span class="MuiBox-root jss648 jss646">
                            <svg width="10" height="14" viewBox="0 0 10 14" fill="#027fd2">
                                <path d="M5.33333 0C2.76017 0 0.666656 2.09352 0.666656 4.66668C0.666656 5.43914 0.859785 6.20504 1.22693 6.88436L5.07813 13.8496C5.1294 13.9425 5.2271 14 5.33333 14C5.43956 14 5.53726 13.9425 5.58853 13.8496L9.44115 6.88207C9.80687 6.20504 10 5.43911 10 4.66665C10 2.09352 7.90648 0 5.33333 0ZM8.9293 6.60209L5.33333 13.1056L1.73878 6.60466C1.41891 6.01278 1.25001 5.34259 1.25001 4.66668C1.25001 2.41508 3.08176 0.583352 5.33333 0.583352C7.58489 0.583352 9.41665 2.41511 9.41665 4.66668C9.41665 5.34256 9.24775 6.01278 8.9293 6.60209Z"></path>
                                <path d="M5.33333 2.33332C4.04675 2.33332 3.00001 3.38007 3.00001 4.66664C3.00001 5.95325 4.04675 7 5.33333 7C6.61991 7 7.66666 5.95325 7.66666 4.66667C7.66666 3.38009 6.61991 2.33332 5.33333 2.33332ZM5.33333 6.41667C4.36832 6.41667 3.58333 5.63169 3.58333 4.66667C3.58333 3.70166 4.36832 2.91667 5.33333 2.91667C6.29835 2.91667 7.08333 3.70166 7.08333 4.66667C7.08333 5.63166 6.29835 6.41667 5.33333 6.41667Z"></path>
                            </svg>
                        </span>
                        <div class="MuiFormControl-root MuiTextField-root jss645">
                            <div id="country_container" class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl">
                                <div class="form-group country-group">
                                    <select class="form-control country-select" id="sel_country">
                                        @foreach($country as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="MuiFormControl-root jss583 jss589">
                        <span class="MuiTypography-root jss588 MuiTypography-caption">*</span>
                        <div id="phone_container" class="MuiInputBase-root MuiInput-root MuiInput-underline jss584 jss591 Mui-error Mui-error MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart">
                            <div class="MuiInputAdornment-root jss572 MuiInputAdornment-positionStart">
                                <svg width="14" height="14" viewBox="0 0 8 14" fill="#027fd2" class="jss571">
                                    <path d="M5.13334 0.699997H2.80002C2.67123 0.699997 2.56669 0.804532 2.56669 0.93332C2.56669 1.06211 2.67123 1.16664 2.80002 1.16664H5.13334C5.26213 1.16664 5.36667 1.06211 5.36667 0.93332C5.36667 0.804532 5.26213 0.699997 5.13334 0.699997Z"></path>
                                    <path d="M6.76667 0.699997H6.53334C6.40456 0.699997 6.30002 0.804532 6.30002 0.93332C6.30002 1.06211 6.40456 1.16664 6.53334 1.16664H6.76667C6.89546 1.16664 6.99999 1.06211 6.99999 0.93332C6.99999 0.804532 6.89546 0.699997 6.76667 0.699997Z"></path>
                                    <path d="M4.25646 11.9H3.6771C3.3222 11.9 3.03334 12.1889 3.03334 12.5438V12.6565C3.03334 13.0114 3.3222 13.3 3.67688 13.3H4.25624C4.61113 13.3 4.89999 13.0114 4.89999 12.6565V12.5438C4.89999 12.1889 4.61113 11.9 4.25646 11.9ZM4.43334 12.6565C4.43334 12.754 4.35402 12.8333 4.25648 12.8333H3.6771C3.57934 12.8333 3.49999 12.754 3.49999 12.6565V12.5438C3.49999 12.446 3.57932 12.3666 3.6771 12.3666H4.25624C4.35402 12.3666 4.43334 12.446 4.43334 12.5438V12.6565Z"></path>
                                    <path d="M7.09007 0H0.8435C0.378465 0 0 0.378465 0 0.8435V13.1565C0 13.6215 0.378465 14 0.8435 14H7.08982C7.55486 14 7.93332 13.6215 7.93332 13.1567V0.8435C7.93335 0.378465 7.55489 0 7.09007 0ZM7.46668 13.1565C7.46668 13.3642 7.29775 13.5333 7.09007 13.5333H0.8435C0.635606 13.5333 0.466676 13.3641 0.466676 13.1567V0.8435C0.466676 0.635824 0.635606 0.466676 0.8435 0.466676H7.08982C7.29772 0.466676 7.46665 0.635852 7.46665 0.8435L7.46668 13.1565Z"></path>
                                    <path d="M7.7 1.39999H0.233347C0.104558 1.39999 2.30869e-05 1.50453 2.30869e-05 1.63332V11.4333C2.30869e-05 11.5621 0.104558 11.6666 0.233347 11.6666H7.70002C7.82881 11.6666 7.93335 11.5621 7.93335 11.4333V1.63332C7.93335 1.50453 7.82881 1.39999 7.7 1.39999ZM7.46667 11.2H0.466672V1.86667H7.46667V11.2Z"></path>
                                </svg>
                                <p class="MuiTypography-root nowrap MuiTypography-body2 MuiTypography-colorSecondary">93</p>
                            </div>
                            <input aria-invalid="true" autocomplete="off" id="phone" name="phone" type="text" class="MuiInputBase-input MuiInput-input MuiInputBase-inputSelect MuiInputBase-inputAdornedStart" value="">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="container-login100-form-btn">
                        <button type="submit" id="sign_btn" class="login100-form-btn" disabled>
                            Sign Up
                        </button>
                    </div>
    
                </form>

                <div class="login100-more">
                    <div style="position: relative;top: 30%;">
                        <img src="assets/images/logo.png" class="img-fluid login100-img" alt=""><br>
                        <span class="login100-span">Have an account?</span><br><br>
                        <a href="{{ route('login') }}" class="login100-a">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--global js starts-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/login_main.js') }}"></script>
<!--global js end-->
</body>
</html>
