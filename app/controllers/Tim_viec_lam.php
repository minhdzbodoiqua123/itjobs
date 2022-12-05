<?php
class Tim_viec_lam extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $data_industry=$conn->query("select profession_name,count(job_post.id) as quantity,profession.id as profession_id from job_post join job_profession_detail on job_profession_detail.post_id=job_post.id join profession on profession.id=profession_id where status='1' and now()< end_date group by (job_profession_detail.profession_id)")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["data_industry"]=$data_industry;
        
        $this->data["content"]="clients/tim_viec_lam";

        $this->render('layouts/client_layout',$this->data);
    }
}