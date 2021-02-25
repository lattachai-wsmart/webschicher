<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller
{
    public function index()
    {
        if(empty(session()->get('locale'))){
            session()->put('locale', 'en');
            App::setLocale('en');
        }
        App::setLocale(session()->get('locale'));
        return view('index');
    }
    public function lang_change(Request $request)
    {
        if (! in_array($request->lang, ['en', 'th', 'de'])) {
            App::setLocale('en');
        }
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
