<?php
class Alljob extends Controller
{
    public function index(){
  $this->data["sub_content"][""]="";
        $this->data["content"]="clients/all_job";

        $this->render('layouts/client_layout',$this->data);
    }
}