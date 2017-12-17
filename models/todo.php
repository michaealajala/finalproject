<?php

final class todo extends database\model
{
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }
}

     public function validate()
    {
        $valid = TRUE;
         if($this->message == '') {
             $valid = FALSE;
             echo 'nothing in email';
        }
         
         if($this->isdone!= "0" or this->isdone!="0"){
               $valid = FALSE;
             echo 'Enter 0 or 1';
         }
 
 
       return $valid;
 
   }



?>
