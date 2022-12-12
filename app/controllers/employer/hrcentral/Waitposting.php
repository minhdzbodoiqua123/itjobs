<?php
class Waitposting extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $sql=$this->searchJob();
        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
     $job_post=$this->model("Job_postModel")->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["job_post"] = $job_post;
        
        $this->data["sub_content"]["keyword"] = $keyword;
        $this->data["sub_content"]["date_type"] = $date_type;
        $this->data["sub_content"]["date_from"] = $date_from;
        $this->data["sub_content"]["date_to"] = $date_to;
        $this->data["content"]="employer/hrcentral/waitposting";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function searchJob(){
        $employer_id=$_SESSION["employer"]["id"];

        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
        $sql="SELECT * FROM `job_post` where posted_by_id ='$employer_id' and status ='0' ";
        
        if(!empty($keyword)){
            $sql.="and job_title like '%$keyword%'";
        }
        if(!empty($date_type) ){
            $sql.="and update_at BETWEEN '$date_from' AND '$date_to' ";
        }
      
        $sql.="ORDER BY posted_date";
        return $sql;
    }
    public function deleteJobPost($id=""){
        $conn=$this->model("Job_postModel");
        $conn->delete("job_post","id=$id");
 
          
    }
}