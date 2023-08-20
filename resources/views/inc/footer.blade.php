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
                                @foreach( $dataSocmed2 as $ds2 )
                                <p><span class="bi bi-{{ strtolower($ds2->data_name) }}"></span> {{ $ds2->note }}</p>
                                @endforeach
                                <!-- <p><span class="bi bi-facebook"></span> Psbi Bangun Daya 1</p>
                                <p><span class="bi bi-instagram"></span> @psbibangundaya.1</p>
                                <p><span class="bi bi-whatsapp"></span> 085777564256</p>
                                <p><span class="bi bi-envelope"></span> psbikedoya1@gmail.com</p> -->
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
                            © Copyright 2023 by Panti Sosial Bina Insan Bangun Daya . All right reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>