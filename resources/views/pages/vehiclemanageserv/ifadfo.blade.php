@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_02@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.In_fleet_and_De_fleet_Operations.title')</h1>
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
                                    <img class="img-mh-450" src="{{ asset('media/photos/services/03_02@2x.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.In_fleet_and_De_fleet_Operations.content')
                            </p>
                            {{-- <div class="row"><strong >@lang('frontend.In_fleet_and_De_fleet_Operations.list.title')</strong></div> --}}
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list.1')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list.2')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list.3')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list.4')</li>
                                </ol>
                            </div>
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.In_fleet_and_De_fleet_Operations.content1')
                            </p>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list1.1')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list1.2')</li>
                                </ol>
                            </div>
                            <div class="row"><strong >@lang('frontend.In_fleet_and_De_fleet_Operations.list2.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list2.1')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list2.2')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list2.3')</li>
                                    <li>@lang('frontend.In_fleet_and_De_fleet_Operations.list2.4')</li>
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
