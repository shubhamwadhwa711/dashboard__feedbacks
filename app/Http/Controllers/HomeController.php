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
        return response()->json(['data'=> $obj,'componet'=> 'all']);
        
    }

    public function Logout(Request $request){
        $request->session()->forget('user');
        return response()->json(['success'=>'Successfully!','redirect'=>'/login']);
    }
    //Login
    public function LoginFunc(Request $request){
        $input = $request->all();
        $usreEmail = env('USER_LOGIN_NAME');
        $userPassword = env('USER_LOGIN_PASSWORD');
        if($input['email'] === $usreEmail && $input['password'] === $userPassword){
            $request->session()->put('user','Virat Gandhi');
            return response()->json(['success'=>'Data Successfully Added!','redirect'=>'/dashboard']);
        }
        else{
            return response()->json(['data'=> $input,'message'=>'please check details!','error'=>true]);
        }
        
    }
    //Add And Edit GST
    public function AddEditGST(Request $request){
        $input = $request->all();
        return response()->json(['data'=> $input, 'success'=>'Data Successfully Added!']);
    }

     //Edit Account Details
     public function EditAccountDetails(Request $request){
        $input = $request->all();
        return response()->json(['data'=> $input, 'success'=>'Data Successfully Added!']);
    }
    
}
