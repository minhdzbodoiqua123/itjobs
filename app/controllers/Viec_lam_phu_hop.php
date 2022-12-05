<?php
class Viec_lam_phu_hop extends Controller
{
    public function index(){
        $conn=$this->model("Job_postModel");
        $user_account_id=$_SESSION["user"]["id"] ?? "";
        $seeker_job_information=$conn->get("seeker_job_information", "user_account_id=$user_account_id")->fetch(PDO::FETCH_ASSOC);
   
        $seeker_profession_detail=$conn->get("seeker_profession_detail", "user_account_id=$user_account_id")->fetchAll(PDO::FETCH_ASSOC);
        $provinces=$seeker_job_information["provinces"];
        $strProfession_id = '';
        foreach ($seeker_profession_detail as $value) {
            $strProfession_id .= "$value[seeker_profession_id]" . ',';

        }
        $strProfession_id = rtrim($strProfession_id, ',');

        $suitable_job=$conn->query("SELECT DISTINCT job_post.*,provinces,logo,company_name from job_post join job_profession_detail on post_id =job_post.id join job_location on job_location.post_id  = job_post.id join company on company.id = job_post.company_id where  profession_id in ($strProfession_id) and status='1' and now()<end_date and provinces in ($provinces) and wrk_from_home = $seeker_job_information[work_from_home]  ")->fetchAll(PDO::FETCH_ASSOC);
        $data_profession= $conn->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["suitable_job"]=$suitable_job;
        $this->data["sub_content"]["data_profession"]=$data_profession;

        $this->data["content"]="clients/viec_lam_phu_hop";

        $this->render('layouts/client_layout',$this->data);
    }

}