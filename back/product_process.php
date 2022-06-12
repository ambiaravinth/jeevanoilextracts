<?php
    include_once 'db.php';
    include_once 'session.php';

    $p_id = $_POST['product'];
    $name = $_SESSION["current_username"];

    $sql = "SELECT price FROM products where p_id='$p_id'"; 
    $query = mysqli_query($conn,$sql);
    
    $data  = mysqli_fetch_array($query);
    if($data) {
        $price = $data['price'];
    }

    $sql = "SELECT nos FROM cart where p_id='$p_id' and username='$name'"; 
    $query = mysqli_query($conn,$sql);
    
    $data  = mysqli_fetch_array($query);
    if($data) {
        $nos = $data['nos']+1;
        $sql = "UPDATE cart SET nos='$nos' where p_id='$p_id' and username='$name'";
    }elseif($data == null){
        $nos=1;
        $sql = "INSERT INTO cart (p_id,nos,price,username) VALUES ('$p_id','$nos','$price','$name')";
    }
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Added to your cart'); document.location='../product.php' </script>";
    } 
    else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

?>