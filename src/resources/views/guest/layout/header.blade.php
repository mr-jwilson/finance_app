<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description website">
    <meta name="author" content="Maksym Blank">
    <meta name="keywords" content="website, with, meta, tags">
    <meta name="robots" content="noindex, follow">
    <meta name="revisit-after" content="5 month">
    <meta name="image" content="http://mywebsite.com/image.jpg')}}">
    <meta name="og:title" content="Title website">
    <meta name="og:description" content="Description website">
    <meta name="og:image" content="http://mywebsite.com/image.jpg')}}">
    <meta name="og:site_name" content="My Website">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Title website">
    <meta name="twitter:description" content="Description website">


    <link href="{{ asset('css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/nice-select.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" class="color-changing">

    <link href="{{ asset('fonts/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />



</head>

<body class="sigma_header-absolute btn-style-5 btn-rounded sidebar-style-3">


    <!--Section Start-->
    <div class="sigma_top style-4">
        <i class="far fa-angle-double-up"></i>
        <i class="far fa-angle-double-up"></i>
    </div>
    <!--Section End-->


    <script src="{{ asset('js/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Contact form -->
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>


    <script src="{{ asset('js/toast.js') }}"></script>


</body>

</html>

{{-- <script>
    /*-------------------------------------------------------------------------------
            Back to top
    -------------------------------------------------------------------------------*/
    $(document).ready() {

            function stickBackToTop() {
                if (window.pageYOffset > 400) {
                    $('.sigma_top').addClass('active');
                } else {
                    $('.sigma_top').removeClass('active');
                }
            }
            stickBackToTop();

            $('body').on('click', '.sigma_top', function() {
                // $("html, body").animate({
                //     scrollTop: 0
                // }, 600);
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
        }

        <
        script > --}}
