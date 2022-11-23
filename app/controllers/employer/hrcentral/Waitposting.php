<?php
class Waitposting extends Controller
{
    public function index(){

$job_post=$this->model("Job_postModel")->query("SELECT * FROM `job_post` where status ='0'")->fetchAll(PDO::FETCH_ASSOC);
   
        $this->data["sub_content"]["job_post"] = $job_post;

        $this->data["content"]="employer/hrcentral/waitposting";
        $this->render('layouts/employer_layout',$this->data);
    }
}