<?php

final class todo extends database\model
{
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $updateddate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }

    public function task_redirect(){

        if ($this->id!=''){
            echo' <a href="index.php?page=tasks&action=edit&id='. $this->id .'">Back</a><br>';
        }else{
            echo '<a href="index.php?page=tasks&action=create" >Back to the list</a><br>';
        }
    }

    public function validate()
    {

        $valid = TRUE;
        if ($this->message == '') {
            $valid = FALSE;
            echo 'Enter at least a character into the title field<br/>';
            $this->task_redirect();

        }

        if (! ($this->isdone==1 || $this->isdone==0)){
        $valid = FALSE;
             echo 'Enter 0 or 1<br/>';
             $this->task_redirect();
        }

       return $valid;

    }
}
?>
