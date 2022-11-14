<?php
class My_profile extends Controller
{
    public function index(){
        $this->data["sub_content"][]="";
        $this->data["content"]="clients/my_profile";
        $this->render('layouts/client_layout',$this->data);
    }

    public function UpdateProfile(){
            if(count($_POST)>0){
                        $lastname=$_POST["lastname"];
                        $firstname=$_POST["firstname"];
                        $gender=$_POST["gender"];
                        $contact_number=$_POST["contact_number"];
                        $marital_status=$_POST["slMarritial"];

                        
                // $this->redirect('jobseekers/my_profile');

            }   
            else{
                $this->redirect('jobseekers/my_profile');
            }
    }
}