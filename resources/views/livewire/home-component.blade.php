<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="home" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>Avantgarde</span></h2>
                    <p>New World, New Technologies, Sit Back Enjoy your perfect grade</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    {{-- @foreach ($subject as $subjects)
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="{{ $subjects->sub_icons}}"></i></div>
                                <h4 class="title"><a href="" class="stretched-link">{{ $subjects->subject}}</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->
                    @endforeach --}}
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Announcement Section ======= -->
    @foreach ($announcement as $item)
        <div class="modal fade hide " id="{{ $item->status}}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ANNOUNCEMENT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $item->title }}
                        <br>
                        {{ $item->subtitle }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div><!-- End Basic Modal-->
    @endforeach
    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>About Us</h2>
                <p>Avantgarde is an online platform or students to study online. We provided great service with experienced tutor. Students get to choose their preferable tutor to experience the most comfortable and effective tutor session. We convert the traditional offline to online as in terms of practicality and efficiency, online tutor session is undefeated.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3>Must know our service</h3>
                    <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    <p>‘Avantgarde’ is Malaysia’s most well-known online and offline tutoring business, enabling students to learn LIVE from some of the country’s best-curated educators. The nature of educators is the USP of ‘Tuitions Teachers.’ It has more than 500 educators who have taught more than a thousand 4,000 understudies scattered across 1000+ communities in 30+ countries.</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Communicate effectively.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Have vast subject knowledge.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Be easily approachable.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Be fun to learn with.</li>
                        </ul>
                        <p>
                            Our highly selected, experienced and qualified tutors provide one-to-one, private tuition in the comfort of your home, school or office. You can begin the registration process online or telephone +6019-778 1175 There is no obligation for consultation to explore how personal tutoring can make a difference for you, your family or organization.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $studentcount }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Student</strong> has registered</p>
                    </div><!-- End Stats Item -->
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $subjectcount}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Subjects</strong> in system</p>
                    </div><!-- End Stats Item -->
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$tutorcount}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Total of Tutor</strong> has registered</p>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
    </section><!-- End Call To Action Section -->

        <!-- ======= Our Services Section ======= -->
    <section id="subjects" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Subjects</h2>
                <p>Our management provide 4 Subject</p>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        <div class="icon">
                        <i class="bi bi-activity"></i>
                        </div>
                        <h3>Physics</h3>
                        <p>Physics is the natural science that studies matter, its fundamental constituents, its motion and behavior through space and time, and the related entities of energy and force.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                        <i class="bi bi-broadcast"></i>
                        </div>
                        <h3>Chemistry</h3>
                        <p>Chemistry is the scientific study of the properties and behavior of matter.It is a natural science that covers the elements that make up matter to the compounds composed of atoms, molecules and ions.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                        <i class="bi bi-easel"></i>
                        </div>
                        <h3>Modern Mathematics</h3>
                        <p>Modern mathematics approaches things differently. It primarily studies structures whose interactions have certain patterns.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <h3>Additional Mathematics</h3>
                        <p>Additional Mathematics is a qualification in mathematics, commonly taken by students in high-school (or GCSE exam takers in United Kingdom).</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- End Our Services Section -->

        <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Merchandise</h2>
                <p>Subscribe Platinum Plan to get our merchandise item</p>
            </div>

            <div class="row gy-4">
                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                    

                        <div class="col-xl-3 col-md-6 d-flex swiper-slide">
                            <div class="member">
                                <img src="assets/img/team/1.png" class="img-fluid" alt="">
                                <h4>T-Shirt</h4>
                                <span>Short Sleeve</span>

                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex swiper-slide">
                            <div class="member">
                                <img src="assets/img/team/2.png" class="img-fluid" alt="">
                                <h4>Hoodie</h4>
                                <span>Avantgarde</span>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex swiper-slide">
                            <div class="member">
                                <img src="assets/img/team/3.png" class="img-fluid" alt="">
                                <h4>Cap</h4>
                                <span>AvantGarde</span>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex swiper-slide">
                            <div class="member">
                                <img src="assets/img/team/4.png" class="img-fluid" alt="">
                                <h4>T-Shirt</h4>
                                <span>LongSleeve</span>
                            </div>
                        </div><!-- End Team Member -->

                    </div>
                </div>
                
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Pricing</h2>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Basic Plan</h3>
                    <div class="icon">
                    <i class="bi bi-box"></i>
                    </div>
                    <h4><sup>RM</sup>50<span> / month</span></h4>
                    <ul>
                    <li><i class="bi bi-check"></i> One Subject</li>
                    <li><i class="bi bi-check"></i> One Tutor</li>
                    <li class="na"><i class="bi bi-x"></i> <span>Limited Subject</span></li>
                    </ul>
                    <div class="text-center"><a href="{{route('basic.form')}}" class="buy-btn">Buy Now</a></div>
                </div>
            </div><!-- End Pricing Item -->
            

            <div class="col-lg-4">
            <div class="pricing-item featured">
                <h3>Gold Plan</h3>
                <div class="icon">
                <i class="bi bi-airplane"></i>
                </div>

                <h4><sup>RM</sup>80<span> / month</span></h4>
                <ul>
                <li><i class="bi bi-check"></i> Two Subject</li>
                <li><i class="bi bi-check"></i> Two Tutor</li>
                <li><i class="bi bi-check"></i> Can choose Tutor/Subject</li>
                </ul>
                <div class="text-center"><a href="{{route('gold.form')}}" class="buy-btn">Buy Now</a></div>
            </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4">
            <div class="pricing-item">
                <h3>Platinum Plan</h3>
                <div class="icon">
                <i class="bi bi-send"></i>
                </div>
                <h4><sup>RM</sup>180<span> / month</span></h4>
                <ul>
                <li><i class="bi bi-check"></i> Unlimted Subject</li>
                <li><i class="bi bi-check"></i> Unlimited Tutor</li>
                <li><i class="bi bi-check"></i> Can Choose Any Tutor/Subject</li>
                </ul>
                <div class="text-center"><a href="{{route('platinum.form')}}" class="buy-btn">Buy Now</a></div>
            </div>
            </div><!-- End Pricing Item -->

        </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-4">
            <div class="content px-xl-5">
                <h3>Frequently Asked <strong>Questions</strong></h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
            </div>
            </div>

            <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    How many times can I change my tutor?
                    </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Can I cancel my subscription at any time?
                    </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    What happen if I skip my class?
                    </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </div>
                </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Are you planning on adding new subject?
                    </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Can I text my tutor personally?
                    </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </div>
                </div>
                </div><!-- # Faq item-->

            </div>

            </div>
        </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Petronas Twin Tower, Floor 88, Malaysia, 50088</p>
                        </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>avgmathclinic@gmail.com</p>
                        </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+6019-778 1175</p>
                        </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Open Hours:</h4>
                            <p>Mon-Sat: 9AM - 10PM</p>
                        </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form" wire:submit.prevent="contactFormSubmit">
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@push('scripts')
    <script>
        $(window).on('load', function() {
        $('#active').modal('show');
    });
    </script>
@endpush