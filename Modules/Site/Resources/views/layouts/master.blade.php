<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/skins/blue.css')}}">

    <!-- Live Style Switcher - demo only -->
    <!-- <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" /> -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('css/skins/blue.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleswitcher.css')}}" />

    <!-- Template JS Files -->
    <script src="{{asset('js/modernizr.js')}}"></script>

</head>

<body>
<!-- SVG Preloader Starts -->
<div id="preloader">
    <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
    </div>
</div>
<!-- SVG Preloader Ends -->
<!-- Live Style Switcher Starts - demo only -->
<!-- <div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a id="orange-css" href="#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
            </li>
        </ul>

        <p>BODY SKIN</p>

        <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
        <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

        <hr />

        <p>LAYOUT STYLE</p>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

        <hr />

        <a href="#" class="custom-button purchase">Purchase</a>
        <div id="hideSwitcher">&times;</div>

    </div>
</div> -->
<!-- <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div> -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Wrapper Starts -->
<div class="wrapper">
    <!-- Header Starts -->
    <header class="header">
        <div class="container">
            <div class="row">
                <!-- Logo Starts -->
                <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                    <a href="/">
                    <img id="logo" class="img-responsive" src="http://127.0.0.1:8000/img/logo1.png" alt="logo" style="position: relative; bottom: 7px;">
                        <!-- <img id="logo" class="img-responsive" alt="DAYTRADER.EXCHANGE"> -->
                    </a>
                </div>
                <!-- Logo Ends -->
                <!-- Statistics Starts --> 
                <div class="col-md-7 col-lg-7">
                    <ul class="unstyled bitcoin-stats text-center">
                        <li>
                            <h6>9,450 USD</h6><span>Last trade price</span></li>
                        <li>
                            <h6>+5.26%</h6><span>24 hour price</span></li>
                        <li>
                            <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                        <li>
                            <h6>2,231,775</h6><span>active traders</span></li>
                        <li>
                            <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                            <span>Live Bitcoin price</span>
                        </li>
                    </ul>
                </div>
                <!-- Statistics Ends -->
                <!-- User Sign In/Sign Up Starts -->
                <div class="col-md-3 col-lg-3">
                    <ul class="unstyled user">
                        <li class="sign-in"><a href="{{route('login')}}" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                        <li class="sign-up"><a href="{{route('register')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                    </ul>
                </div>
                <!-- User Sign In/Sign Up Ends -->
            </div>
        </div>
        <!-- Navigation Menu Starts -->
        <nav class="site-navigation navigation" id="site-navigation">
            <div class="container">
                <div class="site-nav-inner">
                    <!-- Logo For ONLY Mobile display Starts -->
                    <a class="logo-mobile" href="/">
                        <img id="logo-mobile" class="img-responsive" src="{{asset('img/logo1.png')}}" alt="">
                    </a>
                    <!-- Logo For ONLY Mobile display Ends -->
                    <!-- Toggle Icon for Mobile Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background: transparent;">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Icon for Mobile Ends -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <!-- Main Menu Starts -->
                        <ul class="nav navbar-nav">
                            <li class="{{ $elementActive == 'home' ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ $elementActive == 'about' ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
                            <li class="{{ $elementActive == 'services' ? 'active' : '' }}"><a href="{{route('services')}}">Services</a></li>
                            <li class="{{ $elementActive == 'plan' ? 'active' : '' }}"><a href="{{route('plan')}}">Pricing</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="register.html">Register page</a></li>
                                    <li><a href="login.html">Login page</a></li>
                                    <li><a href="shopping-cart.html">Shopping cart</a></li>
                                    <li><a href="shopping-checkout.html">shopping checkout</a></li>
                                    <li><a href="faq.html">FAQ page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="503.html">Server Error Page</a></li>
                                    <li><a href="terms-of-services.html">Terms of Services</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li> -->
                            <li class="{{ $elementActive == 'contact' ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                            <!-- Cart Icon Starts -->
                            <!-- <li class="cart"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                            <!-- Cart Icon Starts -->
                            <!-- Search Icon Starts -->
                            <!-- Search Icon Ends -->
                        </ul>
                        <!-- Main Menu Ends -->
                    </div>
                </div>
            </div>
            <!-- Search Input Starts -->

            <!-- Search Input Ends -->
        </nav>
        <!-- Navigation Menu Ends -->
    </header>
    <!-- Header Ends -->
    @yield('content')
<!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Bitcoin</h2>
                            <p class="lead">Open account for free and start trading Bitcoins!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                       @auth
                        <p class="action-btn"><a class="btn btn-primary" href="{{route('dashboard')}}">Goto Dashboard</a></p>
                    @endauth
                        <!-- Call To Action Button Ends -->
                        <!-- Call To Action Button Starts -->
                       @guest
                        <p class="action-btn"><a class="btn btn-primary" href="{{route('register')}}">Register Now</a></p>
                    @endguest
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->
    <!-- Footer Starts -->
    <footer class="footer">
        <!-- Footer Top Area Starts -->
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-sm-4 col-md-2">
                        <h4>Our Company</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('plan')}}">Pricing</a></li>
                                <!-- <li><a href="blog-right-sidebar.html">Blog</a></li> -->
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-sm-4 col-md-2">
                        <h4>Help & Support</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="{{route('terms-and-conditions')}}">Terms of Services</a></li>
                                <!-- <li><a href="404.html">404</a></li> -->
                                <!-- <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li> -->
                                <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-sm-4 col-md-3">
                        <h4>Contact Us </h4>
                        <div class="contacts">
                            <div>
                                <span>DayTrader.Exchange@co.uk</span>
                            </div>
                            <div>
                                <span>00216 21 184 010</span>
                            </div>
                            <div>
                                <span>London, England</span>
                            </div>
                            <div>
                                <span>mon-sat 08am &#x21FE; 05pm</span>
                            </div>
                        </div>
                        <!-- Social Media Profiles Starts -->
                        <div class="social-footer">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social Media Profiles Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-sm-12 col-md-5">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <div>
                                <h5>$198.76B</h5>
                                <span>Market cap</span>
                            </div>
                            <div>
                                <h5>243K</h5>
                                <span>daily transactions</span>
                            </div>
                            <div>
                                <h5>369K</h5>
                                <span>active accounts</span>
                            </div>
                            <div>
                                <h5>127</h5>
                                <span>supported countries</span>
                            </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Supported Payment Cards Logo Starts -->
                        <div class="payment-logos">
                            <h4 class="payment-title">supported payment methods</h4>
                            <img src="{{asset('images/icons/payment/american-express.png')}}" alt="american-express">
                            <img src="{{asset('images/icons/payment/mastercard.png')}}" alt="mastercard">
                            <img src="{{asset('images/icons/payment/visa.png')}}" alt="visa">
                            <img src="{{asset('images/icons/payment/paypal.png')}}" alt="paypal">
                            <img class="last" src="{{asset('images/icons/payment/maestro.png')}}" alt="maestro">
                        </div>
                        <!-- Supported Payment Cards Logo Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
            </div>
        </div>
        <!-- Footer Top Area Ends -->
        <!-- Footer Bottom Area Starts -->
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Copyright Text Starts -->
                        <p class="text-center">Copyright © @php echo date('Y');@endphp {{config('app.name')}} All Rights Reserved |
                            <!-- Copyright Text Ends -->
                            <!-- Created with Love by IT Developer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Ends -->
    </footer>
    <!-- Footer Ends -->
    <!-- Back To Top Starts  -->
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
    <!-- Back To Top Ends  -->

    <!-- Template JS Files -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('js/styleswitcher.js')}}"></script>

</div>
<!-- Wrapper Ends -->
</body>
</html>
