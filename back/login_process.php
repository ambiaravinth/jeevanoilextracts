<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php
    include_once 'db.php';
    include_once 'session.php';
    $ip_username = $_POST['ip_username'];
    $ip_password = $_POST['ip_password'];
 
    $sql = "SELECT * FROM users where username='$ip_username' and password='$ip_password'"; 
    $query = mysqli_query($conn,$sql);
    
    $data  = mysqli_fetch_array($query);
    if($data) {
        $username = $data['username'];
        $password = $data['password'];
        $usertype = $data['type'];

        $_SESSION["current_username"] = $username;
        $_SESSION["current_usertype"] = $usertype;
        
        if($usertype == "admin"){
            if($username=="abiabi"){
                echo "<script> alert('Login Succesfull Admin'); document.location='../table.php' </script>";
            }else{
                echo "<script> alert('Login Succesfull Admin'); document.location='../admin.php' </script>";
            }    
        }
        else{
            echo "<script> alert('Login Succesfull'); document.location='../public_home.php' </script>";
        }
    }
    else {
        echo '<script type="text/javascript">sweetAlert("Failed!","Kindly try again","error")</script>';
    }
?>