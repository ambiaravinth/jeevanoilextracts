<?php
include_once 'db.php';
require_once 'session.php';

$username = $_SESSION["current_username"];

$sql = "SELECT * FROM users WHERE username ='$username'";
$data  = mysqli_fetch_array(mysqli_query($conn,$sql));
if ($data) {
    $data_username  = $data['username'];
    $data_password  = $data['password'];
    $data_name      = $data['name'];
    $data_pan_no    = $data['pan_no'];
    $data_email     = $data['email'];
    $data_gst_no    = $data['gst_no'];
    $data_mobile_no = $data['mobile_no'];
    $data_address   = $data['address'];
}

?>