<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class FrontendController extends Controller
{
    private $header;

    public function __construct()
    {
        $this->header = [
            'header' => 'Schicher',
            'meta' => [
                [
                    'name' => 'description',
                    'content' => 'Schicher',
                ],
            ],
        ];
    }

    public function index()
    {
        return view('pages/index')->with('header', $this->header);
    }

    public function about()
    {
        return view('pages/about')->with('header', $this->header);
    }

    public function contact()
    {
        return view('pages/contact')->with('header', $this->header);
    }

    public function shicertificates()
    {
        return view('pages/shicertificates')->with('header', $this->header);
    }

    public function findqualilyusedcars()
    {
        return view('pages/findqualilyusedcars')->with('header', $this->header);
    }

    public function lang_change(Request $request, $lang)
    {
        if (!in_array($lang, ['en', 'th', 'de', 'id'])) {
            App::setLocale('en');
            $lang = 'en';
        }
        // App::setLocale($lang);
        session()->put('locale', $lang);

        return redirect()->to(url()->previous());
    }

    // vehicleanalysis
    public function vehicleanalysis()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.vehicleanalysis.title');

        return view('pages/vehicleanalysis')->with('header', $this->header);
    }

    public function pma()
    {
        return view('pages/vehicleanalysis/pma')->with('header', $this->header);
    }

    public function eta()
    {
        return view('pages/vehicleanalysis/eta')->with('header', $this->header);
    }

    public function spa()
    {
        return view('pages/vehicleanalysis/spa')->with('header', $this->header);
    }

    public function mea()
    {
        return view('pages/vehicleanalysis/mea')->with('header', $this->header);
    }

    public function rsa()
    {
        return view('pages/vehicleanalysis/rsa')->with('header', $this->header);
    }

    public function cva()
    {
        return view('pages/vehicleanalysis/cva')->with('header', $this->header);
    }

    public function pvia()
    {
        return view('pages/vehicleanalysis/pvia')->with('header', $this->header);
    }

    public function avia()
    {
        return view('pages/vehicleanalysis/avia')->with('header', $this->header);
    }

    // end vehicleanalysis

    // claimsappraisal
    public function claimsappraisal()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.claimsappraisal.title');

        return view('pages.claimsappraisal')->with('header', $this->header);
    }

    public function ach()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Automotive_Claims_Handling.title');

        return view('pages.claimsappraisal.ach')->with('header', $this->header);
    }

    public function tpas()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Third_Party_Administration_Service.title');

        return view('pages.claimsappraisal.tpas')->with('header', $this->header);
    }

    public function aas()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Accident_Appraisal_Services.title');

        return view('pages.claimsappraisal.aas')->with('header', $this->header);
    }

    public function ba()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Bodyshop_Appraisal.title');

        return view('pages.claimsappraisal.ba')->with('header', $this->header);
    }

    public function ga()
    {
        return view('pages.claimsappraisal.ga');
    }

    //vehiclemanagementservices
    public function vehiclemanageserv()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Vehicle_Management_Services.title');

        return view('pages.vehiclemanageserv')->with('header', $this->header);
    }

    public function epouv()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Evaluation_Pricing_of_Used_Vehicles.title');

        return view('pages.vehiclemanageserv.epouv')->with('header', $this->header);
    }

    public function ifadfo()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.In_fleet_and_De_fleet_Operations.title');

        return view('pages.vehiclemanageserv.ifadfo')->with('header', $this->header);
    }

    public function fucvcr()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Fleet_Used_Car_Vehicle_Condition_Report.title');

        return view('pages.vehiclemanageserv.fucvcr')->with('header', $this->header);
    }

    public function feap()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Fleet_Evaluation_and_Pricing.title');

        return view('pages.vehiclemanageserv.feap')->with('header', $this->header);
    }

    public function ucsff()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Used_Car_Seal_for_Fleet.title');

        return view('pages.vehiclemanageserv.ucsff')->with('header', $this->header);
    }

    public function eotbmff()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.End_of_Term_Buyback_management_for_Fleets.title');

        return view('pages.vehiclemanageserv.eotbmff')->with('header', $this->header);
    }

    public function rmff()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Refurbishment_Management_for_Fleets.title');

        return view('pages.vehiclemanageserv.rmff')->with('header', $this->header);
    }

    public function rcff()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Remarketing_Consultancy_for_Fleets.title');

        return view('pages.vehiclemanageserv.rcff')->with('header', $this->header);
    }

    public function ssff()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Sales_solutions_for_Fleets.title');

        return view('pages.vehiclemanageserv.ssff')->with('header', $this->header);
    }

    //dealershipcer
    public function dealershipcer()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Dealership_Certification_Auditing.title');

        return view('pages.dealershipcer')->with('header', $this->header);
    }

    public function dpvia()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Dealership_Preowned_Vehicle_Inspection_Analysis.title');

        return view('pages.dealershipcer.dpvia')->with('header', $this->header);
    }

    public function dqsa()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Dealership_Quality_Standard_Assessment.title');

        return view('pages.dealershipcer.dqsa')->with('header', $this->header);
    }

    //dealershiptra
    public function dealershiptra()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Dealership_Training_Qualification.title');

        return view('pages.dealershiptra')->with('header', $this->header);
    }

    public function pcs()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Personnel_Certificate_Services.title');

        return view('pages.dealershiptra.pcs')->with('header', $this->header);
    }

    public function stq()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Sales_Training_Qualification.title');

        return view('pages.dealershiptra.stq')->with('header', $this->header);
    }

    public function itq()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Inspectors_Training_Qualification.title');

        return view('pages.dealershiptra.itq')->with('header', $this->header);
    }

    public function saptq()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Systems_and_Process_Training_Qualification.title');

        return view('pages.dealershiptra.saptq')->with('header', $this->header);
    }

    public function ltq()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Leadership_Training_Qualification.title');

        return view('pages.dealershiptra.ltq')->with('header', $this->header);
    }

    public function mts()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.Managed_Training_Services.title');

        return view('pages.dealershiptra.mts')->with('header', $this->header);
    }

    public function csrc()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.CSR_Compliance.title');

        return view('pages.dealershiptra.csrc')->with('header', $this->header);
    }

    public function bookingins()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.bookingins.title');

        return view('pages.booking.booking')->with('header', $this->header);
    }

    public function bookingtisco()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.bookingins.title');

        return view('pages.booking.bookingtisco')->with('header', $this->header);
    }

    public function createbookingins(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required | string',
                'tel' => 'required | numeric',
                'brand' => 'required | numeric',
                'model' => 'required | numeric',
                'date' => 'required | date_format:Y-m-d',
                'note' => 'string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => env('URL_API').'/api/bookingins',
            // CURLOPT_URL => 'http://192.168.1.75:8080/api/bookingins',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'name' => $request->input('name'),
                'tel' => $request->input('tel'),
                'car_brand_id' => $request->input('brand'),
                'car_model_id' => $request->input('model'),
                'booking_date' => $request->input('date'),
                'note' => $request->input('comment'),
                'partner' => $request->input('partner') ? $request->input('partner') : 'schicher',
            ]),
            CURLOPT_HTTPHEADER => [
             // Set here required headers
                'accept: */*',
                'accept-language: en-US,en;q=0.8',
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        // dd($response, $err);

        curl_close($curl);

        // dd($err);

        if ($err) {
            // echo "1";
            echo 'cURL Error #:'.$err;
        } else {
            // echo "2";
            print_r(json_decode($response));
        }

        return back()->with('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    public function booking_search_cars(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required | string',
        //     'tel' => 'required | numeric',
        //     'brand' => 'required | numeric',
        //     'model' => 'required | numeric',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withError($validator)->withInput();
        // }


        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => env('URL_API').'/api/search_cars',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'name' => $request->input('name'),
                'tel' => $request->input('tel'),
                'car_brand_id' => $request->input('brand'),
                'car_model_id' => $request->input('carmodel'),
            ]),
            CURLOPT_HTTPHEADER => [
                'accept: */*',
                'accept-language: en-US,en;q=0.8',
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        // return $response;
        curl_close($curl);

        if ($err) {
            echo 'cURL Error #:'.$err;
        } else {
            print_r(json_decode($response));

            return back()->with('success', 'Insert data successfully.');
        }
    }

     public function facebook_review()
     {
        //https://developers.facebook.com/docs/pages/access-tokens#get-a-page-access-token
         // $fb = new \Facebook\Facebook([
         //     'app_id' => env('350399116739619'),
         //     'app_secret' => env('830e73846643728238950b69e964b61b'),
         //     'default_access_token' => env('EAAEZBr6biBCMBAAIjAZAkXIu1IMsbZBSaPh9aU61506KGZCacxXMFgvDU4HiQUERtZApPUFkBvhE1YCySePlJfY4oxfm29ChxbFZBZAWto9K0Gbec64UAm1UZBXnSi4ZCUiymyoIVXJR9E6LM3gILQ9IWnGADDxs8qZCZCr7ayUaMAgzU3fv9lG7T0VIZBiM8u12aZAQZD'),
         // ]);

         $fb = new \Facebook\Facebook([
             'app_id' => '350399116739619',
             'app_secret' => '830e73846643728238950b69e964b61b',
            //             'default_access_token' => 'EAAEZBr6biBCMBAOCHmr6Kojuygxs9bw3ZBjZCZAFou46SnacZAL3PyOMR6SpZAy012A8ZCvg4c3ICYbCWMtkxcN9grOUwe8QZAyF1ZCF8FCwZCH4tTgDZCIZA2mZCNgDv6WazaxDsXBIZA7AXVlQkDmozvhLxdBoBghqBLnuAXZBkwrKXKNsUNHaZCifaYtd',
         ]);

         $response = $fb->get('SCHICINSPECTION?fields=access_token&access_token=EAAEZBr6biBCMBAOCHmr6Kojuygxs9bw3ZBjZCZAFou46SnacZAL3PyOMR6SpZAy012A8ZCvg4c3ICYbCWMtkxcN9grOUwe8QZAyF1ZCF8FCwZCH4tTgDZCIZA2mZCNgDv6WazaxDsXBIZA7AXVlQkDmozvhLxdBoBghqBLnuAXZBkwrKXKNsUNHaZCifaYtd');

         $graphNode =  json_decode($response->getBody());

         $url = '/SCHICINSPECTION?fields=ratings{reviewer,created_time,has_rating,has_review,rating,recommendation_type,review_text},rating_count,overall_star_rating,name&access_token='.$graphNode->access_token;
        //         echo $url;exit;
         try {
             $response = $fb->get($url);
         }
         catch(FacebookOtherException $e) {
             echo 'Graph returned an error: ' . $e->getMessage();
             exit;
         }

        //          print_r($response->getBody());
         $facebookReview =  json_decode($response->getBody());
        //          print_r($graphNode);
        //          exit();

         return view('pages/index', compact('facebookReview'))->with('header', $this->header);

     }

    public function warrantynroadside()
    {
        $this->header['header'] = $this->header['header'].' | '.Lang::get('frontend.warranty.title');

        return view('pages.warranty')->with('header', $this->header);
    }

    public function bronze()
    {
        return view('pages.warranty.bronze')->with('header', $this->header);
    }

    public function silver()
    {
        return view('pages.warranty.silver')->with('header', $this->header);
    }

    public function gold()
    {
        return view('pages.warranty.gold')->with('header', $this->header);
    }

    public function black()
    {
        return view('pages.warranty.black')->with('header', $this->header);
    }

    public function whitecard()
    {
        return view('pages.warranty.whitecard')->with('header', $this->header);
    }

    public function whitecardplus()
    {
        return view('pages.warranty.whitecardplus')->with('header', $this->header);
    }

    public function jobandcareer()
    {
        return view('pages/jobandcareer')->with('header', $this->header);
    }

    public function policy()
    {
        return view('pages/policy')->with('header', $this->header);
    }


    public function termncondition()
    {
        return view('pages/termncondition')->with('header', $this->header);
    }

    public function cookie()
    {
        return view('pages/cookie')->with('header', $this->header);
    }

    public function setcookie($approvedCookie)
    {
        session()->put('approvedCookie', $approvedCookie);
        return true;
    }

    public function webschichersendmail(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
                'name' => 'required | string',
                'email' => 'required | email',
                'message' => 'required | string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://127.0.0.1:8003/api/webschichersendmail',
            // CURLOPT_URL => env('URL_API').'/api/webschichersendmail',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]),
            CURLOPT_HTTPHEADER => [
                // Set here required headers
                'accept: */*',
                'accept-language: en-US,en;q=0.8',
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        // dd(env('URL_API').'/api/webschichersendmail');

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            // echo "1";
            echo 'cURL Error #:'.$err;
        } else {
            // echo "2";
            print_r(json_decode($response));
        }

        // $data = array('name'=>$response);

//         Mail::send(['text'=>'mail'], $data, function($message) {
//          $message->to('admin@schicher.com', 'Tutorials Point')->subject
//             ('Laravel Basic Testing Mail');
//          $message->from('admin@schicher.com','Virat Gandhi');
// //         $message->from('123@gmail.com','Virat Gandhi');
//       });

        Mail::to('admin@schicher.com')->send(new SendMail($response));
        return back()->with('success', 'Thanks for contacting us!');
    }

}
