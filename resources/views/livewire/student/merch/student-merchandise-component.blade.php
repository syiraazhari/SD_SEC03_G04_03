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
        position: relative;
        color: #fff;
        margin-top: 10px;
    }
    button[type=submit] {
        background: var(--color-primary);
        border: 0;
        padding: 14px 45px;
        color: #fff;
        transition: 0.4s;
        border-radius: 10px;
    }
    button[type=submit]:hover {
        background: rgba(0, 131, 116, 0.8);
    }
</style>
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
                                <div class="info-item">
                                    <div>
                                        <h4></h4>
                                        <p>See our Merchandise for you !!</p>
                                        <br>
                                        <button type="submit">See Item</button>
                                    </div>
                                </div><!-- End Info Item -->
                                <div class="info-item">
                                    <div>
                                        <h4>Inventory</h4>
                                        <p>List on bought item</p>
                                    </div>
                                </div><!-- End Info Item -->
                                @foreach ($hasItem as $has)
                                    @if ($has->item == 1)
                                        <div class="info-item">
                                            <div>
                                                <h4>Lanyard</h4>
                                            </div>
                                        </div><!-- End Info Item -->
                                    @elseif($has->item == 2)
                                        <div class="info-item">
                                            <div>
                                                <h4>Notebook</h4>
                                            </div>
                                        </div><!-- End Info Item -->
                                    @elseif($has->item == 3)
                                        <div class="info-item">
                                            <div>
                                                <h4>Hoodie</h4>
                                            </div>
                                        </div><!-- End Info Item -->
                                    @elseif($has->item == 4)
                                        <div class="info-item">
                                            <div>
                                                <h4>T-Shirt</h4>
                                            </div>
                                        </div><!-- End Info Item -->
                                    @endif
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