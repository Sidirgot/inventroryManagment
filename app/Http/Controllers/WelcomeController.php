<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function welcome()
    {
        $users = ['0' => 'tasos', '1'=> 'kati'];

        return view('welcome')->withUsers($users);
    }
}