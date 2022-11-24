
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Attendance</span></h2>
                <p>Don't Forget to fill Attendance Form</p>
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
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form class="info-item" enctype="multipart/form-data" wire:submit.prevent="storeAttendance">
                                    <div>
                                        <h4>Submit Attendance</h4>
                                        <select name="" id="" class="daily-item d-flex" wire:model="day">
                                            <option value="">Select Day</option>
                                            @foreach ($days as $day)
                                                <option value="{{ $day->day }}">{{ $day->day }}</option>
                                            @endforeach
                                        </select>
                                        <select name="" id="" class="daily-item d-flex" wire:model="time">
                                            <option value="">Select Time</option>
                                            @foreach ($times as $time)
                                                <option value="{{ $time->time }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                        <select name="" id="" class="daily-item d-flex" wire:model="subject">
                                            <option value="">Select Subjects</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->subject }}">{{ $subject->subject }}</option>
                                            @endforeach
                                        </select>
                                        <select name="" id="" class="daily-item d-flex" wire:model="status">
                                            <option value="">Select Status</option>
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                        </select>
                                    </div>
                                    <div class="info-item">
                                        <div class="text-center">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div><!-- End Info Item -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Icon Box -->
            </div>
        </div>
    </div>

</section>