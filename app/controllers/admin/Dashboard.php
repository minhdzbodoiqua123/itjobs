<?php
class Dashboard extends Controller
{
    public function index(){
        if(!Auth_admin::logged_in()){
            $this->redirect("admin/account/login");
          }

          $this->data["sub_content"][""] = "";
          $this->data["content"] = "admin/dashboard";
          $this->render('layouts/admin_layout', $this->data);

    }
}