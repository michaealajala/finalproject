<?php

final class todo extends database\model
{
    public $actions;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $updateddate;
    public $activities;
    public $venues;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }

    public function task_redirect(){

        if ($this->actions!=''){
            echo' <a href="index.php?page=tasks&action=edit&actions='. $this->actions .'">Back</a><br>';
        }else{
            echo '<a href="index.php?page=tasks&actions=create" >Back to the list</a><br>';
        }
    }

    public function validate()
    {

        $valid = TRUE;
        /*if ($this->activities == '') {
            $valid = FALSE;
            echo 'Enter at least a character into the title field<br/>';
            $this->task_redirect();

        }*/

      /*if (! ($this->isdone==1 || $this->isdone==0)){
        $valid = FALSE;
             echo 'Enter 0 or 1<br/>';
             $this->task_redirect();
        }*/

       return $valid;

    }
}
?>
