<?php

namespace App\Controllers;


use App\Models\WalkModel;

class Home extends BaseController
{
    public function index(): string
    {
        $walkModel = new WalkModel();
        $all_walks = $walkModel->get_all_walks();

        $data['walks'] = $all_walks;
        return view('homepage', $data);
    }
    public function create_walk(){
        $data = $this->request->getPost();

        $walkModel = new WalkModel();
        $walkModel->create_walk($data);

        return $this->index();
    }
}
