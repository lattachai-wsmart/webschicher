@extends('layouts.frontend')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection


@section('content')
<style>
    .book{
        font-family:SukhumvitSet;
        color:#132D46;
        background-color:#f5ba32;
    }
    .book:hover{
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

    @if($errors->any())
        <div class="alert alert-danger" role="alert">{{ implode('', $errors->all(':message')) }}</div>
    @endif

    <!-- Page Content -->
        {{-- style="background-image: url('{{ asset('media/photos/about/bg-schich-booking.png') }}');" --}}
        <div class="content bg-white position-relative show-content">
            <img src="{{ asset('media/photos/about/bg-schich-3.png') }}" class="image-bg-bookins" />
            <div class="row justify-content-center">
                <div class="row" id="box-show-form" >
                    <div class="col-xl-7 mb-5 text-title-left d-none d-md-block" >
                        <Text class="text-white h2 " style="font-size:40px; font-family:SukhumvitSet;  letter-spacing: 3px;   text-shadow: 2px 2px black; line-height: 2;">@lang('frontend.bookingins.banner1')</Text><br/>
                        <Text class="text-white h1" style="font-size:60px; font-family:SukhumvitSet; font-weight: 600;  text-shadow: 2px 2px black; line-height: 2;">@lang('frontend.bookingins.banner2')</Text>
                        <Text class="h1" style="color:#FDBE29; font-size:60px; font-family:SukhumvitSet; text-shadow: 2px 2px black;">@lang('frontend.bookingins.banner3')</Text><br/>
                        <Text class="text-white h2" style="font-size:40px; font-family:SukhumvitSet; letter-spacing:3px; text-shadow: 2px 2px black; line-height: 2;">@lang('frontend.bookingins.banner4')</Text><br/>
                        <Text class="text-white h2" style="font-size:40px; font-family:SukhumvitSet; letter-spacing: -2px; line-height: 2.2;   text-shadow: 2px 2px black;">@lang('frontend.bookingins.banner5')</Text>
                    </div>
                    <div class="col-xl-5 box-form bg-white rounded">
                        <form action="{{ route('createbookingins') }}" method='post' class="col-12" id="bookingins">
                            @csrf
                            <div class="row justify-content-center mt-3">
                                <h6 style="font-family:SukhumvitSet">
                                    @lang('frontend.bookingins.filldetail')
                                </h6>
                            </div>
                            <div class="row mt-2">
                                <label class="col-lg-4" for="name" align="left" >@lang('frontend.bookingins.name')</label>
                                <input class="col-lg-8 form-control form-control-sm form-border" type="text" name="name" id="name" required>
                            </div>
                            <div class="row mt-2">
                                <label class="col-lg-4" for="tel" align="left">@lang('frontend.bookingins.phone')</label>
                                <input class="col-lg-8 form-control form-control-sm form-border" type="tel" name="tel" id="tel" required>
                            </div>

                            <div class="row mt-2">
                                <label class="col-lg-4" for="brand" align="left" >@lang('frontend.bookingins.carbrand')</label>
                                <select class="col-lg-8 form-control form-control-sm form-border" name="brand" id="brand" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                </select>
                            </div>

                            <div class="row mt-2">
                                <label class="col-lg-4" for="carmodel" align="left" >@lang('frontend.bookingins.carmodel')</label>
                                <select class="col-lg-8 form-control form-control-sm form-border"  name="model" id="carmodel" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                </select>
                            </div>

                            <div class="row mt-2">
                                <label class="col-lg-4" for="date" align="left" >@lang('frontend.bookingins.date')</label>
                                <input class="col-lg-8 form-control js-flatpickr" type="date" name="date" id="date" required>
                            </div>
                            <div class="form-group row mt-1">
                                <label class="col-lg-4" for="comment" align="left" >@lang('frontend.bookingins.note')</label>
                                <textarea class="col-lg-8 form-control" rows="3" id="comment" name="comment"></textarea>
                            </div>
                            <hr class="my-3" style="width: 97%; margin: 0px auto; border-color: #dadad3;">
                            <div class="form-group row justify-content-center">
                                <button type="submit" class="btn booking-bt book col-8" align="right" id="submitbooking" >@lang('frontend.bookingins.booking')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
                        jQuery('#carmodel').select2();
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
            <h3 class="color-schic" style="font-family:SukhumvitSet">
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
                `<div class="backModal" style="font-family:SukhumvitSet">@lang('frontend.bookingins.modal4')</div>`,
            confirmButtonAriaLabel: 'กลับสู่หน้าหลัก',
        })
    }

    @if(session()->has('success'))
        sendSuccess();
    @endif

</script>

    <!-- Global site tag (gtag.js) - Google Ads: 10816936909 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10816936909"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10816936909');
</script>

<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10816936909/fuU3CLaDxIYDEM239aUo'});
</script>

@endsection

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
