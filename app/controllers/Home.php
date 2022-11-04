<?php
class Home extends Controller
{
    public function index(){
  $this->data["sub_content"][""]="";
        $this->data["content"]="clients/home";

        $this->render('layouts/client_layout',$this->data);
    }
}