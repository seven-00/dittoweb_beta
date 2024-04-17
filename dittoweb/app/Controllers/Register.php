<?php

namespace App\Controllers;


use fmRESTor\fmRESTor;
class Register extends BaseController
{
    public function Register(){
        return view('templates/header')
              .view('register_page')
              .view('templates/footer');
    }
    public function do_Register(){
    
    }
}