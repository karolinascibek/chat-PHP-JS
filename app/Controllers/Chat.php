<?php

namespace App\Controllers;

class Chat extends BaseController
{
    public function index()
    {
        $data['title'] = "hellow Word - Users-list";
        return view('app/chat/users-list', $data);
    }
    public function sendMessage()
    {
        $data['title'] = "hellow Word - Users-list";
        return view('app/chat/user', $data);
    }
}
