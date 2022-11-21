<?php
class Dashboard extends Controller
{
    public function index(){
 
        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";


        $year_of_experience= $this->model("JobPositionModel")->query("SELECT year_of_experience.*,job_position.position FROM `job_position` join year_of_experience on job_position.id=year_of_experience.position_id where user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $seeker_experience_detail= $this->model("JobPositionModel")->get("seeker_experience_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 

        $seeker_job_information= $this->model("JobPositionModel")->query("    SELECT * FROM `seeker_job_information`  join job_position on job_position.id=seeker_job_information.position_id WHERE user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $informationUser = $this->model("AccountUserModel")->query("select seeker_profile.*,user_account.email FROM `user_account` join seeker_profile on seeker_profile.user_account_id=id where id='$id'")->fetch(PDO::FETCH_ASSOC);
        $seeker_resume_title= $this->model("JobPositionModel")->get("seeker_resume_title","user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);


        $this->data["sub_content"]["informationUser"]=$informationUser ;
        
        $this->data["sub_content"]["seeker_resume_title"]=$seeker_resume_title ;
        $this->data["sub_content"]["seeker_job_information"] = $seeker_job_information;
        $this->data["sub_content"]["seeker_experience_detail"] = $seeker_experience_detail;
        
        $this->data["sub_content"]["data_degree"] = $data_degree;


        $this->data["sub_content"]["year_of_experience"] = $year_of_experience;


        $this->data["content"]="clients/dashboard";
        $this->render('layouts/client_layout',$this->data);
    }
}