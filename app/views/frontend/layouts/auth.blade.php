<!DOCTYPE HTML>
<html>
<head>
    <title>The aqual /assetssite Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript"  src="/assets/js/menu.js"></script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="/assets/js/move-top.js"></script>
    <script type="text/javascript" src="/assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!---strat-slider---->
    <link rel="stylesheet" type="text/css" href="/assets/css/slider.css" />
    <script type="text/javascript" src="/assets/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay	: true,
                bgincrement	: 450
            });

        });
    </script>
    <!---//strat-slider---->
</head>

<body>
    <!-- start header -->
    <div class="header_bg">
        <div class="wrap">
            <div id="content">
                <header id="topnav">
                    <nav>
                        <ul>
                            <li class="active"><a href="#home" class="scroll">Home</a></li>
                            <li><a href="#about" class="scroll">About</a></li>
                            <li><a href="#ourteam" class="scroll">our team</a></li>
                            <li><a href="#portfolio" class="scroll">portfolio</a></li>
                            <li><a href="#service" class="scroll">Services</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </nav>
                    <h1><a href="index.html"><img src="/assets/images/logo.png"></a></h1>
                    <a href="#" id="navbtn">Nav Menu</a>
                    <div class="clear"> </div>
                </header><!-- @end #topnav -->
            </div>
        </div>
    </div>

    <!---------end-services----------->

    <div class="content-admin" >
        <!-- Content -->
        @yield('content')
    </div>

    <!--------end_contacts----------->
    <div class="footer">
        <div class="footer_top">
            <div class="wrap">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" target="_blank"></a></li>
                        <li><a href="#" target="_blank"></a></li>
                        <li><a href="#" target="_blank"></a></li>
                        <li><a href="#" target="_blank"></a></li>
                        <li><a href="#" target="_blank"></a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="footer_nav">
                    <ul>
                        <li class="active"><a href="#home" class="scroll">Home</a></li>
                        <li><a href="#about" class="scroll" >About</a></li>
                        <li><a href="#ourteam" class="scroll">our team</a></li>
                        <li><a href="#portfolio" class="scroll">portfolio</a></li>
                        <li><a href="#service" class="scroll">Services</a></li>
                        <li><a href="#contact" class="scroll">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <!-- scroll_top_btn -->
            <script type="text/javascript">
                $(document).ready(function() {

                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };


                    $().UItoTop({ easingType: 'easeOutQuart' });

                });
            </script>
            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
            <!--end scroll_top_btn -->
        </div>
        <p class="copy_right">&#169; 2013 Template by<a href="http://w3layouts.com" target="_blank">&nbsp;w3layouts</a> </p>
    </div>

<!-- Javascripts
================================================== -->
</body>
</html>
