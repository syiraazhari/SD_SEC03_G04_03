<style>
    .tutor-box {
        padding: 60px 30px;
        position: relative;
        background: white;
        box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        height: 100%;
        width: 100%;
    }
    .info-container {
        background-color: var(--color-primary);
        height: 100%;
        padding: 20px;
        border-radius: 10px;
        position: relative;
        box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
    }
    .info-item {
        width: 100%;
        background-color: #009282;
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 10px;
        position: relative;
        color: #fff;
    }
    .info-item:last-child {
        margin-bottom: 0;
    }
    .info-item i {
        font-size: 20px;
        color: #fff;
        float: left;
        width: 44px;
        height: 44px;
        background-color: rgba(255, 255, 255, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        transition: all 0.3s ease-in-out;
        margin-right: 15px;
    }
    .info-item h4 {
        padding: 0;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .info-item p {
        padding: 0;
        margin-bottom: 0;
        font-size: 14px;
    }

    .info-item:hover i {
        background: #fff;
        color: var(--color-primary);
    }
    .table thead {
        color: #fff;
        background: #009282;
        align-items: center;
    }
    .table tbody {
        color: #fff;
        background: #009282;
        align-items: center;
    }
    .table thead th {
        border: 0;
    }
    .table tbody td {
        vertical-align: middle;
    }
    .daily-item {
        width: 100%;
        background-color: var(--color-primary);
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 10px;
        color: #fff;
        margin-top: 10px;
    }
    .link {
        background: var(--color-primary);
        border: 0;
        padding: 8px 10px;
        color: #fff;
        transition: 0.4s;
        border-radius: 5px;
    }
    .link:hover {
        background: rgba(0, 131, 116, 0.8);
    }
    .data {
        display: none;
    }
    
</style>
<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Manage Meeting Link</span></h2>
                <p>Your Class Meeting Link will be display here</p>
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
                                        <h4>Meeting Link</h4>
                                        <select name="daily" id="daily" class="daily-item d-flex" wire:model="daily">
                                            <option value="">Select Day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>

                                        <div class="text-center">
                                            <a href="{{ route('admin.addmeeting')}}" class="link">Add New</a>
                                        </div>
                                    </div>
                                </div><!-- End Info Item -->
                                

                                <div id="Monday" class="info-item data">
                                    <div>
                                        <h4>Monday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($mondays as $monday)
                                                    <tr>
                                                        <td>{{ $monday->time }}</td>
                                                        <td>{{ $monday->subject }}</td>
                                                        @foreach ($meeting as $item)
                                                            <td><a class="link" href="{{ $item->link }}">View</a></td>
                                                        @endforeach
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- End Info Item -->

                                <div id="Tuesday" class="info-item data">
                                    <div>
                                        <h4>Tuesday</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tuesdays as $tuesday)
                                                    <tr>
                                                        <td>{{ $tuesday->time }}</td>
                                                        <td>{{ $tuesday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
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
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($wednesdays as $wednesday)
                                                    <tr>
                                                        <td>{{ $wednesday->time }}</td>
                                                        <td>{{ $wednesday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
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
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($thursdays as $thursday)
                                                    <tr>
                                                        <td>{{ $thursday->time }}</td>
                                                        <td>{{ $thursday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
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
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fridays as $friday)
                                                    <tr>
                                                        <td>{{ $friday->time }}</td>
                                                        <td>{{ $friday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
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
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($saturdays as $saturday)
                                                    <tr>
                                                        <td>{{ $saturday->time }}</td>
                                                        <td>{{ $saturday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
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
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sundays as $sunday)
                                                    <tr>
                                                        <td>{{ $sunday->time }}</td>
                                                        <td>{{ $sunday->subject }}</td>
                                                        <td><a class="link" href="">View</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
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
            $("#daily").on('change', function(){
                $(".data").hide();
                $("#" + $(this).val()).fadeIn(700);
            });
        });
    </script>
@endpush