<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function processEmail(Request $request)
    {
        //

        return response()->json([
            'success' => true,
            'message' => 'Email sent successfully'
        ], 200);
    }

    public function verifyOTP(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'OTP verified successfully'
        ], 200);
    }

    public function resendOTP(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'OTP resent successfully'
        ], 200);
    }

    public function processInfo(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'Info updated successfully'
        ], 200);
    }
}
