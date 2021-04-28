@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
<style>
.box:hover {
    box-shadow: 0 5px 15px 2px rgba(61, 61, 61, 0.1);
}

</style>
<div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
    <div class="bg-primary-dark-op">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.warranty.title')</h1>
            </div>
        </div>
    </div>
</div>

<div class=" row content overflow-hidden">
    <div class="col-md-6 col-xl-3 invisible " data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/bronze.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2" >
                   <div style="text-align:left;">
                    ● รับรถน้อยกว่า 10 ปี<br>
                    ● รถทุกคันที่วิ่งไม่เกิน 200,000 กิโลเมตร<br>
                    ● คุ้มครอง 1 ปี หรือ 20,000 กิโลเมตร<br>
                    ● คุ้มครอง 3 รายการ<br>
                    ● ซ่อมอู่ในเครือ<br>
                    ● รับผิดชอบสูงสุด 30,000 บาท ต่อครั้ง จำกัดไม่เกิน 100,000 บาท<br>
                    ● แถมฟรีบริการช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง<br>      
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.bronze') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/silver.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                    ● รับรถน้อยกว่า 10 ปี<br>
                    ● รถทุกคันที่วิ่งไม่เกิน 140,000 กิโลเมตร<br>
                    ● คุ้มครอง 1 ปี หรือ 25,000 กิโลเมตร<br>
                    ● คุ้มครอง 3 รายการ<br>
                    ● ซ่อมอู่ในเครือ<br>
                    ● รับผิดชอบสูงสุด 40,000 บาท ต่อครั้ง จํากัดไม่เกิน 120,000 บาท<br>
                    ● แถมฟรีบริการช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง<br>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.silver') }}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
    
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/goldplus.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                    ●  รับรถน้อยกว่า 7 ปี<br>
                    ●  รถทุกคันที่วิ่งไม่เกิน 100,000 กิโลเมตร<br>
                    ●  คุ้มครอง 1 ปี หรือ 25,000 กิโลเมตร<br>
                    ●  คุ้มครอง 4 รายการ<br>
                    ●  ซ่อมอู่ในเครือ<br>
                    ●  รับผิดชอบสูงสุด 80,000 บาท ต่อครั้ง จํากัดไม่เกิน 250,000 บาท<br>
                    ●  แถมฟรีบริการช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง<br>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="{{ route('warrantyandroadside.goldplus')}}"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="800" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/autosmartstd.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                    ●  รับรถน้อยกว่า 10 ปี<br>
                    ●  รถทุกคันที่วิ่งไม่เกิน 200,000 กิโลเมตร<br>
                    ●  คุ้มครอง 1 ปี หรือ 25,000 กิโลเมตร<br>
                    ●  คุ้มครอง 3 รายการ<br>
                    ●  ซ่อมศูนย์บริการ<br>
                    ●  รับผิดชอบสูงสุดเท่ากับมูลค่าของรถยนต์ ณ วันที่ซื้อ<br>
                    ●  แถมฟรีบริการช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง<br>
                   </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="#"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div>

<div class=" row content overflow-hidden">
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1000" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/autosmartdm.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2" >
                   <div style="text-align:left;">
                    ●  รับรถน้อยกว่า 10 ปี<br>
                    ●  รถทุกคันที่วิ่งไม่เกิน 200,000 กิโลเมตร<br>
                    ●  คุ้มครอง 1 ปี หรือ 25,000 กิโลเมตร<br>
                    ●  คุ้มครอง 13 รายการ<br>
                    ●  ซ่อมศูนย์ในเครือ<br>
                    ●  รับผิดชอบสูงสุดเท่ากับมูลค่าของรถยนต์ ณ วันที่ซื้อ<br>
                    ●  แถมฟรีบริการช่วยเหลือฉุกเฉินตลอด 24 ชั่วโมง<br>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <a href="#"><span class="btn btn-secondary px-4" >Read More</span></a>
            </div>
        </div>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/whitecard.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                    ●   ฟรีบริการตรวจเช็คสภาพรถยนต์ 1 ปี (เฉพาะเช็คเดินทางไกล) <br>
                    ●   ฟรีบริการค่าบริการด้านเปิดประตูรถฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการจัมพ์แบตเตอรี่ฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการค่าแรงสําหรับการเปลี่ยนถ่ายน้ํามันเครื่อง 1 ปี<br>
                    ●   ฟรีบริการรถยก 1 ปี ทั่วประเทศไทย<br>
                    ●   ฟรีบริการเติมน้ํามันฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการในการเปลี่ยนยางอะไหล่ 1 ปี<br>
                   </div>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
            <a href="#"><span class="btn btn-secondary px-4" >Read More</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>
    
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="1400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <div class="block block-rounded block-link-shadow text-center box" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/whitecardplus.png') }}" alt="">
                </div>
            </div>
            <div class="block-content" style="min-height: 210px;">
                <div class="font-size-sm py-2">
                   <div style="text-align:left;">
                    ●   ฟรีบริการตรวจเช็คสภาพรถยนต์ 1 ปี (เฉพาะเช็คเดินทางไกล) <br>
                    ●   ฟรีบริการค่าบริการด้านเปิดประตูรถฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการจัมพ์แบตเตอรี่ฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการค่าแรงสําหรับการเปลี่ยนถ่ายน้ํามันเครื่อง 1 ปี<br>
                    ●   ฟรีบริการรถยก 1 ปี ทั่วประเทศไทย<br>
                    ●   ฟรีบริการในการเปลี่ยนยางอะไหล่ 1 ปี<br>
                    ●   ฟรีบริการเติมน้ํามันฉุกเฉิน 1 ปี<br>
                    ●   ฟรีบริการโรงแรมที่พัก<br>
                   </div>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
            <a href="#"><span class="btn btn-secondary px-4" >Read More</span></a>
        </div>
        </div>
            <!-- END Startup Plan -->
    </div>
</div>

@endsection