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
}

?>
