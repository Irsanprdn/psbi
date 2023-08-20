<div id="contact" class="contact-area">
    <div class="contact-inner py-5">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2 class="mb-5">KONTAK & ALAMAT</h2>
                    </div>
                </div>
            </div>
            <div id="dinsos" class="dinsos-area" style="background-image: url(public/assets/compro/img/dinsos.png)">
                <div class="container" style="position: relative;">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="my-5text-center">
                            @php
                            $nameBefore = "";
                            @endphp

                            @foreach( $dataContact as $ds )
                            <div class="text-center">
                                @if( $ds->is_title == 'Y' )
                                <h5 class="mt-5">
                                    @if( $ds->link_name != '' )
                                    <a href="{{$ds->link_name}}" class="text-dark text-link">{{$ds->name}}</a>
                                    @else
                                    {{$ds->name}}
                                    @endif
                                </h5>
                                @else
                                
                                    @if( $ds->link_name != '' )
                                    <a href="{{$ds->link_name}}" class="text-dark text-link">{{$ds->name}}</a><br><br>
                                    @else
                                    {{$ds->name}}
                                    @endif
                                
                                @endif
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="text-center mb-5">
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
                        </div> -->
                    </div>
                    <!-- End Google Map -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>