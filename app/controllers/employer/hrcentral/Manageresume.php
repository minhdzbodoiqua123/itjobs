<?php
class Manageresume extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
 $job_post_activity=$conn->query("SELECT seeker_profile.*,job_post_activity.*,year_of_experience.*,salary_from,salary_to FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id join year_of_experience on year_of_experience.user_account_id=seeker_profile.user_account_id join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id  where posted_by_id=$employer_id
    ")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;

        $this->data["content"]="employer/hrcentral/manageresume";
        $this->render('layouts/employer_layout',$this->data);
    }

    public function resumes_detail($id=""){
        $conn=$this->model("Job_postModel");
        $employer_id=$_SESSION["employer"]["id"];

$info_user=$conn->query("SELECT seeker_profile.*,resume_title from seeker_profile  join seeker_resume_title on seeker_profile.user_account_id=seeker_resume_title.user_account_id  where seeker_profile.user_account_id=$id ")->fetch(PDO::FETCH_ASSOC);
$job_post_activity=$conn->query("SELECT seeker_profile.*,job_post_activity.*,year_of_experience.*,salary_from,salary_to FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id join year_of_experience on year_of_experience.user_account_id=seeker_profile.user_account_id join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id  where posted_by_id=$employer_id
")->fetch(PDO::FETCH_ASSOC);
$data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
$data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);

        $full_name=$info_user["lastname"]." ".$info_user["firstname"];
        $this->data["sub_content"]["full_name"] =$full_name;
        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["info_user"] =$info_user;
        
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;


        $this->data["content"]="employer/hrcentral/resumes_detail";
        
        $this->render('layouts/employer_layout',$this->data);
    }
}