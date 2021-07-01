@extends('layouts.frontend')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/facebookreview.css') }}">
@endsection

<style>
    .fnTab{
        color:#353B41;
    }
    .fnTab:hover{
        color:#FDBE29;
    }

    @media (max-width:500px){
        .carousel-caption a.btn{
            margin-right: -20px;
        }
    }
    @media (max-width:410px){
        .carousel-caption a.btn{
            margin-right: -35px;
            font-size:12px;
        }
    }
    @media (max-width:400px){
        .carousel-caption a.btn{
            margin-right: -35px;
            font-size:10px;
        }
    }

</style>

@section('content')
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="col-md-12 slidebarTop">
            <div class="block block-rounded">
                <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-arrows="true"
                    data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher0-en.png" alt="">

                        <div class="carousel-caption">
                            <h4 style="font-family:SukhumvitSet;" class="d-none d-md-block">@lang('frontend.slide.aboutSchi')</h4>

                            <a class="btn btn-schi btn-sm mb-1" href="{{ route('service.vehicleanalysis') }}">@lang('frontend.slide.search')<i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher1-en.png" alt="">

                        <div class="carousel-caption">
                            <h4 style="font-family:SukhumvitSet;" class="d-none d-md-block">@lang('frontend.slide.bookSchi')</h4>

                            <a class="btn btn-schi btn-sm mb-1" href="{{ route('bookingins') }}">@lang('frontend.slide.search')<i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher2-en.png" alt="">
                        <div class="carousel-caption">
                            <h4 style="font-family:SukhumvitSet;" class="d-none d-md-block">@lang('frontend.slide.searchSchi')</h4>

                            <a class="btn btn-schi btn-sm mb-1" href="{{ route('findqualilyusedcars') }}">@lang('frontend.slide.search')<i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="media/photos/slidebar/shicher3-en.png" alt="">
                        <div class="carousel-caption">
                            <h4 style="font-family:SukhumvitSet;" class="d-none d-md-block">@lang('frontend.slide.certSchi')</h4>

                            <a class="btn btn-schi btn-sm mb-1" href="{{ route('shicertificates') }}">@lang('frontend.slide.search')<i class="fa fa-caret-right"></i></a>
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
                        <div class="py-5 text-center fnTab">
                            <div class="item item-2x item-rounded  text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/warranty.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('frontend.warranty.title')</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-class="animated bounceIn"
                    href="{{ route('bookingins') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center fnTab">
                            <div class="item item-2x item-rounded  text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/book.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('frontend.cardSelect.bookSchi')</div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-lg-1"></div> --}}
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn" data-class="animated bounceIn"
                    href="{{ route('findqualilyusedcars') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center fnTab">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/cars.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('frontend.cardSelect.searchSchi')</div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-lg-1"></div> --}}
            <div class="col-lg-3">
                <a class="block block-rounded js-appear-enabled animated bounceIn"data-class="animated bounceIn"
                    href="{{ route('shicertificates') }}">
                    <div class="block-content block-content-full block_shadow">
                        <div class="py-5 text-center fnTab">
                            <div class="item item-2x item-rounded text-white mx-auto">
                                <img src="{{ asset('media/photos/icons/search.png') }}" class="imageicon96" />
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('frontend.cardSelect.certSchi')</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Facebook Review -->
    {{-- <div class="facebook_review_container">
        <div class="showreview">
            <div class="facebook">
                <div class="carousel-item">
                    <img class="icon_face" src="media/photos/facebook2.png" alt="">
                    <div class="f_text1">Facebook Fanpage</div>
                    <div class="f_text2">SCHIC inspection</div>
                </div>
            </div>
                <div class="dividing_line">

                </div>
            <div class="total">
                <div class="carousel-item">
                    <img class="icon_face" src="media/photos/facebook2.png" alt="">
                    <div class="p_text1">4.4 out of 5</div>
                    <div class="p_text2">Based on the opinion of 71 people</div>
                </div>
            </div>
        </div>
        <div class="next_previous">
            <a href="javascript:void(0)" class="previous round" id="prev">&#8249;</a>
            <a href="javascript:void(0)" class="next round" id="next">&#8250;</a>
            <div class="slidecontent">
                <div class="profile">
                    <div class="carousel-item">
                        <img class="icon_profile" src="media/photos/profile.png" alt="">
                    </div>
                </div>
                <div class="name_comment">
                    <div class="first_last_name">
                        A'px Sevenpack<span class="star">⭐ 4.5</span>
                    </div>
                    <div class="comment">
                        <div>
                            Lorem adipisicing elit. adipisci assumenda sequi vel soluta nesciunt aliquamm! Esse architecto ad distinctio.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ENDFacebook Review -->

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

    // let pofileArray = [
    //             {'img':'https://satit.udru.ac.th/wp-content/uploads/2020/06/avatar-png-1.png', 'name':'AAAAA AAAAA', 'point':'1.1',
    //             'comment':'Lorem adipisicing elit. adipisci assumenda sequi vel soluta nesciunt aliquam! Esse architecto ad distinctio.'},
    //             {'img':'https://satit.udru.ac.th/wp-content/uploads/2020/06/avatar-png-1.png', 'name':'BBBBB BBBBB', 'point':'2.1',
    //             'comment':'Lorem adipisicing elit. adipisci assumenda sequi vel soluta nesciunt aliquam! Esse architecto ad distinctio.'},
    //             {'img':'https://satit.udru.ac.th/wp-content/uploads/2020/06/avatar-png-1.png', 'name':'CCCCC CCCCC', 'point':'3.1',
    //             'comment':'Lorem adipisicing elit. adipisci assumenda sequi vel soluta nesciunt aliquam! Esse architecto ad distinctio.'},
    //             {'img':'https://satit.udru.ac.th/wp-content/uploads/2020/06/avatar-png-1.png', 'name':'DDDDD DDDDD', 'point':'4.1',
    //             'comment':'Lorem adipisicing elit. adipisci assumenda sequi vel soluta nesciunt aliquam! Esse architecto ad distinctio.'},
    //     ]
    // let pofileArrayWidth = pofileArray.length*100
    // let slidecontent = document.querySelectorAll('.slidecontent')[0]

    // pofileArray.forEach((item,index) => {
    //     slidecontent.innerHTML += `<div class="slidecontentcontainer">
    //                 <div class="profile">
    //                     <div class="carousel-item">
    //                         <img class="icon_profile" src="${item.img}" alt="">
    //                     </div>
    //                 </div>
    //                 <div class="name_comment">
    //                     <div class="first_last_name">
    //                         ${item.name}<span class="star">⭐ ${item.point}</span> </div>
    //                     <div class="comment">
    //                         <div>${item.comment}</div>
    //                     </div>
    //                 </div>
    //             </div>`
    // });

    // slidecontent.style.width = `${pofileArrayWidth}%`
    // prev = document.getElementById("prev");
    // next = document.getElementById("next");
    // let index = 1
    // prev.onclick = function(){
    //     if(index < 0) index = pofileArray.length - 1
    //     slidecontent.style.transform = `translateX(-${index*(100/pofileArray.length)}%)`
    //     index--
    // };

    // next.onclick = function(){
    //     if(index > pofileArray.length - 1) index = 0
    //     slidecontent.style.transform = `translateX(-${index*(100/pofileArray.length)}%)`
    //     index++
    // };

</script>

@endsection
