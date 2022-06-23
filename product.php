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
			<a href="#"><img src="./images/download.jpg" alt="" width="15%" style="float: left"></a>
			<a href="#" class="navbar-brand" style="color: rgb(243, 112, 112); float:left ;text-align: left;">  Jeevan Solvent</a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone" ><a href="public_home.php" >Home</a></li>
				<li class="propClone"><a href="product.php">Product</a></li>
				<li class="propClone"><a href="cart.php" >Cart</a></li>
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
						 Product 
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
			<h1 class="text-center latestitems">Products</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>

	<!-- ROW 1 PRODUCTS -->
	<div class="row">
		
		<div class="col-md-4">
			<div class="productbox">
				<div class="card" style="width:100%;">
					<img src="./images/coco_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made from all natural 
						ingredients its easy to use, buy yours online today.</p>
					
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="1001">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				  </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="productbox">
				<div class="card" style="width:100%;">
					<img src="./images/neem_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="2001">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				  </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="productbox">	
				<div class="card" style="width:100%;">
					<img src="./images/rice_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					 
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="3001">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				  </div>
			</div>
		</div>
	</div>

	<!-- ROW 2 PRODUCTS -->
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">
				
				<div class="card" style="width:100% ;">
					<img src="./images/coco_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					 
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="1002">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="productbox">
				<div class="card" style="width:100% ;">
					<img src="./images/neem_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					 
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="2002">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="productbox">	
				<div class="card" style="width:100%;">
					<img src="./images/rice_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					  
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="3002">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				  </div>
			</div>
		</div>
	</div>

<!-- ROW 3 PRODUCTS -->
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">				
				<div class="card" style="width:100% ;">
					<img src="./images/coco_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					  
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="1003">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="productbox">
				<div class="card" style="width:100% ;">
					<img src="./images/neem_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
		
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="2003">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				</div>
			</div>	
		</div>

		<div class="col-md-4">
			<div class="productbox">
				<div class="card" style="width:100% ;">
					<img src="./images/rice_img.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">Coconut Oil</h5>
					  <p class="card-text">Our range of Coconut Oils are 100% organic and versatile to use, made 
						from all natural ingredients its easy to use, buy yours online today.</p>
					
					  <form action="back/product_process.php" method="POST">
						<input type="hidden" name="product" value="3003">
						<input type="submit" class="btn btn-primary" value="Add to cart">
					  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

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