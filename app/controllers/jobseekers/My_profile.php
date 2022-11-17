<?php
class My_profile extends Controller
{
    public function index()
    {
        $id = isset($_SESSION["user"]["id"])? $_SESSION["user"]["id"]:"";
    
        $condition = "id='$id'";
        $informationUser = $this->model("AccountUserModel")->get("user_account", $condition)->fetch(PDO::FETCH_ASSOC);

        $informationProfession = $this->model("JobPositionModel")->get("seeker_profession_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
        
        $informationWelfare= $this->model("JobPositionModel")->get("seeker_welfare_detail","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC);    
        $seeker_job_information= $this->model("JobPositionModel")->get("seeker_job_information","user_account_id='$id'")->fetch(PDO::FETCH_ASSOC); 
         
        $seeker_type= $this->model("JobPositionModel")->get("seeker_type","user_account_id='$id'")->fetchAll(PDO::FETCH_ASSOC); 

        $data_position = $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
        $data_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $this->model("JobPositionModel")->get("profession")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["informationUser"] = $informationUser;
        $this->data["sub_content"]["data_position"] = $data_position;
        $this->data["sub_content"]["data_welfare"] = $data_welfare;
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["informationProfession"] = $informationProfession;
        $this->data["sub_content"]["informationWelfare"] = $informationWelfare;
        
        $this->data["sub_content"]["seeker_job_information"] = $seeker_job_information;
        $this->data["sub_content"]["seeker_type"] = $seeker_type;

        $this->data["content"] = "clients/my_profile";
        $this->render('layouts/client_layout', $this->data);
    }
    public function infoUser(){
        $id = $_SESSION["user"]["id"];
        $condition = "id='$id'";
       $data= $this->model("AccountUserModel")->get("user_account", $condition)->fetch(PDO::FETCH_ASSOC);
       echo json_encode($data);
    }
    public function seeker_job_information(){
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
                "provinces" => "'$provinces'",
                "districts" => "'$districts'",
                "address" => "'$address'",
                "status"=>"'1'"
            ];
            $condition = "id='$id'";

            $this->model("AccountUserModel")->update("user_account", $data, $condition);
            $this->redirect('jobseekers/my_profile');
        } else {
            $this->redirect('jobseekers/my_profile');
        }
    }
    function desiredJobForm(){
        if(count($_POST) > 0){
            $conn=$this->model("SeekerProfile");
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
                "resume_title"=>"'$resume_title'"
            ];
            $this->model("SeekerProfile")->insert("seeker_resume_title",$data);
        }
    }
}
