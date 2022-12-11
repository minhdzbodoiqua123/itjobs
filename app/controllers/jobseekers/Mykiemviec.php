<?php
class Mykiemviec extends Controller
{
    public function index(){

    }
    public function jobapplied(){
        if(!Auth_user::logged_in()){
            $this->redirect("account/login");
        }
        $user_id=$_SESSION["user"]["id"];
        $my_job=$this->model("Job_postModel")->query("SELECT company_name,logo,job_title,apply_date,resume_title,job_post.id as job_post_id,file_location,resume.*,resume.id as resume_id FROM `job_post_activity` join job_post on job_post.id=job_post_activity.job_id join company on company.id=job_post.company_id join resume on resume.id=job_post_activity.resume_id where job_post_activity.user_account_id =$user_id")->fetchAll(PDO::FETCH_ASSOC);      
        $this->data["sub_content"]["my_job"]=$my_job;
        $this->data["sub_content"]["user_id"]=$user_id;

        $this->data["content"]="clients/jobapplied";
        $this->render('layouts/client_layout',$this->data);
    }

    public function jobsaved(){
        $conn=$this->model("Job_postModel");

        if(!Auth_user::logged_in()){
            $this->redirect("account/login");
        }
        $user_id=$_SESSION["user"]["id"];
        if(count($_POST)>0){
                $job_id=$_POST["job_id"];
                $conn->delete("job_saved","user_account_id=$user_id and job_id=$job_id");
                $this->redirect("jobseekers/mykiemviec/jobsaved");
        }

         $my_job=$this->model("Job_postModel")->query("SELECT distinct job_saved.*,company_name,logo,job_title from job_saved join job_post on job_saved.job_id = job_post.id join company on company.id = job_post.company_id 
         where job_saved.user_account_id=$user_id ")->fetchAll(PDO::FETCH_ASSOC);
        $job_post_activity=$this->model("Job_postModel")->get("job_post_activity","user_account_id=$user_id")->fetchAll(PDO::FETCH_ASSOC);
       

        $this->data["sub_content"]["my_job"]=$my_job;
        $this->data["sub_content"]["job_post_activity"]=$job_post_activity;

        $this->data["content"]="clients/jobsaved";
        $this->render('layouts/client_layout',$this->data);
    }
    public function deleteJobSaved(){
        $user_account_id=$_SESSION["user"]["id"];
        $job_id=$_POST["job_id"];
        $conn=$this->model("Job_postModel");
 $conn->delete("job_saved","user_account_id=$user_account_id and job_id=$job_id");
 $this->redirect("jobseekers/Mykiemviec/jobsaved");   
    }
}