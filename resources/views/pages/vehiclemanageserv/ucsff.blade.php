@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Used_Car_Seal_for_Fleet.title')</h1>
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
                                    <img width="100%" height="100%" src="{{ asset('media/photos/services/03_01@2x.jpg') }}"  />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="">
                                @lang('frontend.Used_Car_Seal_for_Fleet.content')
                            </p>
                            <div class="row"><strong >@lang('frontend.Used_Car_Seal_for_Fleet.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Used_Car_Seal_for_Fleet.list.1')</li>
                                    <li>@lang('frontend.Used_Car_Seal_for_Fleet.list.2')</li>
                                    <li>@lang('frontend.Used_Car_Seal_for_Fleet.list.3')</li>
                                    <li>@lang('frontend.Used_Car_Seal_for_Fleet.list.4')</li>
                                    <li>@lang('frontend.Used_Car_Seal_for_Fleet.list.5')</li>
                                </ol>
                            </div>
                            <p class="row">
                                @lang('frontend.Used_Car_Seal_for_Fleet.content1')
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
