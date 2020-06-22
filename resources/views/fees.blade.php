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
    <div class="container-fluid container-fees" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">
            <div class="col-md-12 fees-title mt-5 mb-5 ml-0">
                <h2>Fee Schedule</h2>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3 fees-title">
                <h1 class="mb-4">0<small>%</small></h1>
                <p>Deposit Fee</p>
            </div>
            <div class="col-md-3 fees-title">
                <h1 class="mb-4">1<small>%</small></h1>
                <p>Widthdraw Fee</p>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->

<section class="p-0">
    <div class="container-fluid main-container-fees p-0">
      <div class="container">
        <div class="row mt-5 mb-5 fees-text" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
                <h2>Trading</h2>
            </div>
        </div>
        <div class="row card p-4 fees-table" data-aos="fade-up" data-aos-delay="100">
            <div class="row" style="font-weight: 500;height: 50px;font-size: 14px;opacity: 0.7;">
                <div class="col-md-2">
                    #
                </div>
                <div class="col-md-2">
                    Currency Pair
                </div>
                <div class="col-md-2">
                    Open Fee
                </div>
                <div class="col-md-3">
                    Close Fee
                </div>
                <div class="col-md-3">
                    +3 days Fee
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    1
                </div>
                <div class="col-md-2">
                    BTC/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    2
                </div>
                <div class="col-md-2">
                    ETH/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    3
                </div>
                <div class="col-md-2">
                    LTD/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    4
                </div>
                <div class="col-md-2">
                    XRP/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    5
                </div>
                <div class="col-md-2">
                    DAHS/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    6
                </div>
                <div class="col-md-2">
                    ZEC/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
            <div class="row" style="height:50px;">
                <div class="col-md-2">
                    7
                </div>
                <div class="col-md-2">
                    BCH/USD
                </div>
                <div class="col-md-2">
                    0.05%
                </div>
                <div class="col-md-3">
                    -0.45%
                </div>
                <div class="col-md-3">
                    0.03%
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
            <button class="btn btn-info btn-explore" data-toggle="modal" data-target="#authModal">Go to Your Account</button>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
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
