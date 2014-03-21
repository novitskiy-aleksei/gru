@extends('frontend/layouts/default')

{{-- Page content --}}
@section('content')

<!-- start slider -->
<div class="slider_bg" id="home">
    <div class="wrap">
        <div class="slider">
            <!---start-da-slider----->
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Welcome to our /assetssite</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#about" class="da-link">Find out More</a>
                </div>
                <div class="da-slide">
                    <h2>Clean & Flat Design</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#about" class="da-link">Find out More</a>
                </div>
                <div class="da-slide">
                    <h2>Clean & Flat Design</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#about" class="da-link">Find out More</a>
                </div>
                <div class="da-slide">
                    <h2>Welcome to our /assetssite</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#about" class="da-link">Find out More</a>
                </div>
            </div>
            <!---//End-da-slider----->
        </div>
    </div>
</div>
<!--------about us------------->
<div class="about-grids" id="about">
    <div class="wrap">
        <h3 class="heading" style="padding: 0em">Some Facts About Us</h3>
        <div class="years-grid">
            <a href="#"><img src="/assets/images/info.png"></a>
        </div>

        <div class="one-of-grid">
            <div class="grid_of_1">
                <h4>Company</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
            </div>
            <div class="grid_of_1">
                <h4>Inspiration</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has  when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
            </div>
            <div class="grid_of_1">
                <h4>Our Process</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="map_grid">
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting.</h4>
            <div class="arrow">
                <img src="/assets/images/arrow.png"/>
            </div>
            <div class="map">
                <a href="#contact"><img src="/assets/images/map.png"></a>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!-------end about us---------->
<!-------start-our team-------->
<div class="our_team" id="ourteam">
    <div class="wrap">
        <h3 class="heading">And Here We Go</h3>
        <p class="desc">we are small,but professional team</p>
        <div class="main content_top">
            <!-- start span_of_3 -->
            <div class="span_of_3">
                <div class="span1_of_3">
                    <div>
                        <a href="#"><img src="/assets/images/pic.jpg" alt=""/></a>
                        <div class="span1_of_3_text">
                            <h3><a href="#">Lorem Ipsum is Simply.</a></h3>
                            <h6>UI/UX expertise</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="span1_of_3">
                    <div>
                        <a  href="#"><img src="/assets/images/pic3.jpg" alt=""/></a>
                        <div class="span1_of_3_text">
                            <h3><a  href="#">Lorem Ipsum is Simply.</a></h3>
                            <h6>Sales Manager</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="span1_of_3">
                    <div>
                        <a  href="#"><img src="/assets/images/pic2.jpg" alt=""/></a>
                        <div class="span1_of_3_text">
                            <h3><a  href="#">Lorem Ipsum is Simply.</a></h3>
                            <h6>Art Director</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="span1_of_3">
                    <div>
                        <a href="#"><img src="/assets/images/pic1.jpg" alt=""/></a>
                        <div class="span1_of_3_text">
                            <h3><a href="#">Lorem Ipsum is Simply.</a></h3>
                            <h6>Senior Planer</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>

                <div class="clear"> </div>
            </div>

            <!-- end grids_of_3 -->
        </div>
    </div>
    <div class="wrap">
        <h3 class="heading1">Projects Created:68</h3>
        <p class="desc">And still couting...... </p>
        <div class="list">
            <div class="clearfix">
                <em class="icon-caret-up">0</em>
                <strong>68</strong>
                <span>Lorem ipsum dolor sit!</span>
                <div class="clear"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" style="width:68%"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="wrap">
    <ul id="flexiselDemo3">
        <li><img src="/assets/images/client1.jpg" /></li>
        <li><img src="/assets/images/client6.jpg" /></li>
        <li><img src="/assets/images/client2.jpg" /></li>
        <li><img src="/assets/images/client5.jpg" /></li>
        <li><img src="/assets/images/client4.jpg" /></li>
        <li><img src="/assets/images/client3.jpg" /></li>
        <li><img src="/assets/images/client4.jpg" /></li>
    </ul>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel();
            $("#flexiselDemo2").flexisel({
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {

                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="/assets/js/jquery.flexisel.js"></script>
</div>
<!-------end-our team-------->
<!--------portfolio----------->
<!--start gallery-->
<script type="text/javascript" src="/assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.mixitup.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<!--end home-page-con-->
<div class="latest_wroks" id="portfolio">
    <div class="wrap">
        <h3 class="heading">Latest Works</h3>
        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit.</p>
        <div class="main_btm">
            <!--start-mfp -->
            <div id="small-dialog1" class="mfp-hide">
                <div class="pop_up">
                    <h2>Lorem Ipsum is simply</h2>
                    <img src="/assets/images/pop.jpg">
                    <p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p class="para1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
            <!--end-mfp -->
            <!--start-content-->
            <div class="gallery">
                <div class="container">
                    <div id="gallerylist">
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <img src="/assets/images/31.jpg"  alt="Image 1"/>
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <img src="/assets/images/32.jpg"  alt="Image 1"/>
                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <img src="/assets/images/33.jpg"  alt="Image 1"/>
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="gallerylist1">
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <img src="/assets/images/34.jpg"  alt="Image 1"/>
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <img src="/assets/images/35.jpg"  alt="Image 1"/>

                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallerylist-wrapper">
                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                <img src="/assets/images/36.jpg"  alt="Image 1"/>
                                <span><img src="/assets/images/icon.png" alt=" "/> </span>
                                <div class="desc">
                                    <h2>Lorem Ipsum is simply</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- container -->
            <script type="text/javascript" src="/assets/js/fliplightbox.min.js"></script>
            <script type="text/javascript">$('body').flipLightBox()</script>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!--End-gallery-->
<!--------end-portfolio----------->
<!---------services--------------->
<div class="service" id="service">
    <div class="wrap">
        <h3 class="heading">What We Can?</h3>
        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit.</p>
        <div class="service_grids">
            <div class="ser_grid">
                <div class="s_image">
                    <img src="/assets/images/1.png">
                </div>
                <h3><a href="details.html">Lorem Ipsum is Simply.</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ser_grid">
                <div class="s_image">
                    <img src="/assets/images/2.png">
                </div>
                <h3><a href="details.html">Lorem Ipsum is Simply.</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ser_grid">
                <div class="s_image">
                    <img src="/assets/images/3.png">
                </div>
                <h3><a href="details.html">Lorem Ipsum is Simply.</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ser_grid">
                <div class="s_image">
                    <img src="/assets/images/4.png">
                </div>
                <h3><a href="details.html">Lorem Ipsum is Simply.</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="clear"></div>
        </div>
        <h3 class="heading1">check out our work process</h3>
        <p class="desc">Lorem Ipsum is simply dummy text </p>
        <div class="vedio">
            <iframe src="//player.vimeo.com/video/59808994" width="100%" height="100%" frameborder="0" /assetskitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</div>

@stop
