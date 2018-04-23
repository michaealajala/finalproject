<?php
namespace database;

use http\controller;

abstract class model
{

    public function save()
    {

        if($this->validate() == FALSE || $this->validate2()== FALSE) {

            echo '<h3>Oops, an error has occurred!</h3>';
            exit;
        }


        if ($this->actions != '') {
            $sql = $this->update();
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);

        if ($INSERT == TRUE) {

            unset($array['actions']);

        }

        foreach (array_flip($array) as $key => $value) {
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();
        if ($INSERT == TRUE) {

            $this->actions = $db->lastInsertId();

        }


        return $this->actions;
        }



    private function insert()
    {

        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        unset($array['actions']);
        $columnString = implode(',', array_flip($array));
        $valueString = ':' . implode(',:', array_flip($array));
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString . ') VALUES (' . $valueString . ')';
        print_r($sql);
        return $sql;
    }

    public function validate() {

        return TRUE;
    }

    public function validate2() {

        return TRUE;
    }

    private function update()
    {

        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);

        $comma = " ";
        $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (isset($value)) {
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE actions=' . $this->actions;
        return $sql;

    }

    public function delete()
    {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $tableName . ' WHERE actions=' . $this->actions;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

?>
