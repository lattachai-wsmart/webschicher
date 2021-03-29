@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.contact.title')</h1>
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
                        <p>@lang('frontend.contact.content')</p>
                    </div>
                    <div class="row col-12">
                        <div class="col-md-4">
                            <div class="col-md-12" style="height: 450px">
                                Img
                            </div>
                            <div class="col-md-12">
                                <div class="block block-rounded">
                                    {{-- <div class="block-header block-header-default">
                                        <h3 class="block-title">Address</h3>
                                    </div> --}}
                                    <div class="block-content">
                                        {{-- <div class="font-size-h4 mb-1">John Parker</div> --}}
                                        <address class="font-size-sm">
                                            1168 ถนนพระราม 9<br>
                                            เขตสวนหลวง แขวงสวนหลวง<br>
                                            กรุงเทพมหานคร 10250<br><br>
                                            <i class="fa fa-phone"></i> 02-057-1292<br>
                                            <i class="fa fa-envelope-o"></i> <a href="mailto:markawan@schicher.com">markawan@schicher.com</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <iframe
                                    height="450"
                                    width="100%"
                                    frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?&q=13.742263,100.634524&zoom=18&key=AIzaSyDMeQHn11UvPNJ_yXUIdopsE3TzhTWU580" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
