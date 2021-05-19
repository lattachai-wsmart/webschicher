@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/wasuta-building.png') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown" style="font-family:SukhumvitSet;" >@lang('frontend.menu.contact_us')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
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
                                <iframe height="380px" width="100%" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?&q=13.742263,100.634524&zoom=18&key=AIzaSyDMeQHn11UvPNJ_yXUIdopsE3TzhTWU580"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="col-md-12" >
                                <div class="options-container">
                                    <img width="100%" height="100%" src="{{ asset('media/photos/Schic.png') }}"  />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <address class="font-size-18 col-md-12">
                                        <div class="font-size-h4 mb-1">@lang('frontend.contacts.data1.title')</div>
                                        บริษัท ชิเชอร์ จำกัด  1168 ถนนพระราม 9 เขตสวนหลวง <br>
                                        แขวงสวนหลวง กรุงเทพมหานคร 10250 <br><br>

                                        {{-- @lang('frontend.contacts.data1.row1')
                                        @lang('frontend.contacts.data1.row2')<br>
                                        @lang('frontend.contacts.data1.row3')<br><br> --}}
                                        {{-- <i class="fa fa-phone"></i> 02-057-1292<br> --}}
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address class="font-size-18 col-md-12">
                                        <div class="font-size-h4 mb-1"> ศูนย์บริการลูกค้า</div>
                                        <a href="tel:020571292"><i class="fa fa-phone"></i>&nbsp; 02-057-1292</a><br>
                                        ตลอด 24 ชั่วโมง

                                        {{-- @lang('frontend.contacts.data1.row1')
                                        @lang('frontend.contacts.data1.row2')<br>
                                        @lang('frontend.contacts.data1.row3')<br><br> --}}
                                        {{-- <i class="fa fa-phone"></i> 02-057-1292<br> --}}
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address class="font-size-18 col-md-12">
                                        <div class="font-size-h4 mb-1">อีเมล์</div>
                                        <a href="mailto:admin@schicher.com"><i class="fa fa-envelope"></i>&nbsp; admin@schicher.com</a>

                                        {{-- @lang('frontend.contacts.data1.row1')
                                        @lang('frontend.contacts.data1.row2')<br>
                                        @lang('frontend.contacts.data1.row3')<br><br> --}}
                                        {{-- <i class="fa fa-phone"></i> 02-057-1292<br> --}}
                                    </address>
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
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
