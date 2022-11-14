<?php
class Myattach extends Controller
{
    public function index(){
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/myattach";
        $this->render('layouts/client_layout',$this->data);
    }
}