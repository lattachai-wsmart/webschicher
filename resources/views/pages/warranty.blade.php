@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
<style>
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
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="200" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/bronze.png') }}" alt="">
                </div>
            </div>
            <div class="block-content">
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
                <span class="btn btn-secondary px-4">Read More</span>
            </div>
        </a>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-content bg-body-light" style="padding: 0;">
                <div class="py-2">
                    <img  class="img-fluid" src="{{ asset('media/photos/about/silver.png') }}" alt="">
                </div>
            </div>
            <div class="block-content">
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
                <span class="btn btn-secondary px-4">Read More</span>
            </div>
        </a>
            <!-- END Startup Plan -->
    </div>
    
    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="600" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-header">
                <h3 class="block-title">BRONZE STANDARD</h3>
            </div>
            <div class="block-content bg-body-light">
                <div class="py-2">
                    <p class="h1 font-w700 mb-2">$29</p>
                    <p class="h6 text-muted">per month</p>
                </div>
            </div>
            <div class="block-content">
                <div class="font-size-sm py-2">
                    <p>
                        <strong>10</strong> Projects
                    </p>
                    <p>
                        <strong>30GB</strong> Storage
                    </p>
                    <p>
                        <strong>100</strong> Clients
                    </p>
                    <p>
                        <strong>FULL</strong> Support
                    </p>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
                <span class="btn btn-secondary px-4">Read More</span>
            </div>
        </a>
            <!-- END Startup Plan -->
    </div>

    <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-offset="50" data-timeout="800" data-class="animated fadeInUp">
        <!-- Startup Plan -->
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
            <div class="block-header">
                <h3 class="block-title">BRONZE STANDARD</h3>
            </div>
            <div class="block-content bg-body-light">
                <div class="py-2">
                    <p class="h1 font-w700 mb-2">$29</p>
                    <p class="h6 text-muted">per month</p>
                </div>
            </div>
            <div class="block-content">
                <div class="font-size-sm py-2">
                    <p>
                        <strong>10</strong> Projects
                    </p>
                    <p>
                        <strong>30GB</strong> Storage
                    </p>
                    <p>
                        <strong>100</strong> Clients
                    </p>
                    <p>
                        <strong>FULL</strong> Support
                    </p>
                </div>
            </div>
        <div class="block-content block-content-full bg-body-light">
                <span class="btn btn-secondary px-4">Read More</span>
            </div>
        </a>
            <!-- END Startup Plan -->
    </div>
</div>

@endsection