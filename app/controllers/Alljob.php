<?php
class Alljob extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $sql=$this->search();

        $job_post=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $item_per_page=5;
        $current_page=!empty($_GET["page"]) ? $_GET["page"] : 1 ;
        // $offset=($current_page-1)*$item_per_page;
        $totalRecords=$conn->query("SELECT job_post.*,logo,company_name FROM `job_post`join company on company.id = job_post.company_id join job_location on job_location.post_id =job_post.id
        where NOW() < end_date and status='1' ")->rowCount();
        $totalPages=ceil($totalRecords / $item_per_page);
       

        $job_welfare_detail=$conn->query("SELECT post_id,welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id ")->fetchAll(PDO::FETCH_ASSOC);

        $data_profession= $conn->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        
      
         $this->data["sub_content"][""]="";
        $this->data["content"]="clients/all_job";
        $this->data["sub_content"]["job_post"] = $job_post;
        $this->data["sub_content"]["job_welfare_detail"] = $job_welfare_detail;
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->data["sub_content"]["totalPages"] = $totalPages;
        $this->data["sub_content"]["current_page"] = $current_page;

        $this->render('layouts/client_layout',$this->data);
    }
    
    public function detail($id=""){
        $conn=$this->model("Job_postModel");
        $checkIdPost= $conn->get("job_post","id=$id")->rowCount();
        if($checkIdPost==0){
            $this->redirect("404page");
        }
        $seeker_id=$_SESSION["user"]["id"] ?? "";

        $job_welfare_detail=$conn->query("SELECT welfare_type FROM `job_welfare_detail` join job_welfare on job_welfare_id=job_welfare.id WHERE post_id=$id limit 3")->fetchAll(PDO::FETCH_ASSOC);
        $job_post_activity=$conn->get("job_post_activity","user_account_id='$seeker_id' and job_id ='$id'")->fetch(PDO::FETCH_ASSOC);  
      
        $job_post=$conn->query("SELECT job_post.*,degree_name,position,experience_type,logo,company_name,banner FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where  status ='1' and job_post.id=$id  ")->fetch(PDO::FETCH_ASSOC);
      
        $job_experience_detail=$conn->get("job_experience_detail","post_id=$id")->fetch(PDO::FETCH_ASSOC);
            
         $job_profession_detail=$conn->query("SELECT * FROM `job_profession_detail` join profession on profession_id=profession.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

         $job_type_detail=$conn->query("SELECT job_type FROM `job_type_detail` join job_type on job_type_id=job_type.id WHERE post_id=$id")->fetchAll(PDO::FETCH_ASSOC);

         $this->data["sub_content"]["job_post"]=$job_post;
         $this->data["sub_content"]["job_welfare_detail"]=$job_welfare_detail;
         $this->data["sub_content"]["job_profession_detail"]=$job_profession_detail;
         $this->data["sub_content"]["job_type_detail"]=$job_type_detail;
         $this->data["sub_content"]["job_post_activity"]=$job_post_activity;
   

         $this->data["sub_content"]["job_experience_detail"]=$job_experience_detail;


        $this->data["content"]="clients/detail_job";
       

        $this->render('layouts/client_layout',$this->data);
    }
    // public function detail($id=""){


    //     $this->data["sub_content"][""]="";
    //     $this->data["content"]="clients/detail_job";
    //     $this->render('layouts/client_layout',$this->data);
    // }
    public function search(){
        $keyword=$_GET["keyword"] ?? "";
        $industry=$_GET["industry"] ?? "";
        $location=$_GET["location"] ?? "";
        $item_per_page=5;
        $current_page=!empty($_GET["page"]) ? $_GET["page"] : 1 ;
        $offset=($current_page-1)*$item_per_page;
      


        $sql="SELECT DISTINCT job_post.*,logo,company_name FROM `job_post`join company on company.id = job_post.company_id join job_location on job_location.post_id =job_post.id join job_profession_detail on job_profession_detail.post_id=job_post.id
        where NOW() < end_date and status='1'  ";

        if(!empty($keyword)){
            $sql.="and job_title  LIKE '%$keyword%'";

        }
        if(!empty($industry)){
            $industry=join(',',$industry);
            $sql.=" and profession_id in ($industry)";
        }
        if(!empty($location)){
            $location=join(',',$location);
            $sql.=" and provinces in ($location)";
        }
        $sql.="order by job_post.id limit $item_per_page offset $offset";
            return $sql;

  

     
    }                                   
    
    public function address_company($id=""){
        
        $conn=$this->model("Job_postModel");
        $job_post=$conn->query("SELECT job_post.* FROM `job_post` join degree on job_degree_id=degree.id join job_position on job_position_id=job_position.id join job_experience on job_experience_id=job_experience.id join company on company.id = job_post.company_id where   status ='1' and job_post.id=$id ")->fetch(PDO::FETCH_ASSOC);
        $company_id=$job_post["company_id"];
        $address_company=$conn->query("SELECT provinces FROM `job_post` join address_company on job_post.company_id=address_company.company_id WHERE job_post.company_id=$company_id and job_post.id=$id")->fetch(PDO::FETCH_ASSOC);
        echo json_encode($address_company);
    }
}