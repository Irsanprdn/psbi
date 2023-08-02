<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PSBI Bangun Daya 1</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/compro/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/compro/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/compro/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/compro/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/compro/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/compro/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/compro/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/login/fonts/icomoon/style.css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/compro/css/style.css?v=1.1" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <!-- ======= Header ======= -->
    @include('inc.header')

    @include('inc.slider')

    @include('inc.socmed')
    
    <main id="main">

        <!-- ======= About Section ======= -->
        @include('inc.about')

        <!-- ======= Services Section ======= -->
        @include('inc.activity')
        <!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        @include('inc.contact')
        <!-- End Contact Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('inc.footer')
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/compro/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/php-email-form/validate.js"></script>    

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/compro/js/main.js"></script>
    <script>
       
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            autoplay:false,
            slidesPerView: "auto",
            // autoplay: {
            //     delay: 3000
            // },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true
            },
            spaceBetween: 50,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>
</body>

</html>