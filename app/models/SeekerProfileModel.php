<?php
class SeekerProfileModel extends Database
{
   protected $table="seeker_profile";
   public function insertData($data){
      $this->insert($this->table,$data);
   
   }
}