<?php
class ReportJobManager extends Controller
{
    public function index()
    {
        $conn = $this->model("Job_postModel");
        $report_job = $conn->get("report_job");

        $this->data["sub_content"]["report_job"] = $report_job;
        $this->data["content"] = "admin/reportJobManager";

        $this->render('layouts/admin_layout', $this->data);
    }

    public function addReportJobManager()
    {
        $conn = $this->model("Job_postModel");
        if (count($_POST) > 0) {
            $email =   $_POST["email"];
            $desc_report =   $_POST["desc_report"];
            $reason =   $_POST["reason"];
            $job_url =   $_POST["job_url"];
            $job_id =   $_POST["job_id"];
            $data = [
                "email" => "'$email'",
                "reason" => "'$reason'",
                "desc_report" => "'$desc_report'",
                "job_url" => "'$job_url'",
                "job_id" => "'$job_id'",
            ];
            $insertReportJobManage = $conn->insert("report_job", $data);
            $this->redirect("Alljob/detail/$job_id");
        }
    }

    public function deleteReportJobManager($id = "")
    {
        $conn = $this->model("Job_postModel");
        $deleteReportJobManagerById = $conn->delete("report_job", "id=$id");
        $this->redirect("admin/reportJobManager");
    }
}
