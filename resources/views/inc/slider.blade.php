<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                @php
                $no = 1;
                @endphp
                @foreach($dataHome as $sh)
                @php
                $urlImage = "public/uploads/slider/".$sh->slide;
                @endphp
                @if($no == 1)
                <div class="carousel-item active" style="background-image: url({{ $urlImage }})">
                    <div class="carousel-container">
                        <div class="container">
                            <!-- <p class="animate__animated animate__fadeInUp">Text</p> -->
                        </div>
                    </div>
                </div>
                @else
                <div class="carousel-item " style="background-image: url({{ $urlImage }})">
                    <div class="carousel-container">
                        <div class="container">
                            <!-- <p class="animate__animated animate__fadeInUp">Text</p> -->
                        </div>
                    </div>
                </div>
                @endif
                @php
                $no++;
                @endphp
                @endforeach
            </div>

            <a class="carousel-control-prev" href="{{ asset('assets') }}/compro/#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="{{ asset('assets') }}/compro/#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero Section -->