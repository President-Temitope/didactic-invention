<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

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

<body class="auth-page">
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
    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
            <!-- Logo Starts -->
            <a class="logo" href="/">
                <img id="logo-user" class="img-responsive" src="img/logo1.png" alt="logo"  style="width: 200px;">
            </a>
            <!-- Logo Ends -->
            <!-- Slider Starts -->
            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item active item-1">
                        <div>
                            <blockquote>
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                                <footer><span>Rawia Chniti</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
            </div>
            <!-- Slider Ends -->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <!-- Logo Starts -->
            <a class="visible-xs" href="/">
                <img id="logo" class="img-responsive mobile-logo" src="{{asset('img/logo1.png')}}" alt="logo" style="width: 250px;">
            </a>
            <!-- Logo Ends -->
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <h2 class="title-head hidden-xs">member <span>login</span></h2>
                        <p class="info-form">Send, receive and securely store your coins in your wallet</p>
                    </div>
                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">login</button>
                            <p class="text-center">don't have an account ? <a href="{{route('register')}}">register now</a>
                        </div>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
            <!-- Copyright Text Starts -->
            <p class="text-center copyright-text">Copyright © @php echo date('Y')@endphp {{config('app.name')}}</p>
            <!-- Copyright Text Ends -->
        </div>
    </div>
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
