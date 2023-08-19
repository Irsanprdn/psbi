<div id="about" class="about-area area-padding" style="background-image: url(public/assets/compro/img/slider/slider1.jpg);">
    <div class="container" style="position: relative;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">

                        <h4 class="font-weight-bold">{{ $data1->title }}</h4>

                        <p style="font-size: 20px; line-height:2rem;">
                           {{ $data1->description }}
                        </p>

                        <h4 class="font-weight-bold">{{ $data2->title }}</h4>

                        <div class="d-flex justify-content-center">
                            <img src="{{ ENV('asset_url') }}/uploads/so/{{ $data2->description }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div><!-- End About Section -->