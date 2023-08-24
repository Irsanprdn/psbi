<div id="activity" class="services-area {{ ( count($dataActivity) > 0 ? '' : 'd-none' ) }}">
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
                        @foreach($dataActivity as $dact)
                        <div class="swiper-slide swiper-slide-active">
                            <img src="{{ ENV('ASSET_URL') }}/uploads/activity/{{$dact->image}}" alt="Image Activity">
                            <!-- <div class="info">
                                        <h4 class="name">
                                            Giratina
                                        </h4>
                                        <span class="type">
                                            Ghost, Dragon
                                        </span>
                                    </div> -->
                        </div>
                        @endforeach                        
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
</div>