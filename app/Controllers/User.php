<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = "hellow Word - Profile";
        return view('app/user/profile', $data);
    }
}
