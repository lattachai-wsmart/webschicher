@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" style="font-family:SukhumvitSet;" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.about.title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="row" style="display: contents;">
                        <article class="story">
                            <p>@lang('frontend.about.content')</p>
                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled" >
                            {{-- <div class="col-12 animated fadeIn d-flex justify-content-center">
                                <div class="">
                                    <img class="img-fluid" width="100%" height="100%" class="img-mh-450" src="{{ asset('media/photos/about/about_schic1.jpg') }}" alt="">
                                </div>
                            </div> --}}

                            <div class="col-md-12 animated fadeIn d-flex justify-content-center" >
                                <div class="options-container">
                                    <img width="100%" height="100%" src="{{ asset('media/photos/about/about_schic1.jpg') }}"  />
                                </div>
                            </div>
                            
                        </div>
                        <div style="display: flex;flex-wrap: wrap;">
                        
                            <strong class="font-size-h4">@lang('frontend.about.title1')</strong>
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <div >
                                @lang('frontend.about.content1')
                            </div>
                            <br>
                        </div>
                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">

                            <div class="col-md-12 animated fadeIn d-flex justify-content-center" >
                                <div class="options-container">
                                    <img width="100%" height="100%" src="{{ asset('media/photos/about/about_schic2.jpg') }}"  />
                                </div>
                            </div>

                        </div>
                        <div class="row" style="display: contents;">
                            <strong class="font-size-h4">@lang('frontend.about.title2')</strong>
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p>
                                @lang('frontend.about.content2')
                            </p>
                        </div>

                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                            <div class="col-md-12 animated fadeIn d-flex justify-content-center" >
                                <div class="options-container">
                                    <img width="100%" height="100%" src="{{ asset('media/photos/about/about_schic3-1.png') }}"  />
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
