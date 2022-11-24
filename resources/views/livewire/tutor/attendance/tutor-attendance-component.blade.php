
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Attendance List</span></h2>
                <p>Your Class Attendance List will be display here.</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="tutor-box">

                        <div class="col-12">
                            @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                            <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                <form class="info-item" wire:submit.prevent="findAttendance">
                                    <div >
                                        <h4>Select Attendance</h4>
                                        <select name="day" id="day" class="daily-item d-flex">
                                            <option value="">Select Day</option>
                                            @foreach ($days as $day)
                                                <option value="{{ $day->day }}">{{ $day->day }}</option>
                                            @endforeach
                                        </select>
                                        <select name="" id="" class="daily-item d-flex">
                                            <option value="">Select Subjects</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->subject }}">{{ $subject->subject }}</option>
                                            @endforeach
                                        </select>
                                    </div><!-- End Info Item -->
                                    <div class="info-item">
                                        <div class="text-center">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div><!-- End Info Item -->
                                </form>

                                {{-- @if ()
                                    
                                @else
                                    
                                @endif --}}
                                <div id="Monday" class="info-item data">
                                    <div>
                                        <h4>Monday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Present</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>Tawik</td>
                                                        <td>Present</td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- End Info Item -->

                                {{-- <div id="Tuesday" class="info-item data">
                                    <div>
                                        <h4>Tuesday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tuesdays as $tuesday)
                                                    <tr>
                                                        <td>{{ $tuesday->time }}</td>
                                                        <td>{{ $tuesday->subject }}</td>
                                                        <td>{{ $tuesday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Wednesday" class="info-item data">
                                    <div>
                                        <h4>Wednesday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($wednesdays as $wednesday)
                                                    <tr>
                                                        <td>{{ $wednesday->time }}</td>
                                                        <td>{{ $wednesday->subject }}</td>
                                                        <td>{{ $wednesday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Thursday" class="info-item data">
                                    <div>
                                        <h4>Thursday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($thursdays as $thursday)
                                                    <tr>
                                                        <td>{{ $thursday->time }}</td>
                                                        <td>{{ $thursday->subject }}</td>
                                                        <td>{{ $thursday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Friday" class="info-item data">
                                    <div>
                                        <h4>Friday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fridays as $friday)
                                                    <tr>
                                                        <td>{{ $friday->time }}</td>
                                                        <td>{{ $friday->subject }}</td>
                                                        <td>{{ $friday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Saturday" class="info-item data">
                                    <div>
                                        <h4>Saturday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($saturdays as $saturday)
                                                    <tr>
                                                        <td>{{ $saturday->time }}</td>
                                                        <td>{{ $saturday->subject }}</td>
                                                        <td>{{ $saturday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Sunday" class="info-item data">
                                    <div>
                                        <h4>Sunday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sundays as $sunday)
                                                    <tr>
                                                        <td>{{ $sunday->time }}</td>
                                                        <td>{{ $sunday->subject }}</td>
                                                        <td>{{ $sunday->tutor }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div><!-- End Info Item -->
                                <div class="info-item">
                                    <div>
                                        <h4>No Attendance</h4>
                                        <p>You don't have any Subscription Plan right now</p>
                                    </div>
                                </div><!-- End Info Item --> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Icon Box -->
            </div>
        </div>
    </div>

</section>
@push('scripts')
    <script>
        $(document).ready(function(){
            $("#day").on('change', function(){
                $(".data").hide();
                $("#" + $(this).val()).fadeIn(700);
            });
        });
    </script>
@endpush