<?php
include 'bootstrap_header.php';
?>

<center>
    <form action="index.php?page=tasks&action=create" method="POST">
        <div class="input-group">

            Title: <input type="text" class="form-control" name="message" value="enter task message"><br>
            Complete: <input type="text" class="form-control" name="isdone" value="complete?"><br>
            Email: <input type="text" class="form-control" name="owneremail" value="owner email"><br>
            Last Updated: <input type="text" class="form-control" name="duedate" value="due date"><br>

            <input type="submit" value="Submit form">
        </div>
    </form>

    <p><a href="index.php?page=tasks&action=all">Back</a></p>

</center>

<?php
include 'bootstrap_footer.php';
?>