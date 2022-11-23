<?php
class Unposting extends Controller
{
    public function index(){

   
        $this->data["sub_content"][""] = "";

        $this->data["content"]="employer/hrcentral/unposting";
        $this->render('layouts/employer_layout',$this->data);
    }
}