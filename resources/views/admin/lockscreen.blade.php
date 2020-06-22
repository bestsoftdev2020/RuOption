<!DOCTYPE html>
<html>

<head>
    <title>Lock Screen | MeuAgente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
</head>

<body>
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(../../assets/images/background/login-register.jpg);">        
        <div class="login-box card">
            <div class="card-body">
                <form method="POST" name="screen" class="form-horizontal form-material" id="loginform">
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                    <div class="user-thumb text-center">
                        @if(Sentinel::getUser()->pic)
                            <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="thumbnail"
                                class="img-circle" width="100"/>

                        @elseif(Sentinel::getUser()->gender === "male")
                            <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="img"
                                class="img-circle img-responsive "/>

                        @elseif(Sentinel::getUser()->gender === "female")
                            <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="img"
                                class="img-circle img-responsive "/>

                        @else
                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="img"
                                class="img-circle img-responsive"/>
                        @endif    
                        <h3>{{Sentinel::getUser()->first_name}}</h3>
                    </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                    <input type="password" name="user"  id="password" class="form-control" placeholder="Password" autocomplete="off">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="index" type="submit">Login</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
    </div>
</section>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script>
    $(document).ready(function(){
//            var password = $("#password").val();
        /* var password = $("#pwd").val();
         alert(password);*/
        $('button[type="submit"]').click(function(e) {
            e.preventDefault();
            if ( $("#password").val() == "") {
                $("#output").addClass("alert alert-danger").text('Please enter password');
                setTimeout(function() {
                    $("#output").removeClass("alert alert-danger").text('');
                },3500)
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'lockscreen',
                    data: {password: $("#password").val(), _token: $('meta[name="_token"]').attr('content')},
                    success: function (result) {
                        if (result == 'error') {
                            $("#output").addClass("alert alert-danger").text('You have entered a Wrong Password');
                            setTimeout(function() {
                                $("#output").removeClass("alert alert-danger").text('');
                            },2500)
                        }
                        else {
                            $("#output").addClass("alert alert-success animated fadeInUp user_name_max2").text('Welcome ' + '{!! Sentinel::getUser()->first_name !!}');
                            setTimeout(function(){
                            window.location.href = '../../admin';
                            },1000)
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
<!-- end of page level js-->
</body>
</html>
