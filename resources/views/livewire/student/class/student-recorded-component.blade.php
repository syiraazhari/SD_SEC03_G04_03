
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Manage Recorded</span></h2>
                <p>Your Class Recorded will be display here</p>
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
                                <div class="info-item">
                                    <div>
                                        <h4>Class Recorded</h4>
                                        <select name="day" id="day" class="daily-item d-flex" >
                                            <option value="">Select Day</option>
                                            @foreach ($days as $day)
                                                <option value="{{ $day->day }}">{{ $day->day }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- End Info Item -->
                                
                                <div id="Monday" class="info-item data">
                                    @foreach ($mondays as $monday)
                                        <div>
                                            <h4>{{$monday->day}} </h4>
                                            <span>{{$monday->subject}}</span> <span>{{$monday->time}}</span>
                                            <a href="{{$monday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Tuesday" class="info-item data">
                                    @foreach ($tuesdays as $tuesday)
                                        <div>
                                            <h4>{{$tuesday->day}} </h4>
                                            <span>{{$tuesday->subject}}</span> <span>{{$tuesday->time}}</span>
                                            <a href="{{$tuesday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Wednesday" class="info-item data">
                                    @foreach ($wednesdays as $wednesday)
                                        <div>
                                            <h4>{{$wednesday->day}} </h4>
                                            <span>{{$wednesday->subject}}</span> <span>{{$wednesday->time}}</span>
                                            <a href="{{$wednesday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Thursday" class="info-item data">
                                    @foreach ($thursdays as $thursday)
                                        <div>
                                            <h4>{{$thursday->day}} </h4>
                                            <span>{{$thursday->subject}}</span> <span>{{$thursday->time}}</span>
                                            <a href="{{$thursday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Friday" class="info-item data">
                                    @foreach ($fridays as $friday)
                                        <div>
                                            <h4>{{$friday->day}} </h4>
                                            <span>{{$friday->subject}}</span> <span>{{$friday->time}}</span>
                                            <a href="{{$friday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Saturday" class="info-item data">
                                    @foreach ($saturdays as $saturday)
                                        <div>
                                            <h4>{{$saturday->day}} </h4>
                                            <span>{{$saturday->subject}}</span> <span>{{$saturday->time}}</span>
                                            <a href="{{$saturday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
                                <div id="Sunday" class="info-item data">
                                    @foreach ($sundays as $sunday)
                                        <div>
                                            <h4>{{$sunday->day}} </h4>
                                            <span>{{$sunday->subject}}</span> <span>{{$sunday->time}}</span>
                                            <a href="{{$sunday->link}}" class="link pl-20px">View</a>
                                        </div>
                                    @endforeach
                                </div><!-- End Info Item -->
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