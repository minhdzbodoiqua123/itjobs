<?php
class ViewJob extends Controller
{
    public function index(){

        
        // $this->data["sub_content"][""] = "";

        // $this->data["content"]="";
        // $this->render('layouts/employer_layout',$this->data);
    }
    public function detail($id=""){
        if (!Auth_employer::logged_in()) {
            $this->redirect("employer/account/login");
        }

        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
        
        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,company_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on job_post.company_id =company.id  where job_post.id=$id")->fetch(PDO::FETCH_ASSOC);
       
        $job_experience_detail=$conn->get("job_experience_detail","post_id=$id")->fetch(PDO::FETCH_ASSOC);
     
        $job_profession_detail=$conn->query("SELECT * FROM `job_profession_detail` join profession on profession_id=profession.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

        $job_type_detail=$conn->query("SELECT job_type FROM `job_type_detail` join job_type on job_type_id=job_type.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);
        
        $job_welfare_detail=$conn->query("SELECT welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);
 
       
        $this->data["sub_content"]["job_post"] = $job_post;
        $this->data["sub_content"]["job_experience_detail"] = $job_experience_detail;
        $this->data["sub_content"]["job_profession_detail"] = $job_profession_detail;
        $this->data["sub_content"]["job_type_detail"] = $job_type_detail;
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;

        // $this->data["sub_content"]["infoEmployer"] = $infoEmployer;




        $this->data["content"]="employer/hrcentral/viewjob";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function contact_info(){
       
        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
        $sql="select employer_infomation.*,email,company.*,address,provinces,districts from employer_infomation join user_account on employer_infomation.user_account_id = id join company on company_id=company.id join address_company on address_company.company_id=company.id where user_account_id=$employer_id"; 
      
        $infoEmployer= $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
  
        echo json_encode($infoEmployer);
    }
   
}