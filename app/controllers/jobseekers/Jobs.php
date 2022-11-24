<?php
class Jobs extends Controller
{
    public function index(){
        
    }
    public function apply($id=""){
        $conn=$this->model("Job_postModel");
        $checkIdPost= $conn->get("job_post","id=$id")->rowCount();
        if($checkIdPost==0){
            $this->redirect("404page");
        } 
        
        $sql="SELECT job_post.*,degree_name,experience_type,logo,company_name,contact_name FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id join  employer_infomation on employer_infomation.user_account_id=job_post.posted_by_id where status ='1' and job_post.id=$id";
        
        $seeker_id=$_SESSION["user"]["id"];

        $job_post=$conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        $info_seeker=$conn->query("select * from seeker_profile join user_account on seeker_profile.user_account_id=user_account.id  where user_account_id='$seeker_id' ")->fetch(PDO::FETCH_ASSOC);
        $fullname= $info_seeker["lastname"].' '.$info_seeker["firstname"];

        $this->data["sub_content"]["job_post"]=$job_post;
        $this->data["sub_content"]["info_seeker"]=$info_seeker;
        $this->data["sub_content"]["fullname"]=$fullname;
        $this->data["sub_content"]["seeker_id"]=$seeker_id;



        $this->data["content"]="clients/ApplyJob";

        $this->render('layouts/client_layout',$this->data);
    }

    //Xử lý ứng viên ứng tuyển vị trí cần tuyển dụng
    public function Recruitment(){
        if(count($_POST)>0){
            $session_id=$_POST["session_id"];

            $data = [];
            $conn=$this->model("Job_postModel")->insert("job_post_activity",$data);
         }
}

}