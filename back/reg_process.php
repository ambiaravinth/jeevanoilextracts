<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php
    include_once 'db.php';

     $username = $_POST['ip_username'];
     $password = $_POST['ip_password'];
     $email    = $_POST['ip_email'];
 
     $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
 
     if (mysqli_query($conn, $sql)) {
      echo '<script type="text/javascript">sweetAlert("Registered!","Successfully added your Account ","success")</script>';
        
        echo "<script> document.location='../login.php' </script>";
     } 
     else {
      echo '<script type="text/javascript">sweetAlert("Failed!","Kindly retry after sometime ","error")</script>';
        
     }

?>
