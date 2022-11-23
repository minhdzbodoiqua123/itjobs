<?php
class Expireposting extends Controller
{
    public function index(){

   
        $this->data["sub_content"][""] = "";

        $this->data["content"]="employer/hrcentral/expireposting";
        $this->render('layouts/employer_layout',$this->data);
    }
}