<?php
include_once 'db.php';
require_once 'session.php';

$username = $_SESSION["current_username"];

$sql = "SELECT * FROM cart WHERE username ='$username'";
$user_products = mysqli_query($conn,$sql);

$sql = "SELECT SUM(p_price) FROM cart WHERE username ='$username'";
$data  = mysqli_fetch_array(mysqli_query($conn,$sql));
if ($data) {
    $sub_price = $data['SUM(p_price)'];
}
$sql = "SELECT discount FROM users WHERE username ='$username'";
$data  = mysqli_fetch_array(mysqli_query($conn,$sql));
if ($data) {
    $discount = $data['discount'];
}
$total=($sub_price-(($sub_price/100)*$discount));


?>