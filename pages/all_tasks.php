<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
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
<div class="container">
<div class="row">
    <h3><a  class="col-sm-2 btn btn-info col-md-offset-1" href="index.php?page=tasks&action=create" >Add New</a></h3>

    <h3><a  class="col-sm-2 btn btn-info col-md-offset-2"  href="index.php?page=accounts&action=edit">Profile</a></h3>
    <h3><a class="col-sm-2 btn btn-info col-md-offset-2"  href="index.php?page=accounts&action=logout">Logout</a></h3>

</div>


<?php
//this is how you print something

if ($data==false){

    echo '<p> You do not have any tasks yet. Click on the link above to create tasks </p>';
} else{

    print utility\htmlTable::genarateTableFromMultiArray($data);
}


?>




</div>

<script src="js/scripts.js"></script>
</body>
</html>