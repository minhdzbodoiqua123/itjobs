<?php
class Myattach extends Controller
{
    public function index(){
        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";

        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);
        $data_job_type= $this->model("JobPositionModel")->get("job_type")->fetchAll(PDO::FETCH_ASSOC);
        $data_job_position= $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $this->model("JobPositionModel")->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $data_job_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume=$this->model("ResumeModel")->get("resume")->fetch(PDO::FETCH_ASSOC);


        $informationUser = $this->model("AccountUserModel")->query("select seeker_profile.*,user_account.email FROM `user_account` join seeker_profile on seeker_profile.user_account_id=id where id='$id'")->fetch(PDO::FETCH_ASSOC);
        
        $this->data["sub_content"]["data_degree"]=$data_degree;
        $this->data["sub_content"]["data_resume"]=$data_resume;

        $this->data["sub_content"]["data_job_type"]=$data_job_type;
        $this->data["sub_content"]["data_job_position"]=$data_job_position;
        $this->data["sub_content"]["data_profession"]=$data_profession;
        $this->data["sub_content"]["data_job_welfare"]=$data_job_welfare;

        $this->data["sub_content"]["informationUser"]=$informationUser;

        $this->data["content"]="clients/myattach";
        $this->render('layouts/client_layout',$this->data);
    }

    public function uploadMyAttach() {
        if(count($_POST) > 0){
           $file_name= $this->upload_Avatar_User();
            $conn=$this->model("ResumeModel");
            $user_account_id = $_SESSION["user"]["id"];

            $resume_title=$_POST["resume_title"];
            $yearOfExperience=isset($_POST["yearOfExperience"])? $_POST["yearOfExperience"]:"0";
            // $cboExper=isset($_POST["cboExper"])? $_POST["cboExper"] : $_POST["yearOfExperience"];
    
            $degree=$_POST["degree"];
            $resume_title=$_POST["resume_title"];
            $level_id=$_POST["level_id"];
            $chkWorkHome=isset($_POST["chkWorkHome"]) ? $_POST["chkWorkHome"] : "0";
            $chkResumeType=$_POST["chkResumeType"];
            
      
             

            $INDUSTRY_ID=$_POST["INDUSTRY_ID"];
            $salary_from=$_POST["salary_from"];
            $salary_to=$_POST["salary_to"];
            $levelcurrent_id=$_POST["levelcurrent_id"];
            $provinces=$_POST["provinces"];
            $districts=$_POST["districts"];
            $BENEFIT_ID=$_POST["BENEFIT_ID"];
            $status=$_POST["status"];


 
            
            $data=[ 
                "resume_title" => "'$resume_title'",    
                "file_location" => "'$file_name'",    
                "user_account_id" => "'$user_account_id'",  
                "wrk_from_home" => "'$chkWorkHome'",        
                "degree_id" => "'$degree'",        
                "min_salary" => "'$salary_from'",        
                "max_salary" => "'$salary_to'",    
                "year_of_experience" => "'$yearOfExperience'",    
                "position_id" => "'$level_id'",    
                "position_current_id" => "'$levelcurrent_id'",    

                
                "provinces" => "'$provinces'",        
                "districts" => "'$districts'",
                "resume_active" => "'$status'",
                
            ];
           $resume_id= $conn->insertData($data);  

            foreach ($INDUSTRY_ID as $id) {
                       
                $conn->insert("seeker_profession_by_resume",[
                    "resume_id"=>"'$resume_id'",
                    "user_account_id"=>"'$user_account_id'",
                    "profession_id"=>"'$id'"
                  ]);  
            }
            foreach ($chkResumeType as $id) {
                $conn->insert("job_type_by_resume",[
                    "resume_id"=>"'$resume_id'",
                    "user_account_id"=>"'$user_account_id'",
                    "job_type_id"=>"'$id'"
                  ]);  
            }
             foreach ($BENEFIT_ID as $id) {
                       
                $conn->insert("seeker_welfare_by_resume",[
                    "resume_id"=>"'$resume_id'",
                    "user_account_id"=>"'$user_account_id'",
                    "welfare_id"=>"'$id'"
                  ]);  
            }
            $this->redirect('jobseekers/dashboard');
            

            
            
            
        }


    }
    public function upload_Avatar_User(){
    
     
         $file_name=$_FILES['attach_file']['name'];
         
       
       

         $upload_dir=''.__DIR_ROOT.'/app/library/pdfjs/web/images/';
         $upload_file=$upload_dir.$file_name;
         $type=pathinfo($file_name,PATHINFO_EXTENSION);
         // $type_allow=array('png', 'jpg', 'jpeg','gif');
    
         if(file_exists($upload_file)){
           $name=pathinfo($file_name,PATHINFO_FILENAME);
           $new_name=$name.'-Coppy.';
           $upload_new=$upload_dir.$new_name.$type;
           $k=1;
           while (file_exists($upload_new)){
               $k++;
           $new_name=$name."-Coppy.({$k}).";
           $upload_new=$upload_dir.$new_name.$type;
           }
           $upload_file=$upload_new;
           $file_name=$new_name.$type;
       }
  
       move_uploaded_file($_FILES['attach_file']['tmp_name'],$upload_file);
       return $file_name;
      
    //   $this->redirect('jobseekers/my_profile');
    }

    public function viewfile($id="",$resume_id){
   
        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);

        $info = $this->model("AccountUserModel")->query("select seeker_profile.*,user_account.email FROM `user_account` join seeker_profile on 
        seeker_profile.user_account_id=id join seeker_address_detail on seeker_address_detail.user_account_id =seeker_profile.user_account_id   where id='$id'")->fetch(PDO::FETCH_ASSOC);
       $data_resume=$this->model("ResumeModel")->get("resume","id=$resume_id")->fetch(PDO::FETCH_ASSOC);

     
       $data_profession= $this->model("JobPositionModel")->query("select * from seeker_profession_by_resume join profession on profession.id=profession_id")->fetchAll(PDO::FETCH_ASSOC);
       $data_job_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);

       $data_job_position= $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
       $job_type_by_resume= $this->model("JobPositionModel")->query("select * from job_type_by_resume join job_type on job_type.id=job_type_by_resume.job_type_id where resume_id=$resume_id")->fetchAll(PDO::FETCH_ASSOC);
       
        $full_name=$info["lastname"]." ".$info["firstname"];
        $this->data["sub_content"]["info"]=$info;
        $this->data["sub_content"]["full_name"]=$full_name;
        $this->data["sub_content"]["data_resume"]=$data_resume;
        $this->data["sub_content"]["data_degree"]=$data_degree;
        $this->data["sub_content"]["job_type_by_resume"]=$job_type_by_resume;

        // $this->data["sub_content"]["data_job_type"]=$data_job_type;
        $this->data["sub_content"]["data_job_position"]=$data_job_position;
        $this->data["sub_content"]["data_profession"]=$data_profession;
        $this->data["sub_content"]["data_job_welfare"]=$data_job_welfare;


        $this->data["content"]="clients/viewfile";
        $this->render('layouts/client_layout',$this->data);
    }
    public function data_resume(){
        $resume_id=$_POST["resume_id"];

      $data_resume=$this->model("ResumeModel")->get("resume","id=$resume_id")->fetch(PDO::FETCH_ASSOC);
      echo json_encode($data_resume);
    }

    
}