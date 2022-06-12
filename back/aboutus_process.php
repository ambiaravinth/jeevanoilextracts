
<?php
    include_once 'db.php';

     $name = $_POST['name'];
     $msg = $_POST['msg'];
     $email    = $_POST['email'];
 
     $sql = "INSERT INTO aboutus (name,email,meassage) VALUES ('$name','$email','$msg')";
 
     if (mysqli_query($conn, $sql)) {     
        echo '<script>alert("Thank you we will reach you shortly.....")</script>';
        echo "<script> document.location='../aboutus.php' </script>";
     } 
     else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

?>