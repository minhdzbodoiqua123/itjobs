<?php
class Postjobs extends Controller
{
    public function index(){
        $this->data["sub_content"][""]="";
        $this->data["content"]="employer/Postjobs";

        $this->render('layouts/employer_layout',$this->data);
    }
}