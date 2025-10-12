<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipur PLL</title>
    <link rel="stylesheet" href="{{ asset('themes-assets/css/uikit.css')}}" />
    <script src="{{ asset('themes-assets/js/uikit.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('themes-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/global.css')}}">
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>

     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .toast {
            opacity: .9 !important;
        }
    </style>
</head>

<body>
	@include('themes.default.common.response')
    <div id="preloader" class="preloader uk-flex uk-flex-middle uk-flex-center">
        <div class="loader"> <img src="{{ asset('themes-assets/img/logo.png') }}" alt="" width="200" class="uk-logo-white"> </div>
    </div>
    <!-- navbar section start-->
    <!-- Header start -->
    <div uk-sticky="start: 300; animation: uk-animation-slide-top; cls-active:uk-navbar-sticky; sel-target:.uk-navbar-container;" uk-scrollspy="target: [uk-scrollspy-class], .uk-navbar, li; cls: uk-animation-slide-bottom-small; delay: 50; repeat: false;">
        <!-- Main Menu -->
        <div class="uk-visible@l uk-main-header-transparent uk-navbar-container uk-navbar-transparent">
            <div class="uk-container uk-container-large shadow-lg">
                <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar="mode: hover; delay-show: 300; delay-hide: 500">
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo " href="{{ url('/') }}">
                            <img src="{{ asset('themes-assets/img/logo.png') }}" alt="" width="120" class="uk-logo-white">
                        </a>
                    </div>
                    <div class="uk-navbar-center ">
                        <ul class="uk-navbar-nav uk-position-relative">
							@foreach ($navigations as $row)
								@if ($row->id != '2')
                            		<li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a></li>
								@else
									<li>
										<a>{{ $row->post_type }}<span uk-navbar-parent-icon></span></a>
										<div class="uk-navbar-dropdown">
											<ul class="uk-nav uk-navbar-dropdown-nav">
												@foreach ($services as $service)
													<li><a href="{{url(geturl($service['uri'],$service['page_key']))}}">{{$service->post_title}} </a></li>
												@endforeach
											</ul>
										</div>
									</li>
								@endif
							@endforeach
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-flex uk-flex-middle uk-flex-right">
                            <div class="uk-footer-icon">
                                <a href="" class="uk-icon-button " uk-icon="facebook" style="background: #342F7F!important; border-radius: 10px;"></a>
                                <a href="" class="uk-icon-button " uk-icon="instagram" style="background: #BA0202!important; border-radius: 10px;"></a>
                                <a href="" class="uk-icon-button " uk-icon="x" style="background: #000!important;border-radius: 10px;"></a>
                                <a href="" class="uk-icon-button" uk-icon="youtube" style="background: #D44139!important; border-radius: 10px;"></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end main menu -->
        <!-- mobile menu -->
        <div class="uk-header-mobile uk-hidden@l shadow-lg" uk-header="">
            <div class="uk-navbar-container bg-white">
                <div class="uk-container uk-container-expand">
                    <nav class="uk-navbar">
                        <div class="uk-navbar-left">
                            <a href="{{ url('/') }}" class=" uk-navbar-item">
                                <img alt="" loading="eager" src="{{ asset('themes-assets/img/logo.png') }}" width="120">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <button class="uk-button uk-button-default uk-can-btn" type="button" uk-toggle="target: #offcanvas-flip"><i class="fa-solid fa-bars"></i></button>

                            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                                <div class="uk-offcanvas-bar uk-width-1-1 uk-padding-remove uk-bg-light">
                                    <div class="uk-offcanvas-header uk-flex uk-flex-between uk-flex-middle">
                                        <div>
                                            <a class="uk-navbar-item uk-logo " href="{{ url('/') }}">
                                                <img src="{{ asset('themes-assets/img/logo.png') }}" alt="" width="120" class="uk-logo-white">
                                            </a>
                                        </div>
                                        <div>
                                            <button class="uk-offcanvas-close" type="button" uk-close></button>
                                        </div>
                                    </div>
                                    <div class="uk-offcanvas-body uk-padding-small">
                                        <ul class="uk-offcanvas-nav uk-position-relative" uk-nav="multiple: true;">
                                            <li><a href="{{ url('/') }}">Home</a></li>
							                @foreach ($navigations as $row)
                                                @if ($row->id != '2')
                            		                <li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a></li>
                                                @else
                                                    <li class="uk-parent">
                                                        <a>Product<span uk-nav-parent-icon></span></a>
                                                        <ul class=" uk-padding-remove">
												            @foreach ($services as $service)
                                                                <li><a href="{{url(geturl($service['uri'],$service['page_key']))}}"> {{$service->post_title}} </a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="uk-offcanvas-footer uk-padding-small uk-padding-remove-top">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-footer-icon">
                                                <a href="" class="uk-icon-button uk-margin-small-right uk-text-white" uk-icon="facebook" style="background: #342F7F!important; border-radius: 10px;"></a>
                                                <a href="" class="uk-icon-button uk-margin-small-right uk-text-white" uk-icon="instagram" style="background: #BA0202!important; border-radius: 10px;"></a>
                                                <a href="" class="uk-icon-button uk-margin-small-right uk-text-white" uk-icon="x" style="background: #000!important;border-radius: 10px;"></a>
                                                <a href="" class="uk-icon-button uk-text-white" uk-icon="youtube" style="background: #D44139!important; border-radius: 10px;"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end mobile menu -->
    </div>
    <!-- Header end -->
    <!-- navbar section end-->