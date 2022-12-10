<?php
class EmployeeManager extends Controller
{
    public function index()
    {
        $conn = $this->model("AccountUserModel");
        $allStaff = $conn->query("select user_account.*,fullname,image,user_type_name	 from user_account left join admin_info on user_account_id = user_account.id join user_type on user_type.id=user_type_id   where user_type_id>=3")->fetchAll(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["allStaff"] = $allStaff;


        $this->data["content"] = "admin/EmployeeManager";

        $this->render('layouts/admin_layout', $this->data);
    }

    public function addStaff()
    {
        $conn = $this->model("AccountUserModel");
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $phone_number = $_POST["phone_number"];
            $position = $_POST["position"];
            $image =  $this->uploadFile();

            $user_account_id = $conn->insertUser([
                "email" => "'$email'",
                "password" => "'$password'",
                "user_type_id " => "'$position'",
            ]);
            $data = [
                "user_account_id" => "'$user_account_id'",

                "fullname" => "'$name'",
                "contact_phone" => "'$phone_number'",
                "image" => "'$image'"
            ];
            $conn->insert("admin_info", $data);
            $this->redirect("admin/EmployeeManager");
            return;
        }



        $allPosition = $conn->query("select * from user_type where id>=3")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["allPosition"] = $allPosition;

        $this->data['content'] = 'admin/AddStaff';


        $this->render('layouts/admin_layout', $this->data);
    }
    public function uploadFile()
    {
        $file_name = $_FILES['fileUpload']['name'];

        $upload_dir = '' . __DIR_ROOT . '/app/public/assets/admin/images/';

        $upload_file = $upload_dir . $file_name;
        $type = pathinfo($file_name, PATHINFO_EXTENSION);
        // $type_allow=array('png', 'jpg', 'jpeg','gif');

        if (file_exists($upload_file)) {
            $name = pathinfo($file_name, PATHINFO_FILENAME);
            $new_name = $name . '-Coppy.';
            $upload_new = $upload_dir . $new_name . $type;
            $k = 1;
            while (file_exists($upload_new)) {
                $k++;
                $new_name = $name . "-Coppy.({$k}).";
                $upload_new = $upload_dir . $new_name . $type;
            }
            $upload_file = $upload_new;
            $file_name = $new_name . $type;
        }

        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_file);
        return $file_name;
    }

    public function editStaff($id = "")
    {
        $conn = $this->model("AccountUserModel");
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST["name"];
            $phone_number = $_POST["phone_number"];
            $file_size = $_FILES['fileUpload']['size'];
            $image =  $this->uploadFile();

            $position = $_POST["position"];
            if ($file_size > 0) {
                $data = [
                    "fullname" => "'$name'",
                    "contact_phone" => "'$phone_number'",
                    "image" => "'$image'",

                ];
            } else {
                $data = [
                    "fullname" => "'$name'",
                    "contact_phone" => "'$phone_number'",
                ];
            }
            $conn->update("user_account", [
                "user_type_id" => "'$position'",
            ], "id=$id");
            $conn->update("admin_info", $data, "user_account_id=$id");
            $this->redirect("admin/EmployeeManager");
        }


        $allPosition = $conn->query("select * from user_type where id>=3")->fetchAll(PDO::FETCH_ASSOC);

        $this->data["sub_content"]["allPosition"] = $allPosition;

        $this->data['content'] = 'admin/editStaff';

        $allStaff = $conn->query("select user_account.*,fullname,image,user_type_name,contact_phone	 from user_account left join admin_info on user_account_id = user_account.id join user_type on user_type.id=user_type_id   where user_type_id>=3")->fetch(PDO::FETCH_ASSOC);
        $this->data["sub_content"]["allStaff"] = $allStaff;
        // print_r($allPosition);
        $this->render('layouts/admin_layout', $this->data);
    }


    public function deleteStaff($id = "")
    {
        $conn = $this->model("AccountUserModel");
        $deleteStaffById = $conn->delete("user_account", "id=$id");
        $this->redirect("admin/EmployeeManager");
    }
}
