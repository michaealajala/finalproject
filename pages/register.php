<?php
include 'bootstrap_header.php';
?>
    <center>
    <div class="input-group">
<form action="index.php?page=accounts&action=register" method="post" >
    First name: <input type="text" class="form-control" name="fname" ><br>
    Last name: <input type="text"  class="form-control" name="lname" ><br>
    Email: <input type="email" class="form-control" name="email" ><br>
    Phone: <input type="text" class="form-control" name="phone"><br>
    Birthday: <input type="date" class="form-control" name="birthday"><br>
    Gender: <input type="text" class="form-control" name="gender"><br>
    Password: <input type="password" class="form-control" name="password"><br>
    <input type="submit" class="form-control" value="Submit form">
</form>
    </div>
        <p><a href="index.php">Back to the login page</a></p>
    </center>



<?php
include 'bootstrap_footer.php';
?>