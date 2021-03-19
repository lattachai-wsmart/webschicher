@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Remarketing_Consultancy_for_Fleets.title')</h1>
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
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.content')
                            </p>
                            <div class="row"><strong >@lang('frontend.Remarketing_Consultancy_for_Fleets.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.4')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.5')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list.6')</li>
                                </ol>
                            </div>
                            <h5 class="row h5 mt-5">@lang('frontend.Remarketing_Consultancy_for_Fleets.title1')</h5>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.content1')
                            </p>
                            <div class="row"><strong >@lang('frontend.Remarketing_Consultancy_for_Fleets.list1.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list1.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list1.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list1.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.list1.4')</li>
                                </ol>
                            </div>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.content2')
                            </p>
                        </div>
                        <div class="row">
                            <h3 class="row h3 mt-4">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.title')</h3>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.4')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.5')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.6.title')
                                        <ul>
                                            <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.6.1')</li>
                                            <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.6.2')</li>
                                            <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.6.3')</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <div class="row"><strong >@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list1.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.1.list.3')</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <h3 class="row h3 mt-4">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.title')</h3>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.content')
                            </p>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.list.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.list.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.list.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.list.4')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.2.list.5')</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <h3 class="row h3 mt-4">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.title')</h3>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content')
                            </p>
                            <h5 class="row h5">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.title1')</h5>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content1')
                            </p>
                            <div class="row"><strong >@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.4')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.5')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.6')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.7')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list.8')</li>
                                </ol>
                            </div>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content2')
                            </p>
                            <p class="row">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content3')
                            </p>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list1.1')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list1.2')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list1.3')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list1.4')</li>
                                    <li>@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.list1.5')</li>
                                </ol>
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
