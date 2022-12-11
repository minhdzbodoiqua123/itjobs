<?php
class App 
{
    private $controller;
    private $action;
    private $param;


    function __construct() {

        $this->controller ='home';
        $this->action ='index';
        $this->param =[];
        $this->handleUrl();
    }

        //controller//action/param
      
    function getUrl(){
        if(isset($_SERVER["PATH_INFO"])){
            $url = $_SERVER["PATH_INFO"];  
        }
        else{
            $url='/';
        }
        return $url;
    } 
    //index.php/admin/home
    function handleUrl(){
        $url=$this->getUrl();
      
        //index.php
          //home/index/1
         //[1]=>products
         //[2]=>detail


        $urlArr=array_filter(explode("/",$url));
         
        //array_filter key index của nó là 1
        $urlArr=array_values($urlArr);  
        //array_value chuyển key bắt đầu từ 0
        
        $urlCheck='';
        if(!empty($urlArr)){
                
            foreach ($urlArr as $key=>$item){
              
                    
                $urlCheck.=$item.'/';
                
          

              
               
                $fileCheck=rtrim($urlCheck,'/');
                        //[0]=> home
                  //[1]=> home/index
                 //[2]=>1
                 $fileArr=explode("/",$fileCheck);
                 
                 //set Hoa chữ cái đầu  cho controller
                $fileArr[count($fileArr)-1]=ucfirst($fileArr[count($fileArr)-1]);
                $fileCheck=implode("/",$fileArr);
               
               
                //Kiểm 
                
                if(!empty($urlArr[$key-1])){
                    unset($urlArr[$key-1]);
                }
                
               
                if(file_exists('./app/controllers/'.($fileCheck).'.php')){
                   
                    $urlCheck=$fileCheck;
                   
                    break;
                }
    
            }
         
            $urlArr=array_values($urlArr);
        }
      
        if(!empty($urlArr[0])){
            $this->controller=ucfirst($urlArr[0]);
      
        }
        else{
            $this->controller=ucfirst($this->controller);
       
        }
        
        
        if(empty($urlCheck)){
            $urlCheck=$this->controller;
        }
           $urlCheck= rtrim(ucfirst($urlCheck),'/');
    
           if(file_exists('./app/controllers/'.$urlCheck.'.php')){
            
            require_once './app/controllers/'.$urlCheck.'.php';
            if(class_exists($this->controller)){

                
                $this->controller =new $this->controller();
                unset($urlArr[0]);
            }    
            else{
                $this->loadError();
            }
           } 
           
        //Xử lý action
        if(!empty($urlArr[1])){  
      
            $this->action =$urlArr[1];
            unset($urlArr[1]);  
        }
        $this->param=$urlArr?array_values($urlArr):[];
       
      if(method_exists($this->controller,$this->action)){
        call_user_func_array([$this->controller,$this->action],$this->param);
      }
      else{
        $this->loadError();
      }
    }
    
    function loadError($name='404'){
        require_once './app/errors/'.$name.'.php';
    }
    
}
