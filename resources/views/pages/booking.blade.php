@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.bookingins.title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <form action="{{ route('createbookingins') }}" method='post' id="bookingins">
        @csrf
        <div class="content bg-white">
            <div class="content content-boxed">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <br>
                    <div class="row">
                        <div class="col-12 pt-lg-3 box-form">
                            <div class="form-group row">
                                <label class="col-lg-2" for="name" align="left" >@lang('frontend.bookingins.name')</label>
                                <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="name" id="name" required>
                                <div class="col-3"></div>
                                <label class="col-lg-2" for="tel" >@lang('frontend.bookingins.phone')</label>
                                
                                <input class="col-lg-2 form-control form-control-sm form-border" type="tel" name="tel" id="tel" required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2" for="brand" align="left" >@lang('frontend.bookingins.carbrand')</label>
                                <select class="col-lg-2 form-control form-control-sm form-border" name="brand" id="brand" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                    {{-- <option value="เต๊นท์" {{($data->nametitle ==='เต๊นท์') ? 'selected' : ''}}>เต็นท์</option> --}}
                                </select>
                                <div class="col-3"></div>
                                <label class="col-lg-2" for="carmodel" align="left" >@lang('frontend.bookingins.carmodel')</label>
                                <select class="col-lg-2 form-control form-control-sm form-border" name="model" id="carmodel" required>
                                    <option hidden value="">@lang('frontend.bookingins.plzselect')</option>
                                </select>
                                <div class="col-1"></div>
                            </div>
                            
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
                                <button type="submit" class="btn btn-success" align="right" id="submitbooking" >@lang('frontend.bookingins.booking')</button>
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
<script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'select2']); });</script>

<script>
    jQuery.ajax({
        url: 'http://127.0.0.1:8001/api/cars/brands',
        success: function(data){
            
                if(data){
                    const select = jQuery('#brand');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.bookingins.plzselect')}}","");
                    jQuery(newop).appendTo(select)
                    data.map((item,index) => {
                        const newoption = new Option(item.name,item.id);
                        jQuery(newoption).appendTo(select)
                    });
                }
        }
    })

    jQuery('#brand').on('change', function(e){
        getmodel(jQuery(e.target).val());
    })

    function getmodel(id){
        jQuery.ajax({
        url: 'http://127.0.0.1:8001/api/cars/models/'+id,
        success: function(data){
            
                if(data){
                    const select = jQuery('#carmodel');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.bookingins.plzselect')}}","");
                    jQuery(newop).appendTo(select)
                    data.map((item,index) => {
                        const newoption = new Option(item.name,item.id);
                        jQuery(newoption).appendTo(select)
                    });
                }
        }
    })
    }

    jQuery('#submitbooking').on('click', function(e){
        createbooking()
    })

    function createbooking(){
        jQuery.ajax({
            method: 'POST',
            url: "{{ route('createbookingins') }}",
            beforeSend: function(){
                
            },
            data: jQuery('#bookingins').serialize(),

            success: function(data){ 
                if(data){
                    console.log(13)                   }
                }
        })
    }
    
</script>

@endsection

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
@endsection
