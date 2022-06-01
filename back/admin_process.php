<?php

    include_once 'db.php';
	$name   = $_POST['name'];
    $msg    = $_POST['message'];
    date_default_timezone_set('Asia/Kolkata');
    $today  = date('d-m-y h:i:s');
    $result = "insert into workdata (date,name,commands) values ('$today','$name','$msg')";	
    $sql = "INSERT INTO workdata (date,name,commands) VALUES ('$today','$name','$msg')";
 
     if (mysqli_query($conn, $sql)) {
        echo "<script> document.location='../table.php' </script>";
     } 
     else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     } 
?>