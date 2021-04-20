@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')

    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/about_schic1.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.shicertificates.title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="block block-rounded block-themed block-transparent mb-0">
        <div class="block-content font-size-sm">
            <div class="row col-12" style="justify-content: center;">
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="email" class="form-control" id="schiidsearch" name="schiidsearch"
                            placeholder="SCHI ID">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" id="btnSearchSchi">
                                <i class="fa fa-search mr-1"></i> Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12" style="justify-content: center;">
                <div id="dataSearchShow" class="justify-content-center" style="display: flex">
                    <div class="spinner-border text-info d-none" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div id="showSearchContent" class="row d-none">
                        {{-- <table class="table table-borderless table-hover table-vcenter ">
                            <tbody>
                                <tr>
                                    <td> --}}
                                    <div class="col-12" style="justify-content: center;">
                                        <h5>SHCI ID :</h5><a class="h5" href="" id="showSearchContentID"></a>
                                    </div>
                                    <div class="col-12" style="justify-content: center;">
                                        <div class="font-size-sm text-muted" id="showSearchContentDetail"></div>
                                    </div>
                                    <div class="col-12" style="justify-content: center;">
                                        <div class="font-size-sm text-muted" id="showSearchContentDetail2"></div>
                                    </div>
                                    {{-- </td>
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
                <div id="showSearchContentError" class="col-12 row"></div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

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
            let url = "{{ env('URL_API') }}/api/insp-link?schic_id=" + jQuery("#schiidsearch").val()
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
                        console.log('data Else', data);
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
