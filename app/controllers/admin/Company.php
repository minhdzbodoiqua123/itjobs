<?php
class Company extends Controller
{
    public function index(){
      
        $this->data["sub_content"][""] = "";

        $this->data["content"]="admin/company";
        $this->render('layouts/admin_layout',$this->data);
    }
}