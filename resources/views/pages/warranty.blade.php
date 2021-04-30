@extends('layouts.frontend')
@section('css_after')
@endsection

@section('content')
<style>
.box:hover {
    box-shadow: 0 5px 15px 2px rgba(61, 61, 61, 0.1);
}

</style>
<div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
    <div class="bg-primary-dark-op">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.warranty.title')</h1>
            </div>
        </div>
    </div>
</div>

<div class=" row content overflow-hidden">
    <div class="col-md-6 col-xl-3 invisible " data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/bronze.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2" >
                   <div style="text-align:left;">
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
                <a href="{{ route('warrantyandroadside.bronze') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/silver.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
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
                <a href="{{ route('warrantyandroadside.silver') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
    
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/goldplus.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2">
                    <div style="text-align:left;">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.goldplus_content.runnomore')</li>
                            <li>@lang('frontend.warranty.goldplus_content.coverage')</li>
                            <li>@lang('frontend.warranty.goldplus_content.item')</li>
                            <li>@lang('frontend.warranty.goldplus_content.garages')</li>
                            <li>@lang('frontend.warranty.goldplus_content.responsible')</li>
                            <li>@lang('frontend.warranty.goldplus_content.emergency')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.goldplus')}}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="800" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/autosmartstd.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                        <ul>
                            <li>@lang('frontend.warranty.autosmartstd_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.runnomore')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.coverage')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.item')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.garages')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.responsible')</li>
                            <li>@lang('frontend.warranty.autosmartstd_content.emergency')</li>
                        </ul>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.autosmartstd') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div>

<div class=" row content overflow-hidden">
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1000" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('media/photos/warranty/autosmartdm.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2" >
                   <div style="text-align:left;">
                        <ul>
                            <li>@lang('frontend.warranty.autosmartdm_content.undertenyears')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.runnomore')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.coverage')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.item')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.garages')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.responsible')</li>
                            <li>@lang('frontend.warranty.autosmartdm_content.emergency')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.autosmartdm') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/whitecard.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
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
            <a href="{{ route('warrantyandroadside.whitecard') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>
    
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/warranty/whitecardplus.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 220px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
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
            <a href="{{ route('warrantyandroadside.whitecardplus') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div>

@endsection