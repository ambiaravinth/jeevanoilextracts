<?php
	require_once 'back/session.php';
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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
<link rel="stylesheet" href="./css/cart.css">
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
				<li class="propClone"><a href="back/logout.php" > <?php echo $_SESSION["current_username"]; ?> </a></li>
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
                    
					<div class="product">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid mx-auto d-block image" src="./images/coco_img.jpg" alt="###">
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-5 product-name">
                                            <div class="product-name">
                                                <a href="#">Lorem Ipsum dolor</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                            <label for="quantity">Quantity:</label><br>
                                            <button style="margin: 5%;">-</button><p1 class="well well-sm">1</p1><button style="margin: 5%;">+</button>
                                        </div>
                                        <div class="col-md-3 price">
											<p1><b>Price</b></p1><br>
                                            <p1>120</p1>₹<br><br>
											<a href="#" style="color: red;">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<br>
                    
					<div class="product">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid mx-auto d-block image" src="./images/coco_img.jpg" alt="###">
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-5 product-name">
                                            <div class="product-name">
                                                <a href="#">Lorem Ipsum dolor</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                            <label for="quantity">Quantity:</label>
                                            <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-3 price">
                                            <span>$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<br>
                    
					<div class="product">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid mx-auto d-block image" src="./images/coco_img.jpg" alt="###">
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-5 product-name">
                                            <div class="product-name">
                                                <a href="#">Lorem Ipsum dolor</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                            <label for="quantity">Quantity:</label>
                                            <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-3 price">
                                            <span>$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
			<div class="col-md-12 col-lg-4">
                <div class="summary">
                    <h3 style="text-align: center;">Summary</h3>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;">Subtotal</p1>
						<p1 style="padding-left: 33%;">$360</p1>
					</div>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;">Discount</p1>
						<p1 style="padding-left: 32%;">$0</p1>
					</div>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;">Shipping</p1>
						<p1 style="padding-left: 32%;">$0</p1>
					</div>
					<hr>
                    <div class="summary-item">
						<p1 style="padding-left: 20%;"><b>Total</b></p1>
						<p1 style="padding-left: 40%;">$360</p1>
                    </div>
					<hr>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
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