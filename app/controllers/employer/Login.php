<?php
class Login extends Controller
{
    public function index(){
        if (Auth_employer::logged_in()) {
            $this->redirect("employer/dashboard");
        }


        $this->data["sub_content"][""]="";

        $this->data["content"]="employer/login";
        $this->render('layouts/employer_layout',$this->data);
    }

 

    public function checklogin(){
       
        if (count($_POST) > 0) {
            $email = $_POST["username"];
            $password = $_POST["password"];
            $remember = isset($_POST["chkSave"]) ? true : false;


            $result = $this->model("AccountUserModel")->checkEmployerLogin($email, $password);
           
            if ($result->rowCount() == 1) {
        
                $user = $result->fetchAll(PDO::FETCH_ASSOC);
             
                foreach ($user  as $row) {
                    Auth_employer::authenticate($row);
                }
                  
                $this->redirect('employer/dashboard');
            }
           
            $this->redirect('employer/login');


            //     if(empty($_POST["email"]) || empty($_POST["password"])  ){

            //      $errors['empty']="Bạn phải nhập đầy đủ các trường";
            //     }
            //    else { 
            //      $errors['login']="Tên đăng nhập hoặc mật khẩu không chính xác";
            //     }

        }

      
    }
}