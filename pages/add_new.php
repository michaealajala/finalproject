<?php
include 'bootstrap_header.php';
?>
<center>
    <form action="index.php?page=tasks&action=create" method="POST" >
        <div class="input-group" style="text-align:center">

            Title: <input type="text" class="form-control" name="message" placeholder="Enter Message" ><br>
            Complete: <input type="text" class="form-control" name="isdone" placeholder="Enter 0 or 1" ><br>
            Email: <input type="email" class="form-control" name="owneremail" placeholder="Enter Email" ><br>

            <input type="submit" class="btn btn-primary" value="Submit form">
        </div>
    </form>

    <p><a href="index.php?page=tasks&action=all">Back</a></p>
</center>
<?php
include 'bootstrap_footer.php';
?>