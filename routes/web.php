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
Route::get('change/lang', [FrontendController::class, "lang_change"])->name('LangChange');
Route::get('/about', [FrontendController::class, "about"])->name('about');

Route::get('/service/vehicleanalysis', [FrontendController::class, "vehicleanalysis"])->name('service.vehicleanalysis');
Route::get('/service/vehicleanalysis/pma', [FrontendController::class, "pma"])->name('service.vehicleanalysis.pma');
Route::get('/service/vehicleanalysis/eta', [FrontendController::class, "eta"])->name('service.vehicleanalysis.eta');
Route::get('/service/vehicleanalysis/spa', [FrontendController::class, "spa"])->name('service.vehicleanalysis.spa');
Route::get('/service/vehicleanalysis/mea', [FrontendController::class, "mea"])->name('service.vehicleanalysis.mea');
Route::get('/service/vehicleanalysis/rsa', [FrontendController::class, "rsa"])->name('service.vehicleanalysis.rsa');
Route::get('/service/vehicleanalysis/cva', [FrontendController::class, "cva"])->name('service.vehicleanalysis.cva');
Route::get('/service/vehicleanalysis/pvia', [FrontendController::class, "pvia"])->name('service.vehicleanalysis.pvia');
Route::get('/service/vehicleanalysis/avia', [FrontendController::class, "avia"])->name('service.vehicleanalysis.avia');

Route::get('/service/claimsappraisal', [FrontendController::class, "claimsappraisal"])->name('service.claimsappraisal');
Route::get('/service/claimsappraisal/ach', [FrontendController::class, "ach"])->name('service.claimsappraisal.ach');
Route::get('/service/claimsappraisal/tpas', [FrontendController::class, "tpas"])->name('service.claimsappraisal.tpas');
Route::get('/service/claimsappraisal/aas', [FrontendController::class, "aas"])->name('service.claimsappraisal.aas');
Route::get('/service/claimsappraisal/ba', [FrontendController::class, "ba"])->name('service.claimsappraisal.ba');
Route::get('/service/claimsappraisal/ga', [FrontendController::class, "ga"])->name('service.claimsappraisal.ga');
