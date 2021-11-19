<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = "hellow Word - Login page";
        return view('app/login/login', $data);
    }
}
