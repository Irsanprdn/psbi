<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PSBI Bangun Daya 1 - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/compro/img/logo.png" rel="icon">
    <link href="{{ asset('assets') }}/compro/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <link href="{{ asset('assets') }}/compro/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@yield('style')

<body>

    <!-- ======= Header ======= -->
    @include('inc.header')

    @include('inc.slider')


    <div id="social-media">
        <div class="row">
            <!-- Start contact icon column -->
            <a href="#" class="col-md-4">
                <div class="contact-icon text-center">
                    <div class="single-icon mt-3">
                        <i class="bi bi-instagram"></i>
                        <p>
                            Instagram<br>
                        </p>
                    </div>
                </div>
            </a>
            <!-- Start contact icon column -->
            <a href="#" class="col-md-4">
                <div class="contact-icon text-center">
                    <div class="single-icon mt-3">
                        <i class="bi bi-facebook"></i>
                        <p>
                            Facebook<br>
                        </p>
                    </div>
                </div>
            </a>
            <!-- Start contact icon column -->
            <a href="#" class="col-md-4">
                <div class="contact-icon text-center">
                    <div class="single-icon mt-3">
                        <i class="bi bi-whatsapp"></i>
                        <p>
                            Whatsapp<br>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <main id="main">

        <!-- ======= About Section ======= -->
        @include('inc.about')

        <!-- ======= Services Section ======= -->
        <div id="activity" class="services-area">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2 class="mb-3">AKTIFITAS</h2>
                        </div>
                    </div>
                </div>

                <!-- Swiper -->
                <div class="d-flex justify-content-center align-items-center" id="swipers">


                    <div class="container">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active">
                                    <img src="{{ asset('assets') }}/compro/img/swiper/sw1.png" alt="">
                                    <!-- <div class="info">
                                        <h4 class="name">
                                            Giratina
                                        </h4>
                                        <span class="type">
                                            Ghost, Dragon
                                        </span>
                                    </div> -->
                                </div>
                                <div class="swiper-slide swiper-slide-active">
                                    <img src="{{ asset('assets') }}/compro/img/swiper/sw2.png" alt="">
                                    <!-- <div class="info">
                                        <h4 class="name">
                                            Rayquaza
                                        </h4>
                                        <span class="type">
                                            Dragon, Flying
                                        </span>
                                    </div> -->
                                </div>
                                <div class="swiper-slide swiper-slide-active">
                                    <img src="{{ asset('assets') }}/compro/img/swiper/sw3.png" alt="">
                                    <!-- <div class="info">
                                        <h4 class="name">
                                            Kyrum
                                        </h4>
                                        <span class="type">
                                            Dragon, Ice
                                        </span>
                                    </div> -->
                                </div>                               
                            </div>
                            <!-- If we need pagination -->
                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner py-5">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2 class="mb-3">KONTAK & ALAMAT</h2>
                            </div>
                        </div>
                    </div>
                    <div id="dinsos" class="dinsos-area" style="background-image: url(public/assets/compro/img/dinsos.png)">
                        <div class="container" style="position: relative;">
                            <div class="row pt-5">
                                <!-- Start Google Map -->
                                <div class="col-md-4 offset-md-4">
                                    <div class="text-center mb-5">
                                        <h5><a href="#" class="text-dark text-link">Dinas Sosial Provinsi DKI Jakarta</a></h5>
                                        <p>Jl. Gunung Sahari II No.6, RT.13/RW.7, Gn. Sahari
                                            Sel., Kec. Kemayoran, Kota Jakarta Pusat,
                                            Daerah Khusus Ibukota Jakarta 10610 </p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <h5>Suku Dinas Sosial Wilayah Jakarta</h5>
                                        <a href="#" class="text-dark text-link">Dinas Sosial Wilayah Jakarta </a><br><br>
                                        <a href="#" class="text-dark text-link">Kantor Walikota Adminstrasi Jakarta Pusat</a><br><br>
                                        <a href="#" class="text-dark text-link">Kantor Walikota Adminstrasi Jakarta Barat</a><br><br>
                                        <a href="#" class="text-dark text-link">Kantor Walikota Adminstrasi Jakarta Selatan</a><br><br>
                                        <a href="#" class="text-dark text-link">Kantor Walikota Adminstrasi Jakarta Timur </a><br><br>
                                        <a href="#" class="text-dark text-link">Kantor Walikota Adminstrasi Jakarta Utara</a><br>
                                    </div>
                                    <div class="text-center mb-5">
                                        <h5><a href="#" class="text-dark text-link">Dinas Sosial Provinsi DKI Jakarta</a></h5>
                                        <p>Jl. Gunung Sahari II No.6, RT.13/RW.7, Gn. Sahari
                                            Sel., Kec. Kemayoran, Kota Jakarta Pusat,
                                            Daerah Khusus Ibukota Jakarta 10610 </p>
                                    </div>
                                </div>
                                <!-- End Google Map -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">

                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <div class="d-flex justify-content-start">
                                        <a href="#"><img src="{{ asset('assets') }}/compro/img/logo.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-7">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Kontak & Alamat</h4>
                                <div class="footer-contacts">
                                    <p><span class="bi bi-geo-alt"></span> Jl. Kembangan Raya No.2 Kebon Jeruk Jakarta Barat 11530</p>
                                    <p><span class="bi bi-facebook"></span> Psbi Bangun Daya 1</p>
                                    <p><span class="bi bi-instagram"></span> @psbibangundaya.1</p>
                                    <p><span class="bi bi-whatsapp"></span> 085777564256</p>
                                    <p><span class="bi bi-envelope"></span> psbikedoya1@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-2">
                        <div class="footer-content">
                            <div class="footer-head text-right">
                                <h4>Konten</h4>
                                <div class="flicker-img">
                                    <ul>
                                        <li class="my-3"><a class="scrollto" href="{{ asset('assets') }}/compro/#hero">Beranda</a></li>
                                        <li class="my-3"><a class="scrollto" href="{{ asset('assets') }}/compro/#about">Tentang Kami</a></li>
                                        <li class="my-3"><a class="scrollto" href="{{ asset('assets') }}/compro/#activity">Aktifitas</a></li>
                                        <li class="my-3"><a class="scrollto" href="{{ asset('assets') }}/compro/#contact">Kontak</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0" style="border-color: #0D2A64;">
            </div>
        </div>

        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright">
                            <p>
                                © Copyright 2023 by Panti Sosial Bina Indan Bangun Daya . All right reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/compro/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/compro/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assets') }}/highcharts/highcharts.js"></script>
    <script src="{{ asset('assets') }}/highcharts/highcharts.js"></script>
    <script src="{{ asset('assets') }}/highcharts/sankey.js"></script>
    <script src="{{ asset('assets') }}/highcharts/organization.js"></script>
    <script src="{{ asset('assets') }}/highcharts/exporting.js"></script>
    <script src="{{ asset('assets') }}/highcharts/accessibility.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/compro/js/main.js"></script>
    <script>
        Highcharts.chart('container-chart-organization', {
            chart: {
                height: 250,
                inverted: true,
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },

            title: {
                text: ''
            },

            accessibility: {
                point: {
                    descriptionFormat: '{add index 1}. {toNode.name}' +
                        '{#if (ne toNode.name toNode.id)}, {toNode.id}{/if}, ' +
                        'reports to {fromNode.id}'
                }
            },

            series: [{
                type: 'organization',
                name: 'Highsoft',
                keys: ['from', 'to'],
                data: [
                    ['Kepala Panti', 'KA. Sub. Bagian Tata Usaha'],
                    ['Kepala Panti', 'Satpel Pembinaan Sosial'],
                    ['Kepala Panti', 'Satpel Pelayanaan Sosial'],
                    ['Kepala Panti', 'Sub. Kelompok Jabatan Fungsional'],
                ],
                levels: [{
                    level: 0,
                    color: '#0D2A64',
                    dataLabels: {
                        color: 'white'
                    },
                    height: 25
                }, {
                    level: 1,
                    color: '#0D2A64',
                    dataLabels: {
                        color: 'white'
                    },
                    height: 25
                }, {
                    level: 2,
                    color: '#0D2A64',
                    dataLabels: {
                        color: 'white'
                    },
                }, {
                    level: 4,
                    color: '#0D2A64',
                    dataLabels: {
                        color: 'white'
                    },
                }],
                nodes: [{
                    id: 'Kepala Panti',
                    level: 0
                }, {
                    id: 'KA. Sub. Bagian Tata Usaha',
                    level: 1
                }, {
                    id: 'CEO',
                    title: 'CEO',
                    name: 'Atle Sivertsen',
                    color: '#0D2A64'
                }, {
                    id: 'HR',
                    title: 'CFO',
                    name: 'Anne Jorunn Fjærestad',
                    color: '#0D2A64'
                }, {
                    id: 'CTO',
                    title: 'CTO',
                    name: 'Christer Vasseng',
                    color: '#0D2A64'
                }, {
                    id: 'CPO',
                    title: 'CPO',
                    name: 'Torstein Hønsi',
                    color: '#0D2A64'
                }, {
                    id: 'CSO',
                    title: 'CSO',
                    name: 'Anita Nesse',
                    color: '#0D2A64'

                }, {
                    id: 'Product',
                    name: 'Product developers'
                }, {
                    id: 'Web',
                    name: 'Web devs, sys admin'
                }, {
                    id: 'Sales',
                    name: 'Sales team'
                }, {
                    id: 'Market',
                    name: 'Marketing team',
                    column: 5
                }],
                colorByPoint: false,
                color: '#ffffff',
                dataLabels: {
                    color: 'white'
                },
                borderColor: 'white',
                nodeWidth: 65
            }],
            tooltip: {
                outside: true
            },
            exporting: {
                buttons: {
                    contextButton: {
                        enabled: false
                    },
                },
                allowHTML: false,
                sourceWidth: 800,
                sourceHeight: 600
            }

        });

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