<?php
class tinh_luong_gross_net extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");

        
        
         $this->data["sub_content"][""]="";
        $this->data["content"]="clients/tinh_luong_gross_net";

        $this->render('layouts/client_layout',$this->data);
    }
}