<script src="../js/sweetalert.min.js"></script>
<script> swal("Registration Sucessfull!", "Please login", "success"); </script>
<?php
    include_once 'db.php';

     $username = $_POST['ip_username'];
     $password = $_POST['ip_password'];
     $email    = $_POST['ip_email'];
 
     $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
 
     if (mysqli_query($conn, $sql)) {
        echo "<script> document.location='../login.php' </script>";
     } 
     else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

?>
