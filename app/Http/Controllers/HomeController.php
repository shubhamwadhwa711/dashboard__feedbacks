<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    //Index Page
    public function index(Request $request){
        $value = $request->session()->get('user');
        if($value != null){
            return view('home.index',['title'=>'Home']);
        }
        else{
            return Redirect::to('/login');
        }
        
    }

    //Login Page
    public function Login(){
        return view('login.index',['title'=>'Login']);
        
    }

    public function search(Request $request){
        $searchnumber = $request->input('search_number');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php?mobile=$searchnumber",
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        //CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $output = '';
        if ($err) {
        $obj = $err;
        $output = ['data'=> $obj,'componet'=> 'all','error'=>true ];
        } else {
        $obj = $response;
        $output = ['data'=> $obj,'componet'=> 'all'];
        }
        return response()->json($output);
        
    }

    public function Logout(Request $request){
        $request->session()->forget('user');
        return response()->json(['success'=>'Successfully!','redirect'=>'/login']);
    }
    //update addasanafunc 
    public function addasanafunc(Request $request){
        $contactid = $request->input('contactid');
        $asana_url = $request->input('asana_url');
        $CurlPost = ['contactid'=>$contactid, 'cf_2242'=>$asana_url ];
        $curl = curl_init();
        curl_setopt_array(
            $curl, 
            array(
            CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php",
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
            CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $obj = $err;
        } else {
            $obj = $response;
        }
        $output = ['data'=> $obj,'componet'=> 'notepad'];
        return response()->json(json_encode($output));
    }
    //send description
    public function descriptionsend(Request $request){
        $contactid = $request->input();
        $mobile = $request->input();
        $description = $request->input();
        $curl = curl_init();
        $CurlPost = ['message_type'=>'Search','cf_2246'=> $url,'whatsapp_withccode'=>'9478070524'];
        curl_setopt_array(
            $curl, 
            array(
            CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php",
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
            CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $obj = $err;
        } else {
            $obj = $response;
        }
        $output = ['data'=> $obj,'componet'=> 'notepad'];
        return response()->json($output);
    }
    //send link to whatsapp
    public function whatsapplinksend(Request $request){
        $searchType = $request->input('cmsearchType');
        $mobileNum = $request->input('mobile');
        $url = '';
        
        if($searchType == 'nav-search'){
            $search_number = $request->input('search');
            $rtp = $request->input('rtp');
            $placement = $request->input('placement');
            $url = 'https://vipnumbershop.com/search/'.'?search='.$search_number.'&rtp='.$rtp.'&placement='.$placement;
        }
        else if($searchType == 'nav-advancesearch'){
            $start_with =$request->input('start_with');
            $anywhere = $request->input('anywhere');
            $end_with = $request->input('end_with');
            $must_contains = $request->input('must_contains');
            $not_contains = $request->input('not_contains');
            $most_contains = $request->input('most_contains');
            $total = $request->input('total');
            $sum = $request->input('sum');
            $rtp = $request->input('rtp');
            if($start_with == null){
                $start_with = '';
            }
            if($anywhere == null){
                $anywhere = '';
            }
            if($end_with == null){
                $end_with = '';
            }
            if($must_contains == null){
                $must_contains = '';
            }
            if($not_contains == null){
                $not_contains = '';
            }
            if($most_contains == null){
                $most_contains = '';
            }
            if($total == null){
                $total = '';
            }
            if($sum == null){
                $sum = '';
            }
            
            $url ='https://vipnumbershop.com/search/'.'?start_with='.$start_with.'&anywhere='.$anywhere.'&end_with='.$end_with.'&must_contains='.$must_contains.'&not_contains='.$not_contains.'&most_contains='.$most_contains.'&total='.$total.'&sum='.$sum.'&advance=true&rtp='.$rtp.'';

        }
        $curl = curl_init();
        $CurlPost = ['message_type'=>'Search','cf_2246'=> $url,'whatsapp_withccode'=>$mobileNum];
        curl_setopt_array(
            $curl, 
            array(
            CURLOPT_URL => "https://upc.vipnumbershop.com/create_whatsapp.php",
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
            CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $obj = $err;
        } else {
            $obj = $response;
        }
        $output = ['data'=> $obj,'componet'=> 'search'];
        return response()->json($output);
    }
    //send whatsapp
    public function whatsappsend(Request $request){
        $whatsapp_number = $request->input('mobile');
        $whatapp_msg = $request->input('whatsapp_msg');
        $curl = curl_init();
        $CurlPost = ['message_type'=>'Send','message_body'=> $whatapp_msg,'whatsapp_withccode'=>$whatsapp_number];
        curl_setopt_array(
            $curl, 
            array(
            CURLOPT_URL => "https://upc.vipnumbershop.com/create_whatsapp.php",
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
            CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $output= '';
        if ($err) {
            $obj = ['status'=> 'failed', 'data'=> $err];
            $output = ['data'=> $obj,'componet'=> 'whatapp','error'=>true];
        } else {
            $obj = $response;
            $output = ['data'=> $obj,'componet'=> 'whatapp'];
        }
        return response()->json($output);
    }
    //Login
    public function LoginFunc(Request $request){
        $input = $request->all();
        $usreEmail = env('USER_LOGIN_NAME');
        $userPassword = env('USER_LOGIN_PASSWORD');
        if($input['email'] === $usreEmail && $input['password'] === $userPassword){
            $request->session()->put('user','Virat Gandhi');
            $output = ['success'=>'Data Successfully Added!','redirect'=>'/dashboard','componet'=> 'login'];
            return response()->json($output);
        }
        else{
            $output =['data'=> $input,'message'=>'please check details!','error'=>true];
            return response()->json($output);
        }
        
    }
    //Add And Edit GST
    public function AddEditGST(Request $request){
        $input = $request->all();
        $gstno = $input['GST_no'];
        $phone = $input['mobile'];
        $contID = $input['contactid'];
        $CurlPost = ['mobile'=>$phone,'contactid'=>$contID ,'cf_2213' => $gstno];

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php",
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        $obj = $err;
        } else {
            $obj = $response;
        }
        $output =['data'=> $obj, 'componet'=>'userbio_gst','update_content'=> $CurlPost];
        return response()->json($output);
    }

     //Edit Account Details
     public function EditAccountDetails(Request $request){
        $input = $request->all();
        $paytm = $input['paytm'];
        $phonePay = $input['phone'];
        $googlepay= $input['googlepay'];
        $bankaccountno = $input['account_no'];
        $upicode = $input['upi_no'];
        $phone = $input['mobile'];
        $contID = $input['contactid'];

        $CurlPost = ['mobile'=>$phone,'contactid'=>$contID ,'cf_2083'=> $paytm,'cf_2085'=>$phonePay,'cf_2081'=>$googlepay,'cf_2087'=>$bankaccountno,'cf_2234'=>$upicode];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php",
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        $obj = $err;
        } else {
            $obj = $response;
        }
        $output =['data'=> $obj, 'componet'=>'userbio_account_details','update_content'=> $CurlPost];
        return response()->json($output);
    }

    public function EditUserBio(Request $request){
        $input = $request->all();
        $phone = $input['mobile'];
        $contID = $input['contactid'];
        $user_bio_name = $input['user_bio_name'];
        $user_bio_email = $input['user_bio_email'];
        $user_bio_address = $input['user_bio_address'];
        $user_bio_city = $input['user_bio_city'];
        $user_bio_state = $input['user_bio_state'];
        $user_bio_code = $input['user_bio_code'];
        $CurlPost = [
            'mobile'=>$phone,
            'contactid'=>$contID,
            'firstname'=> $user_bio_name,
            'email'=> $user_bio_email,
            'mailingstreet' => $user_bio_address,
            'mailingcity' => $user_bio_city,
            'mailingstate' => $user_bio_state,
            'mailingzip' => $user_bio_code
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://upc.vipnumbershop.com/contact_update.php",
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $obj = $err;
        } else {
            $obj = $response;
        }
        $output =['data'=> $obj, 'componet'=>'userbio_update_detailts','update_content'=> $CurlPost];
        return response()->json($output);
    }

    public function PhoneNumberCheck(Request $request){
        $input = $request->all();
        $phone = $input['mobile'];
        $contID = $input['contactid'];
        $request_number = $input['request_number'];
        $CurlPost = ['request_number'=>$request_number];

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://vipnumbershop.com/api-getnumberfulldetails/",
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        CURLOPT_POSTFIELDS=>$CurlPost,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        $obj = $err;
        } else {
            $obj = $response;
        }
        $output =['data'=> $obj, 'componet'=>'phoneNumberCheck','update_content'=> $CurlPost];
        return response()->json($output);
    }
    
}
