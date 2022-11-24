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
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form class="info-item" enctype="multipart/form-data" wire:submit.prevent="addAnnouncement">
                                    <div class="info-item">
                                        <h4>Add New Announcement</h4>
                                    </div>
                                    <div>
                                        
                                        <div>
                                            <h4>Title :</h4>
                                            <input class="input-item" name="name" type="text" class="form-control" id="name" wire:model="title">
                                        </div>
                                        <div>
                                            <h4>Subtitle :</h4>
                                            <textarea class="input-item" name="email" type="email" class="form-control" id="email" wire:model="subtitle"></textarea>
                                        </div>
                                        <select name="" id="" class="daily-item d-flex" wire:model="status">
                                            <option value="">Select Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">InActive</option>
                                        </select>
                                    </div>
                                    <div class="info-item">
                                        <div class="text-center">
                                            <button type="submit">Add</button>
                                            <a href="{{ route('admin.announcement')}}" class="link">Back</a>
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