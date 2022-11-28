<?php
class Myresume extends Controller
{
    public function index(){
       
    }
    public function viewfile($id=""){
        $this->data["sub_content"][]="";

        // $this->data["content"]="employer/viewer_opt";    
        $this->render('employer/viewer_opt',$this->data);
    }
}