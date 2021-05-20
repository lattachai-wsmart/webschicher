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
                    <h1 style="font-family:SukhumvitSet;" class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.career.data.title')</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <br>
                    <div class="row col-12">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <img height="100%" width="100%" src="{{ asset('media/photos/schic(16-1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row col-12" style="justify-content: center;">
                                        <h1 style="font-family:SukhumvitSet;">@lang('frontend.career.data.whyyou')</h1><br>
                                    </div>
                                    <div class="row col-12" style="justify-content: center;">  
                                        <ul >
                                            <li style="font-family:SukhumvitSet;">@lang('frontend.career.data.row1')</li>
                                            <li style="font-family:SukhumvitSet;">@lang('frontend.career.data.row2')</li>
                                            <li style="font-family:SukhumvitSet;">@lang('frontend.career.data.row3')</li>
                                            <li style="font-family:SukhumvitSet;">@lang('frontend.career.data.row4')</li> 
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="input-group col-12" style="justify-content: center;">
                                        <div class="form-group row justify-content-center">
                                            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeERj8N2niDqH1MMOPjhhbnZ-Q0PI0X7jpuZ4Al_I4DOeVHsQ/viewform"><button style="font-family:SukhumvitSet" type="submit" class="btn btn-schi booking-bt" align="right" id="submitbooking">
                                                <i class="fas fa-user-md"></i>@lang('frontend.career.data.apply')
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