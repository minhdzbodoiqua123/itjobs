<?php
class Auth_admin
{
    public static function authenticate($row)
    {   
       $_SESSION["admin"]=$row;
    }
    public static function logout()
    {
      if(isset($_SESSION["admin"])){
        unset($_SESSION["admin"]);
      }
   
      if (isset($_COOKIE['remember_admin'])) {
        unset($_COOKIE['remember_admin']); 
        setcookie('remember_admin', null, -1); 
    }
    }
    public static function logged_in()
    {
      if(isset($_SESSION["admin"])){
        return true;
      }
      return false;
    }
}
