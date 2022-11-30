<?php
class Manageresume extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
 $job_post_activity=$conn->query("SELECT seeker_profile.*,job_post_activity.*,salary_from,salary_to,resume.* FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id  join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id join resume on resume.id=resume_id where posted_by_id=$employer_id
    ")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;

        $this->data["content"]="employer/hrcentral/manageresume";
        $this->render('layouts/employer_layout',$this->data);
    }

    public function resumes_detail($id="",$resume_id=""){
        $conn=$this->model("Job_postModel");
        $employer_id=$_SESSION["employer"]["id"];

$info_user=$conn->query("SELECT seeker_profile.*,resume.* from seeker_profile  join seeker_resume_title on seeker_profile.user_account_id=seeker_resume_title.user_account_id join job_post_activity on job_post_activity.user_account_id=seeker_profile.user_account_id join resume on resume.id=resume_id  where 
seeker_profile.user_account_id=$id and resume.id=$resume_id ")->fetch(PDO::FETCH_ASSOC);

$job_post_activity=$conn->query("SELECT seeker_profile.*,job_post_activity.*,salary_from,salary_to FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id  join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id where posted_by_id=$employer_id
")->fetch(PDO::FETCH_ASSOC);

$data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);

        
       $data_job_position= $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
       $data_profession= $this->model("JobPositionModel")->query("select * from seeker_profession_by_resume join profession on profession.id=profession_id")->fetchAll(PDO::FETCH_ASSOC);
       $data_job_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
       $job_type_by_resume= $this->model("JobPositionModel")->query("select * from job_type_by_resume join job_type on job_type.id=job_type_by_resume.job_type_id where resume_id=$resume_id")->fetchAll(PDO::FETCH_ASSOC);
    $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
    $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);

        $full_name=$info_user["lastname"]." ".$info_user["firstname"];
        $this->data["sub_content"]["full_name"] =$full_name;
        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["job_type_by_resume"]=$job_type_by_resume;
        $this->data["sub_content"]["info_user"] =$info_user;
        
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;

        $this->data["sub_content"]["data_job_position"]=$data_job_position;
        $this->data["sub_content"]["data_profession"]=$data_profession;
        $this->data["sub_content"]["data_job_welfare"]=$data_job_welfare;
        $this->data["sub_content"]["data_degree"]=$data_degree;


        $this->data["content"]="employer/hrcentral/resumes_detail";
        
        $this->render('layouts/employer_layout',$this->data);
    }
}