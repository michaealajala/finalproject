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


    public function validate()
    {

        $valid = TRUE;
        if ($this->message == '') {
            $valid = FALSE;
            echo 'nothing in message<br/>';
            echo' <a href="index.php?page=tasks&action=edit&id='. $this->id .'">Back</a>';
        }

        if (! ($this->isdone==1 || $this->isdone==0)){
        $valid = FALSE;
        echo 'Enter 0 or 1<br/>';
            echo' <a href="index.php?page=tasks&action=edit&id='. $this->id .'">Back</a>';

        }
 
 
       return $valid;

    }
}
?>
