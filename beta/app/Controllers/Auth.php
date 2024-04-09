<?php

namespace App\Controllers;
use Illuminate\Http\Request;
use CodeIgniter\Controller;

use fmRESTor\fmRESTor;
class Auth extends Controller
{
    public function login(){
        return view('templates/header')
              .view('login_page')
              .view('templates/footer');
    }
    public function register(){
        return view('templates/header')
        .view('register_page')
        .view('templates/footer');
    }
    public function users(){

        $options = array(
            "curlOptions" =>[
                CURLOPT_SSL_VERIFYHOST => false,    
                CURLOPT_SSL_VERIFYPEER => false,
            ]
        );
        $fm = new fmRESTor("172.16.8.153","fmProject_DITTO_DATA_sam", "Users", "admin", "mindfire",$options);
         echo "<pre>";
         print_r($fm->getRecords());       
       
    }
}