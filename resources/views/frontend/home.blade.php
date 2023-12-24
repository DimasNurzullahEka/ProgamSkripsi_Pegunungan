@extends('frontend.template.app')
@section('content')
  <!-- Carousel Start -->
  <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="FrontEnd/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Learn To Drive With
                                    Confidence</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="FrontEnd/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top
                                    Priority</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<section id="cta" class="cta">
    <div class="container">

        <div class="text-center">
            <h3>Booking Online Pendakian Penanggungan</h3>
            <p> Booking online dapat dilakukan selama 24 jam, cermati tata cara dan aturan sesuai dengan
                prosedur yang sudah ditetapkan.</p>
            <a class="cta-btn" href="{{route('setting.index')}}">Booking Sekarang</a>
        </div>

    </div>
</section>
@endsection
