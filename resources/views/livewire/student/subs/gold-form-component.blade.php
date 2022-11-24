<section class="hero contact">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Subscription Plans</span></h2>
                <p>Edit Your Student Profile.</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-8">
                    <form class="php-email-form" wire:submit.prevent="GoldForm">
                        <div class="form-group mt-3">
                            <h5>Subscription Form</h5>
                        </div>
                        <!-- Name Form -->
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $student->name }}" disabled required>
                        </div>
                        <!-- Gender Form -->
                        <div class="form-group mt-3">
                            <select name="plans" id="plans" class="form-control" wire:model="plans">
                                <option value="2">Gold Plan</option>
                            </select>
                        </div>
                        <!-- State Form -->
                        <div class="form-group mt-3">
                            <select name="subject" id="subject" class="form-control" wire:model="subject">
                                <option value="">Select Subject</option>
                                @foreach ($getsubject as $item)
                                    <option value="{{$item->id}}">{{$item->subject}}</option>
                                @endforeach
                                

                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <select name="tutor" id="tutor" class="form-control" wire:model="tutor">
                                <option value="">Select Tutor</option>
                                @foreach ($gettutor as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                                

                            </select>
                        </div>

                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert" >{{ Session::get('message') }}</div>
                        @endif
                        <div class="text-center"><button type="submit">Subscribe</button></div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </div>

</section>