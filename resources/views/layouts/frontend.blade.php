<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>
        @if (!empty($header['header'])){{ $header['header'] }}@else Schicher
        @endif
    </title>
    @if (!empty($header['meta']))
        @foreach ($header['meta'] as $item)
            @php
                $submeta = '';
                foreach ($item as $key => $value) {
                    $submeta .= ' ' . $key . '="' . $value . '"';
                }
                echo '<meta ' . $submeta . ' >';
            @endphp
        @endforeach
    @else
        <meta name="description" content="Schicher">
    @endif
    <meta name="author" content="wsmart">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/schic.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/schic-192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/schic-180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap"> --}}
    <link rel="stylesheet" id="tmm_google_fonts-css"
        href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald%7CRoboto+Condensed%7CRaleway%7CMrs+Saint+Delafield&amp;subset=latin%2Clatin-ext&amp;ver=4.9.8"
        type="text/css" media="all">

    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">

    <link rel="stylesheet" id="css-main" href="{{ asset('/css/flag-icon.min.css') }}">


    <link rel="stylesheet" id="css-main" href="{{ asset('/css/schicher.css') }}">
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LG5EFZR4BW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LG5EFZR4BW');
    </script>
</head>

<style>
    .fnFooter{
        color: #A4A4A4;
    }
    .fnFooter:hover{
        color: white;
    }
</style>

<body>
    <div id="page-container" class="enable-page-overlay sidebar-dark side-scroll main-content-narrow">

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header schicher-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <div class="div_logo" style="width: 100%; height:100%;" >
                        <a href="/"><img class="img-fluid" src="{{ asset('media/photos//main-logo-mini.png') }}" /></a>
                    </div>
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center font-size-sm">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block d-xs-none">
                        <a style="font-family:SukhumvitSet;" class="btn btn-sm btn-dual btn-rounded d-flex align-items-center"
                            id="page-header-user-dropdown" href="{{ route('bookingins') }}">
                            Book Inspection
                        </a>
                    </div>
                    <div class="dropdown d-inline-block ml-2 d-xs-none">
                        <a style="font-family:SukhumvitSet;" class="btn btn-sm btn-dual btn-rounded d-flex align-items-center"
                            id="page-header-user-dropdown" href="{{ route('findqualilyusedcars') }}">
                            Search Certified Usedcars
                        </a>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <a href="javascript:void(0)" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i
                                class="flag-icon flag-icon-{{ session()->get('locale') == 'en' ? 'us' : session()->get('locale') }}"></i>{{ strtoupper(session()->get('locale')) }}<i
                                style="margin-top: 20px 0 0 0;" class="fa fa-sort-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm"
                            aria-labelledby="page-header-notifications-dropdown">
                                {{-- <div class="p-2 bg-primary-dark text-center rounded-top">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div> --}}
                            <ul class="nav-items">
                                <li>
                                    <a class="dropdown-item @if (session()->get('locale') ==
                                        'th') d-none @endif"
                                        href="{{ route('LangChange', ['lang' => 'th']) }}"><span
                                            class="flag-icon flag-icon-th ml-2"></span> TH</a>
                                </li>
                                <li>
                                    <a class="dropdown-item @if (session()->get('locale') ==
                                        'en') d-none @endif"
                                        href="{{ route('LangChange', ['lang' => 'en']) }}"><span
                                            class="flag-icon flag-icon-us ml-2"></span> EN</a>
                                </li>
                                <li>
                                    <a class="dropdown-item @if (session()->get('locale') ==
                                        'de') d-none @endif"
                                        href="{{ route('LangChange', ['lang' => 'de']) }}"><span
                                            class="flag-icon flag-icon-de ml-2"></span> DE</a>
                                </li>
                                <li>
                                    <a class="dropdown-item @if (session()->get('locale') ==
                                        'id') d-none @endif"
                                        href="{{ route('LangChange', ['lang' => 'id']) }}"><span
                                            class="flag-icon flag-icon-id ml-2"></span> ID</a>
                                </li>


                            </ul>
                            {{-- <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->

            <!-- Top Menu -->
            <div class="bg-body-light">
                <div class="content-full bg-white">
                    <div class="content bg-white p-3 push">
                        <!-- Toggle Navigation -->
                        <div class="d-lg-none">
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <button type="button"
                                class="btn btn-block btn-light d-flex justify-content-between align-items-center"
                                data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal"
                                data-class="d-none">
                                Menu
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- END Toggle Navigation -->

                        <!-- Navigation -->
                        <div id="horizontal-navigation-hover-normal" class="d-none d-lg-block mt-2 mt-lg-0">
                            <ul class="nav-main nav-main-horizontal nav-main-hover">
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="{{ route('about') }}">
                                        {{-- <i class="nav-main-link-icon fa fa-home"></i> --}}
                                        <span class="nav-main-link-name">@lang('frontend.menu.about_us')</span>
                                        {{-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> --}}
                                    </a>
                                </li>
                                {{-- <li class="nav-main-heading">Manage</li> --}}
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">@lang('frontend.menu.service')</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item ">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false" href="{{ route('service.vehicleanalysis') }}">
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.vehicle_analysis')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.pma') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Periodic_Mandatory_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.eta') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Emission_Tests_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.spa') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Specific_Periodic_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.mea') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Mandatory_Export_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.rsa') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Road_Safety_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.cva') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Contract_Vehicle_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.pvia') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Preowned_Vehicle_Inspection_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehicleanalysis.avia') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Auction_Vehicle_Inspection_Analysis.title')</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false" href="{{ route('service.claimsappraisal') }}">
                                                {{-- <i class="nav-main-link-icon fab fa-html5"></i> --}}
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.claims_appraisal')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.claimsappraisal.ach') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Automotive_Claims_Handling.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.claimsappraisal.tpas') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Third_Party_Administration_Service.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.claimsappraisal.aas') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Accident_Appraisal_Services.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.claimsappraisal.ba') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Bodyshop_Appraisal.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.claimsappraisal.ga') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Garage_Appraisal.title')</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false"
                                                href="{{ route('service.vehiclemanageserv') }}">
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.vehicle_manage')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.epouv') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Evaluation_Pricing_of_Used_Vehicles.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.ifadfo') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.In_fleet_and_De_fleet_Operations.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.fucvcr') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Fleet_Used_Car_Vehicle_Condition_Report.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.feap') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Fleet_Evaluation_and_Pricing.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.ucsff') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Used_Car_Seal_for_Fleet.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.eotbmff') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.End_of_Term_Buyback_management_for_Fleets.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.rmff') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Refurbishment_Management_for_Fleets.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.rcff') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Remarketing_Consultancy_for_Fleets.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.vehiclemanageserv.ssff') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Sales_solutions_for_Fleets.title')</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false" href="{{ route('service.dealershipcer') }}">
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.dealership_cer')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershipcer.dpvia') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershipcer.dqsa') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Dealership_Quality_Standard_Assessment.title')</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false" href="{{ route('service.dealershiptra') }}">
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.dealership_tra')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.pcs') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Personnel_Certificate_Services.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.stq') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Sales_Training_Qualification.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.itq') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Inspectors_Training_Qualification.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.saptq') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Systems_and_Process_Training_Qualification.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.ltq') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Leadership_Training_Qualification.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.mts') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.Managed_Training_Services.title')</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('service.dealershiptra.csrc') }}">
                                                        <span
                                                            class="nav-main-link-name">@lang('frontend.CSR_Compliance.title')</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" aria-haspopup="true"
                                                aria-expanded="false" href="{{ route('warrantynroadside') }}">
                                                <span
                                                    class="nav-main-link-name">@lang('frontend.menu.service_submenu.warranty')</span>
                                            </a>
                                            <ul class="nav-main-submenu ">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                    href="{{ route('warranty.bronze') }}">
                                                        <span
                                                            class="nav-main-link-name">Bronze Program</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('warranty.silver') }}">
                                                        <span
                                                            class="nav-main-link-name">silver Program</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('warranty.gold') }}">
                                                        <span
                                                            class="nav-main-link-name">Gold Program</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link"
                                                        href="{{ route('warranty.black') }}">
                                                        <span
                                                            class="nav-main-link-name">Black Program</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ route('jobandcareer') }}">
                                        {{-- <i class="nav-main-link-icon fa fa-money-bill-wave"></i> --}}
                                        <span class="nav-main-link-name">@lang('frontend.menu.job_careers')</span>
                                    </a>

                                </li>
                                {{-- <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="submenu" aria-haspopup="true"
                                        aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon fa fa-globe-americas"></i>
                                        <span class="nav-main-link-name">@lang('frontend.menu.presas')</span>
                                    </a> --}}
                                    {{-- <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Hosting</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Web Design</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Web Development</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Graphic Design</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Legal</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Consulting</span>
                                    </a>
                                </li>
                            </ul> --}}
                                {{-- </li> --}}
                                <li class="nav-main-item">
                                    <a class="nav-main-link " aria-haspopup="true" aria-expanded="false"
                                        href="{{ route('contact') }}">
                                        {{-- <i class="nav-main-link-icon far fa-user"></i> --}}
                                        <span class="nav-main-link-name">{{ __('frontend.menu.contact_us') }}</span>
                                    </a>
                                    {{-- <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Edit</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Settings</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Log out</span>
                                    </a>
                                </li>
                            </ul> --}}
                                </li>
                            </ul>
                        </div>
                        <!-- END Navigation -->
                    </div>
                </div>
            </div>
            <!-- END Top Menu -->
        </header>
        <!-- END Header -->


        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class=" bg-body-light display-flex">
            <div class="content-full py-3 bg-schic justify-content-center ">
                <div class="row font-size-sm ">
                    <div class="block-content row text-light justify-content-center">
                        <div class="col-md-1"></div>
                        <address class="font-size-18 col-md-2" >
                            {{-- <div class="font-size-h4 mb-1">@lang('frontend.contacts.data1.title')</div>
                            @lang('frontend.contacts.data1.row1')<br>
                            @lang('frontend.contacts.data1.row2')<br>
                            @lang('frontend.contacts.data1.row3')<br><br> --}}

                            <div class="font-size-h4 mb-1" >@lang('frontend.footer.about.title')</div>
                            <a class="fnFooter" href="{{ route('about') }}">@lang('frontend.footer.about.row1')</a><br>
                            <a class="fnFooter" href="{{ route('jobandcareer') }}">@lang('frontend.footer.about.row2')</a><br>
                            {{-- <a style="color: white;" href="#">PRESS</a><br> --}}
                            <br>
                            <a target="_blank" href="https://www.facebook.com/schicinspection/"><i class="fnFooter fab fa-2x fa-facebook-square" ></i></a>
                            {{-- <i class="fa fa-envelope-o"></i> <a
                                href="mailto:admin@schicher.com"> admin@schicher.com</a> --}}
                        </address>

                        <address class="font-size-18 col-md-3">
                            {{-- <div class="font-size-h4 mb-1">@lang('frontend.contacts.data2.title')</div>
                            @lang('frontend.contacts.data2.row1')<br>
                            @lang('frontend.contacts.data2.row2')​<br><br> --}}
                            <div class="font-size-h4 mb-1">@lang('frontend.footer.service.title')</div>
                            <a class="fnFooter" href="{{ route('service.vehicleanalysis') }}">@lang('frontend.footer.service.row1')</a><br>
                            <a class="fnFooter" href="{{ route('service.claimsappraisal') }}">@lang('frontend.footer.service.row2')</a><br>
                            <a class="fnFooter" href="{{ route('service.vehiclemanageserv') }}">@lang('frontend.footer.service.row3')</a><br>
                            {{-- <a class="fnFooter" href="{{ route('service.dealershipcer') }}">@lang('frontend.footer.service.row4')</a><br>
                            <a class="fnFooter" href="{{ route('service.dealershiptra') }}">@lang('frontend.footer.service.row5')</a><br> --}}
                        </address>

                        <address class="font-size-18 col-md-3">
                            {{-- <div class="font-size-h4 mb-1">@lang('frontend.contacts.data3.title')</div>
                            @lang('frontend.contacts.data3.row1')<br><br>
                            <a href="tel:020571292"><i class="fa fa-phone"></i> 02-057-1292</a><br> --}}
                            <div class="font-size-h4 mb-1">@lang('frontend.footer.recService.title')</div>
                            <a class="fnFooter" href="{{ route('warrantynroadside') }}">@lang('frontend.footer.recService.row1')</a><br>
                            <a class="fnFooter" href="{{ route('bookingins') }}">@lang('frontend.footer.recService.row2')</a><br>
                            <a class="fnFooter" href="{{ route('findqualilyusedcars') }}">@lang('frontend.footer.recService.row3')</a><br>
                            <a class="fnFooter" href="{{ route('shicertificates') }}">@lang('frontend.footer.recService.row4')</a><br>
                        </address>

                        <address class="font-size-18 col-md-3">
                            {{-- <div class="font-size-h4 mb-1">@lang('frontend.contacts.data3.title')</div>
                            @lang('frontend.contacts.data3.row1')<br><br>
                            <a href="tel:020571292"><i class="fa fa-phone"></i> 02-057-1292</a><br> --}}
                            <div class="font-size-h4 mb-1">@lang('frontend.footer.contact.title')</div>
                            <span style="color: white;">
                                <i class="fa fa-home"></i>@lang('frontend.footer.contact.add1')
                            </span><br>
                            <span>@lang('frontend.footer.contact.add2')</span><br>

                            <span style="color: white;">
                                <i class="fa fa-envelope"></i>
                                <a class="fnFooter" href="mailto:admin@schicher.com">@lang('frontend.footer.contact.email')</a>
                            </span><br>

                            <span style="color: white;">
                                <i class="far fa-calendar-alt"><span style="font-family:SukhumvitSet;">@lang('frontend.footer.contact.date')</span></i>
                            </span><br>

                            <span style="color: white;">
                                <i class="fas fa-clock"></i>@lang('frontend.footer.contact.time')
                            </span><br>

                            <span style="color: white;">
                                <i class="fa fa-phone"></i>
                                <a class="fnFooter" href="tel:020571292">@lang('frontend.footer.contact.tel')</a>
                            </span><br>
                        </address>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apps</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <!-- CRM -->
                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-speedometer fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                CRM
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END CRM -->
                                </div>
                                <div class="col-6">
                                    <!-- Products -->
                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-rocket fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Products
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Products -->
                                </div>
                                <div class="col-6">
                                    <!-- Sales -->
                                    <a class="block block-rounded block-link-shadow bg-body mb-0"
                                        href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-plane fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Sales
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Sales -->
                                </div>
                                <div class="col-6">
                                    <!-- Payments -->
                                    <a class="block block-rounded block-link-shadow bg-body mb-0"
                                        href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-wallet fa-2x text-primary"></i>
                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                Payments
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Payments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->

    <!-- OneUI Core JS -->
    <script src="{{ asset('js/oneui.app.js') }}"></script>

    @yield('js_after')
</body>

</html>
