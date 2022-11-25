<?php
class ProfessionModel extends Database
{
   protected $table="profession";
   
   public function insertData($data){
      $this->insert($this->table, $data);
      return $this->lastInsertId();
   }
}