<?php
include 'bootstrap_header.php';
?>

    <form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">

        <center>
            <div class="input-group">

                Title: <input type="text" class="form-control" name="message" value="<?php echo $data->message; ?>"><br>
                Complete: <input type="text" class="form-control" name="isdone" value="<?php echo $data->isdone; ?>"><br>
                Create Date: <input type="text" class="form-control" name="createddate" value="<?php echo $data->createddate; ?>" readonly><br>
                Last Updated: <input type="text" class="form-control" name="updateddate" value="<?php echo $data->updateddate; ?>" readonly><br>
                Email: <input type="text" class="form-control" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>

                <input type="submit" class="btn btn-primary" value="Submit form">
    </form>

    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
        <br> <button type="submit" form="form1" value="delete">Delete</button>
    </form>
    </div>
    <p><a href="index.php?page=tasks&action=all" >Back</a></p>
    </center>
<?php
include 'bootstrap_footer.php';
?>