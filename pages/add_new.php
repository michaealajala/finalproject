<?php
include 'bootstrap_header.php';
?>
<center>
    <form action="index.php?page=tasks&action=create" method="POST" >
        <div class="input-group" style="text-align:center">

            Activity Name: <input type="text" class="form-control" name="message" placeholder="Enter Activity Name" ><br>
            Venue Name: <input type="text" class="form-control" name="isdone" placeholder="Enter Venue Name" ><br>
            Email: <input type="email" class="form-control" name="owneremail" placeholder="Enter Email" ><br>

            <input type="submit" class="btn btn-primary" value="Submit form">
        </div>
    </form>

    <p><a class="back_button" href="index.php?page=tasks&action=all">Back</a></p>
</center>
<?php
include 'bootstrap_footer.php';
?>