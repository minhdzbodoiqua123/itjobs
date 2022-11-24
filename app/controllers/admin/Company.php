<?php
class Company extends Controller
{
    public function index(){
        $conn=$this->model("CompanyModel");
        $data_company=$conn->get("company")->fetchAll(PDO::FETCH_ASSOC);
        $company_type=$conn->get("company_type")->fetchAll(PDO::FETCH_ASSOC);


        $this->data["sub_content"]["data_company"] = $data_company;
        $this->data["sub_content"]["company_type"] = $company_type;

        $this->data["content"]="admin/company";
        $this->render('layouts/admin_layout',$this->data);
    }
    public function addCompany(){
        $conn=$this->model("CompanyModel");
        if(count($_POST) > 0){
   
            $company_name=   $_POST["company_name"];
            $website_url=   $_POST["website_url"];
            $company_type_id=   $_POST["company_type"];
            $tax_code=   $_POST["tax_code"];
            $company_summary=   $_POST["company_summary"];
   
            
            $data=[
               "company_type_id"=>"'$company_type_id'",
               "company_name"=>" '$company_name'",
               "company_website_url"=>" '$website_url'",
               "company_name"=>" '$company_name'",
               "company_summary"=>" '$company_summary'",
               "tax_code"=>" '$tax_code'",
            ];
            $insertCompany=$conn->insert("company",$data);
           $this->redirect("admin/company");
          
           }


        $company_type=$conn->get("company_type")->fetchAll(PDO::FETCH_ASSOC);
          
        $this->data["sub_content"]["company_type"] =$company_type;

        $this->data["content"]="admin/addCompany";
        $this->render('layouts/admin_layout',$this->data);
    }

   

    public function deleteCompany($id=""){
        $conn=$this->model("CompanyModel");

         $deleteCompanyById=$conn->delete("company","id=$id");
          $this->redirect("admin/company");
    }

    public function editCompany($id=""){
        $conn=$this->model("CompanyModel");

        if(count($_POST) > 0){

            $company_name=   $_POST["company_name"];
            $website_url=   $_POST["website_url"];
            $company_type_id=   $_POST["company_type"];
            $tax_code=   $_POST["tax_code"];
            $company_summary=   $_POST["company_summary"];
   

            $data=[
                "company_type_id"=>"'$company_type_id'",
                "company_name"=>" '$company_name'",
                "company_website_url"=>" '$website_url'",
                "company_name"=>" '$company_name'",
                "company_summary"=>" '$company_summary'",
                "tax_code"=>" '$tax_code'",
             ];
            $updateCompanyById=$conn->update("company",$data,"id=$id");
              $this->redirect("admin/company");

        }
     
        $dataCompanyById=$conn->get("company","id=$id")->fetch(PDO::FETCH_ASSOC);
    
        $company_type=$conn->get("company_type")->fetchAll(PDO::FETCH_ASSOC);
        
        $this->data["sub_content"]["dataCompanyById"] =$dataCompanyById;
        $this->data["sub_content"]["company_type"] =$company_type;

        $this->data["content"]="admin/editCompany";
        $this->render('layouts/admin_layout',$this->data);
    }
    
}