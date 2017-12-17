<?php
include 'bootstrap_header.php';
?>
<center>
    <form action="index.php?page=tasks&action=create" method="POST" >
        <div class="input-group" style="text-align:center">

            Title: <input type="text" class="form-control" name="message" placeholder="Enter Message" required><br>
            Complete: <input type="text" class="form-control" name="isdone" placeholder="Enter 0 or 1" ><br>
            Email: <input type="text" class="form-control" name="owneremail" placeholder="Enter Email" required><br>
<!--            Created Date: <input type="text" class="form-control" name="createddate" value="--><?php //echo $data->createddate; ?><!--" readonly><br>-->

            <input type="submit" value="Submit form">
        </div>
    </form>

    <p><a href="index.php?page=tasks&action=all">Back</a></p>
</center>
<?php
include 'bootstrap_footer.php';
?>