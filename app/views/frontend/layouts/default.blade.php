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

    <!-- Notifications -->
    @include('frontend/notifications')

    <!-- Content -->
    @yield('content')

    <!---------contacts-------------->
    <div class="contact" id="contact">
        <h3 class="heading">Find or Contact Us</h3>
        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit.</p>
        <div class="map">
            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#777777;text-align:left;font-size:13px;"></a></small>
        </div>
        <div class="contact-form">
            <div class="wrap">
                <div class="content">
                    <h2 class="heading1">let's get in touch!</h2>
                </div>
                <form method="post" action="#">
                    <div>
                        <input name="userName" type="text" class="textbox" value="Name(Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name(Required)';}">
                        <input name="userEmail" type="text" class="textbox" value="Email(Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email(Required)';}">
                        <input name="userPhone" type="text" class="textbox"  value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                        <div class="clear"> </div>
                    </div>

                    <div>
                        <textarea value="Write Your Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Your Message';}">Message</textarea>
                    </div>
                    <div>
                        <span><input type="submit" class="" value="SEND"></span>
                    </div>
                </form>
            </div>
            <div class="clear"> </div>
        </div>
    </div>

    <hr/>

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
