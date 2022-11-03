<?php
 class Controller
{
    public function model($model=null){
        if(file_exists('./app/models/'.$model.'.php')){
            require_once './app/models/'.$model.'.php';
           if(class_exists($model)){
            $model =new $model;
            return $model;
           }
        }
        return false;
       
    }
    public function render($view=null,$data=[]){
    //  print_r($data);
       //hàm extract chuyển key của mảng thành biến
       //Giup ta có thể in mảng bằng key của mảng đó
       extract($data);
      
        //Kiểm tra có file như trên trong thư mục view hay không nếu có thì lấy dữ liệu từ file đó về
        if(file_exists('./app/view/'.$view.'.php')){
            require_once './app/view/'.$view.'.php';  
        }
    }
    public function redirect($link)
	{
		header("Location: ". _WEB_ROOT . "/".trim($link,"/"));
		die;
	}
}