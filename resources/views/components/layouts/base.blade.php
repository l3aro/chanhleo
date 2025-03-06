<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trần Tiến &hearts; Tú Anh - Wedding</title>

    <meta property="og:title" content="" />
    <meta property="og:image" content="{{ asset('preview_pic.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel=icon type=image/png sizes=32x32 href="{{ asset('favicon.png') }}">
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
    
    <!-- justifiedGallery -->
    <link rel="stylesheet" href="{{ asset('landing/css/justifiedGallery.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    
    <!-- lightGallery -->
    <link type="text/css" rel="stylesheet" href="{{ asset('landing/css/lightgallery-bundle.css') }}" />

    <!-- Modernizr JS -->
    <script src="{{ asset('landing/js/modernizr-2.6.2.min.js') }}"></script>

    <!-- Sweet Alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <x-layouts.navigation />

        {{ $slot }}

        <livewire:attending-form />

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2023 Rezonia Team. All Rights Reserved.</small>
                            <small class="block">Made by <a href="https://3ro.rezonia.com/vi"
                                    target="_blank">3ro</a>. Edited by <a href="https://leo.rezonia.com"
                                    target="_blank">Leo</a></small>
                        </p>
                        <p>
                        <!--<ul class="fh5co-social-icons">-->
                        <!--    <li><a href="#"><i class="icon-twitter"></i></a></li>-->
                        <!--    <li><a href="#"><i class="icon-facebook"></i></a></li>-->
                        <!--    <li><a href="#"><i class="icon-linkedin"></i></a></li>-->
                        <!--    <li><a href="#"><i class="icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
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
    <!-- justifiedGallery -->
    <script src="{{ asset('landing/js/jquery.justifiedGallery.js') }}"></script>

    <script src="{{ asset('landing/js/simplyCountdown.js') }}"></script>
    <!-- lightGallery -->
    <script src="{{ asset('landing/js/lightgallery.umd.js') }}"></script>
    <!-- lightgallery plugins -->
    <script src="{{ asset('landing/js/plugins/lg-thumbnail.umd.js') }}"></script>
    <script src="{{ asset('landing/js/plugins/lg-zoom.umd.js') }}"></script>
    
    <!-- Main -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

    <script>
        // default example
        simplyCountdown('.simply-countdown-one', {
            year: 2023,
            month: 2,
            day: 26,
            hour: 17,
        });

        window.addEventListener('attending-success', event => {
            Swal.fire(
                event.detail.title,
                event.detail.content,
                'success'
            )
        })
    </script>
    
    <script type="text/javascript">
        $("#animated-thumbnails-gallery").justifiedGallery({
            captions: false,
            rowHeight: 180,
            margins: 5
          }).on("jg.complete", function () {
                lightGallery(document.getElementById('animated-thumbnails-gallery'), {
                    mousewheel: true,
                    thumbnail: true,
                    plugins: [lgZoom, lgThumbnail],
                });
          });


        const lgContainer = document.getElementById("inline-gallery-container");
        const inlineGallery = lightGallery(lgContainer, {
            container: lgContainer,
            dynamic: true,
            hash: false,
            closable: false,
            showMaximizeIcon: true,
            appendSubHtmlTo: ".lg-item",
            //slideDelay: 400,
            plugins: [lgZoom, lgThumbnail],
            dynamicEl: [
                {
                    src:
                        "{{ asset('storage/upload_images/4S4A2403.JPG') }}",
                    responsive:
                        "{{ asset('storage/upload_images/4S4A2403.JPG') }}",
                    thumb:
                        "{{ asset('storage/upload_images/thumbnail/4S4A2403_thumb.JPG') }}"
                },
                {
                    src:
                        "{{ asset('storage/upload_images/4S4A2410.JPG') }}",
                    responsive:
                        "{{ asset('storage/upload_images/4S4A2410.JPG') }}",
                    thumb:
                        "{{ asset('storage/upload_images/thumbnail/4S4A2410_thumb.JPG') }}"
                },
            ],
            thumbWidth: 60,
            thumbHeight: "40px",
            thumbMargin: 4
        });
        inlineGallery.openGallery();
    </script>
    

    @livewireScripts
</body>

</html>
