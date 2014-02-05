<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8"/>
    <title>
        @section('title')
        Bootstrap
        @show
    </title>
    <link rel="image_src" href="/images/notify_better_image.png"/>

    <meta content="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" property="og:url"/>
    <meta content="http://www.thepetedesign.com/images/onepage_scroll_image.png" property="og:image"/>
    <link rel="shortcut icon" id="favicon" href="favicon.png">
    <meta name="author" content="Pete R.">
    <link rel="canonical" href="http://www.thepetedesign.com/demos/onepage_scroll_demo.html"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('assets/css/onepage-scroll.css') }}">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="{{ asset('assets/js/jquery.onepage-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <meta name="viewport"
          content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">

</head>

<body>
    <div class="main">

        <section class="page1">
            <div class="page_container">
                <h1>One Page Scroll</h1>

                <h2>Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin</h2>

                <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a
                        href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>

                <div class="btns">
                    <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
                </div>
            </div>
            <img src="/assets/img/phones.png" alt="phones">
        </section>

        <section class="page2">
            <div class="page_container">
                <h1>Ready-to-use plugin</h1>

                <h2>All you need is an HTML markup, call the script and BAM!</h2>
                <code class="html">
                    &lt;div class="main"&gt;<br>
                    &lt;section&gt;...&lt;/section&gt;<br>
                    &lt;section&gt;...&lt;/section&gt;<br>
                    ...<br>
                    &lt;/div&gt;
                </code>

                <code class="js">
                    $(".main").onepage_scroll();
                </code>
            </div>
        </section>

        <section class="page3">
            <div class="page_container">
                <h1>Pretty Neat Eh?</h1>

                <h2>You can customise the animation timing, the selector or even the animation easing using CSS3. I
                    can't wait to see what you guys will come up with. Don't forget to grab them for free on
                    Github'</h2>

                <div class="btns">
                    <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
                </div>
            </div>
        </section>
    </div>
    <a class="back" href="http://www.thepetedesign.com/#design">Back to The Pete Design</a>
    <a href="https://github.com/peachananr/onepage-scroll"><img style="position: absolute; top: 0; right: 0; border: 0;"
                                                                src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"
                                                                alt="Fork me on GitHub"></a>

    <!-- Notifications -->
    @include('frontend/notifications')

    <!-- Content -->
    @yield('content')

    <hr/>

    <!-- Footer -->
    <footer>
        <p>&copy; Company {{ date('Y') }}</p>
    </footer>

<!-- Javascripts
================================================== -->
</body>
</html>
