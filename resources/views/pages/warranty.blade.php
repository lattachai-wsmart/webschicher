@extends('layouts.frontend')
@section('css_after')
@endsection

@section('content')
<head>
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/schicher.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/warranty.css') }}">
</head>

<style>
    .readmore{
        font-family:SukhumvitSet;
        color:#132D46;
        background-color:#f5ba32;
    }
    .readmore:hover{
        /* text-shadow: 1px 1px 1px #ffffff; */
        background-color:#ffb406;
    }
</style>

{{-- <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
    <div class="bg-primary-dark-op">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.warranty.title')</h1>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="row col-lg-3 mb-3 mt-5 h4 bg-body-dark font-w600 rounded p-3 push text-center"> --}}
<br>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-3 btn-schi font-w600 rounded p-3 push text-center topicBar">
        @lang('frontend.warranty.title1')
    </div>
</div>
<br>

<div class=" row content overflow-hidden">
    {{-- <div class="col-md-6 col-xl-3 invisible " data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <div class="block block-link-shadow text-center box " href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/bronze.png') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2" >
                   <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.bronze_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.bronze_content.runnomore')</li>
                            <li>@lang('frontend.warranty.bronze_content.coverage')</li>
                            <li>@lang('frontend.warranty.bronze_content.item')</li>
                            <li>@lang('frontend.warranty.bronze_content.garages')</li>
                            <li>@lang('frontend.warranty.bronze_content.responsible')</li>
                            <li>@lang('frontend.warranty.bronze_content.emergency')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warranty.bronze') }}"><span class="btn btn-schi px-4" style="font-family:SukhumvitSet;">@lang('frontend.warranty.readmore')</span></a>
            </div>
        </div>
    </div> --}}

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/BRONZE.jpg') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2">
                   <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.bronze_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.bronze_content.runnomore')</li>
                            <li>@lang('frontend.warranty.bronze_content.coverage')</li>
                            <li>@lang('frontend.warranty.bronze_content.item')</li>
                            <li>@lang('frontend.warranty.bronze_content.garages')</li>
                            <li>@lang('frontend.warranty.bronze_content.responsible')</li>
                            <li>@lang('frontend.warranty.bronze_content.emergency')</li>
                        </ul>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warranty.bronze') }}"><span class="btn px-4 readmore">@lang('frontend.warranty.readmore')</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/SILVER.jpg') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2">
                    <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.silver_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.silver_content.runnomore')</li>
                            <li>@lang('frontend.warranty.silver_content.coverage')</li>
                            <li>@lang('frontend.warranty.silver_content.item')</li>
                            <li>@lang('frontend.warranty.silver_content.garages')</li>
                            <li>@lang('frontend.warranty.silver_content.responsible')</li>
                            <li>@lang('frontend.warranty.silver_content.emergency')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warranty.silver')}}"><span class="btn readmore px-4">@lang('frontend.warranty.readmore')</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/GOLD.jpg') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2">
                   <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.gold_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.gold_content.runnomore')</li>
                            <li>@lang('frontend.warranty.gold_content.coverage')</li>
                            <li>@lang('frontend.warranty.gold_content.item')</li>
                            <li>@lang('frontend.warranty.gold_content.garages')</li>
                            <li>@lang('frontend.warranty.gold_content.responsible')</li>
                            <li>@lang('frontend.warranty.gold_content.emergency')</li>
                        </ul>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warranty.gold') }}"><span class="btn px-4 readmore" >@lang('frontend.warranty.readmore')</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="800" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('media/photos/warranty/BLACK.jpg') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2" >
                   <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.black_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.black_content.runnomore')</li>
                            <li>@lang('frontend.warranty.black_content.coverage')</li>
                            <li>@lang('frontend.warranty.black_content.item')</li>
                            <li>@lang('frontend.warranty.black_content.garages')</li>
                            <li>@lang('frontend.warranty.black_content.responsible')</li>
                            <li>@lang('frontend.warranty.black_content.emergency')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warranty.black') }}"><span class="btn px-4 readmore" >@lang('frontend.warranty.readmore')</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div>

{{-- <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-3 btn-schi font-w600 rounded p-3 push text-center topicBar rsTop">
        @lang('frontend.warranty.title2')
    </div>
</div>
<br> --}}


{{-- <div class=" row content overflow-hidden">
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/whitecard.png') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2">
                   <div class="textContent">
                        <ul>
                            <li>@lang('frontend.warranty.whitecard_content.door')</li>
                            <li>@lang('frontend.warranty.whitecard_content.battery')</li>
                            <li>@lang('frontend.warranty.whitecard_content.oil')</li>
                            <li>@lang('frontend.warranty.whitecard_content.forklift')</li>
                            <li>@lang('frontend.warranty.whitecard_content.refuel')</li>
                            <li>@lang('frontend.warranty.whitecard_content.tire')</li>
                        </ul>
                   </div>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
            <a href="{{ route('warranty.whitecard') }}"><span class="btn btn-schi px-4" style="font-family:SukhumvitSet;">@lang('frontend.warranty.readmore')</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light blockImg">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/whitecardplus.png') }}" alt="">
                </div>
            </div>
            <div class="block-content blockContent">
                <div class="font-size-sm py-2">
                   <div class="textContent">
                    <ul>
                        <li>@lang('frontend.warranty.whitecardplus_content.door')</li>
                        <li>@lang('frontend.warranty.whitecardplus_content.battery')</li>
                        <li>@lang('frontend.warranty.whitecardplus_content.oil')</li>
                        <li>@lang('frontend.warranty.whitecardplus_content.forklift')</li>
                        <li>@lang('frontend.warranty.whitecardplus_content.refuel')</li>
                        <li>@lang('frontend.warranty.whitecardplus_content.tire')</li>
                    </ul>
                   </div>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
            <a href="{{ route('warranty.whitecardplus') }}"><span class="btn btn-schi px-4" style="font-family:SukhumvitSet;">@lang('frontend.warranty.readmore')</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div> --}}

@endsection
