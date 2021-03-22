@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Managed_Training_Services.title')</h1>
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
                            <h5 class="row h5 mb-2">@lang('frontend.Managed_Training_Services.title1')</h5>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content')
                            </p>
                            <div class="row col-12"><strong >@lang('frontend.Managed_Training_Services.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Managed_Training_Services.list.1')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list.2')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list.3')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list.4')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list.5')</li>
                                </ol>
                            </div>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content1')
                            </p>
                            <h5 class="row h5 mb-2 mt-2">@lang('frontend.Managed_Training_Services.title2')</h5>
                            <p class="row mb-2">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content2')
                            </p>
                            <p class="row mb-2">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content3')
                            </p>
                            <p class="row mb-2">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content4')
                            </p>
                            <p class="row mb-2">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content5')
                            </p>
                            <p class="row mb-2">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Managed_Training_Services.content6')
                            </p>
                            <div class="row col-12"><strong >@lang('frontend.Managed_Training_Services.list1.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Managed_Training_Services.list1.1')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.2')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.3')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.4')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.5')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.6')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.7')</li>
                                    <li>@lang('frontend.Managed_Training_Services.list1.8')</li>
                                </ol>
                            </div>
                            <p class="row">
                                @lang('frontend.Managed_Training_Services.content7')
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
