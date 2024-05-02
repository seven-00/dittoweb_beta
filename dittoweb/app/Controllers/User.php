<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ReviewModel;
use PHPUnit\Logging\TestDox\HtmlRenderer;

class User extends BaseController
{
    public function user_details()
    {
        $model = new UsersModel();
        $token = $this->session->get('token');
        $userId= $this->session->get('user');
        $userData = $model->findUser($userId,$token)['response']['data'][0]['fieldData'];
        $userfname = $this->session->get('fname');
        $userlname = $this->session->get('lname');
        
        return view('templates/header',array("userfname"=>$userfname,
                                             "userlname"=>$userlname))
            .view("user_details",array("userData" => $userData));
    }
  
}

   
