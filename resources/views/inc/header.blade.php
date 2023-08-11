<header id="header" class="fixed-top d-flex align-items-center py-3 px-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo mb-2">
                    <a href="#"><img src="{{ asset('assets') }}/compro/img/logonavbar.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-md-8">
                <nav id="navbar" class="navbar">                    
                    <form>
                        <div class="form-group search">
                            <span class="bi bi-search form-control-feedback" onclick="menujuPencarian()"></span>
                            <input type="text" id="pencarian" class="form-control form-control-sm search-depan" placeholder="Masukan kriteria kerabat anda untuk mencari" style="width: 350px;" />
                        </div>
                    </form>

                    <ul>
                        <li><a  onclick="menujuMenu()" class="nav-link scrollto active" href="{{ asset('assets') }}/compro/#hero">Beranda</a></li>
                        <li><a  onclick="menujuMenu()" class="nav-link scrollto" href="{{ asset('assets') }}/compro/#about">Tentang Kami</a></li>
                        <li><a  onclick="menujuMenu()" class="nav-link scrollto" href="{{ asset('assets') }}/compro/#activity">Aktifitas</a></li>
                        <li><a  onclick="menujuMenu()" class="nav-link scrollto" href="{{ asset('assets') }}/compro/#contact">Kontak</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>
    </div>
</header><!-- End Header -->