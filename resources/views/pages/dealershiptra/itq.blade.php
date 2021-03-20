@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Inspectors_Training_Qualification.title')</h1>
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
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Inspectors_Training_Qualification.content')
                            </p>
                            <h5 class="row h5">@lang('frontend.Inspectors_Training_Qualification.title1')</h5>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Inspectors_Training_Qualification.content1')
                            </p>
                            <h5 class="row h5">@lang('frontend.Inspectors_Training_Qualification.title2')</h5>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Inspectors_Training_Qualification.content2')
                            </p>
                            <h5 class="row h5">@lang('frontend.Inspectors_Training_Qualification.title3')</h5>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Inspectors_Training_Qualification.content3')
                            </p>
                        </div>

                        <div class="row">
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content4_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content4')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content5_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content5')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content6_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content6')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content7_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content7')
                            </p>
                            <p class="mb-1">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content8_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content8')
                            </p>
                            <p class="">
                                <strong class="mr-2">@lang('frontend.Inspectors_Training_Qualification.content9_first')</strong>
                                @lang('frontend.Inspectors_Training_Qualification.content9')
                            </p>
                        </div>
                        <div class="row">
                            <h5 class="row h5">@lang('frontend.Inspectors_Training_Qualification.title4')</h5>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Inspectors_Training_Qualification.content10')
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
