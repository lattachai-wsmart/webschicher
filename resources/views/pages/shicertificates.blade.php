@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')

<style>
    .row {
        margin-right: 0px;
        margin-left: 0px;
    }
</style>

    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.shicertificates.title')</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->

    <div class="block block-rounded block-themed block-transparent mb-0">
        <div class="block-content font-size-sm">

            <div class="row col-12">
                <div class="form-group col-md-6">
                    <div class="row col-11" style="justify-content: center;">
                        <h1 style="font-family:SukhumvitSet;">Inspection Report</h1><br>
                    </div>
                    <div class="row col-12" style="justify-content: center;">
                        <div class="row col-12" style="justify-content: center;">
                            <h4 style="font-family:SukhumvitSet;">ทำไมต้องวิเคราะห์สภาพรถยนต์กับ SCHICHER</h5><br>
                        </div>
                        <ul>
                            <li style="font-family:SukhumvitSet;">นำส่งรายงานการตรวจรถยนต์ด้วยระบบ QR Code</li>
                            <li style="font-family:SukhumvitSet;">ตรวจสอบคุณภาพรถด้วยผู้ตรวจมากประสบการณ์จาก TUV มาตรฐาน Germany</li>
                            <li style="font-family:SukhumvitSet;">การประเมินระบบภายในด้วยเทคโนโลยีระดับสากล</li>
                            <li style="font-family:SukhumvitSet;">ตรวจสอบอย่างละเอียด เป็นกลาง เชี่ยวชาญ เชื่อถือได้</li> 
                            <li style="font-family:SukhumvitSet;">บริการให้คำปรึกษาผ่าน Call Center ตลอด 24 ชั่วโมง</li> 
                        </ul>
                    </div>
                </div>
                <div class="form-group col-md-4" style="justify-content: center;">
                    <div class="input-group col-12">
                        <input type="email" class="form-control" id="schiidsearch" name="schiidsearch"
                            placeholder="SCHI ID">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" id="btnSearchSchi" style="font-family:SukhumvitSet;">
                                <i class="fa fa-search mr-1"></i> Search
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="form-group col-md-12">
                        <div id="dataSearchShow" style="display: flex">
                            <div class="spinner-border text-info d-none" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            {{-- <div class="form-group col-md-12"></div> --}}
                            <div id="showSearchContent" class="form-group col-md-12 d-none">
                                <div class="form-group row" style="box-shadow: 1px 1px 3px 3px rgba(199, 196, 196, 0.349); padding: 15px">
                                    <div class="form-group row col-12">
                                        <h5>SCH ID :</h5><div id="showSearchContentID" class="ml-2"></div>
                                    </div>
                                    <div class="form-group row col-12">
                                        <h5>CAR BRAND :</h5><div class="ml-2" id="showSearchContentDetail"></div>
                                    </div>
                                    <div class="form-group row col-12">
                                        <h5>NUMBER :</h5><div class="ml-2" id="showSearchContentDetail2"></div>
                                    </div>
                                    <hr style="width: 97%; margin: 0px auto; border-color: #dadad3;">
                                    <br>
                                    <div>
                                        <a class="h2 my-2" href="" id="Detail"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="showSearchContentError" class="col-12 row"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Page Content -->

@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>
    <script>
        jQuery(function() {
            One.helpers('slick');
        });

    </script>
    <script>
        jQuery('#btnSearchSchi').on('click', function() {
            let url = "{{ env('URL_API') }}/api/insp-link?schic_id=" + jQuery("#schiidsearch").val()
            jQuery.ajax({
                url,
                "type": "GET",
                beforeSend: () => {
                    jQuery('.spinner-border').removeClass('d-none');
                    jQuery('#showSearchContent').addClass('d-none');
                    jQuery('#showSearchContentError').html('');
                },
                success: function(data) {
                    jQuery('.spinner-border').addClass('d-none');

                    if (typeof data.link != "undefined") {
                        jQuery('#showSearchContent').removeClass('d-none');
                        jQuery("#showSearchContentID").attr('href', data.link).attr('target', '_blank')
                            .html((jQuery("#schiidsearch").val()))
                        jQuery("#Detail").attr('href', data.link).attr('target', '_blank')
                            .html(`<button class="btn btn-warning" style="justify-content: center;">
                                        <i class=""></i>Detail
                                    </button>`)
                            // (jQuery("#schiidsearch").val())
                        const text =
                            `${data.car_year} ${data.brand_name} ${data.model_name} ${data.submodel_name}`;
                        jQuery("#showSearchContentDetail").html(text)
                        jQuery("#showSearchContentDetail2").html(data.license)
                    } else {
                        console.log('data Else', data);
                        jQuery('#showSearchContentError').html(`<div class="alert alert-light alert-dismissable col-12" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p class="mb-0">Not Found !</p>
                            </div>`);

                    }
                },
                error: function(er) {
                    jQuery('.spinner-border').addClass('d-none');

                }
            });
        });

    </script>
@endsection
