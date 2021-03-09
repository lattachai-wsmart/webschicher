@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">ABOUT SCHICHER</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="row">
                        <article class="story">
                            <p>Schicher เป็นบริษัทที่ดำเนินการทางด้านการตรวจสอบ และการรับรองมาตราฐานที่เกี่ยวกับรถยนต์ ทั้งในด้านคุณภาพ การเรียกร้องค่าสินไหม การบริหารจัดการ การรับรองมาตราฐาน รวมทั้งการฝึกสอนบุคลากรให้มีมาตราฐาน
                                เป้าหมายของเราคือการส่งมอบความไว้วางใจ และความเป็นกลางให้กับวงการรถยนต์ใช้แล้ว การร่วมมือกับ  TUV ได้นำประสบการณ์มากกว่า 150 ปี พร้อมปรัชญาของความเป็นกลาง น่าเชื่อถือ และมาตรฐานในการประเมินคุณภาพ
                                ดังนั้นโลโก้ Schicher จึงได้รับการยอมรับในอุตสาหกรรมรถยนต์มือสอง ว่าเป็น มาตรฐานระดับทองคำ (Gold Standard) สำหรับรถยนต์มือสองที่มีคุณภาพดี</p>

                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                            <div class="col-12 animated fadeIn">
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('media/photos/about/about_schic1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <strong class="font-size-h4">วัตถุประสงค์ของ SCHICHER</strong>
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p class="">
                                ปัจจุบันการคมนาคมมีการขยายตัวอย่างรวดเร็ว จึงทำให้มีการซื้อขายรถยนต์ที่มากขึ้นรวมทั้งรถยนต์มือสอง เราจึงเข้ามาเพื่อช่วยเพิ่มคุณภาพของรถยนต์มือสองในท้องตลาด การที่มีรถยนต์เพิ่มขึ้นอย่างมาก ย่อมส่งผลให้เกิดปัญหาต่าง ๆ ตามมา เช่น ปัญหาด้านมลพิษทางอากาศจากการปล่อยควันเสียของรถยนต์ มลพิษทางเสียง การประเมินมลพิษให้เป็นไปตามข้อบังคับของกรมควบคุมมลพิษจึงเป็นสิ่งสำคัญ และการเกิดอุบัติเหตุบนท้องถนนที่เพิ่มขึ้น เราจึงเข้ามาเป็นผู้ช่วยในการประสานงาน และประเมินความเสียหายที่เกิดขึ้นด้วยความเป็นกลางและถูกต้อง ในส่วนของการดัดแปลงหรือปลอมแปลงรถ การประเมินสภาพรถยนต์จึงเป็นสิ่งสำคัญสำหรับขับขี่รถยนต์รวมทั้งผู้ขายจะต้องมีการ ในเมื่อการคมนาคมมีการขยายตัวจึงทำให้มีผู้ค้าเป็นจำนวนมากขึ้นในตลาด เพื่อเพิ่มมาตราฐานรถยนต์มือสองเข้าสู่ท้องตลาด เราจึงเป็นทั้งผู้ฝึกสอน ตรวจสอบ และรับรอง ให้แก่ผู้ขายรถยนต์มือสอง เพื่อให้ผู้ขับขี่รถยนต์มือสองเกิดความเชื่อใจ มั่นใจ ไว้ใจ ในการขับขี่บนท้องถนน
                            </p>
                        </div>
                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                            <div class="col-12 animated fadeIn">
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('media/photos/about/about_schic2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <strong class="font-size-h4">ความหมายของโลโก้ SCHICHER</strong>
                            {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                            <p class="">
                                SCHICHER มาจากการผสมคำระหว่างคำว่า SCHICK และ SICHER ซึ่งทั้งสองคำเป็นคำมาจากภาษาเยอรมัน โดย SCHICK แปลว่าความมั่นใจ และ SICHER แปลว่าปลอดภัย จึงทำให้ลูกค้าทุกคนสามารถมั่นใจได้ว่าการประเมิณของ SCHICHER เป็นการประเมินที่เชื่อถือได้และปลอดภัยตามาตราฐานของเยอรมัน
                            </p>
                        </div>

                        <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                            <div class="col-12 animated fadeIn">
                                <div class="row justify-content-center">
                                    <img style="width: 450px" class="img-fluid" src="{{ asset('media/photos/about/about_schic3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
