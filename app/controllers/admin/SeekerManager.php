<?php
class SeekerManager extends Controller
{
    public function index(){
        $data_seeker_profile=$this->model('Job_postModel')->query("SELECT * FROM `seeker_profile`");
        $this->data["sub_content"]["data_seeker_profile"] = $data_seeker_profile;
        $this->data["content"] = "admin/seekerManager";

        $this->render('layouts/admin_layout', $this->data);
    }
}