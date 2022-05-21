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
        
        if(!$username){
            echo "<script> alert('login Succesfull admin'); document.location='../#############' </script>";    
        }else{
            echo "<script> alert('login Succesfull public'); document.location='../public_home.php' </script>";
        }
    }else {
        echo "<script> alert('Login Unsuccesfull please login again'); document.location='../login.php' </script>";
    }

?>