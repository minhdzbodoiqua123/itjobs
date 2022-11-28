<?php
class My_profile extends Controller
{
    public function index()
    {   
        if(!Auth_user::logged_in()){
            $this->redirect("account/login");
        }
        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";
        
       $year_of_experience= $this->model("JobPositionModel")->query("SELECT year_of_experience.*,job_position.position FROM `job_position` join year_of_experience on job_position.id=year_of_experience.position_id where user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 

        $informationUser = $this->model("AccountUserModel")->query("select seeker_profile.*,user_account.email FROM `user_account` join seeker_profile on seeker_profile.user_account_id=id where id='$id'")->fetch(PDO::FETCH_ASSOC);

        

        $informationProfession = $this->model("JobPositionModel")->query("SELECT * FROM `seeker_profession_detail` join profession on seeker_profession_id= profession.id WHERE user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
       
        $informationWelfare= $this->model("JobPositionModel")->get("seeker_welfare_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);    

        
        $seeker_highest_degree =$this->model("JobPositionModel")->query(" SELECT seeker_highest_degree.*,degree_name FROM `seeker_highest_degree`  join degree on degree.id=seeker_highest_degree.degree_id WHERE user_account_id='$id'")->fetch(PDO::FETCH_ASSOC);  
        
        

        $seeker_experience_detail= $this->model("JobPositionModel")->get("seeker_experience_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 
       
        $seeker_education_detail=  $this->model("JobPositionModel")->query(" SELECT seeker_education_detail.*,degree_name FROM `seeker_education_detail`  join degree on degree.id=seeker_education_detail.degree_id WHERE user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);  
     
        $seeker_job_information= $this->model("JobPositionModel")->query("    SELECT * FROM `seeker_job_information`  join job_position on job_position.id=seeker_job_information.position_id WHERE user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 
      
         $seeker_resume_title= $this->model("JobPositionModel")->get("seeker_resume_title","user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 
       
        $seeker_type= $this->model("JobPositionModel")->query("SELECT job_type_id,job_type.id,job_type,seeker_type.user_account_id FROM `seeker_type` join job_type on job_type_id=job_type.id where seeker_type.user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 
        
        $data_position = $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
        $data_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $this->model("JobPositionModel")->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);


        $job_type=$this->model("JobPositionModel")->get("job_type")->fetchAll(PDO::FETCH_ASSOC);
        
        $count_exp=$this->model("JobPositionModel")->query("SELECT id
        FROM seeker_experience_detail where user_account_id='$id'")->rowCount();  
   
        $count_sekeer_education=$this->model("JobPositionModel")->query("SELECT id
        FROM seeker_education_detail where user_account_id='$id'")->rowCount();  


        $this->data["sub_content"]["job_type"] = $job_type;

        $this->data["sub_content"]["data_position"] = $data_position;
        $this->data["sub_content"]["data_welfare"] = $data_welfare;
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["data_degree"] = $data_degree;



        $this->data["sub_content"]["informationProfession"] = $informationProfession;
        $this->data["sub_content"]["informationWelfare"] = $informationWelfare;
        $this->data["sub_content"]["informationUser"] = $informationUser;
        
        $this->data["sub_content"]["seeker_job_information"] = $seeker_job_information;
        $this->data["sub_content"]["seeker_resume_title"] = $seeker_resume_title;
        $this->data["sub_content"]["seeker_type"] = $seeker_type;
        $this->data["sub_content"]["seeker_experience_detail"] = $seeker_experience_detail;
        $this->data["sub_content"]["seeker_education_detail"] = $seeker_education_detail;
        $this->data["sub_content"]["seeker_highest_degree"] = $seeker_highest_degree;

        
        $this->data["sub_content"]["count_exp"] = $count_exp;
        $this->data["sub_content"]["count_sekeer_education"] = $count_sekeer_education;

        $this->data["sub_content"]["year_of_experience"] = $year_of_experience;

        

       

        $this->data["content"] = "clients/my_profile";
        $this->render('layouts/client_layout', $this->data);
    }
    public function infoUser(){
        $id = $_SESSION["user"]["id"];
       $data= $this->model("SeekerProfileModel")->get("seeker_profile", "user_account_id='$id'")->fetch(PDO::FETCH_ASSOC);
       echo json_encode($data);
    }

    
  

    public function data_resume_experience($id=""){
       
 $data= $this->model("JobPositionModel")->get("seeker_experience_detail","id='$id'")->fetchAll(PDO::FETCH_ASSOC); 
            echo json_encode($data);
     
      

    }

    public function addressUser(){
        $id = $_SESSION["user"]["id"];
        $data= $this->model("SeekerProfileModel")->get("seeker_address_detail", "user_account_id='$id'")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }

     public function addressUserById($id=""){
        $data= $this->model("SeekerProfileModel")->get("seeker_address_detail", "user_account_id='$id'")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }

    public function  data_degree(){
       $data= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($data);
    }




    public function job_type(){
        $job_type=$this->model("JobPositionModel")->get("job_type")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($job_type);

    }
 
    public function desiredWork(){
        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";
        $data= $this->model("JobPositionModel")->get("seeker_job_information","user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 
       echo json_encode($data);
    }
    public function UpdateProfile()
    {
        if (count($_POST) > 0) {
            $id = $_SESSION["user"]["id"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $gender = $_POST["gender"];
            $contact_number = $_POST["mobile"];
            $marital_status = $_POST["slMarritial"];
            $date_of_birth = $_POST["birthday"];
            $provinces = $_POST["slcity"];
            $districts = $_POST["sldistrict"];
            $address = $_POST["address"];
            
            $data = [
                "firstname" => "'$firstname'",
                "lastname" => "'$lastname'",
                "gender" => "'$gender'",
                "contact_number" => "'$contact_number'",
                "marital_status" => "'$marital_status'",
                "date_of_birth" => "STR_TO_DATE('$date_of_birth', '%d/%m/%Y')",
                "status"=>"'1'",
            ];
            
            $condition = "user_account_id ='$id'";

            $this->model("SeekerProfileModel")->update("seeker_profile", $data, $condition);
            $this->model("SeekerProfileModel")->update("seeker_address_detail",
            [ 
            "provinces" => "'$provinces'",        
            "districts" => "'$districts'",
            "address" => "'$address'"
            ],$condition
            );

            $this->redirect('jobseekers/my_profile');
        } else {
            $this->redirect('jobseekers/my_profile');
        }
    }
    function desiredJobForm(){
        if(count($_POST) > 0){
            $conn=$this->model("SeekerProfileModel");
                $user_account_id = $_SESSION["user"]["id"];

                $level_id=$_POST["level_id"];
                $chkResumeType=isset($_POST["chkResumeType"])? $_POST["chkResumeType"] :"";
                $seeker_welfare=$_POST["BENEFIT_ID"];
                $seeker_profession=$_POST["INDUSTRY_ID"];
                $salary_from=$_POST["salary_from"];
                $salary_to=$_POST["salary_to"];
                $location_id=  $_POST["location_id"];
                $chkWorkHome=isset($_POST["chkWorkHome"])? $_POST["chkWorkHome"] : 0;
               $conn->delete("seeker_type","user_account_id =$user_account_id");
               $conn->delete("seeker_job_information","user_account_id =$user_account_id");
               $conn->delete("seeker_welfare_detail","user_account_id =$user_account_id");
               $conn->delete("seeker_profession_detail","user_account_id =$user_account_id");

                    //Thêm Hình thức làm việc mong muốn của ứng viên
                    if(!empty($chkResumeType)){
                        foreach ($chkResumeType as $item):
                            $conn->insert("seeker_type",[
                                "user_account_id"=>"'$user_account_id'",
                                "job_type_id"=>"'$item'"
                              ]);  
                        endforeach;
                    }
                  

                        //Thêm các ngành nghề  của ứng viên
                        foreach ($seeker_profession as $id) {
                       
                            $conn->insert("seeker_profession_detail",[
                                "user_account_id"=>"'$user_account_id'",
                                "seeker_profession_id "=>"'$id'"
                              ]);  
                        }

                    //Thêm phúc lợi mong muốn của ứng viên
                    foreach ($seeker_welfare as $id) {
                       
                        $conn->insert("seeker_welfare_detail",[
                            "user_account_id"=>"'$user_account_id'",
                            "seeker_welfare_id"=>"'$id'"
                          ]);  
                    }
                

             $data = [
                "user_account_id"=>"'$user_account_id'",
                "position_id " => "'$level_id'",
                "salary_from" => "'$salary_from'",
                "salary_to" => "'$salary_to'",
                "provinces" => "'$location_id'",
                "work_from_home"=>"'$chkWorkHome'",
                "status" =>"'1'"
            ];
                   
            $conn->insert("seeker_job_information",$data);
            $this->redirect('jobseekers/my_profile');
            
          
            
        } else {
            $this->redirect('jobseekers/my_profile');
        }
    }
    function resumeTitle(){
        if(count($_POST) > 0) {
            $resume_title=$_POST["resume_title"];
            $user_account_id = $_SESSION["user"]["id"];

            $data=[
                "user_account_id"=>"'$user_account_id'",
                "resume_title"=>"'$resume_title'",
                "status"=>"'1'"
            ];
            
$this->model("SeekerProfileModel")->update("seeker_resume_title",$data,"user_account_id =$user_account_id ");
            $this->redirect('jobseekers/my_profile');

        }
    }


    public function upload_Avatar_User(){
        if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_FILES['file-input']["size"]>0)
         {
        $user_account_id = $_SESSION["user"]["id"];
     
         $file_name=$_FILES['file-input']['name'];
         
       
       

         $upload_dir=''.__DIR_ROOT.'/app/public/assets/clients/images/';
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
    
       move_uploaded_file($_FILES['file-input']['tmp_name'],$upload_file);
      $this->model("AccountUserModel")->update("seeker_profile",["location_image"=>"'$file_name'"],"user_account_id  =$user_account_id ");
      $this->redirect('jobseekers/my_profile');

        }
            $this->redirect('jobseekers/my_profile');
        

       }



       
    public function insert_resume_experience(){
        if (($_SERVER['REQUEST_METHOD'] === 'POST')){
            $user_account_id = $_SESSION["user"]["id"];

            $rexp_title=$_POST["rexp_title"];
            $rexp_company=$_POST["rexp_company"];
            $rexp_worktype=$_POST["rexp_worktype"];

            $rexp_month_start=$_POST["rexp_month_start"];
            $rexp_year_start=$_POST["rexp_year_start"];

            $rexp_month_end= isset($_POST["rexp_month_end"]) ? $_POST["rexp_month_end"] : "" ;
            $rexp_year_end= isset($_POST["rexp_year_end"]) ? $_POST["rexp_year_end"] : "" ;

            $cboExperCurrent= isset($_POST["cboExperCurrent"]) ? $_POST["cboExperCurrent"]: "0" ;;


            $rexp_workdesc=$_POST["rexp_workdesc"];
            
            if($cboExperCurrent==1){
                $start_job=$rexp_month_start.'/'.$rexp_year_start;
                $end_job="";    
            }
            else{
                $start_job=$rexp_month_start.'/'.$rexp_year_start;
                $end_job=$rexp_month_end.'/'.$rexp_year_end;    
            }
            
            $data=[
                "user_account_id" => "'$user_account_id'",
                "rexp_title"=>"'$rexp_title'",
                "rexp_company"=>"'$rexp_company'",
                "job_type_id "=>"'$rexp_worktype'",
                "start_job"=>"'$start_job'",
                "end_job"=>"'$end_job'",
                "rexp_workdesc"=>"'$rexp_workdesc'",
                'experCurrent'=>"'$cboExperCurrent'",
                
            ];
            

        
          
        $this->model("SeekerProfileModel")->insert("seeker_experience_detail",$data);
        $this->redirect('jobseekers/my_profile');

        }
        $this->redirect('jobseekers/my_profile');




    }
        public function delete_resume_experience($id=""){
            $this->model("JobPositionModel")->delete("seeker_experience_detail","id='$id'"); 
        }


       public function update_resume_experience(){
        if(($_SERVER['REQUEST_METHOD'] === 'POST')){
            $id = $_POST["rexp_id"];
       
        
        $rexp_title=$_POST["rexp_title"];
        $rexp_company=$_POST["rexp_company"];
        $rexp_worktype=$_POST["rexp_worktype"];

        $rexp_month_start=$_POST["rexp_month_start"];
        $rexp_year_start=$_POST["rexp_year_start"];

        $rexp_month_end= isset($_POST["rexp_month_end"]) ? $_POST["rexp_month_end"] : "" ;
        $rexp_year_end= isset($_POST["rexp_year_end"]) ? $_POST["rexp_year_end"] : "" ;

        $cboExperCurrent= isset($_POST["cboExperCurrent"]) ? $_POST["cboExperCurrent"]: "0" ;;


        $rexp_workdesc=$_POST["rexp_workdesc"];
        if($cboExperCurrent==1){
            $start_job=$rexp_month_start.'/'.$rexp_year_start;
            $end_job="";    
        }
        else{
            $start_job=$rexp_month_start.'/'.$rexp_year_start;
            $end_job=$rexp_month_end.'/'.$rexp_year_end;    
        }
        $data=[
            "rexp_title"=>"'$rexp_title'",
            "rexp_company"=>"'$rexp_company'",
            "job_type_id "=>"'$rexp_worktype'",
            "start_job"=>"'$start_job'",
            "end_job"=>"'$end_job'",
            "rexp_workdesc"=>"'$rexp_workdesc'",
            'experCurrent'=>"'$cboExperCurrent'",
        ];

        $this->model("JobPositionModel")->update("seeker_experience_detail",$data,"id='$id'"); 
        $this->redirect("jobseekers/my_profile");
        }
        $this->redirect("jobseekers/my_profile");

    }
       
    public function update_yearofexperience(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $user_account_id = $_SESSION["user"]["id"];
            $yearOfExperience=isset($_POST["yearOfExperience"])?$_POST["yearOfExperience"] : "";
            $not_experience=isset($_POST["not_experience"]) ? $_POST["not_experience"] : "";
            $levelcurrent_id=$_POST["levelcurrent_id"]; 

            
            $data=[
                "yearOfExperience"=>"'$yearOfExperience'",
                "not_experience"=>"'$not_experience'",
                "position_id  "=>"'$levelcurrent_id'"
            ];
           
 $this->model("JobPositionModel")->update("year_of_experience",$data,"user_account_id='$user_account_id'"); 
        $this->redirect("jobseekers/my_profile");


        }
        $this->redirect("jobseekers/my_profile");

    
    }

    public function  insertEducationForm(){
        if(count($_POST) > 0){
 
            $user_account_id =$_SESSION["user"]["id"];
            $redu_name=$_POST["redu_name"];
            $redu_degree=$_POST["redu_degree"];
            $redu_month=$_POST["redu_month"];
            $redu_year=$_POST["redu_year"];
            $redu_desc=$_POST["redu_desc"];

            $data=[
                "user_account_id"=>"'$user_account_id'",
                "redu_name"=>"'$redu_name'",
                "degree_id"=>"'$redu_degree'",
                "start_date"=>"'$redu_month'",
                "end_date"=>"'$redu_year'",
                "detail_desc"=>"'$redu_desc'",

            ];
            $this->model("SeekerProfileModel")->insert("seeker_education_detail",$data);
            

        }
        $this->redirect("jobseekers/my_profile");
    }
  
    public function  updateEducationForm(){
        if(count($_POST) > 0){
        
            $user_account_id =$_SESSION["user"]["id"];
            $redu_id=$_POST["redu_id"];

            $redu_name=$_POST["redu_name"];
            $redu_degree=$_POST["redu_degree"];
            $redu_month=$_POST["redu_month"];
            $redu_year=$_POST["redu_year"];
            $redu_desc=$_POST["redu_desc"];

            $data=[
                "user_account_id"=>"'$user_account_id'",
                "redu_name"=>"'$redu_name'",
                "degree_id"=>"'$redu_degree'",
                "start_date"=>"'$redu_month'",
                "end_date"=>"'$redu_year'",
                "detail_desc"=>"'$redu_desc'",  
            ];
  $this->model("SeekerProfileModel")->update("seeker_education_detail",$data,"id='$redu_id'");
            

        }
        $this->redirect("jobseekers/my_profile");
    }
    public function delete_education($id=""){
        $this->model("SeekerProfileModel")->delete("seeker_education_detail","id='$id'");
    }
    

    public function getSeekerEducation($id=""){
         $data= $this->model("SeekerProfileModel")->get("seeker_education_detail","id='$id'")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);

    }

    
    public function update_highest_degree(){
        if(count($_POST) > 0){
            $user_account_id =$_SESSION["user"]["id"];

            $degree_id=$_POST["degree"];
            $data=[
                "degree_id"=>"'$degree_id'",       
            ];
   $this->model("SeekerProfileModel")->update("seeker_highest_degree",$data,"user_account_id='$user_account_id'");
    
        }
        $this->redirect("jobseekers/my_profile");
       
    }

    
}

    
