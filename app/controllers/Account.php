<?php
class Account extends Controller
{
    public function index(){
       $this->register();
    }
    public function register(){
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/register";
        $this->render('layouts/client_layout',$this->data);
    }
    public function login(){
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/login";
        $this->render('layouts/client_layout',$this->data);
    }
}