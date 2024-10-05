<?php

namespace App\Controllers;


use App\Models\WalkModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }
    public function create_walk(){
        $data = $this->request->getPost();

        $walkModel = new WalkModel();
        $walkModel->create_walk($data);
    }
}
