@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')

    {{-- @if (session('status'))
        {{ session('status') }}
    @endif --}}
    @if($errors->any())
        <div class="alert alert-danger" role="alert">{{ implode('', $errors->all(':message')) }}</div>
    @endif
    
    <style>
        /* @media only screen and (min-device-width: 400px) {
            .bg-schich-booking { 
                background-image: url('media/photos/about/bg-schich-booking.png'); 
                height:500px;
                width: 100%;
                }
            } */
    </style>

    <!-- Page Content -->
    <form action="{{ route('createbookingins') }}" method='post' id="bookingins">
        @csrf

        {{-- style="background-image: url('{{ asset('media/photos/about/bg-schich-booking.png') }}');" --}}
        <div class="content bg-white">
            <div class="content content-boxed">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <br>
                    <div class="row" >
                        <div class="col-6"></div>
                        <div class="col-6 pt-lg-3 box-form">
                         
                                <h6>
                                    <center>
                                        @lang('frontend.bookingins.filldetail')
                                    </center>
                                </h6>

                                <label class="col-lg-4" for="name" align="left" >@lang('frontend.bookingins.name')</label>
                                <input class="col-lg-4 form-control form-control-sm form-border" type="text" name="name" id="name" required>
                                    <br>
                                <label class="col-lg-4" for="tel" align="left">@lang('frontend.bookingins.phone')</label>
                                <input class="col-lg-4 form-control form-control-sm form-border" type="tel" name="tel" id="tel" required>
                                    <br>
                                <label class="col-lg-4" for="brand" align="left" >@lang('frontend.bookingins.carbrand')</label>
                                <select class="col-lg-4 form-control form-control-sm form-border" name="brand" id="brand" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                </select>
                                    <br>
                                <label class="col-lg-3" for="carmodel" align="left" >@lang('frontend.bookingins.carmodel')</label>
                                <select class="col-lg-3 form-control form-control-sm form-border" name="model" id="carmodel" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                </select>
                                    <br>
                            
                            <div class="form-group row">
                                <label class="col-lg-2" for="date" align="left" >@lang('frontend.bookingins.date')</label>
                                <input class="col-lg-2 form-control js-flatpickr" type="date" name="date" id="date" required>    
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" for="comment" align="left" >@lang('frontend.bookingins.note')</label> 
                                <textarea class="col-lg-3 form-control" rows="3" id="comment" name="comment"></textarea> 
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="col-5"></div>
                                <button type="submit" class="btn btn-success booking-bt" align="right" id="submitbooking" >@lang('frontend.bookingins.booking')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END Page Content -->
@endsection

@section('js_after')
<script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'select2', 'sweetalert2']); });</script>

<script>

    jQuery.ajax({
        url: "{{  env('URL_API')  }}/api/cars/brands",
        success: function(data){
                if(data){
                    const select = jQuery('#brand');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.bookingins.plzselect')}}","");
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
        url: "{{  env('URL_API')  }}/api/cars/models/"+id,
        success: function(data){
            
                if(data){
                    const select = jQuery('#carmodel');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.bookingins.plzselect')}}","");
                    jQuery(newop).appendTo(select)
                    data.map((item,index) => {
                        const newoption = new Option(item.name,item.id);
                        jQuery(newoption).appendTo(select)
                        jQuery('#carmodel').select2();
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
