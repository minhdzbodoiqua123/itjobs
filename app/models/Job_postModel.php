<?php
class Job_postModel extends Database
{
   protected $table="job_post";
   
   public function insertData($data){
    $this->insert($this->table, $data);
    return $this->lastInsertId();
   }
}