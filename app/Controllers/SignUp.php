<?php

namespace App\Controllers;

class SignUp extends BaseController
{
    public function index()
    {
        $data['title'] = "hellow Word - Sign up page";
        return view('app/sign-up/sign-up', $data);
    }
}
