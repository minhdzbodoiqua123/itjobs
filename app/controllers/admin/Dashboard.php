<?php
class Dashboard extends Controller
{
    public function index(){
        if(!Auth_admin::logged_in()){
            $this->redirect("admin/account/login");
          }
         

          $conn= $this->model("CompanyModel");
        
          $count_company=$conn->get("company")->rowCount();
          $count_seeker=$conn->get("user_account","user_type_id='1'")->rowCount();
          $count_employer=$conn->get("user_account","user_type_id='2'")->rowCount();
          $count_job_post=$conn->get("job_post")->rowCount();
       
          $this->data["sub_content"]["count_job_post"] = $count_job_post;
          $this->data["sub_content"]["count_company"] = $count_company;
          $this->data["sub_content"]["count_seeker"] = $count_seeker;
          $this->data["sub_content"]["count_employer"] = $count_employer;

          $this->data["content"] = "admin/dashboard";
          $this->render('layouts/admin_layout', $this->data);

    }
    public function company_statistics(){
        // $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
        $result=$conn->query("select company.id as company_id,company_name,count(company.id) as so_luong_bai_dang,job_title,count(resume_id) so_luong_nguoi_ung_tuyen  from company join job_post on job_post.company_id=company.id left join job_post_activity on job_post_activity.job_id=job_post.id group by company.id,job_title")->fetchAll(PDO::FETCH_ASSOC);
       
        

        $arr=[];
        foreach ($result as $each) {

            $company_id=(int)$each["company_id"];
            if(empty($arr[$company_id])) {
                $arr[$company_id] =[
                    "name"=>$each["company_name"],
                    "y"=>(int)$each["so_luong_bai_dang"],
                    "drilldown"=>(int)$each["company_id"]
                ];
            } 
             else{
                $arr[$company_id]["y"]+=(int)$each["so_luong_bai_dang"];
            }
     
          
        }
     
        $arr2=[];
       

        foreach ($arr as $company_id=> $each) {
            $arr2[$company_id]=[
                "name"=>$each["name"],
                "id"=>$company_id,
            ];
            $arr2[$company_id]["data"]=[];
      
             
                 
             
               
                
                 
           
        }

        foreach ($result as $item) {
            $job_id=$item["company_id"];
            $key=$item["job_title"];
            $arr2[$job_id]["data"][$key]=[
                $key,
                (int)$item['so_luong_nguoi_ung_tuyen']
            ];
        }
        $obj= json_encode([$arr,$arr2]);
        echo $obj;

    
    }
}