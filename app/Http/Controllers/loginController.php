<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\account;
use App\Models\contacts;
use App\Models\transaction;
use App\Models\customer;

class loginController extends Controller
{

    public function authenticate(Request $request)
    {
        session_start();
        //$_SESSION["login_attempts"] = 0;
        if (isset($_SESSION["locked"])){
            $difference = time() - $_SESSION["locked"];
            if ($difference > 600)
        {
        unset($_SESSION["locked"]);
        $_SESSION["login_attempts"]=0;
        $disabled='enabled';
        return view('index', compact('disabled'));
        }
}
        
       $input = $request->input();
       $card = $input['cardNumber'];
       $password = $input['password'];

       $pwd = DB::table('logins')->where('card_number', $card)->value('password');
       
       if ($password == $pwd){
        $_SESSION["login_attempts"] = 0;
        $id=DB::table('customers')->where('card_number', $card)->value('customer_id');
        return redirect()->route('customer.show',$id);
    }
        else{
            $_SESSION["login_attempts"] += 1;
            
            if ($_SESSION["login_attempts"] > 2){
                $_SESSION["locked"] = time();
                $error = "Please wait for 10 minutes";
                $disabled = 'disabled';
                return view('index', compact('error', 'card', 'password', 'disabled'));
            }
            else {
                $card = $input['cardNumber'];
                $password = $input['password'];
                $error = 'Please verify the username and password';
                $disabled='enabled';
                return view('index', compact('error', 'card', 'password', 'disabled'));
            }

        }
    }
}
