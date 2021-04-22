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
</style>

<div class="form-group col-md-12">
    <div class="" style="display: flex">
        <div class="form-group col-md-7"></div>
        <div class="form-group col-md-4">
            <div class="form-group row" style="justify-content: center; border-radius: 10px; box-shadow: 1px 1px 3px 3px rgba(199, 196, 196, 0.349); padding: 15px">
                <div class="form-group row col-md-12" style="justify-content: center;">
                    <label for="brand"> กรอกรายละเอียดคุณเพื่อการค้นหา </label>
                </div>
                <div class="form-group row col-md-12">
                    <label for="brand"> ยี่ห้อรถยนต์ : </label>
                    <select style="height: 35px;" class="form-control form-control-sm form-border mt-0 mt-lg-auto title-search" name="brand" id="brand">
                        <option value="">---  กรุณาเลือก  ---</option>
                    </select>
                </div>
                <div class="form-group row col-md-12">
                    <label for="carmodel">รุ่นรถยนต์ :</label>
                    <select style="height: 35px;" class="form-control form-control-sm form-border mt-0 mt-lg-auto title-search" name="carmodel" id="carmodel">
                        <option value="">---  กรุณาเลือก  ---</option>
                        {{-- @foreach($brand as $brands)
                            <option value="{{ $brands->id_brand }}">{{ $brands->name_brand }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="form-group row col-md-12">
                    <label>ชื่อ-นามสกุล :</label>
                    <input type="text" style="height: 35px;" class="form-control form-control-sm form-border" name="name" id="name" placeholder="" value="">
                </div>
                <div class="form-group row col-md-12">
                    <label>เบอร์โทร :</label>
                    <input type="text" style="height: 35px;" class="form-control form-control-sm form-border" name="tel" id="tel" placeholder="" value="">
                </div>
                <hr class="my-3" style="width: 97%; margin: 0px auto; border-color: #dadad3;">
                <div class="form-group row col-md-12">
                    <label></label>
                    <button id="btnSerarch" type="button" class="btn bg-schic btn-sm form-control form-border" style="font-size: 1em; border-radius: 30px; color: #fff">ค้นหาตอนนี้</button>
                </div>
                <div class="form-group row col-md-12" style="justify-content: center; font-size: 12px">
                    <label>เพื่อดำเนินการต่อ นโยบายความเป็นส่วนตัวและข้อกำหนดการใช้งาน</label>
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

<script>
    jQuery.ajax({
        url: 'http://127.0.0.1:8001/api/cars/brands',
        success: function(data){

                if(data){
                    const select = jQuery('#brand');
                    select.find("option").remove();
                    const newop = new Option("{{__('frontend.please_select')}}","");
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
                    const newop = new Option("{{__('frontend.please_select')}}","");
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
