<x-layouts.base>

    <header id="fh5co-header" class="fh5co-cover" role="banner"
        style="background-image:url({{ asset('landing/images/img_bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Leo &amp; Helen</h1>
                            <h2>Đám cưới sẽ bắt đầu</h2>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <p><a href="#" class="js-goalbum btn btn-default btn-sm">Xem Album Ảnh</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-couple">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Hello!</h2>
                    <p>Xin trân trọng kính mới các ông bà/cô chú/anh chị tới tham dự đám cưới của<br>Trần Tiến và Tú Anh</p>
                    <h3>
                        {{ dday()->format('l jS F Y h:i A') }} </br>{{ location() }}
                    </h3>
                </div>
            </div>
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="{{ asset('landing/images/groom.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Đặng</h3>
                        <h3>Trần Tiến</h3>
                        <p>Chú rể <strong>Trần Tiến</strong>, hay còn được mọi người gọi là <strong>Trần Leo</strong>. Ngoài giỏi IT, thì còn có sở trường ca hát, vì vậy Chú Rể thường hay nói: "Leo mà không làm IT, thì Leo đã đi làm Ca Sĩ rồi"</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="{{ asset('landing/images/bride.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Trần</h3>
                        <h3>Tú Anh</h3>
                        <p>Cô dâu xinh đẹp <strong>Tú Anh</strong>, hay còn được mọi người gọi là <strong>Bé Chanh</strong>. Là một bông hoa xinh đẹp của miền đất Hải Dương. Rất giỏi trong việc nhõng nhẽo chú rể.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-event" class="fh5co-bg" style="background-image:url({{ asset('landing/images/img_bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Wedding Events</h2>
                    <!--<span>{{ location(true, false) }}</span>-->
                    <span>Hội Trường 2, Trung tâm tiệc cưới Golden Palace</span>
                    </br>
                    <span>(Tầng 3 - TTTM Mipec Long Biên, Hà Nội, VN)</span>
                </div>
            </div>
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>Lễ Rước Dâu</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        <span>05:00 SÁNG</span>
                                        <span>11:00 TRƯA</span>
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>{{ dday()->format('l jS') }}</span>
                                        <span>{{ dday()->format('F, Y') }}</span>
                                    </div>
                                    <p>Lễ Rước Dâu sẽ được khởi hành từ sáng sớm tại nhà Chú Rể ở Long Biên để di chuyển tới nhà Cô Dâu tại thị xã Kinh Môn - Hải Dương. Dự kiến đoàn Rước Dâu sẽ đưa Cô Dâu về HN vào khoảng 11h trưa.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>Tiệc Đám Cưới</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        <span>05:00 CHIỀU</span>
                                        <span>07:00 CHIỀU</span>
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>{{ dday()->format('l jS') }}</span>
                                        <span>{{ dday()->format('F, Y') }}</span>
                                    </div>
                                    <p>Bữa tiệc chính thức chúc mừng hạnh phúc Cô Dâu - Chú Dể sẽ được diễn ra vào khoảng 5h chiều tại Trung Tâm Tiệc Cưới - Tầng 3 - TTTM MIPEC Long Biên. Rất mong sự có mặt của các vị quan khách.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-services">
        <div class="container">

            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Sweet Video</h2>
                    <p>Màn cầu hôn tuyệt vời của Chú Rể dành cho Cô Dâu vào ngày 25/12/2022 trên tầng cao của quán cafe Sam Rooftop.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!--<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-calendar"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>We Organized Events</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos
                                cumque dicta adipisci architecto culpa amet.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-image"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Photoshoot</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos
                                cumque dicta adipisci architecto culpa amet.</p>
                        </div>
                    </div>-->

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-video"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Video Editor</h3>
                            <p>Cảm ơn bạn <b>@Khắc Việt</b> đã quay và chỉnh sửa video này tặng cho Cô Dâu và Chú Rể.</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-8 animate-box">
                    <div class="fh5co-video fh5co-bg"
                        style="background-image: url({{ asset('landing/images/video_preview.jpg') }}); ">
                        <a href="https://www.youtube.com/watch?v=i9nyh_voeT8" class="popup-vimeo"><i
                                class="icon-video2"></i></a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    
    <!--<div hidden id="fh5co-couple-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>We Love Each Other</span>
                    <h2>Our Story</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            <div class="timeline-badge"
                                style="background-image:url({{ asset('landing/images/couple-1.jpg') }});"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">First We Meet</h3>
                                    <span class="date">December 25, 2015</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"
                                style="background-image:url({{ asset('landing/images/couple-2.jpg') }});"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">First Date</h3>
                                    <span class="date">December 28, 2015</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            <div class="timeline-badge"
                                style="background-image:url({{ asset('landing/images/couple-3.jpg') }});"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">In A Relationship</h3>
                                    <span class="date">January 1, 2016</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->
    
    <div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Khoảnh khắc đáng nhớ</span>
                    <h2>Wedding Gallery</h2>
                    <p>Những bức hình kỉ niệm tuyệt vời nhất của Cô Dâu - Chú Rể, được chụp tại <strong>Phim trường 5 Garden</strong> bởi các Photographer của <strong>TuArt Studio</strong></p>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 animate-box">
                    <div class="gallery-container" id="animated-thumbnails-gallery">
                        @php
                        $list_image = list_image();
                        @endphp
                        @foreach($list_image as $image)
                            <a data-lg-size="{{ $image['landscape'] == 'true' ? '6720-4480' : '4480-6720' }}" class="gallery-item" data-src="{{ asset('storage/upload_images/' . $image['name'] . '.JPG') }}" >
                                <img class="img-responsive" src="{{ asset('storage/upload_images/thumbnail/' . $image['name'] . '_thumb.JPG') }}" />
                            </a>
                        @endforeach
                    </div>
                    
    
                    <div id="inline-gallery-container" class="inline-gallery-container"></div>

                    <!--<ul id="fh5co-gallery-list">

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
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <!--<div hidden id="fh5co-counter" class="fh5co-bg fh5co-counter"
        style="background-image:url({{ asset('landing/images/img_bg_5.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-users"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Estimated Guest</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-user"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">We Catter</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Events Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="fh5co-testimonial">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Best Wishes</span>
                        <h2>Friends Wishes</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="wrap-testimony">
                            <div class="owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ asset('landing/images/couple-1.jpg') }}" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries
                                                Vokalia and Consonantia, there live the blind texts. Separated they
                                                live in Bookmarksgrove right at the coast of the Semantics"</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ asset('landing/images/couple-2.jpg') }}" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries
                                                Vokalia and Consonantia, at the coast of the Semantics, a large
                                                language ocean."</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ asset('landing/images/couple-3.jpg') }}" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, far from the countries Vokalia and Consonantia, there
                                                live the blind texts. Separated they live in Bookmarksgrove right at
                                                the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



</x-layouts.base>
