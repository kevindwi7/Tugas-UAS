<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index()
    {
        return view(auth.login);
    }
    public function storeCaptchaForm(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        return view('/admin');
    }
}
