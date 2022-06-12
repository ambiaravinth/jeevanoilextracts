
<?php
    include_once 'db.php';

     $username = $_POST['ip_username'];
     $password = $_POST['ip_password'];
     $email    = $_POST['ip_email'];
 
     $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
 
     if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Registration Successfull please login...")</script>';
        
        echo "<script> document.location='../login.php' </script>";
     } 
     else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

?>
