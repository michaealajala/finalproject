<?php

final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';

    public static function getTablename()
    {

        $tableName = 'accounts';
        return $tableName;
    }


    //to find a users tasks you need to create a method here.  Use $this->id to get the usersID For the query
    public static function findTasks()
    {

        //I am temporarily putting a findall here but you should add a method to todos that takes the USER ID and returns their tasks.
        $records = todos::findAll();
        print_r($records);
        return $records;
    }
    //add a method to compare the passwords this is where bcrypt should be done and it should return TRUE / FALSE for login



    public function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);


        return $password;

    }

    public function checkPassword($LoginPassword) {

        return password_verify($LoginPassword, $this->password);


    }


    public function validate2()
    {

        $valid = TRUE;

        //Tried to redirect users back to the profile page but I kept facing issues with the registration page
        //The registration page keeps coming up with an error message when I tried to redirect the user to the register page
      // $register_page= '<a href="index.php?page=accounts&action=edit">Back</a>';

        if($this->fname == '') {
            $valid = FALSE;
            echo 'please enter a valid first name<br/>';

        }
        
        if($this->lname == '') {
            $valid = FALSE;
            echo 'please enter a valid last name<br/>';
        }
        if($this->email == '') {
            $valid = FALSE;
            echo 'please enter a valid email<br/>';
        }
        
        if(strlen($this->password) <6 ) {
            $valid = FALSE;
            echo 'please at least 6 characters for your password<br/>.$register_page';
        }
        
        


        return $valid;

    }



}


?>
