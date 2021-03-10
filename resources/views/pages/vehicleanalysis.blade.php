@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.vehicleanalysis.title')</h1>
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
                            <div class="col-12 animated fadeIn">
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('media/photos/about/about_schic1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <strong class="font-size-h4">@lang('frontend.about.title1')</strong> --}}
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.vehicleanalysis.content1')
                            </p>
                            <p class="">
                                &nbsp; &nbsp; &nbsp;  @lang('frontend.vehicleanalysis.content2')
                            </p>
                        </div>
                        </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Periodic Mandatory Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Emission Tests Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Specific Periodic Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Mandatory Export Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Road Safety Analysis</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Contract Vehicle Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Preowned Vehicle Inspection Analysis </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">Auction Vehicle Inspection Analysis </h4>
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
