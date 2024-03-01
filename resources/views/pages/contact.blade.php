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
                    <br>
                    <div class="row col-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
{{--                                <iframe height="380px" width="100%" frameborder="0" style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"--}}
{{--                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.5969439044575!2d100.55908414216236!3d13.75595185781344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61a6f5b86efd%3A0xa169c6731bc72980!2sLemonaide!5e0!3m2!1sen!2sth!4v1694432780193!5m2!1sen!2sth"--}}
{{--                                    allowfullscreen>--}}
{{--                                </iframe>--}}
                                <iframe height="380px" width="100%" frameborder="0" style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
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
                                        @lang('frontend.contacts.data1.row1')<br>
                                        @lang('frontend.contacts.data1.row2')<br><br>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address class="font-size-18 col-md-12">
                                        <div class="font-size-h4 mb-1">@lang('frontend.contacts.data2.title')</div>
                                        <a href="tel:020571292"><i class="fa fa-phone"></i>@lang('frontend.contacts.data2.row1')</a><br>
                                        @lang('frontend.contacts.data2.row2')
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address class="font-size-18 col-md-12">
                                        <div class="font-size-h4 mb-1">@lang('frontend.contacts.data3.title')</div>
                                        <a href="mailto:admin@schicher.com"><i class="fa fa-envelope"></i>@lang('frontend.contacts.data3.row1')</a>
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
