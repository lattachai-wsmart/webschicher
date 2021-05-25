@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/01.png') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" style="font-family:SukhumvitSet;" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.vehicleanalysis.title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="row">
                        <article class="story">
                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                            <div class="col-md-12 animated fadeIn d-flex justify-content-center" >
                                <div class="options-container">
                                    <img width="100%" height="100%" src="{{ asset('media/photos//services/01.png') }}"  />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <strong class="font-size-h4">@lang('frontend.about.title1')</strong> --}}
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p class="">
                                @lang('frontend.vehicleanalysis.content1')
                            </p>
                            <p class="">
                                @lang('frontend.vehicleanalysis.content2')
                            </p>
                        </div>
                        </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.pma') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_01.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Periodic_Mandatory_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.eta') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_02.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Emission_Tests_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.spa') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_03.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Specific_Periodic_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.mea') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_04.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Mandatory_Export_Analysis.title') </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.rsa') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_05.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Road_Safety_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.cva') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_06.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Contract_Vehicle_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.pvia') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_07.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Preowned_Vehicle_Inspection_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.avia') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_08.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Auction_Vehicle_Inspection_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.vehicleanalysis.avia') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/sub_08.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 style="font-family:SukhumvitSet;" class="mb-1">@lang('frontend.Auction_Vehicle_Inspection_Analysis.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
