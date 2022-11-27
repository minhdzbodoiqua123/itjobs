<?php
class Manageresume extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
 $job_post_activity=$this->model("Job_postModel")->query("SELECT seeker_profile.* FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id where posted_by_id=$employer_id
    ")->fetchAll(PDO::FETCH_ASSOC);
  
        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;

        $this->data["content"]="employer/hrcentral/manageresume";
        $this->render('layouts/employer_layout',$this->data);
    }
}