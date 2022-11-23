<?php
class Edit_employer extends Controller
{
    public function index(){

   
        $this->data["sub_content"][""] = "";

        $this->data["content"]="employer/hrcentral/accounts/edit_employer";
        $this->render('layouts/employer_layout',$this->data);
    }
    
    public function employerInfo(){
        $user_account_id = $_SESSION["employer"]["id"];
 $data =  $this->model("AccountUserModel")->get("employer_infomation","user_account_id='$user_account_id'")->fetch(PDO::FETCH_ASSOC);

        echo json_encode($data);

    }
}