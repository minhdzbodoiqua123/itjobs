<?php
session_start();
define('__DIR_ROOT',__DIR__);

//Xử lý http root
$protocol =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$web_root=$protocol.$_SERVER["HTTP_HOST"];
$dirRoot=str_replace('\\','/',__DIR_ROOT);

$documentRoot=str_replace('\\','/',$_SERVER["DOCUMENT_ROOT"]);

$folder=str_replace(strtolower($documentRoot),'',strtolower($dirRoot));
$web_root=$web_root.'/'.$folder;

define('_WEB_ROOT',$web_root);

require_once 'app/App.php';
require_once 'core/Database.php';
require_once 'core/Controller.php';
require_once 'core/Functions.php';

//Import file dể xác thực  tất cả các file admin  và user
// require_once __DIR__."/app/models/Auth_admin.php";
// require_once __DIR__."/app/models/Auth_user.php";

$myApp=new App();