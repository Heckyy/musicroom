<?php

namespace App\Services;

class otpservice
{
    public function getOtp(){
        // Panjang OTP (4 digit dalam kasus ini)
        $otpLength = 4;

        // Batas bawah dan atas untuk angka acak (dalam kasus ini 1000 - 9999)
        $min = pow(10, $otpLength - 1);
        $max = pow(10, $otpLength) - 1;

        // Generate angka acak dalam rentang 1000 - 9999
        $otp = mt_rand($min, $max);

        // Kembalikan OTP sebagai string
        return strval($otp);
    }

}
