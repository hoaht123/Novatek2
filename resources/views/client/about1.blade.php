@extends('client.layout.client_layout')
@section('title')
    <title>We are NovaTek</title>
@endsection
@section('content')

        <div class="header-empty-space"></div>

        <div class="block-entry fixed-background" style="background-image: url(img/background-24.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="cell-view simple-banner-height text-center">
                            <div class="empty-space col-xs-b35 col-sm-b70"></div>
                            <h1 class="h1 light">we are exzo</h1>
                            <div class="title-underline center"><span></span></div>
                            <div class="simple-article light transparent size-4">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                            <div class="empty-space col-xs-b35 col-sm-b70"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="simple-article size-3 grey uppercase col-xs-b5">about us</div>
                    <div class="h2">we love music</div>
                    <div class="title-underline left"><span></span></div>
                    <div class="simple-article size-4 grey">Praesent nec finibus massa. Phasellus id auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem</div>
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-3">
                        <p>Aenean facilisis, purus ut tristique pulvinar, odio neque commodo ligula, non vestibulum lacus justo vel diam. Aenean ac aliquet tortor, nec gravida urna. Ut nec urna elit. Etiam id scelerisque ante. Cras velit nunc, luctus a volutpat nec, blandit id dolor. Quisque commodo elit nulla, eu semper quam feugiat et. Integer quam velit, suscipit eget consectetur ac, molestie eu diam.</p>
                        <p>Fusce semper rhoncus dignissim. Curabitur dapibus convallis varius. Suspendisse sem urna, ullamcorper eget porttitor ut, sagittis in justo. Vestibulum egestas nulla nec purus porttitor fermentum. Integer mauris mi, viverra eget nibh at, efficitur consectetur erat. Curabitur et imperdiet enim.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="slider-wrapper">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="3"  data-slides-per-view="3" data-space="30">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-35.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">Phasellus rhoncus in nunc sit</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-36.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">amet mattis molestie nec tortor quis</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-37.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">molestie nec tortor quis</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-35.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">Phasellus rhoncus in nunc sit</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-36.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">amet mattis molestie nec tortor quis</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-description-shortcode style-2">
                                <img class="image-icon image-thumbnail rounded-image" src="img/thumbnail-37.jpg" alt="" />
                                <div class="content">
                                    <h6 class="title h6">molestie nec tortor quis</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination relative-pagination"></div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="text-center">
                <div class="simple-article size-3 grey uppercase col-xs-b5">our team</div>
                <div class="h2">meet with professionals</div>
                <div class="title-underline center"><span></span></div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="slider-wrapper our-team-slider">
                <div class="swiper-button-prev hidden-xs hidden-sm"></div>
                <div class="swiper-button-next hidden-xs hidden-sm"></div>
                <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lt-slides="4"  data-slides-per-view="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-40.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">co-founder</div>
                                        <div class="h6">monica rajan</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-41.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">marketing director</div>
                                        <div class="h6">ella fidger</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-42.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">tech director</div>
                                        <div class="h6">chris somer</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-43.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">co-founder</div>
                                        <div class="h6">monica rajan</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-40.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">co-founder</div>
                                        <div class="h6">monica rajan</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-41.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">marketing director</div>
                                        <div class="h6">ella fidger</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-42.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">tech director</div>
                                        <div class="h6">chris somer</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                        <div class="swiper-slide">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                    <img src="img/thumbnail-43.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">co-founder</div>
                                        <div class="h6">monica rajan</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                    </div>
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
                    <div class="swiper-pagination relative-pagination visible-xs visible-sm"></div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="text-center">
                <div class="simple-article size-3 grey uppercase col-xs-b5">our brands</div>
                <div class="h2">best of the best</div>
                <div class="title-underline center"><span></span></div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <a class="client-logo-entry">
                <img src="img/client-logo-1.jpg" alt="" />
                <img src="img/client-logo-1.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-2.jpg" alt="" />
                <img src="img/client-logo-2.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-3.jpg" alt="" />
                <img src="img/client-logo-3.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-4.jpg" alt="" />
                <img src="img/client-logo-4.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-5.jpg" alt="" />
                <img src="img/client-logo-5.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-6.jpg" alt="" />
                <img src="img/client-logo-6.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-7.jpg" alt="" />
                <img src="img/client-logo-7.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-8.jpg" alt="" />
                <img src="img/client-logo-8.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-9.jpg" alt="" />
                <img src="img/client-logo-9.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-10.jpg" alt="" />
                <img src="img/client-logo-10.jpg" alt="" />
            </a>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="cell-view simple-banner-height big">
                        <div class="empty-space col-sm-b35"></div>
                        <div class="simple-article size-3 grey uppercase col-xs-b5">real sound</div>
                        <div class="h2">feel perfect beat</div>
                        <div class="title-underline left"><span></span></div>
                        <div class="simple-article size-4 grey">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                        <div class="empty-space col-xs-b30 col-sm-b70"></div>
                        <div class="icon-description-shortcode style-3">
                            <div class="image-icon">
                                <img class="image-thumbnail rounded-image" src="img/thumbnail-38.jpg" alt="" />
                            </div>
                            <div class="content">
                                <div class="cell-view">
                                    <h6 class="title h6">Phasellus rhoncus in nunc sit</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b30"></div>
                        <div class="icon-description-shortcode style-3">
                            <div class="image-icon">
                                <img class="image-thumbnail rounded-image" src="img/thumbnail-39.jpg" alt="" />
                            </div>
                            <div class="content">
                                <div class="cell-view">
                                    <h6 class="title h6">Phasellus rhoncus in nunc sit</h6>
                                    <div class="description simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus sollicitudin facilisis. Lorem ipsum dolor sit amet semper ante vehicula</div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b35"></div>
                    </div>
                </div>
            </div>
            <div class="row-background left hidden-xs hidden-sm">
                <img src="img/background-25.jpg" alt="" />
            </div>
        </div>
    </div>
@endsection
@section('popup')
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
