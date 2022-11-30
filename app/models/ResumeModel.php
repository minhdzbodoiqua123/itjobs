<?php
class ResumeModel extends Database
{
   protected $table="resume";
   
   public function insertData($data){
      $this->insert($this->table, $data);
      return $this->lastInsertId();
   }
}