@extends('client.layout.client_layout')
@section('title')
    <title>Elements</title>
@endsection
@section('content')

        <div class="header-empty-space"></div>

        <div class="container">
            <div class="empty-space col-xs-b20"></div>

            <div class="buttons-wrapper">
                <a class="button size-2 style-2" href="#">
                    <span class="button-wrapper open-popup" data-rel="3">
                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                        <span class="text">Product Popup Static</span>
                    </span>
                </a>
                <a class="button size-2 style-3 open-popup-ajax" href="_ajax_product.html">
                    <span class="button-wrapper">
                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                        <span class="text">Product Popup Ajax</span>
                    </span>
                </a>
            </div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="h1">HEADING <span class="color">H1 (70,56)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="h2">HEADING <span class="color">H2 (40,46)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="h3">HEADING <span class="color">H3 (30,34)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="h4">HEADING <span class="color">H4 (18,24)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="h5">HEADING <span class="color">H5 (16,22)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="h6">HEADING <span class="color">H6 (13,34)</span></div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div style="background: #222; padding: 30px;">
                        <div class="h1 light">HEADING <span class="color">H1 (70,56)</span></div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="h2 light">HEADING <span class="color">H2 (40,46)</span></div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="h3 light">HEADING <span class="color">H3 (30,34)</span></div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="h4 light">HEADING <span class="color">H4 (18,24)</span></div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="h5 light">HEADING <span class="color">H5 (16,22)</span></div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="h6 light">HEADING <span class="color">H6 (13,34)</span></div>
                    </div>
                </div>
            </div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="h2">HEADING line left</div>
                    <div class="title-underline left"><span></span></div>
                    <div class="text-center">
                        <div class="h2">HEADING line center</div>
                        <div class="title-underline center"><span></span></div>
                    </div>
                    <div class="text-right">
                        <div class="h2">HEADING line right</div>
                        <div class="title-underline right"><span></span></div>
                    </div>
                </div>
            </div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="simple-article size-1">
                        <p><b>(11,18)</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-4">
                    <div class="simple-article size-2">
                        <p><b>(13,20)</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-4">
                    <div class="simple-article size-3">
                        <p><b>(14,22)</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="simple-article size-4">
                        <p><b>(16,24)</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-4">
                    <div class="simple-article size-5">
                        <p><b>(18,24)</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div style="background: #222; padding: 30px;">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="simple-article light size-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="simple-article light transparent size-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="simple-article light fulltransparent size-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                    </div>
                </div>
            </div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="simple-article grey size-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-4">
                    <div class="simple-article dark size-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-4">
                    <div class="simple-article color size-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit augue lacus, id auctor elit placerat id. Nulla ultricies augue at felis elementum, sodales rhoncus metus sagittis.</p>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">product shortcodes</div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-9">
                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-7.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-8.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-9.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-6 col-md-3">
                                <a class="product-shortcode style-2">
                                    <span class="preview"><img src="img/product-13.png" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a class="product-shortcode style-2">
                                    <span class="preview"><img src="img/product-14.png" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a class="product-shortcode style-2">
                                    <span class="preview"><img src="img/product-15.png" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a class="product-shortcode style-2">
                                    <span class="preview"><img src="img/product-16.png" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-6">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/product-21.jpg" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-23.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                            <div class="countdown" data-end="Sep,1,2017"></div>
                                        </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 15%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">59</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">371</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="img/product-22.jpg" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="img/product-24.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                            <div class="countdown" data-end="Sep,1,2017"></div>
                                        </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1 small">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-49.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1 small">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-50.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1 small">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-51.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-6">
                                <div class="product-shortcode style-5">
                                    <div class="product-label green">best price</div>
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="preview">
                                        <div class="swiper-container" data-loop="1">
                                            <div class="swiper-button-prev style-1"></div>
                                            <div class="swiper-button-next style-1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/product-63.jpg" alt="" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/product-64.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="content-animate">
                                        <div class="title">
                                            <div class="shortcode-rate-wrapper">
                                                <div class="rate-wrapper align-inline">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-shortcode style-5">
                                    <div class="product-label red">20% discount</div>
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="preview">
                                        <div class="swiper-container" data-loop="1">
                                            <div class="swiper-button-prev style-1"></div>
                                            <div class="swiper-button-next style-1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/product-64.jpg" alt="" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/product-63.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="content-animate">
                                        <div class="title">
                                            <div class="shortcode-rate-wrapper">
                                                <div class="rate-wrapper align-inline">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-5 small">
                                    <div class="product-label green">best price</div>
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="preview">
                                        <div class="swiper-container" data-loop="1">
                                            <div class="swiper-button-prev style-1"></div>
                                            <div class="swiper-button-next style-1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/product-59.jpg" alt="" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/product-59.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">Modern edition</a></div>
                                        <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>

                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-5 small">
                                    <div class="product-label red">20% discount</div>
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="preview">
                                        <div class="swiper-container" data-loop="1">
                                            <div class="swiper-button-prev style-1"></div>
                                            <div class="swiper-button-next style-1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/product-58.jpg" alt="" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/product-59.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">Modern edition</a></div>
                                        <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>

                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-5 small">
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="preview">
                                        <div class="swiper-container" data-loop="1">
                                            <div class="swiper-button-prev style-1"></div>
                                            <div class="swiper-button-next style-1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/product-60.jpg" alt="" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/product-59.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">Modern edition</a></div>
                                        <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>

                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-6">
                                <div class="product-shortcode style-1 big">
                                    <div class="product-label green">best price</div>
                                    <div class="preview">
                                        <img src="img/product-62.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">MODERN EDITION</a></div>
                                        <div class="h6 animate-to-green"><a href="#">modern beat ht</a></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada etiam a venenatis ipsum</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4"><span class="dark">$155.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-shortcode style-1 big">
                                    <div class="product-label red">20% discount</div>
                                    <div class="preview">
                                        <img src="img/product-65.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">MODERN EDITION</a></div>
                                        <div class="h6 animate-to-green"><a href="#">modern beat ht</a></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada etiam a venenatis ipsum</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4"><span class="dark">$155.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding" style="padding: 30px 0; background: #fff;">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-7">
                                    <div class="product-label green">best price</div>
                                    <div class="preview">
                                        <img src="img/product-79.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-1 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-1 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
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
                            <div class="col-sm-4">
                                <div class="product-shortcode style-7">
                                    <div class="product-label red">20% discount</div>
                                    <div class="preview">
                                        <img src="img/product-80.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-1 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-1 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
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
                            <div class="col-sm-4">
                                <div class="product-shortcode style-7">
                                    <div class="preview">
                                        <img src="img/product-81.jpg" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-1 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-1 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
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

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding">
                            <div class="col-sm-6">
                                <div class="product-shortcode style-6">
                                    <div class="content">
                                        <div class="title">
                                            <div class="simple-article size-3 color col-xs-b5"><a href="#">Modern edition</a></div>
                                            <div class="h5 animate-to-green"><a href="#">modern beat nine</a></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2 animate-to-fulltransparent">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-64.jpg" alt="" />
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 grey animate-to-fulltransparent">From <span class="color">$155.00</span></div>
                                        </div>
                                        <div class="preview-button">
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-shortcode style-6">
                                    <div class="content">
                                        <div class="title">
                                            <div class="simple-article size-3 color col-xs-b5"><a href="#">Modern edition</a></div>
                                            <div class="h5 animate-to-green"><a href="#">modern beat nine</a></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2 animate-to-fulltransparent">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-63.jpg" alt="" />
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 grey animate-to-fulltransparent">From <span class="color">$155.00</span></div>
                                        </div>
                                        <div class="preview-button">
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b20"></div>

                    <div style="padding: 15px; background: #f7f7f7;">
                        <div class="row nopadding" style="padding: 30px 0; background: #fff;">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-8">
                                    <a class="preview" href="#">
                                        <img src="img/thumbnail-27.jpg" alt="" />
                                        <img src="img/product-132.jpg" alt="" />
                                    </a>
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="h4">sound<span class="color">max</span> relax</h4>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article size-2">Quisque rhoncus orci vitae nisl rutrum rutrum lesuada</div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$98.00</div>
                                        </div>
                                        <a class="button size-1 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                <span class="text">learn more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-8">
                                    <a class="preview" href="#">
                                        <img src="img/thumbnail-26.jpg" alt="" />
                                        <img src="img/product-132.jpg" alt="" />
                                    </a>
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="h4">sound<span class="color">max</span> relax</h4>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article size-2">Quisque rhoncus orci vitae nisl rutrum rutrum lesuada</div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$98.00</div>
                                        </div>
                                        <a class="button size-1 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                <span class="text">learn more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="product-shortcode style-4 clearfix">
                        <a class="preview" href="#"><img src="img/product-28.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 clearfix">
                        <a class="preview" href="#"><img src="img/product-29.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 clearfix">
                        <a class="preview" href="#"><img src="img/product-30.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$32.00</span></div>
                        </div>
                    </div>
                    <div class="col-xs-b20"></div>

                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-28.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-29.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-30.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$32.00</span></div>
                        </div>
                    </div>
                    <div class="col-xs-b20"></div>
                    
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">buttons</div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-3">
                    <div style="background: #222; padding: 15px;">
                        <a class="button size-1 style-1" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="img/icon-1.png" alt="" /></span>
                                <span class="text">learn more</span>
                            </span>
                        </a>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-2" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-2.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-3" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-3.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-5" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-2.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div style="background: #222; padding: 15px;">
                        <a class="button size-2 style-1" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="img/icon-1.png" alt="" /></span>
                                <span class="text">learn more</span>
                            </span>
                        </a>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-2 style-2" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-2.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-2 style-3" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-3.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-2 style-5" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-2.png" alt="" /></span>
                            <span class="text">add to cart</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div style="background: #222; padding: 15px;">
                        <a class="button size-1 style-1" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                <span class="text">"font awesome"</span>
                            </span>
                        </a>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-2" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <span class="text">"font awesome"</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-3" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                            <span class="text">"font awesome"</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-1 style-5" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                            <span class="text">"font awesome"</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="button size-2 style-4 block" href="#" style="background: #3b5998;">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                            <span class="text">facebook</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-2 style-4 block" href="#" style="background: #5ea9dd;">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                            <span class="text">twitter</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <a class="button size-2 style-4 block" href="#" style="background: #dd4d42;">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                            <span class="text">google+</span>
                        </span>
                    </a>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-3">
                    <div class="button-close"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">form elements</div>
            
            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div style="border: 1px #eee solid; padding: 15px;">
                        <input class="simple-input" type="text" value="" placeholder="Your email" />
                        <div class="empty-space col-xs-b20"></div>
                        <input class="simple-input invalid" type="password" value="" placeholder="Your password" />
                        <div class="empty-space col-xs-b20"></div>
                        <select class="SlectBox">
                            <option disabled="disabled" selected="selected">Choose size</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <div class="empty-space col-xs-b20"></div>
                        <textarea class="simple-input" placeholder="Message"></textarea>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="single-line-form">
                            <input class="simple-input" type="text" value="" placeholder="Your email" />
                            <div class="button size-2 style-3">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="" />
                            </div>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="input-file-wrapper">
                            <div class="simple-input" data-placeholder="Attach your resume">Attach your resume</div>
                            <input type="file" onchange="$(this).parent().addClass('active').find('.simple-input').text($(this).val().split( '\\' ).pop()); if($(this).val()=='') $(this).next().click();" />
                            <div class="file-remove"></div>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Product Lorem Ipsum</span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span><a href="#">Privacy policy agreement</a></span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry radio">
                            <input type="radio" name="1" checked /><span>Product Lorem Ipsum</span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry radio">
                            <input type="radio" name="1" /><span>Product Dolor</span>
                        </label>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-6">
                    <div style="background: #b8cd07; padding: 15px;">
                        <input class="simple-input light" type="text" value="" placeholder="Your email" />
                        <div class="empty-space col-xs-b20"></div>
                        <input class="simple-input light invalid" type="password" value="" placeholder="Your password" />
                        <div class="empty-space col-xs-b20"></div>
                        <select class="SlectBox light">
                            <option disabled="disabled" selected="selected">Choose size</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <div class="empty-space col-xs-b20"></div>
                        <textarea class="simple-input light" placeholder="Message"></textarea>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="single-line-form">
                            <input class="simple-input light" type="text" value="" placeholder="Your email" />
                            <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="" />
                            </div>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="input-file-wrapper">
                            <div class="simple-input light" data-placeholder="Attach your resume">Attach your resume</div>
                            <input type="file" onchange="$(this).parent().addClass('active').find('.simple-input').text($(this).val().split( '\\' ).pop()); if($(this).val()=='') $(this).next().click();" />
                            <div class="file-remove light"></div>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry light">
                            <input type="checkbox" /><span>Product Lorem Ipsum</span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry light">
                            <input type="checkbox" /><span><a href="#">Privacy policy agreement</a></span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry light radio">
                            <input type="radio" name="2" checked /><span>Product Lorem Ipsum</span>
                        </label>
                        <div class="empty-space col-xs-b20"></div>
                        <label class="checkbox-entry light radio">
                            <input type="radio" name="2" /><span>Product Dolor</span>
                        </label>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">follows</div>
            
            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div style="border: 1px #eee solid; padding: 15px;">
                        <div class="follow light">
                            <span class="title">share:</span>
                            <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-6">
                    <div style="background: #222; padding: 15px;">
                        <div class="follow">
                            <span class="title">share:</span>
                            <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">counters</div>

            <div class="empty-space col-xs-b20"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div style="border: 1px #eee solid; padding: 15px;">
                        <div class="countdown" data-end="Sep,1,2017"></div>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
                <div class="col-sm-6">
                    <div style="background: #222; padding: 15px;">
                        <div class="countdown light" data-end="Sep,1,2017"></div>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                </div>
            </div>

            <div class="empty-space col-xs-b35 col-sm-b70"></div>

            <div class="h2">EMPTY SPACE EXAMPLES</div>

            <div class="empty-space col-xs-b20"></div>

            <div class="h6">PHONE - 20PX, TABLET - 40PX, DESKTOP - 60PX, WIDESCREEN - 100PX</div>

            <div class="empty-space col-xs-b20 col-sm-b40 col-md-b60 col-lg-b100" style="background: #b8cd07;"></div>

            <div class="empty-space col-xs-b20"></div>

            <div class="h6">PHONE - 0PX, TABLET - 0PX, DESKTOP - 0PX, WIDESCREEN - 100PX (visible only on widescreens)</div>

            <div class="empty-space col-lg-b100" style="background: #b8cd07;"></div>

            <div class="empty-space col-xs-b20"></div>

            <div class="h6">PHONE - 0PX, TABLET - 40PX, DESKTOP - 60PX, WIDESCREEN - 0PX (visible only on tablets and small desktops)</div>

            <div class="empty-space col-sm-b40 col-md-b60 col-lg-b0" style="background: #b8cd07;"></div>

            <div class="empty-space col-xs-b20"></div>

            <div class="h6">PHONE - 20PX, TABLET - 0PX, DESKTOP - 0PX, WIDESCREEN - 0PX (visible only on phones)</div>

            <div class="empty-space col-xs-b20 col-sm-b0" style="background: #b8cd07;"></div>

            <div class="empty-space col-xs-b20"></div>
            

        </div>
        <div class="footer-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <h3 class="h3 light">dont miss your chance</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <div class="simple-article size-3 light transparent">ONLY 200 PROMO CODES</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-line-form">
                            <input class="simple-input light" type="text" value="" placeholder="Your email">
                            <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="">
                            </div>
                        </div>
                    </div>
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
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
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
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
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
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
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
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
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
                                                <img src="img/product-preview-4_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-5_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-6_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-7_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-8_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-9_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-10_.jpg" alt="" />
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
                                            <span class="icon"><img src="img/icon-2.png" alt=""></span>
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

