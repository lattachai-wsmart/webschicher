@extends('layouts.frontend')


@section('css_after')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection

@section('content')

    <style>

        .bg-dark {
            background-color: #00385B !important;
        }

        .select2-container .select2-dropdown .select2-results__options {
            max-height: 360px !important;
        }

        .submit{
            font-family:SukhumvitSet;
            color:#132D46;
            background-color:#f5ba32;
        }
        .submit:hover{
            /* text-shadow: 1px 1px 1px #ffffff; */
            background-color:#ffb406;
        }

        .backModal{
        color:#D7DBDE;
        }
        .backModal:hover{
            color: white;
        }
    </style>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{ implode('', $errors->all(':message')) }}</div>
    @endif


    <div class="content bg-white position-relative show-content">
        <div>
            <img src="{{ asset('media/photos/bg-schich.png') }}" class="image-bg-bookins" />
        </div>
        <div class="">
            <div class="row justify-content-center">
                <div>

                    <div class="row" id="box-show-form" >
                        <div class="col-xl-7 mb-5 text-title-left d-none d-md-block" >
                            <Text class="text-white h2 " style="font-size:45px; font-family:SukhumvitSet;  letter-spacing: 3px;  text-shadow: 2px 2px black; line-height: 2.5;">@lang('frontend.findqualily.banner1')</Text><br/>
                            <Text class="text-white h2" style="font-size:45px; font-family:SukhumvitSet; letter-spacing:3px; text-shadow: 2px 2px black;">@lang('frontend.findqualily.banner2')</Text><br/>
                            <Text class="text-white h1" style="font-size:60px; font-family:SukhumvitSet; font-weight: 600; line-height: 2.5;  text-shadow: 2px 2px black;">@lang('frontend.findqualily.banner3')</Text> <Text class="h1" style="color:#FDCC01; font-size:60px; font-family:SukhumvitSet; text-shadow: 2px 2px black;">@lang('frontend.findqualily.banner4')</Text><br/>
                        </div>
                        <div class="col-xl-5 box-form bg-white rounded">
                            <form action="{{ route('booking_search_cars') }}" method='post' class="col-12" id="search_cars">
                                @csrf
                                <div class="row justify-content-center mt-3">
                                    <h6  style="font-family:SukhumvitSet">
                                        @lang('frontend.findqualily.title')
                                    </h6>
                                </div>
                                <div class="form-group row col-md-12">
                                    <label class="col-lg-4" for="brand">@lang('frontend.findqualily.carbrand')</label>
                                    <select class="col-lg-8 form-control form-control-sm form-border mt-0 mt-lg-auto title-search" style="height: 35px;" name="brand" id="brand">
                                        <option value="">@lang('frontend.findqualily.pleaseselect')</option>
                                    </select>
                                </div>

                                <div class="form-group row col-md-12">
                                    <label class="col-lg-4" for="carmodel">@lang('frontend.findqualily.carmodel')</label>
                                    <select   class="col-lg-8 form-control form-control-sm form-border mt-0 mt-lg-auto title-search" style="height: 35px;" name="carmodel" id="carmodel">
                                        <option value="">@lang('frontend.findqualily.pleaseselect')</option>
                                    </select>
                                </div>

                                <div class="form-group row col-md-12">
                                    <label class="col-lg-4">@lang('frontend.findqualily.name')</label>
                                    <input class="col-lg-8 form-control form-control-sm form-border" type="text" style="height: 35px;" name="name" id="name">
                                </div>

                                <div class="form-group row col-md-12">
                                    <label class="col-lg-4">@lang('frontend.findqualily.tel')</label>
                                    <input class="col-lg-8 form-control form-control-sm form-border" type="text" style="height: 35px;"  name="tel"
                                        id="tel">
                                </div>

                                <hr class="my-3" style="width: 97%; margin: 0px auto; border-color: #dadad3;">

                                <div class="form-group row justify-content-center">
                                    <button  type="submit" class="btn booking-bt col-8 submit" align="right" id="submitbooking" >@lang('frontend.findqualily.submit')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Ads: 10817033156 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10817033156"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-10817033156', {'send_page_view': true});
    </script>

    <script>
        jQuery(function() {
            One.helpers(['flatpickr', 'datepicker', 'select2', 'sweetalert2']);
        });

    </script>

    <script>
        jQuery.ajax({
            url: '{{ env('URL_API') }}/api/cars/brands',
            success: function(data) {

                if (data) {
                    const select = jQuery('#brand');
                    select.find("option").remove();
                    const newop = new Option("{{ __('frontend.findqualily.pleaseselect') }}", "");
                    jQuery(newop).appendTo(select)
                    data.map((item, index) => {
                        const newoption = new Option(item.name, item.id);
                        jQuery(newoption).appendTo(select)
                        jQuery('#brand').select2();
                        jQuery('#carmodel').select2();
                    });
                }
            }
        })

        jQuery('#brand').on('change', function(e) {
            getmodel(jQuery(e.target).val());
        })

        function getmodel(id) {
            jQuery.ajax({
                url: '{{ env('URL_API') }}/api/cars/models/' + id,
                success: function(data) {

                    if (data) {
                        const select = jQuery('#carmodel');
                        select.find("option").remove();
                        const newop = new Option("{{ __('frontend.findqualily.pleaseselect') }}", "");
                        jQuery(newop).appendTo(select)
                        data.map((item, index) => {
                            const newoption = new Option(item.name, item.id);
                            jQuery(newoption).appendTo(select)
                            jQuery('#carmodel').select2();
                        });
                    }
                }
            })
        }

        function sendSuccess() {
            Swal.fire({
                title: `
                <h3 class="color-schic" style="font-family:SukhumvitSet">
                    @lang('frontend.bookingins.modal1')
                </h3>`,
                // icon: 'success',
                html: `
                <div style="font-family:SukhumvitSet">
                    @lang('frontend.bookingins.modal2')
                    <br>
                    @lang('frontend.bookingins.modal3')
                </div>`,
                customClass: {
                    confirmButton: 'btn btn-rounded'
                },
                confirmButtonColor: '#2c3e50',
                showCloseButton: true,
                showCancelButton: false,
                // focusConfirm: true,
                confirmButtonText: `<div class="backModal" style="font-family:SukhumvitSet">@lang('frontend.bookingins.modal4')</div>`,
                confirmButtonAriaLabel: 'กลับสู่หน้าหลัก',
            })
        }

        @if (session()->has('success'))
            sendSuccess();
        @endif

    </script>

@endsection

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
