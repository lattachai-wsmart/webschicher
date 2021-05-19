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

    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/jobandcareer.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">ร่วมงานกับเรา</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-rounded block-themed block-transparent mb-0">
        <div class="block-content font-size-sm">

            <div class="row col-12">
                <div class="form-group col-md-12">
                    <div class="row col-12" style="justify-content: center;">
                        <h1 style="font-family:SukhumvitSet;">นายช่างแบบไหนที่เราสนใจ?</h1><br>
                    </div>
                    <div class="row col-12" style="justify-content: center;">
                        {{-- <div class="row col-4" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">นายช่างแบบไหนที่เราสนใจ?</h4>
                            <br>
                        </div> --}}
                        <ul >
                            <li style="font-family:SukhumvitSet;">พร้อมที่จะให้คำปรึกษาและชี้แนะแนวทางในการแก้ปัญหาเกี่ยวกับรถยนต์ทั้งระบบได้</li>
                            <li style="font-family:SukhumvitSet;">จัดสรรเวลาได้ดี ตรงต่อเวลา มีความพร้อมในการทำงานเป็นทีม รับผิดชอบงาน และประสานงานกับทีมอื่น ๆ ได้ดี</li>
                            <li style="font-family:SukhumvitSet;">ตรวจสภาพรถยนต์ให้ได้ตรงตามมาตราฐานที่บริษัทวางไว้</li>
                            <li style="font-family:SukhumvitSet;">กระหายในการเรียนรู้อย่างรุนแรง และสามารถเรียนรู้ด้วยตัวเองได้ตลอดเวลา</li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12" >
                <div class="input-group col-12" style="justify-content: center;">
                    <div class="form-group row justify-content-center">
                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeERj8N2niDqH1MMOPjhhbnZ-Q0PI0X7jpuZ4Al_I4DOeVHsQ/viewform"><button style="font-family:SukhumvitSet" type="submit" class="btn btn-schi booking-bt" align="right" id="submitbooking">
                            <i class="fas fa-user-md"></i> สมัครงาน
                        </button></a> 
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

    

@endsection