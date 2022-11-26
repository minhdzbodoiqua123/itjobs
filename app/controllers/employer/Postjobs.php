<?php
class Postjobs extends Controller
{
    public function index(){
        if (!Auth_employer::logged_in()) {
            $this->redirect("employer/account/login");
        }
        $data_position = $this->model("JobPositionModel")->get("job_position")->fetchAll(PDO::FETCH_ASSOC);
        $data_welfare= $this->model("JobPositionModel")->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $this->model("JobPositionModel")->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $data_degree= $this->model("JobPositionModel")->get("degree")->fetchAll(PDO::FETCH_ASSOC);

        $data_job_type= $this->model("JobPositionModel")->get("job_type")->fetchAll(PDO::FETCH_ASSOC);
        $data_job_experience= $this->model("JobPositionModel")->get("job_experience")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["data_position"] = $data_position;
        $this->data["sub_content"]["data_welfare"] = $data_welfare;
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["data_degree"] = $data_degree;
        $this->data["sub_content"]["data_job_type"] = $data_job_type;
        $this->data["sub_content"]["data_job_experience"] = $data_job_experience;



        $this->data["content"]="employer/Postjobs";
        
        $this->render('layouts/employer_layout',$this->data);
    }

    public function InsertJob(){
        $conn=$this->model("Job_postModel");
       

        $user_account_id = $_SESSION["employer"]["id"];
        
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
     
        $data=[
            "job_title" => "'$job_title'",
            "job_desc" => "'$job_desc'",
            "job_request" => "'$job_req'",
            "posted_by_id"=>"'$user_account_id'",
      
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

   

        //đăng bài bảng job_post
        $postId=$conn->insertData($data);

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
     
            $conn->insert("job_experience_detail",[
                "post_id"=>"'$postId'",
                "JOB_FROMEXPERIENCE"=>"'$JOB_FROMEXPERIENCE'",
                "JOB_TOEXPERIENCE"=>"'$JOB_TOEXPERIENCE'"
            ]);
        }
      $this->redirect("employer/hrcentral/waitposting");
        

    }
    public function infoJobPost($id=""){
        $conn=$this->model("Job_postModel");

        $job_post=$conn->query("SELECT created_date,end_date,job_title FROM `job_post`  where status ='0' and job_post.id=$id")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($job_post);
    }

    public function post_success($id=""){
      
     
        $posted_date=date('Y-m-d');
        $conn=$this->model("Job_postModel");
        $conn->update("job_post",[
            "status"=>"'1'",
        "posted_date"=>"'$posted_date'"
        ],"id=$id");

       

    }
}