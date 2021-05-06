@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
<head> 
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/warranty.css') }}">
</head>
<div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
    <div class="bg-primary-dark-op">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">
                    @lang('frontend.warranty.goldplus')</h1>
            </div>
        </div>
    </div>
</div>
<div class="content bg-white">
    <div class="content content-boxed">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.terms')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.terms1')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.terms2')</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.period')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.period1')</li>           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.responsibility')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.responsibility1')</li>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.privilege')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.privilege1')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.caruncover')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.caruncover1')</li> 
                            <li>@lang('frontend.warranty.goldplus_detail.caruncover2')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.caruncover3')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.caruncover4')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.caruncover5')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.stuffuncover')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.stuffuncover1')</li> 
                            <li>@lang('frontend.warranty.goldplus_detail.stuffuncover2')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.stuffuncover3')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.stuffuncover4')</li>                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <strong>@lang('frontend.warranty.detail_topic.remark')</strong>
                    </div>
                    <div class="col-9">
                        <ul>
                            <li>@lang('frontend.warranty.goldplus_detail.remark1')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.remark2')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.remark3')</li>    
                            <li>@lang('frontend.warranty.goldplus_detail.remark4')</li>
                            <li>@lang('frontend.warranty.goldplus_detail.remark5')</li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2 block-content block-content-full morePackage">
            <a href="{{ asset('media/pdf/goldplus.pdf') }}" target="_blank"><span class="btn btn-secondary px-4" >@lang('frontend.warranty.packagedetail')</span></a>
        </div>
    </div>
</div>
@endsection