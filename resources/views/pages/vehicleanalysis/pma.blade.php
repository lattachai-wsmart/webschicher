@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/sub_01@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Periodic_Mandatory_Analysis.title')</h1>
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
                                    <img class="img-mh-450" src="{{ asset('media/photos/services/sub_01@2x.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <strong class="font-size-h4">@lang('frontend.about.title1')</strong> --}}
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p class="">
                                &nbsp; &nbsp; &nbsp; @lang('frontend.Periodic_Mandatory_Analysis.content')
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
