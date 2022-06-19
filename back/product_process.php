<?php
    include_once 'db.php';
    include_once 'session.php';

    $p_id = $_POST['product'];
    $name = $_SESSION["current_username"];

    $sql = "SELECT * FROM products where p_id='$p_id'"; 
    $query = mysqli_query($conn,$sql);
    
    $data  = mysqli_fetch_array($query);
    if($data) {
        $price = $data['p_price'];
        $p_name = $data['p_name'];
        $p_img = $data['p_img'];
    }

    $sql = "SELECT nos FROM cart where p_id='$p_id' and username='$name'"; 
    $query = mysqli_query($conn,$sql);
    
    $data  = mysqli_fetch_array($query);
    if($data) {
        $nos = $data['nos']+1;
        $price = $nos*$price;
        $sql = "UPDATE cart SET nos='$nos', p_price='$price' where p_id='$p_id' and username='$name'";
    }elseif($data == null){
        $nos=1;
        $sql = "INSERT INTO cart (p_id,nos,p_price,username,p_name,p_img) VALUES ('$p_id','$nos','$price','$name','$p_name','$p_img')";
    }
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Added to your cart'); document.location='../product.php' </script>";
    } 
    else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
?>