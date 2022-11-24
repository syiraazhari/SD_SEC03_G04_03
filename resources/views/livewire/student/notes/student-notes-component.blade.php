
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Student Merchandise</span></h2>
                <p>Merchandise for Our Student</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="tutor-box">

                        <div class="col-12">
                            <div class="info-container d-flex flex-column align-items-center justify-content-center">

                                @foreach ($notes as $item)
                                        <div class="info-item">
                                            <div>
                                                <h4>{{$item->name}}</h4>
                                                <a href="{{route('download')}}">Download</a>
                                            </div>
                                        </div><!-- End Info Item -->
                                    </form>
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