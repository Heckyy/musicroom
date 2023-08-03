<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Services\otpservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //function to login
    public function login()
    {
        return view("loginPage");
    }

    public function signUp()
    {
        return view("signUpPage");
    }

    public function submitSignUp(Request $request)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $password = Hash::make($request->password);
        $objOtp = new otpservice();
        $otp = $objOtp->getOtp();

        $checkingEmail = DB::table("users")->where("email", '=', $email)->get();
        if ($checkingEmail->count() > 0) {
            return "1";
//            return 1 email already register
        } else {
            $result = DB::table("users")->insert([
                "email" => $email,
                "password" => $password,
                "status" => "logout",
                "otp" => $otp,
            ]);
            return "0";
//        return redirect("/");
//        }
        }
    }
}
