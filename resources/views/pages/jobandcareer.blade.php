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

    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    {{-- <div class="row">
                        <p>@lang('frontend.contact.content')</p>
                    </div> --}}
                    <br>
                    <div class="row col-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <img height="100%" width="100%" src="{{ asset('media/photos/schic(16-1).png') }}" alt="">
                                {{-- <iframe height="380px" width="100%" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?&q=13.742263,100.634524&zoom=18&key=AIzaSyDMeQHn11UvPNJ_yXUIdopsE3TzhTWU580"
                                    allowfullscreen>
                                </iframe> --}}
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row col-12" style="justify-content: center;">
                                        <h1 style="font-family:SukhumvitSet;">ช่างแบบไหนที่เราสนใจ?</h1><br>
                                    </div>
                                    <div class="row col-12" style="justify-content: center;">  
                                        <ul >
                                            <li style="font-family:SukhumvitSet;">พร้อมที่จะให้คำปรึกษาและชี้แนะแนวทางในการแก้ปัญหาเกี่ยวกับรถยนต์ทั้งระบบได้</li>
                                            <li style="font-family:SukhumvitSet;">จัดสรรเวลาได้ดี ตรงต่อเวลา มีความรับผิดชอบ ทำงานเป็นทีมได้อย่างมีประสิทธิภาพ</li>
                                            <li style="font-family:SukhumvitSet;">ตรวจสภาพรถยนต์ได้ตรงตามมาตรฐานที่บริษัทวางไว้</li>
                                            <li style="font-family:SukhumvitSet;">กระตือรือร้น พร้อมเรียนรู้ และพัฒนาตนเองอยู่เสมอ</li> 
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="input-group col-12" style="justify-content: center;">
                                        <div class="form-group row justify-content-center">
                                            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeERj8N2niDqH1MMOPjhhbnZ-Q0PI0X7jpuZ4Al_I4DOeVHsQ/viewform"><button style="font-family:SukhumvitSet" type="submit" class="btn btn-schi booking-bt" align="right" id="submitbooking">
                                                <i class="fas fa-user-md"></i> สมัครงาน
                                            </button></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

    

@endsection