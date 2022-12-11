<?php
class Myaccount extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
      
        $this->data["sub_content"][""]="";
        
        $this->data["content"]="clients/myaccount";

        $this->render('layouts/client_layout',$this->data);
    }
}