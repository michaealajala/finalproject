<?php
include 'bootstrap_header.php';
?>

<div class="container">
<div class="row">
    <h3><a  class="col-sm-2 btn btn-info col-md-offset-1" href="index.php?page=tasks&action=create" >Add Activity</a></h3>
    <h3><a  class="col-sm-2 btn btn-info col-md-offset-2"  href="index.php?page=accounts&action=edit">Profile</a></h3>
    <h3><a class="col-sm-2 btn btn-info col-md-offset-2"  href="index.php?page=accounts&action=logout">Logout</a></h3>
</div>

<?php
if ($data==false){

    echo '<p> You do not have any tasks yet. Click on the link above to create tasks </p>';
} else{

    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>

</div>

<?php
include 'bootstrap_footer.php';
?>
