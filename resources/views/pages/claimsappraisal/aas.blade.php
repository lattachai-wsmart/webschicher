@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/02_03@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Accident_Appraisal_Services.title')</h1>
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
                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled ">
                            <div class="col-12 animated fadeIn d-flex justify-content-center">
                                <div class="">
                                    <img class="img-mh-450" src="{{ asset('media/photos/services/02_03@2x.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.content')
                            </p>
                        </div>
                        <div class="row">
                            <h5 class="h5">1. @lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.title')</h5>
                            <div class="ml-4">
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.content')
                                </p>
                                <div class="col-12">
                                    <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.title')</strong></div>
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.4')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.5')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Damage_Appraisal.list.6')</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="h5">2. @lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.title')</h5>
                            <div class="ml-4">
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.content')
                                </p>
                                <div class="col-12">
                                    <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.title')</strong></div>
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.4')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.5')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Tele_Appraisal_Service.list.6')</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="h5">3. @lang('frontend.Accident_Appraisal_Services.Document_Validation.title')</h5>
                            <div class="ml-4">
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.Document_Validation.content')
                                </p>
                                <div class="col-12">
                                    <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Document_Validation.list.title')</strong></div>
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Document_Validation.list.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Document_Validation.list.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Document_Validation.list.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Document_Validation.list.4')</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="h5">4. @lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.title')</h5>
                            <div class="ml-4">
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.content')
                                </p>
                                <div class="col-12">
                                    <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.title')</strong></div>
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.4')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.5')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.6')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Accident_Reconstruction.list.7')</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="h5">5. @lang('frontend.Accident_Appraisal_Services.Technical_Report.title')</h5>
                            <div class="ml-4">
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.Accident_Appraisal_Services.Technical_Report.content')
                                </p>
                                <div class="col-12">
                                    {{-- <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Technical_Report.list.title')</strong></div> --}}
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list.4')</li>
                                    </ol>
                                </div>
                                <div class="col-12">
                                    <div class="row"><strong >@lang('frontend.Accident_Appraisal_Services.Technical_Report.list1.title')</strong></div>
                                    <ol>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list1.1')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list1.2')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list1.3')</li>
                                        <li>@lang('frontend.Accident_Appraisal_Services.Technical_Report.list1.4')</li>
                                    </ol>
                                </div>
                            </div>
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
