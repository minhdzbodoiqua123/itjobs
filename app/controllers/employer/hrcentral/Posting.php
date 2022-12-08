<?php
class Posting extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $employer_id=$_SESSION["employer"]["id"];

        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,count(job_id) FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id left join job_post_activity on job_id = job_post.id where posted_by_id ='$employer_id' and NOW()<end_date and status ='1' ")->fetchAll(PDO::FETCH_ASSOC);

        $count_submitted =$conn->query("SELECT job_id,count(job_id) as num_submit FROM `job_post_activity` group by  job_id");       
        $this->data["sub_content"]["job_post"] = $job_post;
        $this->data["sub_content"]["count_submitted"] = $count_submitted;

        $this->data["content"]="employer/hrcentral/posting";
        $this->render('layouts/employer_layout',$this->data);
    }
}