<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="meuagente" name="description">
    <meta content="meuagente" name="keywords">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
           Ru Option | BLOG
        @show
    </title>
    <!--global css starts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <header id="header" style="height:100px;padding:0px;">
        <div class="container-fluid" style="padding:20px 0px;">
            <div class="row d-flex" style="border-bottom: 1px solid black;">
                <div class="col-md-4 logo float-left pl-5">
                    <h1 class="text-light pt-1"><a href="{{ route('blog_details') }}"><span><img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid"></span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
                </div>

                <div class="col-md-4 text-center blog-title">
                    <img src="assets/images/coins/BTC.png" class="img-coin" alt="">
                    <img src="assets/images/coins/ETC.png" class="img-coin" alt="">
                    <img src="assets/images/coins/LTC.png" class="img-coin" alt="">
                    <img src="assets/images/coins/XRP.png" class="img-coin" alt="">
                    <img src="assets/images/coins/ZEC.png" class="img-coin" alt="">
                </div>

                <div class="col-md-4 logo text-right pr-5" style="position: relative;align-self: center;">
                    <input type="text" name="search" placeholder="Search">
                </div>
            </div>
            <div class="row priceTickerContainer">
                <div class="priceTicker">
                    <div class="symbolContainer" title="Matic Network">
                        <div class="symbol"><span class="symbolName">MATIC</span> $0.02
                            (<span class="positiveChange">2.8%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="UNUS SED LEO">
                        <div class="symbol"><span class="symbolName">LEO</span> $1.06
                        (<span class="negativeChange">-0.16%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Decentraland">
                        <div class="symbol"><span class="symbolName">MANA</span> $0.04
                        (<span class="positiveChange">3.36%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Tether">
                        <div class="symbol"><span class="symbolName">USDT</span> $1.00
                        (<span class="positiveChange">0.04%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Bitcoin">
                        <div class="symbol"><span class="symbolName">BTC</span> $9,865.42
                        (<span class="positiveChange">5.74%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Ethereum">
                        <div class="symbol"><span class="symbolName">ETH</span> $211.64
                        (<span class="positiveChange">2.63%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Litecoin">
                        <div class="symbol"><span class="symbolName">LTC</span> $47.11
                        (<span class="positiveChange">2.45%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="EOS">
                        <div class="symbol"><span class="symbolName">EOS</span> $2.72
                        (<span class="positiveChange">0.72%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Bitcoin Cash">
                        <div class="symbol"><span class="symbolName">BCH</span> $252.98
                        (<span class="positiveChange">3.29%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="XRP">
                        <div class="symbol"><span class="symbolName">XRP</span> $0.22
                        (<span class="positiveChange">0.77%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Bitcoin SV">
                        <div class="symbol"><span class="symbolName">BSV</span> $209.22
                        (<span class="positiveChange">2.35%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Ethereum Classic">
                        <div class="symbol"><span class="symbolName">ETC</span> $7.00
                        (<span class="positiveChange">0.19%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="TRON">
                        <div class="symbol"><span class="symbolName">TRX</span> $0.02
                        (<span class="positiveChange">0.99%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="TrueUSD">
                        <div class="symbol"><span class="symbolName">TUSD</span> $1.00
                        (<span class="positiveChange">0.11%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Paxos Standard">
                        <div class="symbol"><span class="symbolName">PAX</span> $1.00
                        (<span class="positiveChange">0.09%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Neo">
                        <div class="symbol"><span class="symbolName">NEO</span> $9.88
                        (<span class="positiveChange">6.27%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Dash">
                        <div class="symbol"><span class="symbolName">DASH</span> $78.35
                        (<span class="positiveChange">0.84%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="Stellar">
                        <div class="symbol"><span class="symbolName">XLM</span> $0.07
                        (<span class="negativeChange">-0.07%</span>)
                        </div>
                    </div>
                    <div class="symbolContainer" title="USD Coin">
                        <div class="symbol"><span class="symbolName">USDC</span> $1.00
                        (<span class="positiveChange">0.23%</span>)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Header -->
    
    <content>
        <section class="custom-border">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-md-4">
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-catagory" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <a href="{{ route('blog_details') }}">
                                    <img class="image-container" src="{{asset('assets/images/blog_image.png')}}" alt="Hello, World! Introducing CEX.IO Broker">
                                </a>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('blog_details') }}">Hello, World! Introducing CEX.IO Broker</a>
                            </h2>
                            <p class="post-meta">by 
                                <span class="author vcard">
                                    <a href="https://blog.cex.io/author/n-borisovets" title="Posts by Nadya, CEX.IO Product Team" rel="author">Nadya, CEX.IO Product Team</a>
                                </span> | 
                                <span class="published">Jan 30, 2020</span> | 
                                <a href="https://blog.cex.io/news" rel="tag">CEX.IO News</a>, 
                                <a href="https://blog.cex.io/listings" rel="tag">Listings</a>
                            </p>
                            <div class="post-content">
                                <div class="post-content-inner">
                                    <p>Though CEX.IO Broker has been around for a while, its availability in invite-only format did not really allow for proper introductions to the world. Our beta testers - to who we are eternally grateful for being early with us - understood the nature of the margin...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
                    <a class="btn btn-info btn-explore" href="{{route('home')}}">Start Trading</a>
                </div>
                <div class="row d-flex justify-content-center pb-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/icon/double-arrow.svg') }}" class="img-icon" style="height:17px;" alt="">
                </div>
            </div>
        </section>
    </content>
    <!-- Footer Section Start -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <h1><img src="{{ asset('assets/images/logo_white.png') }}" alt="" class="img-fluid" style="width:250px;"></h1>
                    </div>
                    <div class="col-md-2">
                        <h3>Legal</h3>
                        <ul class="pl-0">
                            <li><a>Terms and Conditions</a></li>
                            <li><a>Privacy Notice</a></li>
                            <li><a>Risk Disciosure Statement</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h3>Good to know</h3>
                        <ul class="pl-0">
                            <li><a href="{{ URL::to('aboutus') }}">About Us</a></li>
                            <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                            <li><a href="{{ URL::to('fees') }}">Fees</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Stay in touch</h3>
                        <small>Learn how to apply technical analysis<br>to current market</small>
                        <div class="row mt-3 ml-0">
                            <button class="btn btn-info">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;En&nbsp;</button>
                            <button class="btn btn-info ml-2">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Ru&nbsp;</button>
                            <button class="btn btn-info ml-2">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Es&nbsp;</button>
                        </div>
                        <div class="row mt-3 ml-0">
                            <button class="button-bottombar">Contact Us</button>
                        </div>
                        <div class="row mt-3 ml-0">
                            <img src="assets/images/coins/BTC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/ETC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/LTC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/XRP.png" class="img-coin" alt="">
                            <img src="assets/images/coins/ZEC.png" class="img-coin" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 copyright">
                    &copy; Direito Autoral <strong><span>Ru Option</span></strong>. Todos os direitos reservados
                </div>
                <div class="col-md-4 credits">
                    Desenhado por Ru Option Design Team
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({
            once: true
        })
    </script>
</body>

</html>
