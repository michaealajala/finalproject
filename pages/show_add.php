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
</head>

<body>

<form action="index.php?page=tasks&action=save" method="POST">

    Title: <input type="text" name="message" value="enter task message"><br>
    Complete: <input type="text" name="isdone" value="complete?"><br>
    Create Date: <input type="text" name="createddate" value="create date"><br>
    Last Updated: <input type="text" name="duedate" value="due date"><br>

    <input type="submit" value="Submit form">
</form>



<script src="js/scripts.js"></script>
</body>
</html>