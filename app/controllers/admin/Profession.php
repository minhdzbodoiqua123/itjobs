<?php
class Profession extends Controller
{
    public function index()
    {
        $conn = $this->model("ProfessionModel");
        $this->data["content"] = "admin/profession";
        $data_profession = $conn->get("profession")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["data_profession"] = $data_profession;
        $this->render('layouts/admin_layout', $this->data);
    }

    public function addProfession()
    {
        $conn = $this->model("ProfessionModel");
        if (count($_POST) > 0) {
            $profession_name =   $_POST["profession_name"];
            $data = [
            "profession_name" => "'$profession_name'",
            ];
            $insertProfession = $conn->insert("profession", $data);
            $this->redirect("admin/Profession");
        }

        $this->data["sub_content"][""] = "";
        $this->data["content"] = "admin/addProfession";
        $this->render('layouts/admin_layout', $this->data);
    }

    public function deleteProfession($id = "")
    {
        $conn = $this->model("ProfessionModel");
        $deleteProfessionById = $conn->delete("profession", "id=$id");
        $this->redirect("admin/Profession");
    }

    public function editProfession($id = "")
    {
        $conn = $this->model("ProfessionModel");
        if (count($_POST) > 0) {

            $profession_name =$_POST["profession_name"];

            $data = [
                "profession_name" => "'$profession_name'",
            ];

            $updateProfessionById=$conn->update("profession",$data,"id=$id");

            $this->redirect("admin/Profession");
        }
        $dataProfessionById = $conn->get("profession","id=$id")->fetch(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["dataProfessionById"] = $dataProfessionById;
        // print_r($dataProfessionById);
        $this->data["content"] = "admin/editProfession";

        $this->render('layouts/admin_layout', $this->data);
    }
}
