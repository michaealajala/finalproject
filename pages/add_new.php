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

<center>
    <form action="index.php?page=tasks&action=create" method="POST">
        <div class="input-group">

            Title: <input type="text" class="form-control" name="message" value="enter task message"><br>
            Complete: <input type="text" class="form-control" name="isdone" value="complete?"><br>
            Email: <input type="text" class="form-control" name="owneremail" value="create date"><br>
            Last Updated: <input type="text" class="form-control" name="duedate" value="due date"><br>

            <input type="submit" value="Submit form">
        </div>
    </form>

</center>




<script src="js/scripts.js"></script>
</body>
</html>