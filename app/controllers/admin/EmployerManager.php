<?php
class EmployerManager extends Controller
{
    public function index(){

        $this->data["sub_content"][""] = "";
        $this->data["content"] = "admin/employerManager";

        $this->render('layouts/admin_layout', $this->data);
    }
}