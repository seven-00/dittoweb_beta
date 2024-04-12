<?php

namespace App\Controllers;

use App\Models\ContentModel;

class Content extends BaseController
{
    public function index()
    {
        
        $model = new ContentModel();
        $token = $this->session->get('token');
        $resdata = $model->getContent($token);
        echo "<pre>";
        print_r(var_dump($resdata));
        // return view('templates/header')
        //     .view('welcome_page')
        //     .view('templates/footer');
    }
}