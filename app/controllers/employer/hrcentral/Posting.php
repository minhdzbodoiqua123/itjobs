<?php
class Posting extends Controller
{
    public function index(){
        $this->data["sub_content"][""]="";
        $this->data["content"]="employer/hrcentral/posting";

        $this->render('layouts/employer_layout',$this->data);
    }
}