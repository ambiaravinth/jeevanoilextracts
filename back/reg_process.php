<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php
    include_once 'db.php';

     $username  = $_POST['ip_username'];
     $password  = $_POST['ip_password'];
     $email     = $_POST['ip_email'];
     $mobile_no = $_POST['ip_mobile'];
     $address   = $_POST['ip_address'];
     $pan_no    = $_POST['ip_pan'];
     $gst_no    = $_POST['ip_gst'];
     $name      = $_POST['ip_name'];
 
     $sql = "INSERT INTO users (username,email,password,name,gst_no,pan_no,address,mobile_no) VALUES ('$username','$email','$password','$name','$gst_no','$pan_no','$address','$mobile_no')";
 
     if (mysqli_query($conn, $sql)) {
      echo '<script type="text/javascript">sweetAlert("Registered!","Successfully added your Account ","success")</script>';
        
        echo "<script> document.location='../login.php' </script>";
     } 
     else {
      echo '<script type="text/javascript">sweetAlert("Failed!","Kindly retry after sometime ","error")</script>';
        
     }

?>
