<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */

class accountsController extends http\controller
{

    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }

    public static function register()
    {
        self::getTemplate('register');
    }

    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);

        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = $user->setPassword($_POST['password']);
            $user->save();

            header("Location: index.php?page=homepage");

        } else {
            
            $existinguser='<h1>Already registered </h1></br>'.'Click <a href= "index.php?page=homepage">here </a> to sign-in';
            self::getTemplate('existinguser', $existinguser);
        }
    }

    public static function edit()
    {
        session_start();
        $userId= $_SESSION['userID'];
        $record = accounts::findOne($userId);

        self::getTemplate('edit_account', $record);
    }

    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        header("Location: index.php?page=tasks&action=all");

    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }

    public static function login()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);

        if ($user == FALSE) {
            echo 'user not found';
        } else {
            if($user->checkPassword($_POST['password']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $user->id;
                  header("Location: index.php?page=tasks&action=all&id=".$user->id);
            } else {

                echo '<center><h3>The password you entered is incorrect, please click <a href="index.php">here</a> to try again</h3></center>';
            }
        }
    }

        public static function logout()
        {
        session_start();
        unset($_SESSION['userID']);
        header('Location: index.php');

        }


}
