<?php
class Expireposting extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $sql=$this->searchJob();
        $job_post=$this->model("Job_postModel")->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
        $count_submitted =$this->model("Job_postModel")->query("SELECT job_id,count(job_id) as num_submit FROM `job_post_activity` join job_post on job_post.id = job_id  where posted_by_id =$employer_id  group by  job_id")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["job_post"] =$job_post;
        $this->data["sub_content"]["count_submitted"] = $count_submitted;

        $this->data["sub_content"]["keyword"] = $keyword;
        $this->data["sub_content"]["date_type"] = $date_type;
        $this->data["sub_content"]["date_from"] = $date_from;
        $this->data["sub_content"]["date_to"] = $date_to;
        $this->data["content"]="employer/hrcentral/expireposting";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function searchJob(){
        $employer_id=$_SESSION["employer"]["id"];

        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
        $sql="SELECT * FROM `job_post` where NOW()>end_date and status='1' and posted_by_id =$employer_id ";
        
        if(!empty($keyword)){
            $sql.="and job_title like '%$keyword%'";
        }
        if(!empty($date_type) ){
            $sql.="and update_at BETWEEN '$date_from' AND '$date_to' ";
        }
      
        $sql.="ORDER BY posted_date";
        return $sql;
    }
}