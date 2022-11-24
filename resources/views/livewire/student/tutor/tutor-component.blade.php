
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Student's Tutor</span></h2>
                <p>Student Tutor will be display here</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes">
        <div class="container">
            <div class="row gy-4 mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="tutor-box">

                        <div class="col-12">
                            <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                @foreach ($tutor as $item)
                                    <div class="info-item d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg')}}" class="tutor-img flex-shrink-0" alt="Tutor Img">
                                        <div>
                                            <h4>{{$item->name}}</h4>
                                            <p>Will be teaching Additional Mathematics & Modern Mathematics</p>
                                        </div>
                                    </div><!-- End Info Item -->
                                @endforeach
                            </div>
        
                        </div>

                    </div>
                </div>
                <!--End Icon Box -->
            </div>
        </div>
    </div>

    </div>
</section>