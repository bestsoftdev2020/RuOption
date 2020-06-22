@extends('layouts/default')

{{-- Page title --}}
@section('title')
    RuOption | FEES
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
        <div class="row no-gutters about-title data-aos="fade-up" data-aos-delay="100"">
            <div class="col-md-12">
                <h1>About RuOption.com</h1>
            </div>
            <div class="col-md-12">
                <p class="text-center">Ru Option is a customer-oriented company, which creates new possibilites in the market for the main commercial technologies.</p>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->

<section class="custom-border">
    <div class="container">
        <div class="row no-gutters data-aos="fade-up" data-aos-delay="100"">
            <div class="col-md-12">
                <p class="about-text">At Ru Option, we have thought of everything down to the smallest detail. We provide our clients with the level of service of European brokers. On the road to creating a world-class trading platform, we believe it is our priority to offer the highest quality brokerage services and support. Our mission is to be the trusted brand in our industry, offering transparency and cutting-edge technology.<br><br>
                    Ru Option was founded with the goal of creating a 100% successful digital commerce experience for its clients. Our company is interested in successful and prosperous traders who can create a large volume of trade. We are proud to have helped numerous clients earn income.<br><br>
                    Ru Option was born out of the need to allow market participants to benefit from cryptocurrency price movements up and down. With Ru Option, users can use cryptocurrencies by exchanging CFDs (contracts for difference) and binary options at a loss margin of up to 2%.<br><br>
                    Our collaboration with our clients is completely transparent, while our high-tech service allows operators to see the real image of the global crypto markets and assess their risk objectively. All of this gives us and our clients the highest level of mutual trust and creates a pleasant investment climate at Ru Option.<br><br>
                    Since every investment carries risk, Ru Option wants its clients to make informed decisions, our platform offers a wide range of responsible investment functions.</p>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section class="custom-border">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Advantages of using Ru Option</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon8.png" class="img-icon" alt=""></div>
                <div><h2>High-end</h2><p>Advanced and high-tech trading platform.</p></div>
            </div>
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon9.png" class="img-icon" alt=""></div>
                <div><h2>Major Singles</h2><p>Anyone can become a merchant with our simple platform.</p></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
            <div class="col-md-1" data-aos="fade-up" data-aos-delay="100">
                <div></div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon10.png" class="img-icon" alt=""></div>
                <div><h2>Effective support</h2><p>Satisfactory and highly professional customer service.</p></div>
            </div>
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon11.png" class="img-icon" alt=""></div>
                <div><h2>Loss management</h2><p>The most advantageous binary options are the market. Very low loss margin.</p></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
            <div class="col-md-1" data-aos="fade-up" data-aos-delay="100">
                <div></div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon12.png" class="img-icon" alt=""></div>
                <div><h2>Multiple payment options</h2><p>Recharge your accounts with Bitcoin, Ethereum, Litecoin, Dash, Ripple and more.</p></div>
            </div>
            <div class="col-md-6 about-sub-title" data-aos="fade-up" data-aos-delay="100">
                <div><img src="assets/images/icon/icon13.png" class="img-icon" alt=""></div>
                <div><h2>High speed</h2><p>We offer very fast trade using cutting edge technologies.</p></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
            <div class="col-md-1" data-aos="fade-up" data-aos-delay="100">
                <div></div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="custom-border"></div>
            </div>
        </div>
        <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
            <button class="btn btn-info btn-explore" data-toggle="modal" data-target="#authModal">Get Started</button>
        </div>
        <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/icon/double-arrow.svg" class="img-icon" style="height:17px;" alt="">
        </div>
    </div>
</section><!-- End About Us Section -->
@stop

{{-- content --}}
@section('content')
    <main id="main">    
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
