<?php
class Account extends Controller
{
    public function index(){
        
        
    }
    public function login(){
        if(Auth_admin::logged_in()){
            $this->redirect('admin/dashboard');
        }
        if(count($_POST) > 0){
         
            $email=$_POST["email"];
            $password=$_POST["password"];
  $conn=$this->model("AccountUserModel");
   $result=$conn->checkLoginAdmin($email,$password);

            $remember=isset($_POST["remember"])?true:false;
            if($result->rowCount()==1){
               $user=$result->fetchAll(PDO::FETCH_ASSOC);
               $user_id= $user[0]["id"];
     $admin_info=$conn->get("admin_info","user_account_id =$user_id")->fetchAll(PDO::FETCH_ASSOC);
              
                foreach ($admin_info as $row) {
                 Auth_admin::authenticate($row);
                }
                if($remember){
                 setcookie('remember_admin',$_SESSION["admin"]["id"],time()+60*60*24*30);
                 }
                $this->redirect('admin/dashboard');
            }
            $this->data['errors']['login']="Tên đăng nhập hoặc mật khẩu không chính xác";

         
 
            }
        
        $this->data['']= "";

        $this->render('admin/login',$this->data);
    }
    public function forgetPassword(){
        $this->data['a']= "123";
        
        $this->render('admin/forgetpassword',$this->data);

    }
    public function logout()
    {
        Auth_admin::logout();
        $this->redirect('admin/account/login');
    }
}