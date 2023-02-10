<div id="fh5co-started" class="fh5co-bg" style="background-image:url({{ asset('landing/images/img_bg_4.jpg') }});">
    <div class="overlay" wire:ignore></div>
    <div class="container">
        <div class="row animate-box" wire:ignore.self>
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Bạn sẽ tham dự chứ?</h2>
                <p>Bạn muốn gửi quà tặng tới cho Cô Dâu - Chú Rể?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <p><a href="/story" class="btn btn-default btn-sm" style="
    padding: 15px 20px;" >Tặng quà cho Cô Dâu - Chú Rể</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row animate-box" wire:ignore.self>
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline" wire:submit.prevent="save">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Họ tên" wire:model.defer="name">
                            @error('name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" wire:model.defer="email">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button type="submit" class="btn btn-default btn-block">Tôi sẽ tham dự</button>
                    </div>
                </form>
            </div>
        </div>-->
    </div>
</div>
