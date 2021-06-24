@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
<head>
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/warranty.css') }}">
</head>


<style>
    .backModal{
        color:#D7DBDE;
    }
    .backModal:hover{
        color: white;
    }
    .contact{
        font-family:SukhumvitSet;
        color:#132D46;
        background-color:#f5ba32;
    }
    .contact:hover{
        /* text-shadow: 1px 1px 1px #ffffff; */
        background-color:#ffb406;
    }
</style>


<div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
    <div class="bg-primary-dark-op">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.warranty.black')</h1>
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
                            <li>@lang('frontend.warranty.black_detail.terms1')</li>
                            <li>@lang('frontend.warranty.black_detail.terms2')</li>
                            <li>@lang('frontend.warranty.black_detail.terms3')</li>
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
                            <li>@lang('frontend.warranty.black_detail.period1')</li>
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
                            <li>@lang('frontend.warranty.black_detail.responsibility1')</li>
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
                            <li>@lang('frontend.warranty.black_detail.privilege1')</li>
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
                            <li>@lang('frontend.warranty.black_detail.caruncover1')</li>
                            <li>@lang('frontend.warranty.black_detail.caruncover2')</li>
                            <li>@lang('frontend.warranty.black_detail.caruncover3')</li>
                            <li>@lang('frontend.warranty.black_detail.caruncover4')</li>
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
                            <li>@lang('frontend.warranty.black_detail.stuffuncover1')</li>
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
                           <li>@lang('frontend.warranty.black_detail.remark1')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 block-content block-content-full morePackage" align="right">
            <a href="#" onclick="sendSuccess()" ><span class="btn contact px-4">@lang('frontend.warranty.contactmore.title')</span></a>
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
              @lang('frontend.warranty.contactmore.modal1')
           </h3>`,
           // icon: 'success',
           html:`
           <div>
               @lang('frontend.warranty.contactmore.modal2')
               <br>
               @lang('frontend.warranty.contactmore.modal3')
           </div>`,
           customClass: {confirmButton: 'btn btn-rounded'},
           confirmButtonColor: '#2c3e50',
           showCloseButton: true,
           showCancelButton: false,
           // focusConfirm: true,
           confirmButtonText:
               `<div class="backModal" style="font-family:SukhumvitSet">@lang('frontend.warranty.contactmore.modal4')</div>`,
           confirmButtonAriaLabel: 'กลับสู่หน้าหลัก',
       })
   }

</script>
@endsection

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
