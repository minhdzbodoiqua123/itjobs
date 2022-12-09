<?php
class ReportJobManager extends Controller
{
    public function index(){
        $conn= $this->model("Job_postModel");
        $report_job=$conn->get("report_job");
        
        $this->data["sub_content"]["report_job"] = $report_job;
        $this->data["content"] = "admin/reportJobManager";

        $this->render('layouts/admin_layout', $this->data);
    }
    public function deleteJobManager($id=""){
        $conn= $this->model("Job_postModel");
        $deleteStaffById=$conn->delete("report_job","id=$id");
        $this->redirect("admin/reportJobManager");
    }
}