<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function lang_change(Request $request)
    {

        if (! in_array($request->lang, ['en', 'th', 'de'])) {
            App::setLocale('en');
        }
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->to(url()->previous());
    }

    // vehicleanalysis
    public function vehicleanalysis (){
        return view('pages/vehicleanalysis');
    }
    public function pma (){
        return view('pages/vehicleanalysis/pma');
    }
    public function eta (){
        return view('pages/vehicleanalysis/eta');
    }
    public function spa (){
        return view('pages/vehicleanalysis/spa');
    }
    public function mea (){
        return view('pages/vehicleanalysis/mea');
    }
    public function rsa (){
        return view('pages/vehicleanalysis/rsa');
    }
    public function cva (){
        return view('pages/vehicleanalysis/cva');
    }
    public function pvia (){
        return view('pages/vehicleanalysis/pvia');
    }
    public function avia (){
        return view('pages/vehicleanalysis/avia');
    }
    // end vehicleanalysis

    // claimsappraisal
    public function claimsappraisal() {
        return view('pages.claimsappraisal');
    }
    public function tpas() {
        return view('pages.claimsappraisal.tpas');
    }
    public function aas() {
        // return view('pages.claimsappraisal.aas');
    }
    public function ba() {
        // return view('pages.claimsappraisal.ba');
    }
    public function ga() {
        // return view('pages.claimsappraisal.ga');
    }
}
