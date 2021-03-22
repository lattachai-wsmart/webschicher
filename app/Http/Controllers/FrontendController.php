<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class FrontendController extends Controller
{
    private $header;
    function __construct()
    {
        $this->header = [
            "header" => "Schicher",
            "meta" => [
                [
                    "name" => "description",
                    "content" => "Schicher Test"
                ],
            ],
        ];
    }

    public function index()
    {
        return view('pages/index')->with('header',$this->header);
    }
    public function about()
    {
        return view('pages/about')->with('header',$this->header);
    }
    public function lang_change(Request $request,$lang)
    {

        if (! in_array($lang, ['en', 'th', 'de'])) {
            App::setLocale('en');
            $lang = "en";
        }
        // App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->to(url()->previous());
    }

    // vehicleanalysis
    public function vehicleanalysis (){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.vehicleanalysis.title');
        return view('pages/vehicleanalysis')->with('header',$this->header);
    }
    public function pma (){
        return view('pages/vehicleanalysis/pma')->with('header',$this->header);
    }
    public function eta (){
        return view('pages/vehicleanalysis/eta')->with('header',$this->header);
    }
    public function spa (){
        return view('pages/vehicleanalysis/spa')->with('header',$this->header);
    }
    public function mea (){
        return view('pages/vehicleanalysis/mea')->with('header',$this->header);
    }
    public function rsa (){
        return view('pages/vehicleanalysis/rsa')->with('header',$this->header);
    }
    public function cva (){
        return view('pages/vehicleanalysis/cva')->with('header',$this->header);
    }
    public function pvia (){
        return view('pages/vehicleanalysis/pvia')->with('header',$this->header);
    }
    public function avia (){
        return view('pages/vehicleanalysis/avia')->with('header',$this->header);
    }
    // end vehicleanalysis

    // claimsappraisal
    public function claimsappraisal() {
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.claimsappraisal.title');
        return view('pages.claimsappraisal')->with('header',$this->header);
    }
    public function ach() {
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Automotive_Claims_Handling.title');
        return view('pages.claimsappraisal.ach')->with('header',$this->header);
    }
    public function tpas() {
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Third_Party_Administration_Service.title');
        return view('pages.claimsappraisal.tpas')->with('header',$this->header);
    }
    public function aas() {
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Accident_Appraisal_Services.title');
        return view('pages.claimsappraisal.aas')->with('header',$this->header);
    }
    public function ba() {
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Bodyshop_Appraisal.title');
        return view('pages.claimsappraisal.ba')->with('header',$this->header);
    }
    public function ga() {
        return view('pages.claimsappraisal.ga');
    }

    //vehiclemanagementservices
    public function vehiclemanageserv(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Vehicle_Management_Services.title');
        return view('pages.vehiclemanageserv')->with('header',$this->header);
    }
    public function epouv(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Evaluation_Pricing_of_Used_Vehicles.title');
        return view('pages.vehiclemanageserv.epouv')->with('header',$this->header);
    }
    public function ifadfo(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.In_fleet_and_De_fleet_Operations.title');
        return view('pages.vehiclemanageserv.ifadfo')->with('header',$this->header);
    }
    public function fucvcr(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Fleet_Used_Car_Vehicle_Condition_Report.title');
        return view('pages.vehiclemanageserv.fucvcr')->with('header',$this->header);
    }
    public function feap(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Fleet_Evaluation_and_Pricing.title');
        return view('pages.vehiclemanageserv.feap')->with('header',$this->header);
    }
    public function ucsff(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Used_Car_Seal_for_Fleet.title');
        return view('pages.vehiclemanageserv.ucsff')->with('header',$this->header);
    }
    public function eotbmff(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.End_of_Term_Buyback_management_for_Fleets.title');
        return view('pages.vehiclemanageserv.eotbmff')->with('header',$this->header);
    }
    public function rmff(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Refurbishment_Management_for_Fleets.title');
        return view('pages.vehiclemanageserv.rmff')->with('header',$this->header);
    }
    public function rcff(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Remarketing_Consultancy_for_Fleets.title');
        return view('pages.vehiclemanageserv.rcff')->with('header',$this->header);
    }
    public function ssff(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Sales_solutions_for_Fleets.title');
        return view('pages.vehiclemanageserv.ssff')->with('header',$this->header);
    }

    //dealershipcer
    public function dealershipcer(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Dealership_Certification_Auditing.title');
        return view('pages.dealershipcer')->with('header',$this->header);
    }
    public function dpvia(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.title');
        return view('pages.dealershipcer.dpvia')->with('header',$this->header);
    }
    public function dqsa(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Dealership_Quality_Standard_Assessment.title');
        return view('pages.dealershipcer.dqsa')->with('header',$this->header);
    }

    //dealershiptra
    public function dealershiptra(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Dealership_Training_Qualification.title');
        return view('pages.dealershiptra')->with('header',$this->header);
    }
    public function pcs(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Personnel_Certificate_Services.title');
        return view('pages.dealershiptra.pcs')->with('header',$this->header);
    }
    public function stq(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Sales_Training_Qualification.title');
        return view('pages.dealershiptra.stq')->with('header',$this->header);
    }
    public function itq(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Inspectors_Training_Qualification.title');
        return view('pages.dealershiptra.itq')->with('header',$this->header);
    }
    public function saptq(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Systems_and_Process_Training_Qualification.title');
        return view('pages.dealershiptra.saptq')->with('header',$this->header);
    }
    public function ltq(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Leadership_Training_Qualification.title');
        return view('pages.dealershiptra.ltq')->with('header',$this->header);
    }
    public function mts(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.Managed_Training_Services.title');
        return view('pages.dealershiptra.mts')->with('header',$this->header);
    }
    public function csrc(){
        $this->header["header"] = $this->header["header"] ." | ". Lang::get('frontend.CSR_Compliance.title');
        return view('pages.dealershiptra.csrc')->with('header',$this->header);
    }

}
