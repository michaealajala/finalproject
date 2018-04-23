<?php
include 'bootstrap_header.php';
?>

    <form action="index.php?page=tasks&action=store&actions=<?php echo $data->actions; ?>" method="post">


            <div class="input-group">

                Activity Name: <input type="text" class="form-control" name="activities" value="<?php echo $data->activities; ?>"><br>
                Venue: <input type="text" class="form-control" name="venues" value="<?php echo $data->venues; ?>"><br>
                Create Date: <input type="text" class="form-control" name="createddate" value="<?php echo $data->createddate; ?>" readonly><br>
                Last Updated: <input type="text" class="form-control" name="updateddate" value="<?php echo $data->updateddate; ?>" readonly><br>
                Email: <input type="text" class="form-control" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>

                <input type="submit" class="btn btn-primary" value="Submit form">
    </form>

    <form action="index.php?page=tasks&action=delete&actions=<?php echo $data->actions; ?> " method="post" id="form1">
        <br> <button type="submit" form="form1" class="btn btn-danger" value="delete">Delete</button>
    </form>
    </div>
    <p><a class="back_button" href="index.php?page=tasks&action=all" >Back</a></p>

<?php
include 'bootstrap_footer.php';
?>