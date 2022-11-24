<style>
    .center{
        display: flex;
        justify-content: center;
    }
</style>

<section class="hero contact">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Change Password</span></h2>
                <p>You can make change password here.</p>
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-8">
                    @if (Session::has('password_success'))
                        <div class="alert alert-success" role="alert" >{{Session::get('password_success')}}</div>
                    @endif
                    @if (Session::has('password_error'))
                        <div class="alert alert-danger" role="alert" >{{Session::get('password_error')}}</div>
                    @endif
                    <form class="php-email-form" wire:submit.prevent="changePassword">
                        <div class="form-group mt-3">
                        </div>
                        <!-- Name Form -->
                        <div class="form-group mt-3">
                            <input type="password" name="current_password" class="form-control" id="currentPassword" placeholder="Confirm Password" wire:model="current_password">
                            @error('current_password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Email Form -->
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="newpassword" id="newPassword" placeholder="New Password" wire:model="password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Phone Form -->
                        <div class="form-group mt-3">
                            <input type="password" name="renewpassword" class="form-control" id="renewPassword" placeholder="Re-enter New Password" wire:model="password_confirmation">
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            
                        </div>
                        <div class="text-center">
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </div>

    </div>
</section>