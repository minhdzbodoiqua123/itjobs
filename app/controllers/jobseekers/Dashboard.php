<?php
class Dashboard extends Controller
{
    public function index(){
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/dashboard";
        $this->render('layouts/client_layout',$this->data);
    }
}