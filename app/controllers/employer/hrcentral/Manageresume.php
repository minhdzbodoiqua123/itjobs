<?php
class Manageresume extends Controller
{
    public function index(){
        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
  
        $job_status=$_GET["job_status"]??"1";
        $job_id=$_GET["job_id"]??"";
        $sql="SELECT  seeker_profile.*,job_post_activity.*,salary_from,salary_to,resume.* FROM `job_post_activity` join job_post on job_post_activity.job_id=job_post.id left join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id left  join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id left join resume on resume.id=resume_id where posted_by_id=$employer_id ";
        if(!empty($job_status) && $job_status ==1 ){
            $sql.="and job_post.status='1' and now() < job_post.end_date";
        }
         if(!empty($job_status) && $job_status ==2){
            $sql.="and job_post.status='1' and now()>job_post.end_date";
        }
        if(!empty($job_id)){
            $sql.=" and job_id=$job_id";

        }

        
    

        $job_post_activity=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($job_status) && $job_status ==1 ){
            $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE now()<end_date and status='1' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
        }        
        else if(!empty($job_status) && $job_status ==2){
            $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE now()>end_date and status='1' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
        }
        else if(!empty($job_status) && $job_status ==3){
            $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE  status='2' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
        }
      if(empty($data_job_current)){
        $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE now()<end_date and status='1' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
      }
   //đang đăng
        $count_job_posted=$conn->query("select count(id) as posted_job from job_post where posted_by_id=$employer_id and status ='1' and now()<end_date")->fetch(PDO::FETCH_ASSOC);
        //hết hạn
        $count_expired_job=$conn->query("select count(id) as expired_job from job_post where posted_by_id=$employer_id and status ='1' and now()>end_date ")->fetch(PDO::FETCH_ASSOC);
        //việc làm chờ đăng
        $count_job_waiting = $conn->query("select count(id) as job_waiting from job_post where posted_by_id=$employer_id and status ='0' ")->fetch(PDO::FETCH_ASSOC);
        // print_r($count_expired_job);
        $tam_dung_dang = $conn->query("select count(id) as tam_dung_dang from job_post where posted_by_id=$employer_id and status ='2' ")->fetch(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["count_job_posted"] = $count_job_posted;
        $this->data["sub_content"]["count_expired_job"] = $count_expired_job;
        $this->data["sub_content"]["count_job_waiting"] = $count_job_waiting;
        $this->data["sub_content"]["tam_dung_dang"] = $tam_dung_dang;

        $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
        $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["data_job_current"] =$data_job_current;
        $this->data["sub_content"]["job_status"] =$job_status;
        $this->data["sub_content"]["job_id"] =$job_id;



        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;

        $this->data["content"]="employer/hrcentral/manageresume";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function viewresume($job_status="1",$job_id=""){
                
            $employer_id=$_SESSION["employer"]["id"];
            $conn=$this->model("Job_postModel");
        
            $strKeyword=$_GET["strKeyword"]??"";
            $intKeywordType=$_GET["intKeywordType"]??"";
            $urgentjob=$_GET["urgentjob"]??"";
            $strFromDate=$_GET["strFromDate"]??"";
            $strToDate=$_GET["strToDate"]??"";
            $intStatus=$_GET["intStatus"]??"";
            $intType=$_GET["intType"]??"";

            $sql="SELECT  seeker_profile.*,job_post_activity.*,salary_from,salary_to,resume.* FROM `job_post_activity` join job_post on job_post_activity.job_id=job_post.id left join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id left  join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id left join resume on resume.id=resume_id where posted_by_id=$employer_id ";
            
            if($job_status ==1 ){
                $sql.="and job_post.status='1' and now() < job_post.end_date";
            }
             if($job_status ==2){
                $sql.="and job_post.status='1' and now()>job_post.end_date";
            }
            if($job_status ==3){
                $sql.="and job_post.status='2'";
            }
            
            
            if(!empty($job_id)){
                $sql.=" and job_id=$job_id";
            }
          
            if($intKeywordType==0){
                if(!empty($strKeyword)){
                    $sql.=" and resume_title LIKE '%$strKeyword%'";
                }
               
            }
             if($intKeywordType==1){
                if(!empty($strKeyword)){
                    $sql.=" and firstname LIKE '%$strKeyword%' and lastname LIKE '%$strKeyword%' ";
                }
            }
            if($urgentjob==1){
                $sql.=" and resume_active='3'";
            }
            if(!empty($strFromDate) && !empty($strToDate)){
                $sql.=" and apply_date BETWEEN '$strFromDate' AND '$strToDate'";
            }
            if(!empty($intStatus)&& $intStatus!=="all"){
                $sql.=" and resume_status_id =$intStatus";
            }
            if(!empty($intType)&&$intType!=="all"){
                $sql.=" and resume_type_id  =$intType";
            }

            
            
            $job_post_activity=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            // print_r($job_post_activity);
            if($job_status ==1 ){
                $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE now()<end_date and status='1' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
            }        
            else if($job_status ==2){
                $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE now()>end_date and status='1' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
            }
            else if($job_status ==3){
                $data_job_current=$conn->query("SELECT id,job_title FROM `job_post` WHERE  status='2' and posted_by_id=$employer_id")->fetchAll(PDO::FETCH_ASSOC);
            }
       
       //đang đăng
            $count_job_posted=$conn->query("select count(id) as posted_job from job_post where posted_by_id=$employer_id and status ='1' and now()<end_date")->fetch(PDO::FETCH_ASSOC);
            //hết hạn
            $count_expired_job=$conn->query("select count(id) as expired_job from job_post where posted_by_id=$employer_id and status ='1' and now()>end_date ")->fetch(PDO::FETCH_ASSOC);
            //việc làm chờ đăng
            $count_job_waiting = $conn->query("select count(id) as job_waiting from job_post where posted_by_id=$employer_id and status ='0' ")->fetch(PDO::FETCH_ASSOC);
            // print_r($count_expired_job);
            $tam_dung_dang = $conn->query("select count(id) as tam_dung_dang from job_post where posted_by_id=$employer_id and status ='2' ")->fetch(PDO::FETCH_ASSOC);
            $resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
            $resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);


            $this->data["sub_content"]["count_job_posted"] = $count_job_posted;
            $this->data["sub_content"]["count_expired_job"] = $count_expired_job;
            $this->data["sub_content"]["count_job_waiting"] = $count_job_waiting;
            $this->data["sub_content"]["tam_dung_dang"] = $tam_dung_dang;
    
            $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
            $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);
    
            $this->data["sub_content"]["data_job_current"] =$data_job_current;
            $this->data["sub_content"]["job_status"] =$job_status;
            $this->data["sub_content"]["job_id"] =$job_id;
            $this->data["sub_content"]["resume_status"] =$resume_status;
            $this->data["sub_content"]["resume_type"] =$resume_type;
    
    
    
            $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
            $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
            $this->data["sub_content"]["data_resume_type"] =$data_resume_type;
    
            $this->data["content"]="employer/hrcentral/manageresume";
            $this->render('layouts/employer_layout',$this->data);
      
        
    }


    public function resumes_detail($id="",$resume_id=""){
        $conn=$this->model("Job_postModel");
        $employer_id=$_SESSION["employer"]["id"];

$info_user=$conn->query("SELECT seeker_profile.*,resume.*,email from seeker_profile join seeker_resume_title on seeker_profile.user_account_id=seeker_resume_title.user_account_id join job_post_activity on job_post_activity.user_account_id=seeker_profile.user_account_id join resume on resume.id=resume_id join user_account on user_account.id=seeker_profile.user_account_id where 
seeker_profile.user_account_id=$id and resume.id=$resume_id ")->fetch(PDO::FETCH_ASSOC);


$job_post_activity=$conn->query("SELECT seeker_profile.*,job_post_activity.*,salary_from,salary_to FROM `job_post_activity`  join job_post on job_post_activity.job_id=job_post.id  join seeker_profile on seeker_profile.user_account_id=job_post_activity.user_account_id  join seeker_job_information on seeker_job_information.user_account_id=seeker_profile.user_account_id where posted_by_id=$employer_id
")->fetch(PDO::FETCH_ASSOC);

$data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);

        
       $data_job_position= $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
       $data_profession= $this->model("JobPositionModel")->query("select * from seeker_profession_by_resume join profession on profession.id=profession_id where resume_id=$resume_id")->fetchAll(PDO::FETCH_ASSOC);
    //    print_r($data_profession);
       $data_job_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
       $job_type_by_resume= $this->model("JobPositionModel")->query("select * from job_type_by_resume join job_type on job_type.id=job_type_by_resume.job_type_id where resume_id=$resume_id")->fetchAll(PDO::FETCH_ASSOC);
    $data_resume_status=$conn->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
    $data_resume_type=$conn->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);
        $full_name=$info_user["lastname"]." ".$info_user["firstname"];
        $this->data["sub_content"]["full_name"] =$full_name;
        $this->data["sub_content"]["job_post_activity"] =$job_post_activity;
        $this->data["sub_content"]["job_type_by_resume"]=$job_type_by_resume;
        $this->data["sub_content"]["info_user"] =$info_user;
        
        $this->data["sub_content"]["data_resume_status"] =$data_resume_status;
        $this->data["sub_content"]["data_resume_type"] =$data_resume_type;

        $this->data["sub_content"]["data_job_position"]=$data_job_position;
        $this->data["sub_content"]["data_profession"]=$data_profession;
        $this->data["sub_content"]["data_job_welfare"]=$data_job_welfare;
        $this->data["sub_content"]["data_degree"]=$data_degree;


        $this->data["content"]="employer/hrcentral/resumes_detail";
        
        $this->render('layouts/employer_layout',$this->data);
    }

    public function updateResumeStatus(){
        $resume_status=$_POST["resume_status"];
        $resume_type=$_POST["resume_type"];
        $status=$_POST["status"];
        $job_id=$_POST["job_id"];
        
        $user_account_id=$_POST["user_account_id"];

        $data=[
            "resume_status_id"=>"'$resume_status'",
            "resume_type_id "=>"'$resume_type'",
        ];

 $this->model("ResumeModel")->update("job_post_activity",$data,"user_account_id=$user_account_id and job_id =$job_id");
           
 $this->redirect("employer/hrcentral/Manageresume?job_status=$status&job_id=$job_id");
      
      
    }

    public function getResume($job_id,$user_account_id){
        $data_resume=  $this->model("ResumeModel")->get("job_post_activity","user_account_id=$user_account_id and job_id =$job_id")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($data_resume);

    }
    public function resume_status(){

      $data_resume_status=  $this->model("ResumeModel")->get("resume_status")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data_resume_status);
    }
    public function resume_type(){

        $data_resume_type=  $this->model("ResumeModel")->get("resume_type")->fetchAll(PDO::FETCH_ASSOC);
          echo json_encode($data_resume_type);
      }

      public function sendMail(){
        $email=$_POST["f_mail"];
        $title=$_POST["f_title"];
        $content=$_POST["f_content"];
        sendMail($email,$title,$content);
      }

      public function SwitchResumeStatus(){
        $id=$_POST["resume_id"];
        $resume_active=$_POST["resume_active"];
        $seeker_id=$_SESSION["user"]["id"];
        $data=[
            "resume_active "=>"'$resume_active'",
        ];
        if($resume_active!="1"){
        $this->model("ResumeModel")->update("resume",[
            "resume_active "=>"'1'"
        ],
        "user_account_id =$seeker_id");
        }
        $this->model("ResumeModel")->update("resume",$data," id=$id");
      }
      public function resume_saved(){
        $this->data["sub_content"][""]="";


        $this->data["content"]="employer/hrcentral/resume_saved";
        
        $this->render('layouts/employer_layout',$this->data);
      }
}
