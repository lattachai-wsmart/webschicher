@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')

<style>
    .row {
        margin: 5px;
    }
    .bg-dark {
        background-color:#00385B !important;
    }
    .img-fluid {
        /* height: 1100px;
        background-image: url('media/photos/bg-schich.png');
        background-size:cover;
	    background-position: center; */
    }
    .select2-container .select2-dropdown .select2-results__options {
            max-height: 360px !important;
    }
</style>

@if($errors->any())
        <div class="alert alert-danger" role="alert">{{ implode('', $errors->all(':message')) }}</div>
@endif

<div class="form-group col-md-12" style="position: relative;">
    <div class="img-fluid" style="justify-content: center; margin: 0 auto; width: 78%">
        {{-- <div class="img-fluid" style="justify-content: center; margin: 0 auto; width: 50%"> --}}
        <img class="img-fluid" src="media/photos/bg-schich.png" alt="" width="100%">
    </div>
    <form action="{{ route('booking_search_cars') }}" method='post' id="search_cars">
        @csrf
        <div class="form-group col-md-3" style="position: absolute; top: 35%; left: 55%;">
            <div class="form-group row" style="justify-content: center; border-radius: 10px; background-color: #fff; box-shadow: 1px 1px 3px 3px rgba(199, 196, 196, 0.349); padding: 15px">
                <div class="form-group row col-md-12" style="justify-content: center;">
                    <label for="title">@lang('frontend.findqualily.title')</label>
                </div>
                <div class="form-group row col-md-12">
                    <label for="brand">@lang('frontend.findqualily.carbrand')</label>
                    <select style="height: 35px;" class="form-control form-control-sm form-border mt-0 mt-lg-auto title-search" name="brand" id="brand">
                        <option value="">@lang('frontend.findqualily.pleaseselect')</option>
                    </select>
                </div>
                <div class="form-group row col-md-12">
                    <label for="carmodel">@lang('frontend.findqualily.carmodel')</label>
                    <select style="height: 35px;" class="form-control form-control-sm form-border mt-0 mt-lg-auto title-search" name="carmodel" id="carmodel">
                        <option value="">@lang('frontend.findqualily.pleaseselect')</option>
                    </select>
                </div>
                <div class="form-group row col-md-12">
                    <label>@lang('frontend.findqualily.name')</label>
                    <input type="text" style="height: 35px;" class="form-control form-control-sm form-border" name="name" id="name">
                </div>
                <div class="form-group row col-md-12">
                    <label>@lang('frontend.findqualily.tel')</label>
                    <input type="text" style="height: 35px;" class="form-control form-control-sm form-border" name="tel" id="tel">
                </div>
                <hr class="my-3" style="width: 97%; margin: 0px auto; border-color: #dadad3;">
                <div class="form-group row col-md-12">
                    <label></label>
                    <button id="btnSerarch" type="submit" class="btn bg-schic btn-sm form-control form-border" style="font-size: 1em; border-radius: 30px; color: #fff">@lang('frontend.findqualily.search')</button>
                </div>
                <div class="form-group row col-md-12" style="justify-content: center; font-size: 12px">
                    <label>@lang('frontend.findqualily.finish')</label>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('js_after')
<script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'select2', 'sweetalert2']); });</script>

<script>
    jQuery.ajax({
        url: 'http://127.0.0.1:8080/api/cars/brands',
        success: function(data){

                if(data){
                    const select = jQuery('#brand');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.findqualily.pleaseselect')}}","");
                    jQuery(newop).appendTo(select)
                    data.map((item,index) => {
                        const newoption = new Option(item.name,item.id);
                        jQuery(newoption).appendTo(select)
                        jQuery('#brand').select2();
                    });
                }
        }
    })

    jQuery('#brand').on('change', function(e){
        getmodel(jQuery(e.target).val());
    })

    function getmodel(id){
        jQuery.ajax({
        url: 'http://127.0.0.1:8080/api/cars/models/'+id,
        success: function(data){

                if(data){
                    const select = jQuery('#carmodel');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.findqualily.pleaseselect')}}","");
                    jQuery(newop).appendTo(select)
                    data.map((item,index) => {
                        const newoption = new Option(item.name,item.id);
                        jQuery(newoption).appendTo(select)
                    });
                }
        }
    })
    }

    function sendSuccess(){
        Swal.fire({
            title: `
            <h3 class="color-schic">
                @lang('frontend.bookingins.modal1')
            </h3>`,
            // icon: 'success',
            html:`
            <div>
                @lang('frontend.bookingins.modal2')
                <br>
                @lang('frontend.bookingins.modal3')
            </div>`,
            customClass: {confirmButton: 'btn btn-rounded'},
            confirmButtonColor: '#2c3e50',
            showCloseButton: true,
            showCancelButton: false,
            // focusConfirm: true,
            confirmButtonText:
                `<div>@lang('frontend.bookingins.modal4')</div>`,
            confirmButtonAriaLabel: 'กลับสู่หน้าหลัก',
        })
    }

    @if(session()->has('success'))
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
