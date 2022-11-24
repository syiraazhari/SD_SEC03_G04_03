<section class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Manage Announcement</span></h2>
                <p>Manage your Announcement for all section</p>
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
                                        <div class="text-center">
                                            <a href="{{ route('admin.addannouncement')}}" class="link">Add New</a>
                                        </div>
                                    </div>
                                </div><!-- End Info Item -->

                                @foreach ($announcement as $item)
                                    <div class="info-item">
                                        <div>
                                            <h4>{{ $item->title }}</h4>
                                            <p>{{ $item->subtitle }}</p>
                                            <p>{{ $item->status }}</p>
                                        </div>
                                    </div><!-- End Info Item -->
                                @endforeach
                                
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