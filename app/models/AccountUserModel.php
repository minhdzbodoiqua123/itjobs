<?php
class AccountUserModel extends Database
{
    protected $table = "user_account";

    public function insertUser($data)
    {
        $this->insert($this->table, $data);
    }
    public function checkLoginUser($email, $password)
    {
        $row_count = $this->query("SELECT * FROM $this->table WHERE email='$email' and password='$password'");
        return $row_count;
    }
}
