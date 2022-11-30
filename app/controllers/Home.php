<?php
class Home extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");

        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,logo,company_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where NOW() <end_date and status ='1'  ")->fetchAll(PDO::FETCH_ASSOC);
        $job_welfare_detail=$conn->query("SELECT post_id,welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id  ")->fetchAll(PDO::FETCH_ASSOC);
        
         $this->data["sub_content"]["job_post"]=$job_post;
        $this->data["content"]="clients/home";
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;

        $this->render('layouts/client_layout',$this->data);
    }
}