
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Manage Schedule</span></h2>
                <p>Manage Your Class Schedule</p>
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
                                <form class="info-item" enctype="multipart/form-data" wire:submit.prevent="addSchedule">
                                    <div>
                                        <h4>Add New Schedule</h4>
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
                                        <select name="" id="" class="daily-item d-flex" wire:model="tutor">
                                            <option value="">Select Tutor</option>
                                                @foreach ($tutors as $tutor)
                                                    <option value="{{ $tutor->name}}">{{ $tutor->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="info-item">
                                        <div class="text-center">
                                            <button type="submit">Add</button>
                                            <a href="{{ route('admin.schedule')}}" class="link">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>