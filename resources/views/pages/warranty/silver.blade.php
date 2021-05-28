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
                    @lang('frontend.warranty.silver')</h1>
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
                            <li>@lang('frontend.warranty.silver_detail.terms1')</li>
                            <li>@lang('frontend.warranty.silver_detail.terms2')</li> 
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
                            <li>@lang('frontend.warranty.silver_detail.period1')</li>  
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
                            <li>@lang('frontend.warranty.silver_detail.responsibility1')</li>   
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
                            <li>@lang('frontend.warranty.silver_detail.privilege1')</li>
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
                            <li>@lang('frontend.warranty.silver_detail.caruncover1')</li> 
                            <li>@lang('frontend.warranty.silver_detail.caruncover2')</li>
                            <li>@lang('frontend.warranty.silver_detail.caruncover3')</li>
                            <li>@lang('frontend.warranty.silver_detail.caruncover4')</li>
                            <li>@lang('frontend.warranty.silver_detail.caruncover5')</li>
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
                            <li>@lang('frontend.warranty.silver_detail.stuffuncover1')</li> 
                            <li>@lang('frontend.warranty.silver_detail.stuffuncover2')</li>
                            <li>@lang('frontend.warranty.silver_detail.stuffuncover3')</li>
                            <li>@lang('frontend.warranty.silver_detail.stuffuncover4')</li>
                            <li>@lang('frontend.warranty.silver_detail.stuffuncover5')</li>                           
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
                            <li>@lang('frontend.warranty.silver_detail.remark1')</li>
                            <li>@lang('frontend.warranty.silver_detail.remark2')</li>
                            <li>@lang('frontend.warranty.silver_detail.remark3')</li>    
                            <li>@lang('frontend.warranty.silver_detail.remark4')</li>
                            <li>@lang('frontend.warranty.silver_detail.remark5')</li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2 block-content block-content-full morePackage">
            <a href="#" onclick="sendSuccess()"><span class="btn btn-schi px-4" style="font-family:SukhumvitSet; color:#132D46; background-color:#FDBE29;" >ติดต่อสอบถามข้อมูล</span></a>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
     function sendSuccess(){
        Swal.fire({
            title: `
            <h3 class="color-schic" style="font-family:SukhumvitSet">
               สอบถามรายละเอียดเพิ่มเติม
            </h3>`,
            // icon: 'success',
            html:`
            <div>
                โทร: 02-057-1292 (ตลอด 24 ชั่วโมง)
                <br>
                Email: admin@schicher.com
            </div>`,
            customClass: {confirmButton: 'btn btn-rounded'},
            confirmButtonColor: '#2c3e50',
            showCloseButton: true,
            showCancelButton: false,
            // focusConfirm: true,
            confirmButtonText:
                `<div style="font-family:SukhumvitSet;">@lang('frontend.bookingins.modal4')</div>`,
            confirmButtonAriaLabel: 'กลับสู่หน้าหลัก',
        })
    }

</script>
@endsection

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection