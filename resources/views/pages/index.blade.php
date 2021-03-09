@extends('layouts.frontend')

@section('css_after')
<link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="col-md-12 slidebarTop">
            <div class="block block-rounded">
                <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-arrows="true" data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher1-en.png" alt="">
                        <div class="carousel-caption">
                            <h5>SCHIC CERTIFICATES</h5>
                            <div class="textSlide">###################################################</div>
                            <button class="btn btn-primary btn-sm">Find &nbsp; <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher2-en.png" alt="">
                        <div class="carousel-caption">
                            <h5>SCHIC CERTIFICATES</h5>
                            <div class="textSlide">###################################################</div>
                            <button class="btn btn-primary btn-sm">Find &nbsp; <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher3-en.png" alt="">

                        <div class="carousel-caption">
                            <h5>BOOK SCHICINSPECTION</h5>
                            <div class="textSlide">###################################################</div>
                            <button class="btn btn-primary btn-sm">Find &nbsp; <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-toggle="appear" data-class="animated bounceIn" href="#111">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded  text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/book.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">BOOK SCHICINSPECTION</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-toggle="appear" data-class="animated bounceIn" href="#222">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/cars.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">FIND QUALILY USEDCARS</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-toggle="appear" data-class="animated bounceIn" href="#333">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/search.png') }}" class="imageicon96"/>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">SCHIC CERTIFICATES</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
<script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>
<script>jQuery(function(){ One.helpers('slick'); });</script>
@endsection
