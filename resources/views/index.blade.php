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
                    <div>
                        <img class="img-fluid" src="media/photos/photo1@2x.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="media/photos/photo2@2x.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="block block-rounded js-appear-enabled animated fadeIn" data-toggle="appear">
                    <div class="block-content block-content-full blox_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded bg-primary text-white mx-auto">
                                <i class="fa fa-2x fa-brush"></i>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">BOOK</div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">SCHICINSPECTION</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="block block-rounded js-appear-enabled animated fadeIn" data-toggle="appear">
                    <div class="block-content block-content-full blox_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded bg-success text-white mx-auto">
                                <i class="fab fa-2x fa-bitcoin"></i>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">FIND QUALILY</div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">USEDCARS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="block block-rounded js-appear-enabled animated fadeIn " data-toggle="appear">
                    <div class="block-content block-content-full blox_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded bg-dark text-white mx-auto">
                                <i class="fab fa-2x fa-chrome"></i>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">SCHIC CERTIFICATES</div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
<script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>
<script>jQuery(function(){ One.helpers('slick'); });</script>
@endsection
