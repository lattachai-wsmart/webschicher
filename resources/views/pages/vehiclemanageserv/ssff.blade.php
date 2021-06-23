@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/services/03_09@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.Sales_solutions_for_Fleets.title')</h1>
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
                            <h3 style="font-family:SukhumvitSet;" class="row h3">@lang('frontend.Sales_solutions_for_Fleets.sub_data.1.title')</h3>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.1.content')
                            </p>
                        </div>

                        {{-- <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3">@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.title')</h3>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.2.content')
                            </p>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.1')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.2')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.3')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.4')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.5')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.6')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.2.list.7')</li>
                                </ol>
                            </div>
                        </div> --}}

                        {{-- <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 mt-5">@lang('frontend.Sales_solutions_for_Fleets.sub_data.3.title')</h3>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.3.content')
                            </p>
                        </div> --}}

                        {{-- <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 ">@lang('frontend.Sales_solutions_for_Fleets.sub_data.4.title')</h3>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.4.content')
                            </p>
                        </div> --}}

                        {{-- <div class="row">
                            <h3 style="font-family:SukhumvitSet;" class="row h3 ">@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.title')</h3>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.5.content')
                            </p>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.5.content1')
                            </p>
                            <p class="row">
                                @lang('frontend.Sales_solutions_for_Fleets.sub_data.5.content2')
                            </p>
                            <div class="row"><strong >@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list.1')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list.2')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list.3')</li>
                                </ol>
                            </div>
                            <div class="row"><strong >@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.title')</strong></div>
                            <div class="row col-12">
                                <ol>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.1')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.2')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.3')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.4')</li>
                                    <li>@lang('frontend.Sales_solutions_for_Fleets.sub_data.5.list1.5')</li>
                                </ol>
                            </div>
                        </div> --}}

                        {{-- <div class="row">
                            <h3 class="row h3">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.title')</h3>
                            <p class="row">
                                @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content')
                            </p>
                            <h5 class="row h5">@lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.title1')</h5>
                            <p class="row">
                                @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content1')
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
                                @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content2')
                            </p>
                            <p class="row">
                                @lang('frontend.Remarketing_Consultancy_for_Fleets.sub_data.3.content3')
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
                        </div> --}}

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
