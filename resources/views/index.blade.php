@extends('layouts/default')

{{-- Page title --}}
@section('title')
    RuOption | HOME
@stop

@section('phone_number')
    {{$setting->value}}
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@stop

{{-- slider --}}
@section('top')
<div id="overlay" class="viewdetail-overlay"></div>
<section style="padding:0px;">
    <div class="container-fluid main-container-header">
      <div class="container">
        <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-4" style="align-self:center;">
                <p class="text-white"><span>RuOption.com</span> is a Contract for Difference (CFD) based crypto asset margin trading platform.<br>Get the power of professional cryptographic technology combined with an intuitive interface and top level security.<br/></p>
                <button class="btn btn-info btn-top" data-toggle="modal" data-target="#authModal">Get Started</button>
            </div>
            <div class="col-md-8">
                <img src="assets/images/first-back.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row card" data-aos="fade-up" data-aos-delay="100">
            <div class="row table-header">
                <div class="col-md-6" style="padding-left: 32px;">
                    Name
                </div>
                <div class="col-md-2">
                    Last Price
                </div>
                <div class="col-md-2">
                    24h Change
                </div>
                <div class="col-md-2">
                    Markets
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/BTC.png" class="img-coin" alt="">BTC/USD &nbsp;&nbsp;<h2 class="coin-text-right">Bitcoin</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/ETC.png" class="img-coin" alt="">ETH/USD &nbsp;&nbsp;<h2 class="coin-text-right">Ethereum</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/LTC.png" class="img-coin" alt="">LTD/USD &nbsp;&nbsp;<h2 class="coin-text-right">Litecoin</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/XRP.png" class="img-coin" alt="">XRP/USD &nbsp;&nbsp;<h2 class="coin-text-right">Ripple</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/DSH.png" class="img-coin" alt="">DAHS/USD &nbsp;&nbsp;<h2 class="coin-text-right">Dash</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/ZEC.png" class="img-coin" alt="">ZEC/USD &nbsp;&nbsp;<h2 class="coin-text-right">Zcash</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
            <div class="row table-row">
                <div class="col-md-6 coin-text">
                    <img src="assets/images/coins/BCH.png" class="img-coin" alt="">BCH/USD &nbsp;&nbsp;<h2 class="coin-text-right">Bitcoin Cash</h2>
                </div>
                <div class="col-md-2 coin-text">
                    $ 6848
                </div>
                <div class="col-md-2 coin-text-red">
                    -0.45%
                </div>
                <div class="col-md-2 coin-text">
                    <img src="assets/images/coins/graph.png" class="img-coin" alt="">
                </div>
            </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
@stop

{{-- content --}}
@section('content')
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section style="padding:0px; background-color:#f5f7fa;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row no-gutters pt-5">
                        <div class="col-md-12 section-title" data-aos="fade-up" data-aos-delay="100">
                            <h2>Fredom of Trading</h2>
                            <p>Deploy strategies of any level of complexity across<br>various markets and assets</p>
                        </div>
                        <div class="col-md-4 sub-title" data-aos="fade-up" data-aos-delay="100">
                            <h2>Higher percentage of profits and lower percentage of losses.</h2>
                            <img src="assets/images/icon/icon1.png" class="img-icon" alt="">
                            <p>The only Trading platform where the percentages of profits exceed the percentages of losses.</p>
                        </div>
                        <div class="col-md-4 sub-title" data-aos="fade-up" data-aos-delay="100">
                            <h2>Unique access to crypto markets<br>&nbsp;</h2>
                            <img src="assets/images/icon/icon2.png" class="img-icon" alt="">
                            <p>Opportunity to trade in the binary options market with a variety of cryptocurrencies.</p>
                        </div>
                        <div class="col-md-4 sub-title" data-aos="fade-up" data-aos-delay="100">
                            <h2>Advanced, intuitive and easy to use trading interface<br>&nbsp;</h2>
                            <img src="assets/images/icon/icon3.png" class="img-icon" alt="">
                            <p>Satisfactory navigation and trading through a last generation interface and easy to use.</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn btn-info btn-explore" data-toggle="modal" data-target="#authModal">Explore Tools</button>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <section style="padding:0px;">
            <div class="container-fluid main-container-header">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 mb-3 mt-4">
                            <h1 class="text-white text-center" style="font-size:44px;">For all devices</h1>
                        </div>
                        <div class="col platform-title" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center platform-subtitle">
                                <img src="assets/images/windows.png" alt="">
                                <h3>Windows</h3>
                                <small>XP y superior</small>
                            </div>
                        </div>
                        <div class="col  platform-title" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center platform-subtitle">
                                <img src="assets/images/android.png" alt="">
                                <h3>Android</h3>
                                <small>4.4 y superior</small>
                            </div>
                        </div>
                        <div class="col platform-title" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center platform-subtitle">
                                <img src="assets/images/ios.png" alt="">
                                <h3>iOS</h3>
                                <small>8.2 y superior</small>
                            </div>
                        </div>
                        <div class="col platform-title" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center platform-subtitle">
                                <img src="assets/images/mac.png" alt="">
                                <h3>MacOS</h3>
                                <small>Mavericks y superior</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <section style="padding:0px;background-color:#f5f7fa;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row no-gutters" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-md-12 section-title pt-5">
                            <h2>Professional Tools</h2>
                            <p>The power to amplify your gains.<br>Smart tools to manage your risks.</p>
                        </div>
                        <div class="col-md-3 sub-title-pro">
                            <h2>Free technical analysis</h2>
                            <p>Enjoy daily technical analysis shared by our community.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/icon/line-left-up.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-3" style="text-align: right;margin-top: -63px;">
                            <img src="assets/images/icon/line-right-up.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-3 sub-title-pro">
                            <h2>Support with Account Managers</h2>
                            <p>Contact support and get high-quality assistance from professional account managers.</p>
                        </div>
                        <div class="col-md-12 text-center">
                            <img src="assets/images/icon/icon4.png" class="img-fluid" style="width: 230px;margin-top: -25px;" alt="">
                        </div>
                        <div class="col-md-3 sub-title-pro">
                            <h2>Advanced technical analysis instruments</h2>
                            <p>Spot patterns and interpret price movements</p>
                        </div>
                        <div class="col-md-3" style="margin-top: -150px;">
                            <img src="assets/images/icon/line-left-bottom.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-3" style="text-align: right;margin-top: -63px;">
                            <img src="assets/images/icon/line-right-bottom.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-3 sub-title-pro">
                            <h2>Variety of order types</h2>
                            <p>Choose different types of contracts, different periods of time and enjoy the best business style.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <section style="padding:0px;">
            <div class="container-fluid main-container-header">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-5 secondback-title">
                            <h2>We know how important broker quality<br>is to a trader's business success, that's<br>why we offer a high-end trading platform.</h2><br>
                            <p class="text-white">Get your hands on all the tools and test the platform.<br>One click, and you are ready to practice!</p>
                            <button class="btn btn-info btn-explore" data-toggle="modal" data-target="#authModal">Get Started</button>
                        </div>
                        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/images/second-back.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-0">
            <div class="container custom-border pb-5">
                <div class="row no-gutters">
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/list.svg" class="img-trust" alt="">Trusted and regulated<br>&nbsp;</h2>
                        <p>CEX.IO Broker underwent regulatory review and licensing process to operate as investiment from in Europe</p>
                    </div>
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/security.svg" class="img-trust" alt="">Security of your<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;funds and data</h2>
                        <p>We adhere to the highest and strictest strandards of security to protect your funds and your data</p>
                    </div>
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/support.svg" class="img-trust" alt="">5 star 24/7 support<br>&nbsp;</h2>
                        <p>Resolve your issues around the clock with proficient guidance from our highly trained support</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 section-title mt-1" data-aos="fade-up" data-aos-delay="100">
                        <h2>Satisfactory Trade</h2>
                        <p>Carry out your analyzes, map your strategy, control your costs</p>
                    </div>
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/icon5.png" class="img-trust" alt="">Tight spreads</h2>
                        <p>Profit from small movements<br>in the price</p>
                    </div>
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/icon6.png" class="img-trust" alt="">More competitive options</h2>
                        <p>Commercial terms and most advantageous investment options on the market</p>
                    </div>
                    <div class="col-md-4 trust-title" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-1"><img src="assets/images/icon/icon7.png" class="img-trust" alt="">Total transparency</h2>
                        <p>No hidden terms, both in prices and offers. What we advertise is what our customers get</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <section style="padding:0px;">
            <div class="container-fluid main-container-header1" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center" style="align-self:center;">
                            <p style="font-size: 16px;font-family: OpenSans,sans-serif;color: #667c99;margin-top:1rem;">
                                <img src="assets/images/icon/knowledge-chat.svg" class="img-coin" style="height:80px;margin-right:30px;" alt="">
                                    Need more details? Visit our <span style="font-weight:bold;">Knowledge Base</span> to learn about CFDs and how to use
                                <a class="button-knowledge" href="#">Knowledge Base</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="modal fade" id="authModal" role="dialog">
            <div class="modal-dialog" style="min-width:40%;">
                <div class="modal-content">
                    <div class="modal-body p-5" style="padding-bottom: 40px !important;">
                        <div class="row">
                            <h2 class="auth-modal"><img src="assets/images/icon/user-icon-blue.svg" class="img-coin" style="height:24px;margin-right:10px;width:20px;margin-top: -1px;" alt=""> Authorization</h2>   
                        </div>
                        <div class="row">
                            <p class="auth-modal-text">Already have an account? Proceed straight to <a href="{{URL::to('login')}}">Sign In!</a><br>New to Page name? Hit <a href="{{URL::to('register')}}">Register</a> and start using your<br>account in a few easy clicks!</p>
                        </div>
                        <div class="row">
                            <a href="{{URL::to('login')}}" class="btn btn-info btn-explore">Sign In</a>
                            <a href="{{URL::to('register')}}" class="btn btn-info btn-explore">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
<script>
    AOS.init({
        once: true
    })
</script>
@stop
