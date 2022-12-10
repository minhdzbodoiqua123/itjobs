<?php
class Tim_ung_vien extends Controller
{
    public function index(){
        if(!Auth_employer::logged_in()){
            $this->redirect("employer/account/login");
        }
       $sql_data_resume= $this->handleSearch();
        $conn=$this->model("Job_postModel");
        // echo $sql_data_resume;
        $data_profession= $conn->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume= $conn->query($sql_data_resume)->fetchAll(PDO::FETCH_ASSOC);
        
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["data_resume"] = $data_resume;
       

        $this->data["content"]="employer/tim_ung_vien";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function handleSearch(){
            // $conn=$this->model("ResumeModel");

            $keyword=$_GET["keyword"]??"";
            $list_industries=$_GET["list_industries"]?? "";
            $list_location=$_GET["list_location"]?? "";
            // $keyword_match=$_GET["keyword_match"];
            $urgentjob=$_GET["urgentjob"]?? "";
            if($urgentjob==0){
                $sql="select distinct resume.*,firstname,lastname,degree_name,position from resume left  join seeker_profession_by_resume on seeker_profession_by_resume.resume_id =resume.id join seeker_profile on seeker_profile.user_account_id=resume.user_account_id join degree on degree_id=degree.id
                join job_position on job_position.id=position_id where resume_active in (2,3)  ";
            }
            else{
                $sql="select distinct resume.*,firstname,lastname,degree_name,position from resume left join  seeker_profession_by_resume on seeker_profession_by_resume.resume_id =resume.id join seeker_profile on seeker_profile.user_account_id=resume.user_account_id join degree on degree_id=degree.id
                join job_position on job_position.id=position_id where resume_active =3  ";
            }
            if(!empty($keyword)){
                $sql.="and  resume_title LIKE '%$keyword%' ";
            }
            if(!empty($list_industries)){
                $list_industries=join(',',$list_industries);
                $sql.="and profession_id in ($list_industries)  ";
            }
            if(!empty($list_location)){
                $list_location=join(',',$list_location);
                $sql.="and provinces in ($list_location)  ";
            }
            // $data_resume=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
           return $sql;
            // echo json_encode($data_resume);
      
       

    }   

    public function data_resume(){
        $conn=$this->model("Job_postModel");

        $data_resume= $conn->query("select * from resume join seeker_profile on seeker_profile.user_account_id=resume.user_account_id join degree on degree_id=degree.id
        join job_position on job_position.id=position_id  where resume_active in (2,3)")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data_resume);
    }
}