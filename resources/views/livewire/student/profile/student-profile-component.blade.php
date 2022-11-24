<section class="hero contact">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Student Profile</span></h2>
                <p>Edit Your Student Profile.</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-file-person flex-shrink-0"></i>
                            <div>
                                <h4>Name:</h4>
                                <p>{{ $student->name }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>{{ $student->email }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Phone:</h4>
                                <p>{{ $student->phone }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-postcard flex-shrink-0"></i>
                            <div>
                                <h4>Identification Card:</h4>
                                <p>{{ $student->ic }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-heart-pulse flex-shrink-0"></i>
                            <div>
                                <h4>Age:</h4>
                                <p>{{ $student->age }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-gender-ambiguous flex-shrink-0"></i>
                            <div>
                                <h4>Gender:</h4>
                                <p>{{ $student->gender }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>State:</h4>
                                <p>{{ $student->state }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <form class="php-email-form" wire:submit.prevent="updateProfile">
                        <div class="form-group mt-3">
                            <h5>Edit Profile</h5>
                        </div>
                        <!-- Name Form -->
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $student->name }}" required wire:model="name">
                        </div>
                        <!-- Email Form -->
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ $student->email }}" disabled required>
                        </div>
                        <!-- Phone Form -->
                        <div class="form-group mt-3">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required wire:model="phone">
                        </div>
                        <!-- Identification Card Form -->
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="ic" id="ic" placeholder="Your Identification" required wire:model="ic">
                        </div>
                        <!-- Age Form -->
                        <div class="form-group mt-3">
                            <input type="text" name="age" class="form-control" id="age" placeholder="Your Age" required wire:model="age">
                        </div>
                        <!-- Gender Form -->
                        <div class="form-group mt-3">
                            <select name="state" id="state" class="form-control" wire:model="gender">
                                <option value="">Select Gender</option>
                                <option value="Men">Men</option>
                                <option value="Woman">Woman</option>
                            </select>
                        </div>
                        <!-- State Form -->
                        <div class="form-group mt-3">
                            <select name="state" id="state" class="form-control" wire:model="state">
                                <option value="">Select State</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Labuan">Labuan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Putrajaya">Putrajaya</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                        </div>

                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert" >{{ Session::get('message') }}</div>
                        @endif
                        <div class="text-center"><button type="submit">Save Changes</button></div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </div>

</section>