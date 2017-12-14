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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>

<body>


<center>
    <h3>Hi!  <?php echo $data->fname; ?></h3>

    <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    <div class="input-group">
        First name: <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"><br>
        Last name: <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>"><br>
        Email: <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>"><br>
        Phone: <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>"><br>
        Birthday: <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>"><br>
        Gender: <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>"><br>
    </div>

    <input type="submit" class="btn btn-default navbar-btn"  value="Submit form">
</form>

<p><a href="index.php?page=tasks&action=all">Back</a></p>

</center>



<script src="js/scripts.js"></script>
</body>
</html>