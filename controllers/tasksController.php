<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    public static function show()
    {

        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }

    public static function add_new()
    {
        self::getTemplate('add_new');
    }

    public static function all()
    {
        session_start();
        $userID=$_SESSION['userID'];
        $tasks = todos::findTasksbyID($userID);
        self::getTemplate('all_user_tasks', $tasks);

    }

    /**
     *
     */
    public static function create()
    {
       $todo = new todo();
        session_start();
//For some reason I couldn't get both time functions to work for me
//I used the time variable to define the created date
// I left updated date blank but once you edit the task updated date will show up
        $todo->ownerid=$_SESSION['userID'];
        date_default_timezone_set('America/New_York');
        $time= date("Y/m/d h:i:s");
        $todo->createddate = $time;
        $todo->updateddate =  NULL;
        $todo->message = $_POST['message'];
        $todo->isdone = $_POST['isdone'];
        $todo->owneremail= $_POST['owneremail'];
        $todo->save();
        header("Location: index.php?page=tasks&action=all");
    }

    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {

        date_default_timezone_set('America/New_York');
        $todos= todos::findOne( $_REQUEST['id']);
        $todos->createddate = $_POST['createddate'];
        $todos->updateddate = date("Y/m/d h:i:s");
        $todos->message = $_POST['message'];
        $todos->isdone = $_POST['isdone'];
        $todos->owneremail = $_POST['owneremail'];
        $todos->save();
        header("Location: index.php?page=tasks&action=all");


    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");


    }

}
