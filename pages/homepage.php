<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Final Project</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


    <?php

    session_start();

    if(key_exists('userID', $_SESSION)){

        echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
        echo '<p><a href="index.php?page=accounts&action=logout">Logout</a></p>';

    }

    else{

      echo ' 
              
 <div class="container">
 <center>
 <h3 class="col-sm-offset-"><i>Task Management</i><br></h3>
              

 <form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
    <div class="input-group">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" class="form-control" name="email" required><br/>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control" name="password" required><br/>

        <button type="submit" class="form-control">Login</button>
    <div class="input-group">
    </div>
<center>


</form>
<p>New to this page <a href="index.php?page=accounts&action=register">Create an account</a></p>

</div>
';

    }

    ?>





<script src="js/scripts.js"></script>
</body>
</html>