<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }
    public function create_walk(){
        echo "called method create_walk() successfully";
    }
}
