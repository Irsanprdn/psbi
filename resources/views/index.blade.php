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
    <link href="{{ asset('assets') }}/compro/css/style.css?v=1.2" rel="stylesheet">

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

    <div id="konten-satu">
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
    </div>
    <div id="konten-dua" class="d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="my-3">
                        <p class="text-base font-weight-bold mb-0"> Status</p>
                        @foreach( $dataStatus as $ds )
                        <div class="form-check">
                            <input class="form-check-input status-checkbox" type="checkbox" value="{{ $ds->data_name }}" data-id="status" id="{{ $ds->data_name }}" onclick="selectOnlyThis(this)">
                            <label class="form-check-label" for="{{ $ds->data_name }}">
                                {{ $ds->data_name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="my-3">
                        <p class="text-base font-weight-bold mb-0"> Hasil Jangkauan</p>
                        @foreach( $dataHJ as $dhj )
                        <div class="form-check">
                            <input class="form-check-input hasil-jangkauan-checkbox" type="checkbox" value="{{ $dhj->data_name }}" data-id="hasil-jangkauan" id="{{ $dhj->data_name }}" onclick="selectOnlyThis(this)">
                            <label class="form-check-label" for="{{ $dhj->data_name }}">
                                {{ $dhj->data_name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9">
                    @foreach( $data as $d )
                    @php

                    $default = ENV('ASSET_URL')."/assets/compro/img/user.png";
                    $foto = 'https://drive.google.com/uc?export=view&id='. $d->foto;
                    $foto = ( $d->foto == '' ? $default : $foto );
                    @endphp
                    <div class="card shadow my-3">
                        <div class="card-body" style="padding: 2rem;">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ $foto }}" alt="Foto {{ $d->nama }}" class="rounded img-pencarian">
                                </div>
                                <div class="col-md-6">
                                    <p class="text-base font-weight-bold mb-0"> {{$d->nama}} </p>
                                    <div style="font-size: 11px; line-height:20px; font-weight:bold;">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Umur
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->umur}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Tanggal Masuk
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{ date('d M Y',strtotime($d->tanggal_masuk)) }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Asal
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->asal}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Domisili
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->domisili}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Alamat Domisili
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->alamat }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Hasil Jangkauan
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->hjNm }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                Status
                                            </div>
                                            <div class="col-md-8 col-7">
                                                : &nbsp; {{$d->statusNm }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 px-0">
                                    <div class="accordion" id="accordion{{ $d->nomor_panti}}">
                                        <div class="accordion-item">
                                            <p class="accordion-header bg-light text-base text-center" id="heading{{ $d->nomor_panti }}" style="margin-top:-30px;">
                                                <a class="px-2 py-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $d->nomor_panti }}" aria-expanded="false" aria-controls="collapse{{ $d->nomor_panti }}" style="font-size:13px;">
                                                    Keterangan Tambahan
                                                </a>
                                            </p>
                                            <div id="collapse{{ $d->nomor_panti }}" class="accordion-collapse collapse bg-light" aria-labelledby="heading{{ $d->nomor_panti }}" data-bs-parent="#accordion{{ $d->nomor_panti}}" style="font-size:12px;">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-4 col-5 px-0">
                                                            J. Kelamin
                                                        </div>
                                                        <div class="col-md-8 col-7 px-0">
                                                            : &nbsp; {{$d->jkNm }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-5 px-0">
                                                            Klasifikasi
                                                        </div>
                                                        <div class="col-md-8 col-7 px-0">
                                                            : &nbsp; {{$d->klasifikasi }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-5 px-0">
                                                            Keterangan Khusus
                                                        </div>
                                                        <div class="col-md-8 col-7 px-0">
                                                            : &nbsp;
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->
    @include('inc.footer')
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/admin/plugins/jquery/dist/jquery.min.js"></script>
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
            autoplay: false,
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

        function menujuPencarian() {
            $('#konten-satu').addClass('d-none')
            $('#konten-dua').removeClass('d-none')
        }

        function menujuMenu() {
            $('#konten-dua').addClass('d-none')
            $('#konten-satu').removeClass('d-none')
        }



        function selectOnlyThis(e) {
            if ($(e).attr('data-id') == 'status') {
                $('.status-checkbox').prop('checked', false)
                $(e).prop('checked', true)
            } else {
                $('.hasil-jangkauan-checkbox').prop('checked', false)
                $(e).prop('checked', true)
            }
        }
    </script>
</body>

</html>