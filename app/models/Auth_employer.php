<?php
class Auth_employer
{
    public static function authenticate($row)
    {   
       $_SESSION["employer"]=$row;
    }
    public static function logout()
    {
      if(isset($_SESSION["employer"])){
        unset($_SESSION["employer"]);
      }
   
    //   if (isset($_COOKIE['remember'])) {
    //     unset($_COOKIE['remember']); 
    //     setcookie('remember', null, -1); 
    //  }
    }
    public static function logged_in()
    {
      if(isset($_SESSION["employer"])){
        return true;
      }
      return false;
    }
}