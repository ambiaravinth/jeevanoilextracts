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
			<a href="index.html"><img src="./images/download.jpg" alt="" width="15%" style="float: left"></a>
			<a href="index.html" class="navbar-brand" style="color: rgb(243, 112, 112); ">Jeevan Solvent</a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="admin_home.php" >Home</a></li>
				<li class="propClone"><a href="sales_rip.php">Sales</a></li>
				<li class="propClone"><a href="stocks_manage.php" >Stocks</a></li>
				<li class="propClone"><a href="product_manage.php" >Products</a></li>
                <li class="propClone"><a href="meassage.php" >Meassges</a></li>
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
				<div class="text-homeimage">
					<div class="maintext-image"  data-scrollreveal="enter bottom over 1.7s after 0.0s" >
						 Increase Digital Sales
					</div>
					<div class="subtext-image"  data-scrollreveal="enter bottom over 1.7s after 0.0s" >
						 Boost health with JSE
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>