<?php
class JobwelfareModel extends Database
{
   protected $table="job_welfare";
   
   public function insertData($data){
      $this->insert($this->table, $data);
      return $this->lastInsertId();
   }
}