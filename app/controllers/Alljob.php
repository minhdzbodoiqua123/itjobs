<?php
class Alljob extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");

        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,logo,company_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where NOW() <end_date and status ='1'  ")->fetchAll(PDO::FETCH_ASSOC);
        $job_welfare_detail=$conn->query("SELECT post_id,welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id ")->fetchAll(PDO::FETCH_ASSOC);
        
      
         $this->data["sub_content"][""]="";
        $this->data["content"]="clients/all_job";
        $this->data["sub_content"]["job_post"] = $job_post;
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;

        $this->render('layouts/client_layout',$this->data);
    }
    
    public function detail($id=""){
        $conn=$this->model("Job_postModel");
        $checkIdPost= $conn->get("job_post","id=$id")->rowCount();
        if($checkIdPost==0){
            $this->redirect("404page");
        }
        $seeker_id=$_SESSION["user"]["id"];

        $job_welfare_detail=$conn->query("SELECT welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

        $job_post_activity=$conn->get("job_post_activity","user_account_id='$seeker_id' and job_id ='$id'")->fetch(PDO::FETCH_ASSOC);  
      
        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,logo,company_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where   status ='1' and job_post.id=$id  ")->fetch(PDO::FETCH_ASSOC);
      
        $job_experience_detail=$conn->get("job_experience_detail","post_id=$id")->fetch(PDO::FETCH_ASSOC);
            
         $job_profession_detail=$conn->query("SELECT * FROM `job_profession_detail` join profession on profession_id=profession.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

         $job_type_detail=$conn->query("SELECT job_type FROM `job_type_detail` join job_type on job_type_id=job_type.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

         $this->data["sub_content"]["job_post"]=$job_post;
         $this->data["sub_content"]["job_welfare_detail"]=$job_welfare_detail;
         $this->data["sub_content"]["job_profession_detail"]=$job_profession_detail;
         $this->data["sub_content"]["job_type_detail"]=$job_type_detail;
         $this->data["sub_content"]["job_post_activity"]=$job_post_activity;
   

         $this->data["sub_content"]["job_experience_detail"]=$job_experience_detail;


        $this->data["content"]="clients/detail_job";
       

        $this->render('layouts/client_layout',$this->data);
    }
    // public function detail($id=""){


    //     $this->data["sub_content"][""]="";
    //     $this->data["content"]="clients/detail_job";
    //     $this->render('layouts/client_layout',$this->data);
    // }
}