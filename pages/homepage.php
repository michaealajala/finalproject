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
</head>

<body>


    <?php

    session_start();

    if(key_exists('userID', $_SESSION)){

        echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
        echo '<p><a href="index.php?page=accounts&action=logout">Logout</a></p>';

    }

    else{

      echo ' <h1>Welcome</h1>
              <p>Sign in </p>
 <form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br/>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br/>

        <button type="submit">Login</button>
    </div>


</form>
<p>New to this page <a href="index.php?page=accounts&action=register">Create an account</a></p>';

    }

    ?>





<script src="js/scripts.js"></script>
</body>
</html>