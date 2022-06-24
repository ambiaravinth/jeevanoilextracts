<?php
include_once 'db.php';

$sql = "SELECT username FROM users";
$data_users  = mysqli_query($conn,$sql);

?>