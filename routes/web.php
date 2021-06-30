<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes
// Route::view('/', 'index');
Route::get('/', [FrontendController::class, "index"]);
Route::get('change/lang/{lang}', [FrontendController::class, "lang_change"])->name('LangChange');
Route::get('/about', [FrontendController::class, "about"])->name('about');
Route::get('contact', [FrontendController::class, "contact"])->name('contact');
Route::get('shicertificates', [FrontendController::class, "shicertificates"])->name('shicertificates');
Route::get('findqualilyusedcars', [FrontendController::class, "findqualilyusedcars"])->name('findqualilyusedcars');
Route::post('findqualilyusedcars/create', [FrontendController::class, "booking_search_cars"])->name('booking_search_cars');
Route::get('bookins', [FrontendController::class, "bookingins"])->name('bookingins');
Route::post('bookins/create', [FrontendController::class, "createbookingins"])->name('createbookingins');
Route::get('jobandcareer', [FrontendController::class, "jobandcareer"])->name('jobandcareer');
Route::get('termandcondition', [FrontendController::class, "termncondition"])->name('termncondition');
Route::get('policy', [FrontendController::class, "policy"])->name('policy');

Route::get('warranty', [FrontendController::class, "warrantynroadside"])->name('warrantynroadside');
Route::prefix('warranty')->name('warranty.')->group(function () {
    // Route::get('warrantyandroadside', [FrontendController::class, "warrantynroadside"])->name('warrantynroadside');
    // Route::get('bronze', [FrontendController::class, "bronze"])->name('bronze');
    Route::get('bronze', [FrontendController::class, "bronze"])->name('bronze');
    Route::get('silver', [FrontendController::class, "silver"])->name('silver');
    Route::get('gold', [FrontendController::class, "gold"])->name('gold');
    Route::get('black', [FrontendController::class, "black"])->name('black');
    // Route::get('whitecard', [FrontendController::class, "whitecard"])->name('whitecard');
    // Route::get('whitecardplus', [FrontendController::class, "whitecardplus"])->name('whitecardplus');
});

Route::prefix('service')->name('service.')->group(function () {
    Route::get('vehicleanalysis', [FrontendController::class, "vehicleanalysis"])->name('vehicleanalysis');
    Route::prefix('vehicleanalysis')->name('vehicleanalysis.')->group(function () {
        Route::get('pma', [FrontendController::class, "pma"])->name('pma');
        Route::get('eta', [FrontendController::class, "eta"])->name('eta');
        Route::get('spa', [FrontendController::class, "spa"])->name('spa');
        Route::get('mea', [FrontendController::class, "mea"])->name('mea');
        Route::get('rsa', [FrontendController::class, "rsa"])->name('rsa');
        Route::get('cva', [FrontendController::class, "cva"])->name('cva');
        Route::get('pvia', [FrontendController::class, "pvia"])->name('pvia');
        Route::get('avia', [FrontendController::class, "avia"])->name('avia');
    });

    Route::get('claimsappraisal', [FrontendController::class, "claimsappraisal"])->name('claimsappraisal');
    Route::prefix('claimsappraisal')->name('claimsappraisal.')->group(function () {
        Route::get('ach', [FrontendController::class, "ach"])->name('ach');
        Route::get('tpas', [FrontendController::class, "tpas"])->name('tpas');
        Route::get('aas', [FrontendController::class, "aas"])->name('aas');
        Route::get('ba', [FrontendController::class, "ba"])->name('ba');
        Route::get('ga', [FrontendController::class, "ga"])->name('ga');
    });

    Route::get('vehiclemanageserv', [FrontendController::class, "vehiclemanageserv"])->name('vehiclemanageserv');
    Route::prefix('vehiclemanageserv')->name('vehiclemanageserv.')->group(function () {
        Route::get('epouv', [FrontendController::class, "epouv"])->name('epouv');
        Route::get('ifadfo', [FrontendController::class, "ifadfo"])->name('ifadfo');
        Route::get('fucvcr', [FrontendController::class, "fucvcr"])->name('fucvcr');
        Route::get('feap', [FrontendController::class, "feap"])->name('feap');
        Route::get('ucsff', [FrontendController::class, "ucsff"])->name('ucsff');
        Route::get('eotbmff', [FrontendController::class, "eotbmff"])->name('eotbmff');
        Route::get('rmff', [FrontendController::class, "rmff"])->name('rmff');
        Route::get('rcff', [FrontendController::class, "rcff"])->name('rcff');
        Route::get('ssff', [FrontendController::class, "ssff"])->name('ssff');
    });

    Route::get('dealershipcer', [FrontendController::class, "dealershipcer"])->name('dealershipcer');
    Route::prefix('dealershipcer')->name('dealershipcer.')->group(function () {
        Route::get('dpvia', [FrontendController::class, "dpvia"])->name('dpvia');
        Route::get('dqsa', [FrontendController::class, "dqsa"])->name('dqsa');
    });

    Route::get('dealershiptra', [FrontendController::class, "dealershiptra"])->name('dealershiptra');
    Route::prefix('dealershiptra')->name('dealershiptra.')->group(function () {
        Route::get('pcs', [FrontendController::class, "pcs"])->name('pcs');
        Route::get('stq', [FrontendController::class, "stq"])->name('stq');
        Route::get('itq', [FrontendController::class, "itq"])->name('itq');
        Route::get('saptq', [FrontendController::class, "saptq"])->name('saptq');
        Route::get('ltq', [FrontendController::class, "ltq"])->name('ltq');
        Route::get('mts', [FrontendController::class, "mts"])->name('mts');
        Route::get('csrc', [FrontendController::class, "csrc"])->name('csrc');
    });

});
