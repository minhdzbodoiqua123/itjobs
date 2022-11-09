<?php
class My_profile extends Controller
{
    public function index(){
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/my_profile";
        $this->render('layouts/client_layout',$this->data);
    }
}