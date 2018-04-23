<?php
include 'bootstrap_header.php';
?>

    <div class="input-group">
<form action="index.php?page=accounts&action=register" method="post"  style="color: black;">
    First name: <input type="text"  placeholder="First name" class="form-control" name="fname" ><br>
    Last name: <input type="text"  placeholder="Last name" class="form-control" name="lname" ><br>
    NJIT Email(Username): <input type="email" placeholder="Email address" class="form-control" name="email" ><br>
    Phone: <input minlength="10" type="text" placeholder="Phone number" class="form-control" name="phone"><br>
    Birthday: <input type="date" class="form-control" placeholder="Enter birthday date" name="birthday"><br>
    Gender: <input type="text" class="form-control" placeholder="Male, Female or Others" name="gender"><br>
    Password: <input  type="password" placeholder="Password" class="form-control" name="password"><br>
    <input type="submit" class="btn btn-primary" value="Submit form">
</form>
    </div>
        <p ><a class="back_button"href="index.php">Back to the login page</a></p>




<?php
include 'bootstrap_footer.php';
?>