<?php

namespace App\Controllers;

use App\Models\TokenModel;

class Welcome extends BaseController
{
    public function index()
    {
        
        $model = new TokenModel();
        $jsondata = $model->getToken();
        $token = $jsondata['response']['token'];
        $this->session->set('token',$token);
        // return view('templates/header')
        //     .view('welcome_page')
        //     .view('templates/footer');
    }
    public function test(){
        echo $this->session->get('token');
    }
}