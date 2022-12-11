<?php
class Posting extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $employer_id=$_SESSION["employer"]["id"];
       $sql= $this->searchJob();
        $job_post=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";

        $count_submitted =$conn->query("SELECT job_id,count(job_id) as num_submit FROM `job_post_activity` join job_post on job_post.id = job_id  where posted_by_id =$employer_id  group by  job_id")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["job_post"] = $job_post;
        $this->data["sub_content"]["count_submitted"] = $count_submitted;

        $this->data["sub_content"]["keyword"] = $keyword;
        $this->data["sub_content"]["date_type"] = $date_type;
        $this->data["sub_content"]["date_from"] = $date_from;
        $this->data["sub_content"]["date_to"] = $date_to;

        $this->data["content"]="employer/hrcentral/posting";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function searchJob(){
        $employer_id=$_SESSION["employer"]["id"];

        $keyword=$_GET["keyword"]??"";
        $date_type=$_GET["date_type"]??"";
        $date_from=$_GET["date_from"]??"";
        $date_to=$_GET["date_to"]??"";
        $sql="SELECT DISTINCT job_post.*,degree_name,position,experience_type   FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id left join job_post_activity on job_id = job_post.id where posted_by_id ='$employer_id' and NOW() < end_date and status ='1' ";
        
        if(!empty($keyword)){
            $sql.="and job_title like '%$keyword%'";
        }
        if(!empty($date_type) && $date_type==0){
            $sql.="and posted_date BETWEEN '$date_from' AND '$date_to' ";
        }
        else if(!empty($date_type) && $date_type==1){
            $sql.="and end_date BETWEEN '$date_from' AND '$date_to'";
        }
        $sql.="ORDER BY posted_date";
        return $sql;
    }
    public function pause_posting(){
        $job_id=$_POST["job_id"];
        $conn=$this->model("Job_postModel");
        $conn->update("job_post",[
            "status" => "'2'"
        ],"id=$job_id");
        $this->redirect("employer/hrcentral/Posting");
    }
    public function edit_job($job_id=""){
        $conn=$this->model("Job_postModel");
        $count_post=$conn->get("job_post","id=$job_id")->rowCount();
        if($count_post==0){
            $this->redirect("404page");
        }
        // if(count($_POST) > 0){
        // $this->updateJobPost();

        // }

        $data_post=$conn->get("job_post","id=$job_id")->fetch(PDO::FETCH_ASSOC);
        $data_position = $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
        $data_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $this->model("JobPositionModel")->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);

        $data_job_type= $this->model("JobPositionModel")->get("job_type")->fetchAll(PDO::FETCH_ASSOC);
        $data_job_experience= $this->model("JobPositionModel")->get("job_experience")->fetchAll(PDO::FETCH_ASSOC);

        $job_type_detail= $this->model("JobPositionModel")->get("job_type_detail","post_id=$job_id")->fetchAll(PDO::FETCH_ASSOC);
        $job_welfare_detail= $this->model("JobPositionModel")->get("job_welfare_detail","post_id=$job_id")->fetchAll(PDO::FETCH_ASSOC);
        $job_experience_detail= $this->model("JobPositionModel")->get("job_experience_detail","post_id=$job_id")->fetch(PDO::FETCH_ASSOC);
        $job_profession_detail= $this->model("JobPositionModel")->get("job_profession_detail","post_id=$job_id")->fetchAll(PDO::FETCH_ASSOC);
        
        // print_r($data_post);
        $this->data["sub_content"]["data_position"] = $data_position;
        $this->data["sub_content"]["data_welfare"] = $data_welfare;
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["data_degree"] = $data_degree;
        $this->data["sub_content"]["data_job_type"] = $data_job_type;
        $this->data["sub_content"]["data_job_experience"] = $data_job_experience;
        
        $this->data["sub_content"]["job_experience_detail"] = $job_experience_detail;
        $this->data["sub_content"]["job_type_detail"] = $job_type_detail;
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;
        $this->data["sub_content"]["job_profession_detail"] = $job_profession_detail;

        // print_r($data_post);

        $this->data["sub_content"]["data_post"]=$data_post;
        
        $this->data["content"]="employer/hrcentral/edit_job";
        $this->render('layouts/employer_layout',$this->data);
        
    }

    public function updateJobPost(){
        $user_account_id = $_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
        
        $job_title=$_POST["job_title"];
        $job_desc=$_POST["job_desc"];
        $job_req=$_POST["job_req"];
        $min_salary=$_POST["salary_from"];
        $max_salary=$_POST["salary_to"];
        $is_address_work_hidden=isset($_POST["hidden_worklocation_"]) ? $_POST["hidden_worklocation_"] : "0";
        
        $job_type_id=$_POST["job_type"];
        $JOB_FROMAGE=$_POST["JOB_FROMAGE"];
        $JOB_TOAGE=$_POST["JOB_TOAGE"];

        $gender=$_POST["JOB_GENDER"];
        $wrk_from_home=$_POST["JOB_WFH"] ?? "0";
        $current_url=$_POST["current_url"];

        
        
        $job_profession_id=$_POST["INDUSTRY_ID"];

        $job_degree_id =$_POST["DEGREE_ID"];
        $job_position_id=$_POST["LEVEL_ID"];
        $job_experience_id =$_POST["JOB_ISEXPERIENCE"];

        $end_date =$_POST["JOB_LASTDATE"];

        //địa điểm làm việc
        $provinces =$_POST["LOCATION_ID"];
        $work_location =$_POST["work_location"];

        
    
                //Xuất hiện khi người dùng chọn có kinh nghiệm lựa chọn trong khoảng đó
        $JOB_FROMEXPERIENCE =isset($_POST["JOB_FROMEXPERIENCE"]) ? $_POST["JOB_FROMEXPERIENCE"] : "";
        $JOB_TOEXPERIENCE =isset($_POST["JOB_TOEXPERIENCE"]) ? $_POST["JOB_TOEXPERIENCE"] : "";

       

    
        
        $benefit_id=$_POST["BENEFIT_ID"];
        
   $infoEmployer= $conn->query("select company_id from employer_infomation where user_account_id =$user_account_id")->fetch(PDO::FETCH_ASSOC);
   $update_at=date('Y-m-d');
        $data=[
            "job_title" => "'$job_title'",
            "job_desc" => "'$job_desc'",
            "job_request" => "'$job_req'",
            "posted_by_id"=>"'$user_account_id'",
            "wrk_from_home"=>"'$wrk_from_home'",
            "update_at"=>"'$update_at'",
      
            "job_degree_id "=>"'$job_degree_id'",
            "job_position_id "=>"'$job_position_id'",
            "job_experience_id "=>"'$job_experience_id'",
            "from_age"=>"'$JOB_FROMAGE'",
            "to_age"=>"'$JOB_TOAGE'",
            "company_id "=>"'$infoEmployer[company_id]'",
         
            "gender"=>"'$gender'",

            "end_date"=>"'$end_date'",

            "is_address_work_hidden "=>"'$is_address_work_hidden'",

            "min_salary "=>"'$min_salary'",
            "max_salary "=>"'$max_salary'",
            
        ];
     
        $postId=$_POST["job_id"];
        $conn->delete("job_type_detail","post_id=$postId");
        $conn->delete("job_welfare_detail","post_id=$postId");
        $conn->delete("job_location","post_id=$postId");
        $conn->delete("job_profession_detail","post_id=$postId");

        $conn->update("job_post",$data,"id=$postId");
        
        //đăng bài bảng job_post
   
        foreach ($job_type_id as $item) {
            $conn->insert("job_type_detail",[
                "post_id"=>"'$postId'",
                "job_type_id"=>"'$item'"
            ]);
          }
          
          //phúc lợi công việc
        foreach ($benefit_id as $item) {
        $conn->insert("job_welfare_detail",[
            "post_id"=>"'$postId'",
            "job_welfare_id"=>"'$item'"
        ]);
         
        }
        //vị trí công việc
        $conn->insert("job_location",[
            "post_id"=>"'$postId'",
            "provinces"=>"'$provinces'",
            "address"=>"'$work_location'",

            
        ]);
        
            //nghề nghiệp tuyển dụng
        foreach ($job_profession_id as $item) {
            $conn->insert("job_profession_detail",[
                "post_id"=>"'$postId'",
                "profession_id "=>"'$item'"
            ]);
            }
            //Kinh nghiệm trong khoảng
           

        if(!empty($JOB_FROMEXPERIENCE) &&  !empty($JOB_TOEXPERIENCE)) {
            $conn->delete("job_experience_detail","post_id=$postId");
            
            $conn->insert("job_experience_detail",[
                "post_id"=>"'$postId'",
                "JOB_FROMEXPERIENCE"=>"'$JOB_FROMEXPERIENCE'",
                "JOB_TOEXPERIENCE"=>"'$JOB_TOEXPERIENCE'"
            ]);
        }
        $this->redirect("employer/hrcentral/Posting");
    }
    public function addressjob(){
        $conn=$this->model("Job_postModel");
        $job_id=$_POST["job_id"];
        $job_location=$conn->get("job_location","post_id=$job_id")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($job_location);

    }
}