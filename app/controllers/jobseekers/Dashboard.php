<?php
class Dashboard extends Controller
{
    public function index(){
        if(!Auth_user::logged_in()){
            $this->redirect("account/login");
        }
        $conn=$this->model("Job_postModel");

        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";
        $user_account_id=$_SESSION["user"]["id"] ?? "";
        
    
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
                $salary_from=preg_replace('/[.,]/', '', $seeker_job_information["salary_from"]);
                
                $suitable_job="SELECT DISTINCT job_post.*,provinces,logo,company_name from job_post join job_profession_detail on post_id =job_post.id join job_location on job_location.post_id  = job_post.id join company on company.id = job_post.company_id where status='1' and now()< end_date and profession_id in ($strProfession_id) and provinces in ($provinces) and min_salary>=$salary_from and wrk_from_home='$seeker_job_information[work_from_home]' ";
                // echo $suitable_job;
                $suitable_job=$conn->query($suitable_job)->fetchAll(PDO::FETCH_ASSOC);
                $this->data["sub_content"]["suitable_job"] = $suitable_job;
            }

            
        

        $year_of_experience= $this->model("JobPositionModel")->query("SELECT year_of_experience.*,job_position.position FROM `job_position` join year_of_experience on job_position.id=year_of_experience.position_id where user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $seeker_experience_detail= $this->model("JobPositionModel")->get("seeker_experience_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 
        //thông tin nghề nghiệp
        $seeker_job_information= $this->model("JobPositionModel")->query("SELECT * FROM `seeker_job_information`  join job_position on job_position.id=seeker_job_information.position_id WHERE user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 


        //thông tin cá nhân
        $informationUser = $this->model("AccountUserModel")->query("select seeker_profile.*,user_account.email FROM `user_account` join seeker_profile on seeker_profile.user_account_id=id where id='$id'")->fetch(PDO::FETCH_ASSOC);
        //tiêu đề hồ sơ

        $seeker_resume_title= $this->model("JobPositionModel")->get("seeker_resume_title","user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $seeker_education_detail=  $this->model("JobPositionModel")->query(" SELECT seeker_education_detail.*,degree_name FROM `seeker_education_detail`  join degree on degree.id=seeker_education_detail.degree_id WHERE user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);  

        $seeker_highest_degree =$this->model("JobPositionModel")->query(" SELECT seeker_highest_degree.*,degree_name FROM `seeker_highest_degree`  join degree on degree.id=seeker_highest_degree.degree_id WHERE user_account_id='$id'")->fetch(PDO::FETCH_ASSOC);

        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);
        
        $data_resume=$this->model("ResumeModel")->get("resume","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
        $seeker_type= $this->model("JobPositionModel")->query("SELECT job_type_id,job_type.id,job_type,seeker_type.user_account_id FROM `seeker_type` join job_type on job_type_id=job_type.id where seeker_type.user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 
                

        $informationProfession = $this->model("JobPositionModel")->query("SELECT * FROM `seeker_profession_detail` join profession on seeker_profession_id= profession.id WHERE user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
       
        $this->data["sub_content"]["data_resume"]=$data_resume;
        $this->data["sub_content"]["seeker_type"]=$seeker_type;


        $this->data["sub_content"]["informationUser"]=$informationUser ;
        $this->data["sub_content"]["informationProfession"]=$informationProfession ;
        
        $this->data["sub_content"]["seeker_resume_title"]=$seeker_resume_title ;
        $this->data["sub_content"]["seeker_job_information"] = $seeker_job_information;
        $this->data["sub_content"]["seeker_experience_detail"] = $seeker_experience_detail;
        $this->data["sub_content"]["seeker_education_detail"] = $seeker_education_detail;
        $this->data["sub_content"]["seeker_highest_degree"] = $seeker_highest_degree;
        
        $this->data["sub_content"]["data_degree"] = $data_degree;


        $this->data["sub_content"]["year_of_experience"] = $year_of_experience;
        $this->data["sub_content"]["user_id"] = $id;


        $this->data["content"]="clients/dashboard";
        $this->render('layouts/client_layout',$this->data);
    }
    public function DataResume(){
        $data=$this->model("ResumeModel")->get("resume")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }    
}