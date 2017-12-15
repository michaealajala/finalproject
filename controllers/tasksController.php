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
        self::getTemplate('show_task', $record);
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

    public static function create()
    {
       $todo = new todo();
        session_start();

        date_default_timezone_set('America/Los_Angeles');
        $todo->ownerid=$_SESSION['userID'];
        $todo->createddate = date("Y/m/d") ;
        $todo->duedate = $_POST['duedate'];
        $todo->message = $_POST['message'];
        $todo->isdone = $_POST['isdone'];
        $todo->owneremail= $_POST['owneremail'];
        $todo->duedate= $_POST['duedate'];
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

        $todos= todos::findOne( $_REQUEST['id']);
        $todos->createddate = $_POST['createddate'];
        $todos->duedate = $_POST['duedate'];
        $todos->message = $_POST['message'];
        $todos->isdone = $_POST['isdone'];
        $todos->owneremail = $_POST['owneremail'];

        $todos->save();
        header("Location: index.php?page=tasks&action=all");


    }


    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");


    }

}