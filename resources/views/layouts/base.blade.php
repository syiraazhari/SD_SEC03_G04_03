<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Avantgarde - Online Tuition</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
        @livewireStyles
    </head>

    <body>
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">avgmathclinic@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6019-778 1175</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            </div>
        </section>

        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1>Avantgarde<span>.</span></h1>
                </a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="{{ route('home')}}#home">Home</a></li>
                        <li><a href="{{ route('home')}}#about">About</a></li>
                        <li><a href="{{ route('home')}}#subjects">Subjects</a></li>
                        <li><a href="{{ route('home')}}#team">Merchandise</a></li>
                        <li><a href="{{ route('home')}}#contact">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->account === 'ADM')
                                    <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                        <ul>
                                            <li><a href="{{ route('admin.profile') }}">Profile</a></li>
                                            <li><a href="{{ route('change.password') }}">Change Password</a></li>
                                            <li class="dropdown"><a href="#"><span>Dashboard</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('admin.announcement') }}">Announcement</a></li>
                                                    <li><a href="{{ route('admin.orderpurchase') }}">Order Purchase</a></li>
                                                    <li><a href="{{ route('admin.orderhistory') }}">Order History</a></li>
                                                    <li><a href="{{ route('admin.schedule') }}">Class Schedule</a></li>
                                                    <li><a href="{{ route('admin.meeting') }}">Class Meeting Link</a></li>
                                                    <li><a href="{{ route('admin.recorded') }}">Class Recorded Link</a></li>
                                                    <li><a href="{{ route('admin.subscription') }}">Subscription Plan</a></li>
                                                    <li><a href="{{ route('admin.merchandise') }}">Merchandise</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->account === 'STD')
                                    <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                        <ul>
                                            <li><a href="{{ route('student.profile')}}">Profile</a></li>
                                            <li><a href="{{ route('change.password') }}">Change Password</a></li>
                                            @if (Auth::user()->plan === 'BP') 
                                                <li class="dropdown"><a href="#"><span>Student Portal</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                    <ul>
                                                        <li><a href="{{ route('student.notes') }}">Notes</a></li>
                                                        <li><a href="{{ route('student.tutors')}}">Tutor</a></li>
                                                        <li><a href="{{ route('student.form')}}">Attendance Form</a></li>
                                                        <li><a href="{{ route('student.scheduled')}}">Class Schedule</a></li>
                                                        <li><a href="{{ route('student.recorded')}}">Class Recorded</a></li>
                                                        <li><a href="{{ route('student.subs')}}">Subscription</a></li>
                                                        <li><a href="{{ route('student.merch')}}">Merchandise</a></li>
                                                    </ul>
                                                </li>
                                            @elseif(Auth::user()->plan === 'GP')
                                                <li class="dropdown"><a href="#"><span>Student Portal</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                    <ul>
                                                        <li><a href="{{ route('student.notes') }}">Notes</a></li>
                                                        <li><a href="{{ route('student.tutors')}}">Tutor</a></li>
                                                        <li><a href="{{ route('student.form')}}">Attendance Form</a></li>
                                                        <li><a href="{{ route('student.scheduled')}}">Class Schedule</a></li>
                                                        <li><a href="{{ route('student.recorded')}}">Class Recorded</a></li>
                                                        <li><a href="{{ route('student.subs')}}">Subscription</a></li>
                                                        <li><a href="{{ route('student.merch')}}">Merchandise</a></li>
                                                    </ul>
                                                </li>
                                            @elseif(Auth::user()->plan === 'PP')
                                                <li class="dropdown"><a href="#"><span>Student Portal</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                    <ul>
                                                        <li><a href="{{ route('student.notes') }}">Notes</a></li>
                                                        <li><a href="{{ route('student.tutors')}}">Tutor</a></li>
                                                        <li><a href="{{ route('student.form')}}">Attendance Form</a></li>
                                                        <li><a href="{{ route('student.scheduled')}}">Class Schedule</a></li>
                                                        <li><a href="{{ route('student.recorded')}}">Class Recorded</a></li>
                                                        <li><a href="{{ route('student.subs')}}">Subscription</a></li>
                                                        <li><a href="{{ route('student.merch')}}">Merchandise</a></li>
                                                    </ul>
                                                </li>
                                            @else
                                                <li><a href="{{ route('home')}}#pricing">Subscribe Now</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->account === 'TTR')
                                    <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                        <ul>
                                            <li><a href="{{ route('tutor.profile') }}">Profile</a></li>
                                            <li><a href="{{ route('change.password') }}">Change Password</a></li>
                                            <li class="dropdown"><a href="#"><span>Tutor Portal</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('tutor.notes') }}">Notes</a></li>
                                                    <li><a href="{{ route('tutor.studentlist') }}">Student List</a></li>
                                                    <li><a href="{{ route('tutor.form') }}">Attendance</a></li>
                                                    <li><a href="{{ route('tutor.scheduled') }}">Class Schedule</a></li>
                                                    <li><a href="{{ route('tutor.recorded') }}">Class Recorded</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                @endif
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li>
                                        <a style="margin-left: 20px" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit(); " role="button">
                                            <span>Sign Out</span>
                                        </a>
                                    </li>
                                </form>
                            @else 
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endif
                    </ul>
                </nav><!-- .navbar -->

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
        </header>

        {{$slot}}

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Tuitions</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Services 1</a></li>
                    <li><a href="#">Services 2</a></li>
                    <li><a href="#">Services 3</a></li>
                    <li><a href="#">Services 4</a></li>
                    <li><a href="#">Services 5</a></li>
                </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    A108 Jalan Tun Razak <br>
                    Kuala Lumpur, MY 54000<br>
                    Malaysia <br><br>
                    <strong>Phone:</strong> +60 123456789<br>
                    <strong>Email:</strong> info@example.com<br>
                </p>

                </div>

            </div>
            </div>

            <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Tuitions</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Group ?</a>
            </div>
            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js')}}"></script>

        @livewireScripts
        @stack('scripts')
    </body>
</html>