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
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array("Cache-Control: no-cache",),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        $obj = $err;
        } else {
            $obj = $response;
        }
        $output = ['data'=> $obj,'componet'=> 'all'];
        return response()->json(json_encode($output));
        
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
        dd();
        //$CurlPost = ['message_type'=>'Search','cf_2246'=> $url,'whatsapp_withccode'=>'9478070524'];
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
    //send link to whatsapp
    public function whatsapplinksend(Request $request){
        $search_number = $request->input('search');
        $rtp = $request->input('rtp');
        $placement = $request->input('placement');
        $url = 'https://vipnumbershop.com/search/'.'?search='.$search_number.'&rtp='.$rtp.'&placement='.$placement;

        $curl = curl_init();
        $CurlPost = ['message_type'=>'Search','cf_2246'=> $url,'whatsapp_withccode'=>'9478070524'];
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
        return response()->json(json_encode($output));
    }
    //send whatsapp
    public function whatsappsend(Request $request){
        $whatsapp_number = $request->input('whatsapp_number');
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

        if ($err) {
            $obj = $err;
        } else {
            $obj = $response;
        }
        $output = ['data'=> $obj,'componet'=> 'whatapp'];
        return response()->json(json_encode($output));
    }
    //Login
    public function LoginFunc(Request $request){
        $input = $request->all();
        $usreEmail = env('USER_LOGIN_NAME');
        $userPassword = env('USER_LOGIN_PASSWORD');
        if($input['email'] === $usreEmail && $input['password'] === $userPassword){
            $request->session()->put('user','Virat Gandhi');
            $output = ['success'=>'Data Successfully Added!','redirect'=>'/dashboard'];
            return response()->json(json_encode($output));
        }
        else{
            $output =['data'=> $input,'message'=>'please check details!','error'=>true];
            return response()->json(json_encode($output));
        }
        
    }
    //Add And Edit GST
    public function AddEditGST(Request $request){
        $input = $request->all();
        $gstno = $input['GST_no'];
        $CurlPost = ['contact_no'=>9780097800,'cf_2213' => $gstno];
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
        return response()->json(['data'=> $obj, 'success'=>'Data Successfully Added!']);
    }

     //Edit Account Details
     public function EditAccountDetails(Request $request){
        $input = $request->all();
        
        return response()->json(['data'=> $input, 'success'=>'Data Successfully Added!']);
    }
    
}
