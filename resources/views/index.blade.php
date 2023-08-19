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
    <link href="{{ asset('assets') }}/compro/css/style.css?v=1.3" rel="stylesheet">

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
        @include('inc.search')
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

        $("#pencarian").on('keyup', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                typeToSearch()
            }
        });

        function menujuPencarian() {
            $('#preloader2').addClass('d-none')
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
                $('#statusval').val($(e).val())
            } else {
                $('.hasil-jangkauan-checkbox').prop('checked', false)
                $(e).prop('checked', true)
                $('#hjval').val($(e).val())
            }
            typeToSearch()
        }


        function typeToSearch() {

            $('#preloader2').removeClass('d-none')
            var status = $('#statusval').val()
            var hj = $('#hjval').val()
            var val = $('#pencarian').val()

            var data = {
                _token: '{{ csrf_token() }}',
                val: val,
                hj: hj,
                status: status,
            }
            var formData = JSON.stringify(data);


            $.ajax({
                type: 'POST',
                url: "{{  route('wbs.search') }}",
                contentType: "application/json",
                processData: false,
                data: formData,
                success: function(response) {
                    console.log(response)
                    if (response.code == 200) {
                        var row = response.data

                        var html = "";
                        $.each(row, function(key, value) {


                            defaults = "{{ ENV('ASSET_URL') }}" + "/assets/compro/img/user.png";
                            foto = "";
                            if (value['sumber'] == 'Input') {
                                foto = "{{ ENV('ASSET_URL') }}" +  "/uploads/foto_WBS/" + value['foto'];
                                foto = (value['foto'] == '' ? defaults : foto);
                            } else {
                                foto = 'https://drive.google.com/uc?export=view&id=' + value['foto'];
                                foto = (value['foto'] == '' ? defaults : foto);
                            }
                            

                            console.log(foto)
                            html += ' <div class="card shadow my-3">' +
                                '<div class="card-body" style="padding: 2rem;">' +
                                '<div class="row">' +
                                '<div class="col-md-2">' +
                                '<img src="' + foto + '" alt="Foto ' + (value['nama'] ?? '') + '" class="rounded img-pencarian">' +
                                '</div>' +
                                '<div class="col-md-6">' +
                                '<p class="text-base font-weight-bold mb-0"> ' + (value['nama'] ?? '') + ' </p>' +
                                '<div style="font-size: 11px; line-height:15px; font-weight:bold;">' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Umur' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp; ' + (value['umur'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Tanggal Masuk' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp; ' + (value['tanggal_masuk'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Asal' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp;' + (value['asal'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Domisili' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp;' + (value['domisili'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Alamat Domisili' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp;' + (value['alamat'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Hasil Jangkauan ' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp; ' + (value['hjNm'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5">' +
                                'Status' +
                                '</div>' +
                                '<div class="col-md-8 col-7">' +
                                ': &nbsp;' + (value['statusNm'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-4 custom-mobile-accordion px-0">' +
                                '<div class="accordion " id="accordion' + value['nomor_panti'] + '">' +
                                '<div class="accordion-item">' +
                                '<p class="accordion-header custom-mobile-accordion-2 bg-light text-base text-center" id="heading' + value['nomor_panti'] + '" style="margin-top:-30px;">' +
                                '<a class="px-2 py-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' + value['nomor_panti'] + '" aria-expanded="false" aria-controls="collapse' + value['nomor_panti'] + '" style="font-size:13px;">' +
                                ' Keterangan Tambahan ' +
                                '</a>' +
                                '</p>' +
                                '<div id="collapse' + value['nomor_panti'] + '" class="accordion-collapse collapse bg-light" aria-labelledby="heading' + value['nomor_panti'] + '" data-bs-parent="#accordion' + value['nomor_panti'] + '" style="font-size:12px;">' +
                                '<div class="accordion-body">' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5 px-0">' +
                                'J. Kelamin' +
                                '</div>' +
                                '<div class="col-md-8 col-7 px-0">' +
                                ': &nbsp;' + (value['jkNm'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5 px-0">' +
                                'Klasifikasi' +
                                '</div>' +
                                '<div class="col-md-8 col-7 px-0">' +
                                ': &nbsp;' + (value['klasifikasi'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '<div class="row">' +
                                '<div class="col-md-4 col-5 px-0">' +
                                'Keterangan Khusus' +
                                '</div>' +
                                '<div class="col-md-8 col-7 px-0">' +
                                ': &nbsp;' + (value['keterangan'] ?? '') +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div> '
                        });

                    } else {
                        html = " <h5 class='text-center text-base'> Data tidak ditemukan </h5> <p class='text-center'> Coba masukan kata kriteria yang lain seperti (Nama / Umur /  Asal / Domisili / Alamat / Agama ) </p> ";
                    }

                    $('#penampung-pencarian').html(html).promise().done(function() {
                        menujuPencarian()
                    });
                }
            });
        }

        function showaAnotherLink(e){
            $(e).addClass('d-none')
            $('#doubleWA').removeClass('d-none')
        }
    </script>
</body>

</html>