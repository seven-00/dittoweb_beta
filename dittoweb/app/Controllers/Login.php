<?php

namespace App\Controllers;


use fmRESTor\fmRESTor;
use App\Models\UsersModel;
class Login extends BaseController
{
    public function do_login(){
        $model = new UsersModel();

        
       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');
       $token = $this->session->get('token');
       $authResponse = $model->authUser($email,$password,$token);
       $authResponseCode = $authResponse['messages'][0]['code'];
       if($authResponseCode =='0' )
       {
            if ($authResponse['response']['data'][0]['fieldData']['userPass']==$password)
            {
                echo "Auth successful";
            }
            else
            {
                echo "Auth unsuccessful";
            }
       }
       else
       {
        echo "error";
       }
    }
}