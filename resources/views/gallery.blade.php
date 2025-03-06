<x-layouts.base>
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url({{ asset('landing/images/img_bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="fh5co-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Gallery</h1>
                            <h2>Free html5 templates Made by <a href="http://freehtml5.co"
                                    target="_blank">FreeHTML5.co</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div id="container-upload">
        @if (session('success'))
            <strong>{{ session('success') }}</strong>
        @endif
         
        <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
               Upload Image: <input type="file" name="upload_image" />
            </p>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <div id="fh5co-couple" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Hello!</h2>
                    <h3>
                        {{ dday()->format('l jS F Y h:i A') }} {{ location() }}
                    </h3>
                    <p>We invited you to celebrate our wedding</p>
                </div>
            </div>
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="{{ asset('landing/images/groom.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Joefrey Mahusay</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="{{ asset('landing/images/bride.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Sheila Mahusay</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Our Memories</span>
                    <h2>Wedding Gallery</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-1.jpg') }}); ">
                            <a href="{{ asset('landing/images/gallery-1.jpg') }}">
                                <div class="case-studies-summary">
                                    <span>14 Photos</span>
                                    <h2>Two Glas of Juice</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-2.jpg') }}); ">
                            <a href="#" class="color-2">
                                <div class="case-studies-summary">
                                    <span>30 Photos</span>
                                    <h2>Timer starts now!</h2>
                                </div>
                            </a>
                        </li>


                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-3.jpg') }}); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>90 Photos</span>
                                    <h2>Beautiful sunset</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-4.jpg') }}); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>12 Photos</span>
                                    <h2>Company's Conference Room</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-5.jpg') }}); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>50 Photos</span>
                                    <h2>Useful baskets</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-6.jpg') }}); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>45 Photos</span>
                                    <h2>Skater man in the road</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-7.jpg') }}); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>35 Photos</span>
                                    <h2>Two Glas of Juice</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-8.jpg') }}); ">
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <span>90 Photos</span>
                                    <h2>Timer starts now!</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('landing/images/gallery-9.jpg') }}); ">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>56 Photos</span>
                                    <h2>Beautiful sunset</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layouts.base>
