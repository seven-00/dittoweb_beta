<?php

namespace App\Controllers;

use App\Models\UsersModel;
use Filemaker\Fmdapi;

require './vendor/testapi/Fmdapi.php';

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

    public function user_test()
    {
       $fm = new Fmdapi();
       $layoutName = "content_details";
       $ID ="content_23";
       $IDfield ="content_id";
       $res  = $fm->getOneRecord($layoutName,$ID,$IDfield);
        echo "<pre>";
        print_r($res);
       
    }
  
}

   
