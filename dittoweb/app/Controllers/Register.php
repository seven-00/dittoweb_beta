<?php

namespace App\Controllers;


use fmRESTor\fmRESTor;
use App\Models\UsersModel;
class Register extends BaseController
{
    public function register(){
    return view('register_page');
    }
    public function do_Register(){
        
        $model = new UsersModel();
        $fname = $this->request->getPost('firstname');
        $lname = $this->request->getPost('lastname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $token = $this->session->get('token');
        $authResponse = $model->newUser($fname,$lname,$email,$password,$token);
        $authResponseCode = $authResponse['messages'][0]['code'];
        if($authResponseCode =='0' )
        {
            return view('welcome_page');
        
        }
        else if($authResponseCode=='952'){
             $token = $model->genToken();
             $this->session->set('token',$token);
             $this->do_Register();
        }
        else
        {
            print_r($authResponse);
        }
    }
}