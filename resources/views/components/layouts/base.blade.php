<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('landing/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('landing/js/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <x-layouts.navigation />

        {{ $slot }}

        <div id="fh5co-started" class="fh5co-bg"
            style="background-image:url({{ asset('landing/images/img_bg_4.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Are You Attending?</h2>
                        <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" class="btn btn-default btn-block">I am Attending</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://freehtml5.co/"
                                    target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/"
                                    target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('landing/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('landing/js/jquery.waypoints.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('landing/js/jquery.countTo.js') }}"></script>

    <!-- Stellar -->
    <script src="{{ asset('landing/js/jquery.stellar.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/js/magnific-popup-options.js') }}"></script>

    <script src="{{ asset('landing/js/simplyCountdown.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

    <script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>

</body>

</html>