<?php
class Jobwelfare extends Controller
{
    public function index()
    {
        $conn = $this->model("JobwelfareModel");
        $data_job_welfare = $conn->get("job_welfare")->fetchAll(PDO::FETCH_ASSOC);
        
        $this->data["sub_content"]["data_job_welfare"] = $data_job_welfare;
        $this->data["content"] = "admin/Jobwelfare";
        $this->render('layouts/admin_layout', $this->data);
      
    }

    public function addJobwelfare()
    {
        $conn = $this->model("JobwelfareModel");
        if (count($_POST) > 0) {
            $job_welfare =   $_POST["job_welfare"];
            $data = [
            "welfare_type" => "'$job_welfare'",
            ];
            $insertjob_welfare = $conn->insert("job_welfare", $data);
            $this->redirect("admin/Jobwelfare");
        }

        $this->data["sub_content"][""] = "";
        $this->data["content"] = "admin/addJobwelfare";
        $this->render('layouts/admin_layout', $this->data);
    }

    public function deleteJobwelfare($id = "")
    {
        $conn = $this->model("JobwelfareModel");
        $deleteJobwelfareById = $conn->delete("job_welfare", "id=$id");
        $this->redirect("admin/Jobwelfare");

    }

    public function editJobwelfare($id = "")
    {
        $conn = $this->model("JobwelfareModel");
        if (count($_POST) > 0) {

            $welfare_type =$_POST["welfare_type"];

            $data = [
                "welfare_type" => "'$welfare_type'",
            ];

            $updateJobwelfareById=$conn->update("job_welfare",$data,"id=$id");

            $this->redirect("admin/Jobwelfare");
        }
        $dataJobwelfareById = $conn->get("job_welfare","id=$id")->fetch(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["datajob_welfareById"] = $dataJobwelfareById;
        // print_r($datajobwelfareById);
        $this->data["content"] = "admin/editJobwelfare";

        $this->render('layouts/admin_layout', $this->data);
    }
}
