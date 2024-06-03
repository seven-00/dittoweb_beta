<?php

namespace App\Controllers;


use fmRESTor\fmRESTor;
use App\Models\UsersModel;
class Login extends BaseController
{

    public function login (){
        return view('login_page');
    }
    public function do_login(){
       $model = new UsersModel();
       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');
       $token = $this->session->get('token');
       $authResponse = $model->authUser($email,$password,$token);
       $authResponseCode = $authResponse['messages'][0]['code'];
       if($authResponseCode =='0' )
       {
            if ($authResponse['response']['data'][0]['fieldData']['userPass']===$password)
            {
                $this->session->set('user',$authResponse['response']['data'][0]['fieldData']['userId']);
                
                $this->session->set('fname',$authResponse['response']['data'][0]['fieldData']['userFirstName']);
                $this->session->set('lname',$authResponse['response']['data'][0]['fieldData']['userLastName']);
                               
                return redirect()->to('/content');

            }
            else
            {
                $errormessage = '<div id="error-message" class="alert alert-danger" role="alert">
                Incorrect email or password. Please try again.
              </div>';
                return view('login_page',array('errormessage'=>$errormessage));
            }
       }
       else if($authResponseCode=='952'||$authResponseCode=='10'){
            $token = $model->genToken();
            $this->session->set('token',$token);
            $this->do_login();
            return redirect()->to('/content');
       }
       else
       {
        print_r($authResponse);
       }
    }
    public function logout()
    {
        $this->session->session_destroy;
        return view('login_page');
    }
}