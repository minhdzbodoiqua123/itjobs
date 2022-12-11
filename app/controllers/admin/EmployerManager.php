<?php
class EmployerManager extends Controller
{
    public function index(){
        if(!Auth_admin::logged_in()){
            $this->redirect('admin/account/login');
        }
        $data_employer=$this->model('Job_postModel')->query("SELECT * FROM `employer_infomation` join company on company.id=employer_infomation.company_id");
        $this->data["sub_content"]["data_employer"] = $data_employer;
        $this->data["content"] = "admin/employerManager";

        $this->render('layouts/admin_layout', $this->data);
    }
}