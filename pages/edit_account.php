<?php
include 'bootstrap_header.php';
?>

<center>
    <h3>Hi!  <?php echo $data->fname; ?></h3>

    <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    <div class="input-group">
        First name: <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"><br>
        Last name: <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>"><br>
        Email: <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>"><br>
        Phone: <input type="tel" minlength="10" class="form-control" name="phone" value="<?php echo $data->phone; ?>"><br>
        Birthday: <input type="date" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>"><br>
        Gender: <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>"><br>
    </div>

    <input type="submit" class="btn btn-primary"  value="Submit form">
</form>

<p><a href="index.php?page=tasks&action=all">Back</a></p>

</center>';

<?php
include 'bootstrap_footer.php'
?>

