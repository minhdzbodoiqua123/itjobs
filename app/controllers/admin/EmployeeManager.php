<?php
class EmployeeManager extends Controller
{
    public function index(){

        $this->data["sub_content"][""] = "";
        $this->data["content"] = "admin/employeeManager";

        $this->render('layouts/admin_layout', $this->data);
    }
}