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
    public function vehicleanalysis (){
        return view('pages/vehicleanalysis');
    }
    public function pma (){
        return view('pages/pma');
    }
    public function eta (){
        return view('pages/eta');
    }
    public function spa (){
        return view('pages/spa');
    }
    public function mea (){
        return view('pages/mea');
    }
    public function rsa (){
        return view('pages/rsa');
    }
    public function cva (){
        return view('pages/cva');
    }
    public function pvia (){
        return view('pages/pvia');
    }
    public function avia (){
        return view('pages/avia');
    }
}
