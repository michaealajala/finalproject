<?php
include 'bootstrap_header.php'
?>

 <div class="container">
 <center>
 <h2 class="col-sm-offset-"><i>Welcome to Your Task Management Page</i><br></h2>

     <p class="sub_section"><i>Please sign in to get started</i><br></p>

 <form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
    <div class="input-group">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" class="form-control" name="email" required><br/>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control" name="password" required><br/>
        <br>
        <button type="submit" class="form-control">Login</button>
    <div class="input-group">
    </div>
<center>


</form>
<p>New to this page <a href="index.php?page=accounts&action=register">Create an account</a></p>

</div>

<?php
include 'bootstrap_footer.php';
?>