<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }
    public function create_walk(){
        $data = $this->request->getPost();
        print_r($data) ;
    }
}
