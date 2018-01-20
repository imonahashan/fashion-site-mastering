<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Attire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link  rel="shortcut icon" href="{{ asset('/') }}/front-end/images/fashion2.png" rel="stylesheet"/>
    <link href="{{ asset('/') }}front-end/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}front-end/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}front-end/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="{{ asset('/') }}front-end/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
</head>
<body>
<!-- banner -->
<!-- banner -->
<div class="agileits-banner about-w3banner">
    <div class="bnr-agileinfo">
        <div class="banner-top">
            <div class="container">
                <p><span class="glyphicon glyphicon-earphone"></span> +11 999 8888 7777 </p>
            </div>
        </div>
        <div class="banner-w3text">
            <h2>Attire</h2>
        </div>
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        Menu
                    </button>
                    <h1><a href="index.html">Attire</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-left">
                        <ul class="nav navbar">
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><a href="{{ route('/about-us') }}">About</a></li>
                            <li><a href="{{ route('/gallery') }}">Gallery</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Pages</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('/icons') }}">Icons</a></li>
                                    <li><a href="{{ route('/typo') }}">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="w3ls-bnr-icons social-icon navbar-right">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //navigation -->
    </div>
</div>
<!-- //banner -->
<!-- welcome -->


@yield('body')


<!-- w3-agilesale -->
<div class="w3-agilesale welcome">
    <div class="container">
        <h3 class="agileits-title">FAST AND FREE DELIVERY</h3>
        <p><a href="contact.html">Contact us</a></p>
    </div>
</div>
<!-- //w3-agilesale -->
<!-- subscribe -->
<div class="subscribe wthree-sub">
    <div class="container">
        <h4>Subscribe Now</h4>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Enter your Email..." required="">
            <input type="submit" value="Subscribe">
            <div class="clearfix"> </div>
        </form>
        <div class="w3lsfoter-icons social-icon">
            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
</div>
<!-- //subscribe -->
<!-- copy rights start here -->
<div class="copy-w3right">
    <div class="container">
        <div class="top-nav bottom-w3lnav">
            <ul>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('/about-us') }}">About</a></li>
                <li><a href="{{ route('/gallery') }}">Gallery</a></li>
                <li><a href="{{ route('/icons') }}">Icons</a></li>
                <li><a href="{{ route('/typo') }}">Typography</a></li>
                <li><a href="{{ route('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <p>© 2017 Attire. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!-- //copy right end here -->
<script src="{{ asset('/') }}front-end/js/SmoothScroll.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{ asset('/') }}front-end/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('/') }}front-end/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/') }}front-end/js/bootstrap.js"></script>
</body>
</html>