@extends('themes.default.common.master')
@section('content')

<!--------------------------- banner section end ------------------------------------->
<section class="uk-homepage-banner" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  h3,h1;  delay: 400; repeat: false;">
    <div class="uk-position-relative" id="ytbg3" data-youtube="{{ $banners->link }}" data-ytbg-mute-button="true" data-ytbg-autoplay="true" data-ytbg-muted="true" data-ytbg-loop="true"></div>
    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-column uk-flex-right">
        <div class=" uk-width-1-1 uk-width-2-3@l  uk-margin-large-top">
            <h3 class="uk-margin-remove uk-border-white">{{ $banners->title }}</h3>
            <h1 class="uk-margin-small-top uk-margin-large-bottom">{{ $banners->content }}</h1>
        </div>
    </div>
</section>
<!--------------------------- banner section end ------------------------------------->

<!--------------------------- about section start ------------------------------------->
<section class="uk-homepage-about uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid">
            <div class="uk-width-1-3@m" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  div;  delay: 400; repeat: false;">
                <div>
                    <img src="{{$about->banner ? asset('uploads/medium/'.$about->banner) : asset('themes-assets/img/about.webp')}}" class="uk-about-img" loading="lazy" alt="about">
                    <div class="uk-circle-section">
                        <div class="uk-circle-inner-section">
                            <p>12+ <br> Years</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-3@m" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  div;  delay: 200; repeat: false;">
                <div>
                    <h3 class=" uk-margin-small-bottom uk-text-secondary uk-border-secondary">About us</h3>
                    <h2 class="uk-margin-remove-top uk-text-primary">{!! $about->caption !!}</h2>
                    <div class="uk-bg-light border-rounded uk-padding-small p-26">
                        {!! $about->content !!}
                        <a href="{{ url('page/' . posttype_url($about->uri)) }}" class="uk-button uk-primary-btn uk-border-pill">
                            <div class="uk-flex uk-flex-middle uk-flex-center" style="gap:10px;">
                                <span class="uk-btn-text">EXPLORE MORE</span>
                                <span class="uk-btn-icon">
                                    <i class="fa-solid fa-paw"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid uk-margin-top ">
                        <div class="uk-grid uk-grid-collapse uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-margin-bottom">
                            <div class="uk-width-1-6 uk-width-1-4@m"><img src="{{asset('themes-assets/img/icon/mission.png')}}" loading="lazy" height="60" width="60" alt=""></div>
                            <div class="uk-width-5-6 uk-width-3-4@m">
                                <h3 class="uk-text-primary uk-text-bold uk-margin-remove">{{ $mission->post_title }}</h3>
                                <p class="uk-margin-remove-top uk-margin-small-bottom four-line" style="font-size:14px;">
                                    {{ $mission->post_excerpt }}
                                </p>
                                <a href="{{ url('page/' . posttype_url($missions->uri)) }}" class="uk-know-btn"> Know More <span uk-icon="icon:  triangle-right"></span></a>
                            </div>
                        </div>

                        <div class="uk-grid uk-grid-collapse border-left uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-margin-bottom">
                            <div class="uk-width-1-6 uk-width-1-4@m"><img src="{{asset('themes-assets/img/icon/vision.png')}}" loading="lazy" height="60" width="60" alt=""></div>
                            <div class="uk-width-5-6 uk-width-3-4@m">
                                <h3 class="uk-text-primary uk-text-bold uk-margin-remove">{{ $vision->post_title }}</h3>
                                <p class="uk-margin-remove-top uk-margin-small-bottom four-line" style="font-size:14px;">
                                    {{ $vision->post_excerpt }}
                                </p>
                                <a href="{{ url('page/' . posttype_url($missions->uri)) }}" class="uk-know-btn"> Know More <span uk-icon="icon:  triangle-right"></span></a>
                            </div>
                        </div>

                        <div class="uk-grid uk-grid-collapse border-left uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-margin-bottom">
                            <div class="uk-width-1-6 uk-width-1-4@m"><img src="{{asset('themes-assets/img/icon/goal.png')}}" loading="lazy" height="60" width="60" alt=""></div>
                            <div class="uk-width-5-6 uk-width-3-4@m">
                                <h3 class="uk-text-primary uk-text-bold uk-margin-remove">{{ $goal->post_title }}</h3>
                                <p class="uk-margin-remove-top uk-margin-small-bottom four-line" style="font-size:14px;">
                                    {{ $goal->post_excerpt }}
                                </p>
                                <a href="{{ url('page/' . posttype_url($missions->uri)) }}" class="uk-know-btn"> Know More <span uk-icon="icon:  triangle-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------- about section end ------------------------------------->

<!--------------------------- commitment section start ------------------------------------->
<section class="uk-commitment-about uk-bg-light uk-section">
    <div class="uk-container">
        <div class="uk-flex uk-flex-column uk-flex-middle uk-margin-bottom" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  h3,h2;  delay: 400; repeat: false;">
            <h3 class=" uk-margin-small-bottom uk-text-secondary uk-border-secondary">commitment</h3>
            <h2 class="uk-margin-remove-top uk-text-primary">The Commitment We Made For</h2>
        </div>
        <div uk-slider="autoplay: true; autoplay-interval: 2000">
            <div class="uk-position-relative uk-visible-toggle " tabindex="-1">
                <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-child-width-1-5@l uk-grid uk-grid-collapse" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  div;  delay: 100; repeat: false;">
                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img1.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">dairy cattle</h3>
                        </div>
                    </div>

                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img2.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">Equines</h3>
                        </div>
                    </div>

                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img3.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">Poultry</h3>
                        </div>
                    </div>

                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img4.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">Swines</h3>
                        </div>
                    </div>

                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img1.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">dairy cattle</h3>
                        </div>
                    </div>

                    <!--  -->
                    <div>
                        <div class="uk-commit-img uk-flex uk-flex-center uk-margin-small-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="assets/img/commit/img2.jpg" class="uk-transition-scale-up uk-transition-opaque" loading="lazy" width="400" height="600" alt="">
                        </div>
                        <div class="uk-text-center uk-commit-text">
                            <h3 class="uk-text-bold uk-text-primary ">Equines</h3>
                        </div>
                    </div>

                </div>
                <a class="uk-position-center-left uk-position-small uk-prev-btn" href uk-slidenav-previous uk-slider-item="previous" style=" left: -15px;"></a>
                <a class="uk-position-center-right uk-position-small uk-next-btn " href uk-slidenav-next uk-slider-item="next" style=" right: -15px;"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
    </div>
</section>
<!--------------------------- commitment section end ------------------------------------->

<!--------------------------- quality section start ------------------------------------->
<section class="uk-quality-section uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid">
            <div class="uk-width-1-3@m">
                <div class="uk-margin-bottom" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  h3,h2, img;  delay: 400; repeat: false;">
                    <h3 class=" uk-margin-small-bottom uk-text-secondary uk-border-secondary">R&D and Quality Strength</h3>
                    <h2 class="uk-margin-remove-top uk-text-primary">This Defines Our Quality of Research & Development</h2>

                    <div class="uk-270 uk-inline-clip uk-transition-toggle border-rounded" tabindex="0">
                        <img src="assets/img/commit.jpg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-width-2-3@m" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target: div;  delay: 100; repeat: false;">
                <div class="uk-container timeline">

                    <div class="timeline-item">
                        <div class="timeline-icon icon-blue">
                            <img src="assets/img/icon/hen.png" height="30" width="30" alt="">
                        </div>
                        <div class="timeline-content">
                            <span class="timeline-number">01</span>
                            Determination Of Mycotoxin By LCMS
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-icon icon-green">
                            <img src="assets/img/icon/cow.png" height="40" width="40" alt="">
                        </div>
                        <div class="timeline-content">
                            <span class="timeline-number">02</span>
                            Determination Of Heavy Metal By Atomic Absorption Spectroscopy
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-icon icon-blue">
                            <img src="assets/img/icon/buffalo.png" height="40" width="40" alt="">
                        </div>
                        <div class="timeline-content">
                            <span class="timeline-number">03</span>
                            Well Equipped Microbiology Laboratory
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-icon icon-green">
                            <img src="assets/img/icon/pig.png" height="40" width="40" alt="">
                        </div>
                        <div class="timeline-content">
                            <span class="timeline-number">04</span>
                            Product Stability Testing
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-icon icon-blue">
                            <img src="assets/img/icon/dog.png" height="40" width="40" alt="">
                        </div>
                        <div class="timeline-content">
                            <span class="timeline-number">05</span>
                            Wet Chemistry Lab
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------- quality section end ------------------------------------->

<!--------------------------- strenght section start ------------------------------------->
<section class=" uk-strenght-section ">
    <div class="uk-container uk-container-large">
        <div class="uk-grid" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  div;  delay: 400; repeat: false;">
            <div class="uk-width-2-3@m uk-same-height uk-margin-bottom">
                <h3 class=" uk-margin-small-bottom uk-text-secondary uk-border-secondary">our strength</h3>
                <h2 class="uk-margin-remove-top uk-text-primary">Quality Assurance / Quality Management</h2>
                <div class="uk-bg-light border-rounded uk-padding-small p-26">
                    <p>KPL and Team are inspired by the purpose: “Caring and Curing Animal Health with passion and Quality”.This care is essential to enhance the quality of life for animals while also safeguarding human health by preventing the spread of zoonotic diseases and cordially believe this work is core to our responsibilities as team and a business.Our goal is to become the leading veterinary industry in Nepal in the field of Animal Feed Supplements and Quality Medicines and to expand our distribution network to reach more customers across the Globe.We aspire to be acknowledged as an industry leader, both nationally and internationally, with the goal of contributing to the overall advancement of the animal and poultry sectors in Nepal through our dedicated products and services.We aspire to be acknowledged as an industry leader, both nationally and internationallys.</p>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div>
                    <img src="assets/img/strenght.jpg" class="uk-strenght-img" loading="lazy" alt="strenght">
                    <div class="uk-circle-section1">
                        <div class="uk-circle-inner-section1">
                            <p>ALL OVER <br> NEPAL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------- strenght section end ------------------------------------->

<!--------------------------- video section start ------------------------------------->
<div class="uk-container uk-container-large uk-video-section  uk-margin-large-bottom" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  iframe;  delay: 400; repeat: false;">
    <iframe
        src="https://www.youtube.com/embed/CP5k2gRabvc?si=n2PudHgjFHMvDxH0"
        title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        class="border-rounded"
        allowfullscreen>
    </iframe>
</div>
<!--------------------------- video section end ------------------------------------->

<!--------------------------- vision section start ------------------------------------->
<section class="uk-vision-section uk-section ">
    <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-column uk-flex-middle uk-margin-bottom" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target: h3,h2;  delay: 400; repeat: false;">
            <h3 class=" uk-margin-small-bottom uk-text-white uk-border-secondary">teams</h3>
            <h2 class="uk-margin-remove-top uk-text-white">Our Visionary Team</h2>
        </div>
        <div class="uk-child-width-1-2@m" uk-grid uk-height-match=".same-height" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  div;  delay: 400; repeat: false;">
            <div class="uk-inline-clip uk-transition-toggle border-rounded" tabindex="0">
                <img src="assets/img/team.png" class="uk-transition-scale-up uk-transition-opaque border-rounded same-height uk-img-cover" alt="" loading="lazy">
            </div>
            <div class="same-height">
                <h2 class="f-20 uk-margin-remove uk-text-white">a visionary team empowering animal health in nepal</h2>
                <p class="uk-margin-small-top uk-text-white">KPL is driven by a singular purpose: “Caring and Curing Animal Health with passion and Quality”. At KPL, we are more than just a leader in veterinary pharmaceuticals—we are a dedicated partner in the health and well-being of animals. KPL and Team aim to provide innovative, high-quality solutions that support the care of pets, livestock, and wildlife, ensuring they live healthier, happier lives. With a commitment to sustainability,</p>
            </div>
        </div>
        <div class="uk-margin-top uk-flex uk-flex-center" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  a;  delay: 400; repeat: false;">
            <a href="mission.php" class="uk-button uk-white-btn uk-border-pill">
                <div class="uk-flex uk-flex-middle uk-flex-center" style="gap:10px;">
                    <span class="uk-btn-text">EXPLORE MORE</span>
                    <span class="uk-btn-icon">
                        <i class="fa-solid fa-paw"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>
<!--------------------------- vision section end ------------------------------------->

<!--------------------------- blog section start ------------------------------------->
<section class="uk-blog-section uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid">
            <div class="uk-width-2-3@m" uk-scrollspy=" cls: uk-animation-slide-bottom-small; target:  h3,h2;  delay: 400; repeat: false;">
                <h3 class=" uk-margin-small-bottom uk-text-secondary uk-border-secondary">our blogs</h3>
                <h2 class="uk-margin-remove-top uk-text-primary">{{ $blog->uid }}</h2>
            </div>
            <div class="uk-width-1-3@m  uk-text-left uk-text-right@m uk-visible@m">
                <a href="{{ url('page/' . posttype_url($blog->uri)) }}" class="uk-button uk-primary-btn uk-border-pill uk-margin-top">
                    <div class="uk-flex uk-flex-middle uk-flex-center" style="gap:10px;">
                        <span class="uk-btn-text">EXPLORE MORE</span>
                        <span class="uk-btn-icon">
                            <i class="fa-solid fa-paw"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="uk-child-width-1-2@m" uk-grid uk-scrollspy=" cls: uk-animation-slide-bottom-small; target: .block;  delay: 400; repeat: false;">
            @foreach($blogs as $row)
                @if($loop->first)
                    <div class="block">
                        <div>
                            <a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="uk-blog-section uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="{{$row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/blog1.png')}}" class="uk-blog-section-img uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="{{ $row->post_title }}">
                            </a>
                        </div>
                        <div class="uk-bg-light uk-padding-small uk-margin-top uk-border-bottom">
                            <div class="uk-flex" style="gap:15px;">
                                @if ($row->associated_title)
                                    <div class="uk-text-uppercase">
                                        <i class="fa-solid fa-user uk-text-secondary uk-margin-small-right"></i>
                                        {{ $row->associated_title }}
                                    </div>
                                @endif
                                <div class="uk-text-uppercase">
                                    <i class="fa-solid fa-calendar uk-text-secondary uk-margin-small-right"></i>
                                    {{ $row->created_at->format('d F, Y') }}
                                </div>
                            </div>
                            <a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="uk-blog-text">
                                <h2 class="f-20 uk-margin-remove two-line">{{ $row->post_title }}</h2>
                            </a>
                            <p class="uk-margin-remove two-line">
                                {{ $row->post_excerpt }}
                            </p>
                            <a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="uk-button uk-primary-btn uk-border-pill uk-margin-top">
                                <div class="uk-flex uk-flex-middle uk-flex-center" style="gap:10px;">
                                    <span class="uk-btn-text">EXPLORE MORE</span>
                                    <span class="uk-btn-icon">
                                        <i class="fa-solid fa-paw"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                @else
                    @if ($loop->iteration == 2)
                        <div class="block">
                    @endif
                        <div class="uk-bg-light border-rounded uk-margin-bottom">
                            <div class="uk-grid uk-grid-small ">
                                <div class="uk-width-1-3@s">
                                    <a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="uk-width-1-1  uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="{{$row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/blog2.webp')}}" class="uk-blog-small-img uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="{{ $row->post_title }}">
                                    </a>
                                </div>
                                <div class="uk-width-2-3@s uk-flex uk-flex-column uk-flex-center">
                                    <div class="uk-blog-small-text">
                                        <div class="uk-flex" style="gap:15px;">
                                            @if ($row->associated_title)
                                                <div class="uk-text-uppercase">
                                                    <i class="fa-solid fa-user uk-text-secondary uk-margin-small-right"></i>
                                                    {{ $row->associated_title }}
                                                </div>
                                            @endif
                                            <div class="uk-text-uppercase">
                                                <i class="fa-solid fa-calendar uk-text-secondary uk-margin-small-right"></i>
                                                {{ $row->created_at->format('d F, Y') }}
                                            </div>
                                        </div>
                                        <a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="uk-blog-text">
                                            <h2 class="f-18 uk-margin-remove two-line">{{ $row->post_title }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if($loop->last)
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
        <div class="uk-hidden@s">
            <a href="{{ url('page/' . posttype_url($blog->uri)) }}" class="uk-button uk-primary-btn uk-border-pill uk-margin-top">
                <div class="uk-flex uk-flex-middle uk-flex-center" style="gap:10px;">
                    <span class="uk-btn-text">EXPLORE MORE</span>
                    <span class="uk-btn-icon">
                        <i class="fa-solid fa-paw"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>
<!--------------------------- blog section end ------------------------------------->

@endsection