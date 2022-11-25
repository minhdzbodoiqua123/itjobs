<?php
class Dashboard extends Controller
{
    public function index(){
        
        if (!Auth_employer::logged_in()) {
            $this->redirect("employer/account/login");
        }


        $this->data["sub_content"][""]="";

        $this->data["content"]="employer/dashboard";
        $this->render('layouts/employer_layout',$this->data);
    }
   
    
}