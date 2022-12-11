<?php
class Unposting extends Controller
{
    public function index(){
      $conn=$this->model("Job_postModel");

        $employer_id=$_SESSION["employer"]["id"];
        $sql=$this->searchJob();
        $job_post=$this->model("Job_postModel")->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
        $count_submitted =$conn->query("SELECT job_id,count(job_id) as num_submit FROM `job_post_activity` join job_post on job_post.id = job_id  where posted_by_id =$employer_id  group by  job_id")->fetchAll(PDO::FETCH_ASSOC);
      $this->data["sub_content"]["job_post"] = $job_post;
      $this->data["sub_content"]["count_submitted"] = $count_submitted;

      
      $this->data["sub_content"]["keyword"] = $keyword;
      $this->data["sub_content"]["date_type"] = $date_type;
      $this->data["sub_content"]["date_from"] = $date_from;
      $this->data["sub_content"]["date_to"] = $date_to;
        $this->data["content"]="employer/hrcentral/unposting";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function searchJob(){
      $employer_id=$_SESSION["employer"]["id"];

      $keyword=$_GET["keyword"]??"";
      $date_type=$_GET["date_type"]??"";
      $date_from=$_GET["date_from"]??"";
      $date_to=$_GET["date_to"]??"";
      $sql="SELECT * FROM `job_post` where posted_by_id ='$employer_id' and status ='2' ";
      
      if(!empty($keyword)){
          $sql.="and job_title like '%$keyword%'";
      }
      if(!empty($date_type) && $date_type==0){
          $sql.="and posted_date BETWEEN '$date_from' AND '$date_to' ";
      }
      else if(!empty($date_type) && $date_type==1){
          $sql.="and end_date BETWEEN '$date_from' AND '$date_to'";
      }
      $sql.="ORDER BY posted_date";
      return $sql;
  }
}