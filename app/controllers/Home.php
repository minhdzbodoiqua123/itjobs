<?php
class Home extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $user_account_id=$_SESSION["user"]["id"] ?? "";

        if(!empty($user_account_id)){
            $seeker_job_information=$conn->get("seeker_job_information", "user_account_id=$user_account_id")->fetch(PDO::FETCH_ASSOC);

            $seeker_profession_detail=$conn->get("seeker_profession_detail", "user_account_id=$user_account_id")->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($seeker_profession_detail)){
                $provinces=$seeker_job_information["provinces"];
                $strProfession_id = '';
                foreach ($seeker_profession_detail as $value) {
                    $strProfession_id .= "$value[seeker_profession_id]" . ',';
        
                }
                $strProfession_id = rtrim($strProfession_id, ',');
            }
        
            if(!empty($seeker_job_information)){
                $suitable_job="SELECT DISTINCT job_post.*,provinces,logo,company_name from job_post join job_profession_detail on post_id =job_post.id join job_location on job_location.post_id  = job_post.id join company on company.id = job_post.company_id where status='1' and now()< end_date and profession_id in ($strProfession_id) and provinces in ($provinces) ";
                $suitable_job=$conn->query($suitable_job)->fetchAll(PDO::FETCH_ASSOC);
                $this->data["sub_content"]["suitable_job"] = $suitable_job;
            }
          
     
            
        }




        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,logo,company_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where NOW() <end_date and status ='1'  ")->fetchAll(PDO::FETCH_ASSOC);
        $job_welfare_detail=$conn->query("SELECT post_id,welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id  ")->fetchAll(PDO::FETCH_ASSOC);
        
         $this->data["sub_content"]["job_post"]=$job_post;
        $this->data["content"]="clients/home";
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;

        $this->render('layouts/client_layout',$this->data);
    }
 
}