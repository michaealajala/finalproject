<?php

class todos extends database\collection
{
    protected static $modelName = 'todo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    public static  function findTasksbyID($userid) {


        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = ?';


        //grab the only record for find one and return as an object
        $recordsSet = self::getResults($sql, $userid);

        if (is_null($recordsSet)) {
            return FALSE;
        } else {

            foreach ($recordsSet as $record){
                unset($record->ownerid);
            }
            return $recordsSet;
        }
    }

    public static function findOne($actions){

        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE actions = ?';
        $recordsSet = self::getResults($sql, $actions);

          if (is_null($recordsSet)) {
            return FALSE;
        } else {


            return $recordsSet[0];
        }
    }
}

?>
