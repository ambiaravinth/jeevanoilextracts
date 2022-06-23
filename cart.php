<?php
    include_once 'back/db.php';
	require_once 'back/session.php';
    require_once 'back/cart_process.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">


<link rel="stylesheet" href="./css/cart.css">




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html"><img src="./images/download.jpg" alt="" width="15%" style="float: left"></a>
			<a href="index.html" class="navbar-brand" style="color: rgb(243, 112, 112); float:left ;text-align: left;">  Jeevan Solvent</a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone" ><a href="public_home.php" >Home</a></li>
				<li class="propClone"><a href="product.php">Product</a></li>
				<!-- <li class="propClone"><a href="cart.php" >Cart</a></li> -->
				<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<?php echo $_SESSION["current_username"]; ?> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li style="margin-top:4%;"><a class="dropdown-item" href="profile.php"> <img src="https://img.icons8.com/ios-glyphs/24/undefined/user--v1.png"/><span style="margin-left:10%;">My Profile</span></a></li>
                         
                          <li><hr class="dropdown-divider"></li>
                          <li style="margin-top:-4%;"><a class="dropdown-item" href="back/logout.php"><img  src="https://img.icons8.com/material-outlined/24/undefined/exit.png"/>    <span style="margin-left:10%;">Logout</span> </a></li>
                        </ul>
                      </li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 My Cart 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Cart</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
</div>
</section>

<div style="padding-left: 15%; padding-right: 15%;">
<div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="items">
  
                <?php
                    while($data = mysqli_fetch_array($user_products))
                    {
                    
                        echo "<div class=\"product\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                        <img class=\"img-fluid mx-auto d-block image\" src=\"".$data['p_img']."\" alt=\"###\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <div class=\"info\">
                                            <div class=\"row\">
                                                <div class=\"col-md-5 product-name\">
                                                    <div class=\"product-name\">
                                                        <a href=\"#\">".$data['p_name']."</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-4 quantity\">
                                                    <label for=\"quantity\">Quantity:</label><br>
                                                        
                                                        <form method=\"post\">
                                                            <input type=\"hidden\" name=\"product_id\" value=\"".$data['p_id']."\">
                                                            <input type=\"submit\" name=\"button1\" value=\"-\" />
                                                            <p1 class=\"well well-sm\">".$data['nos']."</p1>  
                                                            <input type=\"submit\" name=\"button2\" value=\"+\" />
                                                        </form>

                                                </div>
                                                <div class=\"col-md-3 price\">
                                                    <p1><b>Price</b></p1><br>
                                                    <p1>".$data['p_price']."</p1>₹<br><br>
                                                    <form method=\"post\">
                                                        <input type=\"hidden\" name=\"product_id\" value=\"".$data['p_id']."\">
                                                        <input  class=\"btn btn-danger\" type=\"submit\" name=\"button3\" value=\"Remove\"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br> ";
                    }
                ?>
                </div>
            </div>

            <?php  
                $name = $_SESSION["current_username"];
             
                if(isset($_POST['button1'])){
                    $p_id = $_POST['product_id'];
                    $sql = "SELECT * FROM products where p_id='$p_id'"; 
                    $data  = mysqli_fetch_array(mysqli_query($conn,$sql));
                    if($data) {
                        $price = $data['p_price'];
                    }
                    $sql = "SELECT nos FROM cart where p_id='$p_id' and username='$name'"; 
                    $data  = mysqli_fetch_array(mysqli_query($conn,$sql));
                    if ($data) {
                        $nos = $data['nos'];
                        if($nos > 1){
                            $nos = $data['nos']-1;
                            $price = $nos*$price;
                            $sql = "UPDATE cart SET nos='$nos', p_price='$price' where p_id='$p_id' and username='$name'";
                        }
                    }
                    mysqli_query($conn,$sql);
                    echo "<script>document.location='cart.php' </script>";
                }
                
                if(isset($_POST['button2'])){
                    $p_id = $_POST['product_id'];
                    $sql = "SELECT * FROM products where p_id='$p_id'"; 
                    $data  = mysqli_fetch_array(mysqli_query($conn,$sql));
                    if($data) {
                        $price = $data['p_price'];
                    }
                    $sql = "SELECT nos FROM cart where p_id='$p_id' and username='$name'"; 
                    $data  = mysqli_fetch_array(mysqli_query($conn,$sql));
                    if ($data) {
                        $nos = $data['nos']+1;
                        $price = $nos*$price;
                        $sql = "UPDATE cart SET nos='$nos', p_price='$price' where p_id='$p_id' and username='$name'";
                    }
                    mysqli_query($conn,$sql);
                    echo "<script>document.location='cart.php' </script>"; 
                }
                
                if(isset($_POST['button3'])){
                    $p_id = $_POST['product_id'];
                    $sql = "DELETE FROM cart where p_id='$p_id' and username='$name'"; 
                    mysqli_query($conn,$sql);
                    echo "<script>document.location='cart.php' </script>";
                }
            ?>

			<div class="col-md-12 col-lg-4">
                <div class="summary">
                    <h3 style="text-align: center;">Summary</h3>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;">Subtotal</p1>
						<p1 style="padding-left: 33%;"><?php echo $sub_price; ?></p1>
					</div>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;">Discount</p1>
						<p1 style="padding-left: 32%;"><?php echo $discount; ?></p1>
					</div>
					<hr>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;"><b>Total</b></p1>
						<p1 style="padding-left: 40%;"><?php echo $total; ?></p1>
                    </div>
					<hr>
                    <a href="https://pages.razorpay.com/pl_JcdokhFWmldgcu/view?amount=".$total.""><button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button></a> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> More energy for a better tomorrow </h1>
			</div>
		</div>
	</div>
</div>
</section>

<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with JSE
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; JEEVAN SOLVENT EXTRACTS<br/>
			
			</p>
		</div>
	</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

</body>
</html>