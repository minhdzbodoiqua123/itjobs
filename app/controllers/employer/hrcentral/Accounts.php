<?php
class Accounts extends Controller
{
    public function index(){

        
        // $this->data["sub_content"][""] = "";

        // $this->data["content"]="employer/hrcentral/accounts/edit_employer";
        // $this->render('layouts/employer_layout',$this->data);
    }
    public function edit_employer(){
        $user_account_id = $_SESSION["employer"]["id"];
       $file_upload= $this->uploadImageCompany();

       $data_company=  $this->model("AccountUserModel")->query("select * from employer_infomation join company on company.id =company_id where employer_infomation.user_account_id=$user_account_id")->fetch(PDO::FETCH_ASSOC);
        $company_id=$data_company["company_id"];

      if(count($_POST)>0){
        $EMP_NAME=$_POST["EMP_NAME"];
        $Company_type=$_POST["Company_type"];
        $EMP_WEBSITE=$_POST["EMP_WEBSITE"];
        $EMP_TAXID=$_POST["EMP_TAXID"];
        $EMP_DESC=$_POST["EMP_DESC"];
        $EMP_MESSAGE=$_POST["EMP_MESSAGE"];

        [$logo,$banner] = $file_upload;

            $data=[ 
              "company_name"=>"'$EMP_NAME'",      
              "company_type_id "=>"'$Company_type'",      
              "company_website_url"=>"'$EMP_WEBSITE'",      
              "logo"=>"'$logo'",      
              "banner"=>"'$banner'",      
              "company_summary"=>"'$EMP_DESC'",      
              "message"=>"'$EMP_MESSAGE'",      
              "tax_code"=>"'$EMP_TAXID'",      

            ];
          $this->model("CompanyModel")->update("company",$data,"id=$company_id");
      }

         $data_company_type= $this->model("CompanyModel")->get("company_type")->fetchAll(PDO::FETCH_ASSOC);

      
        $this->data["sub_content"]["data_company"] = $data_company;
        $this->data["sub_content"]["data_company_type"] = $data_company_type;

        $this->data["content"]="employer/hrcentral/accounts/edit_employer";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function contact_name(){
        $user_account_id = $_SESSION["employer"]["id"];
 $data =  $this->model("AccountUserModel")->get("employer_infomation","user_account_id='$user_account_id'")->fetch(PDO::FETCH_ASSOC);

        echo json_encode($data);

    }
    
    public function uploadImageCompany(){
        $logo="";
        $image1="";

        if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_FILES['logo']["size"]>0)
         {
     
         $logo=$_FILES['logo']['name'];
         
       
       

         $upload_dir=''.__DIR_ROOT.'/app/public/assets/employer/images/';
         $upload_file=$upload_dir.$logo;
         $type=pathinfo($logo,PATHINFO_EXTENSION);
         // $type_allow=array('png', 'jpg', 'jpeg','gif');
    
         if(file_exists($upload_file)){
           $name=pathinfo($logo,PATHINFO_FILENAME);
           $new_name=$name.'-Coppy.';
           $upload_new=$upload_dir.$new_name.$type;
           $k=1;
           while (file_exists($upload_new)){
               $k++;
           $new_name=$name."-Coppy.({$k}).";
           $upload_new=$upload_dir.$new_name.$type;
           }
           $upload_file=$upload_new;
           $logo=$new_name.$type;
       }
    
       move_uploaded_file($_FILES['logo']['tmp_name'],$upload_file);

       

       }
  
        if (($_SERVER['REQUEST_METHOD'] === 'POST') && $_FILES['image1']["size"]>0)
        {
    
        $image1=$_FILES['image1']['name'];
        
      
      

        $upload_dir=''.__DIR_ROOT.'/app/public/assets/employer/images/';
        $upload_file=$upload_dir.$image1;
        $type=pathinfo($logo,PATHINFO_EXTENSION);
        // $type_allow=array('png', 'jpg', 'jpeg','gif');
   
        if(file_exists($upload_file)){
          $name=pathinfo($image1,PATHINFO_FILENAME);
          $new_name=$name.'-Coppy.';
          $upload_new=$upload_dir.$new_name.$type;
          $k=1;
          while (file_exists($upload_new)){
              $k++;
          $new_name=$name."-Coppy.({$k}).";
          $upload_new=$upload_dir.$new_name.$type;
          }
          $upload_file=$upload_new;
          $image1=$new_name.$type;
      }
   
      move_uploaded_file($_FILES['image1']['tmp_name'],$upload_file);

       }

       return [$logo,$image1];

    }
}