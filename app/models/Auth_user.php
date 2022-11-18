<?php
class Auth_user
{
    public static function authenticate($row)
    {   
       
       $_SESSION["user"]=$row;
    }
    public static function logout()
    {
      if(isset($_SESSION["user"])){
        unset($_SESSION["user"]);
      }
   
      if (isset($_COOKIE['remember'])) {
        unset($_COOKIE['remember']); 
        setcookie('remember', null, -1); 
    }
    }
    public static function logged_in()
    {
      if(isset($_SESSION["user"])){
        return true;
      }
      return false;
    }
}