@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.CSR_Compliance.title')</h1>
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
                            <div class="col-12 animated fadeIn d-flex justify-content-center">
                                <div class="">
                                    <img class="img-mh-450" src="{{ asset('media/photos/services/03_01@2x.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="row h5 mb-2 mt-2">@lang('frontend.CSR_Compliance.title1')</h5>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.CSR_Compliance.content')
                            </p>
                            <h5 class="row h5 mb-2 mt-2">@lang('frontend.CSR_Compliance.title2')</h5>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content1_first')</strong>
                                @lang('frontend.CSR_Compliance.content1')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content2_first')</strong>
                                @lang('frontend.CSR_Compliance.content2')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content3_first')</strong>
                                @lang('frontend.CSR_Compliance.content3')
                            </p>
                            <p class="mb-3">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content4_first')</strong>
                                @lang('frontend.CSR_Compliance.content4')
                            </p>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.CSR_Compliance.content5')
                            </p>
                            <h5 class="row h5 mb-1">@lang('frontend.CSR_Compliance.title3')</h5>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content6_first')</strong>
                                @lang('frontend.CSR_Compliance.content6')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content7_first')</strong>
                                @lang('frontend.CSR_Compliance.content7')
                            </p>
                            <p class="">
                                <strong class="mr-2">@lang('frontend.CSR_Compliance.content8_first')</strong>
                                @lang('frontend.CSR_Compliance.content8')
                            </p>

                            <div class="row col-12"><strong >@lang('frontend.CSR_Compliance.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.CSR_Compliance.list.1')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.2')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.3')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.4')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.5')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.6')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.7')</li>
                                    <li>@lang('frontend.CSR_Compliance.list.8')</li>
                                </ol>
                            </div>
                            <p class="mb-1">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.CSR_Compliance.content9')
                            </p>
                            <p class="mb-1">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.CSR_Compliance.content10')
                            </p>
                            <p>
                                &nbsp; &nbsp; &nbsp; @lang('frontend.CSR_Compliance.content11')
                            </p>
                        </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
