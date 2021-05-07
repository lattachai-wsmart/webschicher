@extends('layouts.frontend')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="col-md-12 slidebarTop">
            <div class="block block-rounded">
                <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-arrows="true"
                    data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher1-en.png" alt="">
                        <div class="carousel-caption">
                            <h5>SCHIC CERTIFICATES</h5>
                            {{-- <div class="textSlide">&nbsp;</div> --}}
                            <a class="btn btn-schi btn-sm mb-1" href="#">Find &nbsp; <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher2-en.png" alt="">
                        <div class="carousel-caption">
                            <h5>SCHIC CERTIFICATES</h5>
                            {{-- <div class="textSlide">&nbsp;</div> --}}
                            <a class="btn btn-schi btn-sm mb-1" href="#">Find &nbsp; <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher3-en.png" alt="">

                        <div class="carousel-caption">
                            <h5>BOOK SCHICINSPECTION</h5>
                            {{-- <div class="textSlide">&nbsp;</div> --}}
                            <a class="btn btn-schi btn-sm mb-1" href="{{ route('bookingins') }}">Find &nbsp; <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-class="animated bounceIn"
                    href="{{ route('warrantynroadside') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded  text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/warranty.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">WARRANTY & ROADSIDE</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-class="animated bounceIn"
                    href="{{ route('bookingins') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded  text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/book.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">BOOK SCHICINSPECTION</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-class="animated bounceIn"
                    href="{{ route('findqualilyusedcars') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/cars.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">FIND QUALILY USEDCARS</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn"data-class="animated bounceIn"
                    href="{{ route('shicertificates') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/search.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">SCHIC CERTIFICATES</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

    <div class="modal fade" id="modal-block-popin" tabindex="-1" aria-labelledby="modal-block-popin" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-content font-size-sm">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" id="schiidsearch" name="schiidsearch"
                                    placeholder="SCHI ID">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-schi" id="btnSearchSchi">
                                        <i class="fa fa-search mr-1"></i> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="dataSearchShow" class="justify-content-center" style="display: flex">
                            <div class="spinner-border text-info d-none" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="showSearchContent" class="col-12 d-none">
                                <table class="table table-borderless table-hover table-vcenter ">
                                    <tbody>
                                        <tr>
                                            {{-- <td class="text-center">
                                                <a class="text-danger" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                            </td> --}}
                                            {{-- <td style="width: 60px;">
                                                <img class="img-fluid" src="assets/media/various/ecom_product1.png" alt="">
                                            </td> --}}
                                            <td>
                                                <a class="h5" href="" id="showSearchContentID"></a>
                                                <div class="font-size-sm text-muted" id="showSearchContentDetail"></div>
                                                <div class="font-size-sm text-muted" id="showSearchContentDetail2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div id="showSearchContentError" class="col-12 row"></div>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        {{-- <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-schi" data-dismiss="modal">Ok</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>
    <script>
        jQuery(function() {
            One.helpers('slick');
        });

    </script>
    <script>
        jQuery('#btnSearchSchi').on('click', function() {
            let url = "{{ env('URL_API') }}/inspection/api/insp-link?schic_id=" + jQuery("#schiidsearch").val()
            jQuery.ajax({
                url,
                "type": "GET",
                beforeSend: () => {
                    jQuery('.spinner-border').removeClass('d-none');
                    jQuery('#showSearchContent').addClass('d-none');
                    jQuery('#showSearchContentError').html('');
                },
                success: function(data) {
                    jQuery('.spinner-border').addClass('d-none');

                    if (typeof data.link != "undefined") {
                        jQuery('#showSearchContent').removeClass('d-none');
                        jQuery("#showSearchContentID").attr('href', data.link).attr('target', '_blank')
                            .html(jQuery("#schiidsearch").val())
                        const text =
                            `${data.car_year} ${data.brand_name} ${data.model_name} ${data.submodel_name}`;
                        jQuery("#showSearchContentDetail").html(text)
                        jQuery("#showSearchContentDetail2").html(data.license)
                    } else {
                        // console.log('data Else', data);
                        jQuery('#showSearchContentError').html(`<div class="alert alert-light alert-dismissable col-12" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p class="mb-0">Not Found !</p>
                            </div>`);

                    }
                },
                error: function(er) {
                    jQuery('.spinner-border').addClass('d-none');

                }
            });
        });

    </script>
@endsection
