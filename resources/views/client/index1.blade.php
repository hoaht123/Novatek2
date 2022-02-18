@extends('client.layout.client_layout')
@section('title')
<title>Home</title>
@endsection
@section('content')

        <div class="header-empty-space"></div>

        <div class="content-margins grey">
            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="slider-wrapper">
                <div class="swiper-button-prev visible-lg"></div>
                <div class="swiper-button-next visible-lg"></div>
                <div class="swiper-container" data-parallax="1" data-auto-height="1">
                   <div class="swiper-wrapper">
                       <div class="swiper-slide" style="background-image: url({{asset('img/background-4.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-6">
                                        <div class="cell-view simple-banner-height">
                                            <div class="col-xs-b35 col-sm-b70"></div>
                                            <div data-swiper-parallax-x="-600">
                                                <div class="simple-article light transparent size-3">MODERN COLLECTION</div>
                                                <div class="col-xs-b5"></div>
                                            </div>
                                            <div data-swiper-parallax-x="-500">
                                                <h2 class="h2 light">headphones mdx</h2>
                                                <div class="title-underline light left"><span></span></div>
                                            </div>
                                            <div data-swiper-parallax-x="-400">
                                                <div class="simple-article size-4 light transparent">
                                                    <p>Praesent nec finibus massa. Phasellus id auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu mattis est lacinia.</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li>20.000h of high quality music</li>
                                                                <li>perfect insulation</li>
                                                                <li>5 years guaranteed work</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li>consectetur adipiscing elit</li>
                                                                <li>porta tortor sit amet</li>
                                                                <li>feugiat augue placerat</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-b30"></div>
                                            </div>
                                            <div data-swiper-parallax-x="-300">
                                                <div class="buttons-wrapper">
                                                    <div class="simple-article size-5 light transparent">BEST PRICE: $195.00</div>
                                                    <a class="button size-2 style-1" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="{{ asset('img/icon-2.png')}}"alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-b35 col-sm-b70"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-product-preview align-left">
                                    <div class="product-preview-shortcode light">
                                        <div class="preview">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="entry full-size swiper-lazy active" data-background="img/product-preview-14.png"></div>
                                            <div class="entry full-size swiper-lazy" data-background="img/product-preview-13.png"></div>
                                            <div class="entry full-size swiper-lazy" data-background="img/product-preview-12.png"></div>
                                        </div>
                                        <div class="sidebar valign-middle" data-swiper-parallax-x="-300">
                                            <div class="valign-middle-content">
                                                <div class="entry active"><img src="{{ asset('img/product-71.pn')}}g" alt="" /></div>
                                                <div class="entry"><img src="{{ asset('img/product-72.pn')}}g" alt="" /></div>
                                                <div class="entry"><img src="{{ asset('img/product-73.pn')}}g" alt="" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b80 col-sm-b0"></div>
                            </div>
                       </div>
                       <div class="swiper-slide" style="background-image: url({{asset('img/background-3.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="cell-view simple-banner-height">
                                            <div class="col-xs-b35 col-sm-b70"></div>
                                            <div data-swiper-parallax-x="-600">
                                                <div class="simple-article light transparent size-3">MODERN COLLECTION</div>
                                                <div class="col-xs-b5"></div>
                                            </div>
                                            <div data-swiper-parallax-x="-500">
                                                <h2 class="h2 light">headphones mdx</h2>
                                                <div class="title-underline light left"><span></span></div>
                                            </div>
                                            <div data-swiper-parallax-x="-400">
                                                <div class="simple-article size-4 light transparent">
                                                    <p>Praesent nec finibus massa. Phasellus id auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu mattis est lacinia.</p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li>20.000h of high quality music</li>
                                                                <li>perfect insulation</li>
                                                                <li>5 years guaranteed work</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li>consectetur adipiscing elit</li>
                                                                <li>porta tortor sit amet</li>
                                                                <li>feugiat augue placerat</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-b30"></div>
                                            </div>
                                            <div data-swiper-parallax-x="-300">
                                                <div class="buttons-wrapper">
                                                    <div class="simple-article size-5 light transparent">BEST PRICE: $195.00</div>
                                                    <a class="button size-2 style-1" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="{{ asset('img/icon-2.png')}}"alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-b35 col-sm-b70"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-product-preview">
                                    <div class="product-preview-shortcode light">
                                        <div class="preview">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="entry full-size swiper-lazy active" data-background="img/product-preview-14.png"></div>
                                            <div class="entry full-size swiper-lazy" data-background="img/product-preview-13.png"></div>
                                            <div class="entry full-size swiper-lazy" data-background="img/product-preview-12.png"></div>
                                        </div>
                                        <div class="sidebar valign-middle" data-swiper-parallax-x="-300">
                                            <div class="valign-middle-content">
                                                <div class="entry active"><img src="{{ asset('img/product-71.pn')}}g" alt="" /></div>
                                                <div class="entry"><img src="{{ asset('img/product-72.pn')}}g" alt="" /></div>
                                                <div class="entry"><img src="{{ asset('img/product-73.pn')}}g" alt="" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b80 col-sm-b0"></div>
                            </div>
                       </div>
                   </div>
                   <div class="swiper-pagination swiper-pagination-white hidden-lg"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="container">
                <div class="text-center">
                    <div class="simple-article size-3 grey uppercase col-xs-b5">accessories</div>
                    <div class="h2">choosing in one style</div>
                    <div class="title-underline center"><span></span></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="container">
                <div class="small-items-line">
                    <div class="row nopadding">
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-74.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-75.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="product-label red">20% discount</div>
                                <div class="preview">
                                    <img src="{{ asset('img/product-76.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="color">$24.00</span> <span class="line-through">$32.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-77.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-78.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-79.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="color">$24.00</span> <span class="line-through">$32.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-80.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-81.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="product-label green">Best Price</div>
                                <div class="preview">
                                    <img src="{{ asset('img/product-82.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="color">$24.00</span> <span class="line-through">$32.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-83.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-84.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <div class="product-shortcode style-7">
                                <div class="preview">
                                    <img src="{{ asset('img/product-85.jpg')}}" alt="" />
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-1 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('img/icon-3.png')}}"alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                                    <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-2"><span class="color">$24.00</span> <span class="line-through">$32.00</span></div>
                                </div>
                                <div class="icons">
                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty-space col-xs-b30"></div>
                <div class="text-center">
                    <a class="button size-2 style-3" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt=""></span>
                            <span class="text">view all accessories</span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-xs-b15 col-md-b0">
                        <div class="banner-shortcode style-4 rounded-image text-center" style="background-image: url({{asset('img/background-5.jpg')}});">
                            <div class="valign-middle-cell">
                                <div class="valign-middle-content">
                                    <div class="simple-article size-3 light transparent uppercase col-xs-b5">RELIABILITY</div>
                                    <h3 class="h3 light">perfect soundfor everyone</h3>
                                    <div class="title-underline light center"><span></span></div>
                                    <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="angle-left hidden-xs"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-b15 col-md-b0">
                        <div class="banner-shortcode style-4 rounded-image text-center" style="background-image: url({{asset('img/background-6.jpg')}});">
                            <div class="valign-middle-cell">
                                <div class="valign-middle-content">
                                    <div class="simple-article size-3 light transparent uppercase col-xs-b5">high quality</div>
                                    <h3 class="h3 light">choise of professionals</h3>
                                    <div class="title-underline light center"><span></span></div>
                                    <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="angle-left hidden-xs"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-b15 col-md-b0">
                        <div class="banner-shortcode style-4 rounded-image text-center" style="background-image: url({{asset('img/background-7.jpg')}});">
                            <div class="valign-middle-cell">
                                <div class="valign-middle-content">
                                    <div class="simple-article size-3 light transparent uppercase col-xs-b5">convenience</div>
                                    <h3 class="h3 light">satisfaction guarantted</h3>
                                    <div class="title-underline light center"><span></span></div>
                                    <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{ asset('img/icon-1.png')}}"alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="angle-left hidden-xs"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6">
                        <div class="cell-view simple-banner-height text-center">
                            <div class="empty-space col-sm-b35"></div>
                            <div class="simple-article grey uppercase size-5 col-xs-b5"><span class="color">special offers</span> for subscribers</div>
                            <h3 class="h3 col-xs-b15">new offers every week <span class="color">+</span> discount system <span class="color">+</span> best prices</h3>
                            <div class="simple-article size-3 col-xs-b25 col-sm-b50">Praesent nec finibus massa. Phasellus id auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu mattis est lacinia sit amet.</div>
                            <div class="single-line-form">
                                <input class="simple-input" type="text" value="" placeholder="Enter your email">
                                <div class="button size-2 style-3">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt=""></span>
                                        <span class="text">submit</span>
                                    </span>
                                    <input type="submit" value="">
                                </div>
                            </div>
                            <div class="empty-space col-xs-b35"></div>
                        </div>
                    </div>
                </div>
                <div class="row-background left hidden-xs">
                    <img src="{{ asset('img/background-8.jpg')}}" alt="" />
                </div>
            </div>
        </div>
@endsection
@section('pop')
    <div class="popup-wrapper">
        <div class="bg-layer"></div>

        <div class="popup-content" data-rel="1">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Log in</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your email" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Enter password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b5"></div>
                            <a class="simple-link">Forgot password?</a>
                            <div class="empty-space col-xs-b5"></div>
                            <a class="simple-link">register now</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="button size-2 style-3" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>  
                        </div>
                    </div>
                    <div class="popup-or">
                        <span>or</span>
                    </div>
                    <div class="row m5">
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button facebook-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">google+</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content" data-rel="2">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">register</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your name" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your email" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Enter password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Repeat password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-7 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b15"></div>
                            <label class="checkbox-entry">
                                <input type="checkbox" /><span><a href="#">Privacy policy agreement</a></span>
                            </label>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a class="button size-2 style-3" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>  
                        </div>
                    </div>
                    <div class="popup-or">
                        <span>or</span>
                    </div>
                    <div class="row m5">
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button facebook-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{ asset('img/icon-4.png')}}"alt="" /></span>
                                    <span class="text">google+</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content" data-rel="3">
            <div class="layer-close"></div>
            <div class="popup-container size-2">
                <div class="popup-align">
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0">
                            
                            <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                <div class="swiper-container swiper-control-top">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-4.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-5.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-6.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-7.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-8.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-9.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-10.jpg"></div>
                                       </div>
                                   </div>
                                </div>

                                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-4_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-5_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-6_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-7_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-8_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-9_.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('img/product-preview-10_.jpg')}}" alt="" />
                                            </div>
                                       </div>

                                   </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                            <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                            <div class="row col-xs-b25">
                                <div class="col-sm-6">
                                    <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="rate-wrapper align-inline">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                                </div>
                            </div>
                            <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">size:</div>
                                </div>
                                <div class="col-sm-9">
                                    <select class="SlectBox">
                                        <option disabled="disabled" selected="selected">Choose size</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title">color:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="color-selection size-1">
                                        <div class="entry active" style="color: #a7f050;"></div>
                                        <div class="entry" style="color: #50e3f0;"></div>
                                        <div class="entry" style="color: #eee;"></div>
                                        <div class="entry" style="color: #4d900c;"></div>
                                        <div class="entry" style="color: #edb82c;"></div>
                                        <div class="entry" style="color: #7d3f99;"></div>
                                        <div class="entry" style="color: #3481c7;"></div>
                                        <div class="entry" style="color: #bf584b;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">quantity:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="quantity-select">
                                        <span class="minus"></span>
                                        <span class="number">1</span>
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row m5 col-xs-b40">
                                <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                    <a class="button size-2 style-2 block" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{ asset('img/icon-2.png')}}"alt=""></span>
                                            <span class="text">add to cart</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                        <span class="text">add to favourites</span>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-2">share:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="follow light">
                                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

    </div>
@endsection


