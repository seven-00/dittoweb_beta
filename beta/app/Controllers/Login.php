<?php

namespace App\Controllers;


use fmRESTor\fmRESTor;
use App\Models\UsersModel;
class Login extends BaseController
{
    public function login(){
        return view('templates/header')
              .view('login_page')
              .view('templates/footer');
    }
    public function do_login(){
        $model = new UsersModel();

        
       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');
       $auth = $model->authUser($email,$password);
       if($auth){
        return view('templates/header')
        .view('authSuccess')
        .view('templates/footer');
       }
       else{
        return view('templates/header')
              .view('authFail')
              .view('templates/footer');
       }

    }
}