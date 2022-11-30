<?php
class AccountUserModel extends Database
{
    protected $table = "user_account";

    public function insertUser($data)
    {
       $this->insert($this->table, $data);
       return  $this->lastInsertId();

    }
 
    public function checkLoginUser($email, $password)
    {
        $row_count = $this->query("SELECT * FROM $this->table WHERE email='$email' and password='$password' and user_type_id ='1'"  );
        return $row_count;
    }
    public function checkEmployerLogin($email, $password){
        $sql="SELECT * FROM $this->table   WHERE email='$email' and password='$password'  and user_type_id ='2'";
        echo $sql;
        $row_count = $this->query($sql);
        return $row_count;
    }
}
