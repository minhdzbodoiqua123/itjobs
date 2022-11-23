<?php
class CompanyModel extends Database
{
   protected $table="company";
   
   public function insertData($data){
      $this->insert($this->table,$data);
      return  $this->lastInsertId();
   }
  
}