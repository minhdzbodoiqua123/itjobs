<?php
class Tim_ung_vien extends Controller
{
    public function index(){
      
        $this->data["sub_content"][""] = "";

        $this->data["content"]="employer/tim_ung_vien";
        $this->render('layouts/employer_layout',$this->data);
    }
}