<?php
class Expireposting extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $job_post=$this->model("Job_postModel")->get("job_post","NOW()>end_date and status='1' and posted_by_id =$employer_id")->fetchAll(PDO::FETCH_ASSOC);
    
        $this->data["sub_content"]["job_post"] =$job_post;

        $this->data["content"]="employer/hrcentral/expireposting";
        $this->render('layouts/employer_layout',$this->data);
    }
}