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

        if (strlen($password) <6 ){
            $this->password_validation();
            exit;

        }else {

            $password = password_hash($password, PASSWORD_DEFAULT);

        }
        return $password;

    }

    public function checkPassword($LoginPassword) {

        return password_verify($LoginPassword, $this->password);


    }

    //created a redirect link for the user to click on when they encounter any validation

    public function account_redirect(){

        if ($this->id!=''){
            echo' <a href="index.php?page=accounts&action=edit">Back</a> to my profile<br>';
        }else{
            echo '<a href="index.php?page=accounts&action=register" >Back</a> to Registration Page<br>';
        }
    }

    public function password_validation(){

        echo 'Please at least 6 characters for your password<br/>';
        $this->account_redirect();
    }


    public function validate2()
    {

        $valid = TRUE;

        if($this->fname == '') {
            $valid = FALSE;
            echo 'Please enter a valid first name<br/>';
            $this->account_redirect();

        }
        
        if($this->lname == '') {
            $valid = FALSE;
            echo 'Please enter a valid last name<br/>';
            $this->account_redirect();

        }
//        if((strlen($this->password)) < 6 ) {
//            $valid = FALSE;
//
//            echo 'Please at least 6 characters for your password<br/>';
//            $this->account_redirect();
//        }
        if($this->email == '') {
            $valid = FALSE;
            echo 'Please enter a valid email<br/>';
            $this->account_redirect();
        }
        


        if(!($this->gender=="Male"||$this->gender=="Female"||$this->gender=="Other")) {
            $valid = FALSE;

            echo 'Please Enter Male, Female or Other<br/>';
            $this->account_redirect();
        }

        return $valid;

    }



}


?>
