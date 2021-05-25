@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/sub_03@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.title')</h1>
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
                                    <img width="100%" height="100%" src="{{ asset('media/photos/services/sub_03@2x.jpg') }}"  />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.1')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.2')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.3')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.4')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.5')</li>
                                </ol>
                            </div>
                            <p class="">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.content')
                            </p>
                            <h5 style="font-family:SukhumvitSet;" class="row h5 mt-5">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.title1')</h5>
                            <div class="row col-12"><strong >@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list1.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.1')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.2')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.3')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list.4')</li>
                                </ol>
                            </div>
                            <div class=""><strong >@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.1')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.2')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.3')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.4')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.5')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.6')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.7')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.8')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.9')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.10')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.11')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.12')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.13')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.14')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.15')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.16')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.17')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.18')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.19')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.20')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.21')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.22')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.list2.23')</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.1.title')</h3>
                            <h5 class="row h5 col-12">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.1.title1')</h5>
                            <p class="row">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.1.content')
                            </p>
                        </div>
                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.2.title')</h3>
                            <p class="row">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.2.content')
                            </p>
                            <h3 style="font-family:SukhumvitSet;" class="row h3">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.2.title1')</h3>
                            <p class="row">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.2.content1')
                            </p>
                        </div>
                        <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-4">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.title')</h3>
                            <p class="row">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.content')
                            </p>
                            <div class=""><strong >@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.list.1')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.list.2')</li>
                                    <li>@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.list.3')</li>
                                </ol>
                            </div>
                            <p class="row">
                                @lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.sub_data.3.content1')
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
