<div id="social-media">
    <div class="row">
        @foreach($dataSocmed as $ds)
        @if( $ds->data_name == 'Whatsapp' )

        <a onclick="showaAnotherLink(this)" class="col-md-4 col-4 cursor-pointer" id="penampungWA">
            <div class="contact-icon text-center">
                <div class="single-icon mt-3">
                    <i class="bi bi-{{ strtolower($ds->data_name) }}"></i>
                    <p>
                        {{ $ds->data_name }}<br>
                    </p>
                </div>
            </div>
        </a>

        <div id="doubleWA" class="col-md-4 col-4 d-none cursor-pointer">
            <span style="position: absolute; right:0px; padding:3px 20px;" onclick="showaAnotherLink2(this)"><i class="bi bi-x text-light"></i></span>
            <div class="text-center hover-base">
                <div class="row">
                    @foreach($dataSocmedWA as $dswa)
                    @if( $dswa->data_id == '000004' )
                    <a href="{{ $dswa->note }}" class=" pt-3 col-md-12 col-12" style="height: 10vh; font-size:20px;">
                        PSBI Bangun Daya 1 Cengkareng
                    </a>
                    @else
                    <a href="{{ $dswa->note }}" class=" pt-3 col-md-12 col-12" style="height: 10vh; font-size:20px;">
                        PSBI Bangun Daya 1 Kedoya
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

        @else
        <a href="{{ $ds->note }}" target="_blank" class="col-md-4 col-4">
            <div class="contact-icon text-center">
                <div class="single-icon mt-3">
                    <i class="bi bi-{{ strtolower($ds->data_name) }}"></i>
                    <p>
                        {{ $ds->data_name }}<br>
                    </p>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
</div>