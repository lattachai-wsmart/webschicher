@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Systems_and_Process_Training_Qualification.title')</h1>
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
                                @lang('frontend.Systems_and_Process_Training_Qualification.content')
                            </p>
                        </div>
                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.title')</h3>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.content')
                            </p>
                            <div class="row"><strong >@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.1')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.2')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.3')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.4')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.5')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.6')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.7')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.8')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.9')</li>
                                    <li>@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.list.10')</li>
                                </ol>
                            </div>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.1.content1')
                            </p>
                        </div>

                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.2.title')</h3>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.2.content')
                            </p>
                            <p class="">
                                <strong class="mr-2">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.2.content1_first')</strong>
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.2.content1')
                            </p>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.2.content2')
                            </p>
                        </div>

                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.title')</h3>
                            <p class="mb-1">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.content')
                            </p>
                            <p>
                                <strong class="">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.topic')</strong><br />
                                <strong class="">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.topic1')</strong><br />
                                <strong class="">@lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.topic2')</strong>
                            </p>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.content1')
                            </p>
                            <p class="">
                                @lang('frontend.Systems_and_Process_Training_Qualification.sub_data.3.content2')
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
