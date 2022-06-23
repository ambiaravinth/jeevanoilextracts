
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<script src="alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="alert/dist/sweetalert.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
			<li class="propClone" ><a href="index.php" >Home</a></li>
				<!--  <li class="propClone"><a href="###">Product</a></li>
				<li class="propClone"><a href="###" >Checkout</a></li> -->
				<li class="propClone"><a href="aboutus.php" >About us</a></li>
				<li class="propClone"><a href="login.php" >Login</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 User Details
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
			<h1 class="text-center latestitems">Sign Up</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			
			<form method="post" action="back/reg_process.php" id="contactform" >
				<div class="form" style="margin-left: 20%;margin-right: 20%;">
					<input type="text" name="ip_username" placeholder="Username">
					<input type="text" name="ip_name" placeholder="Name">
					<input type="text" name="ip_mobile" placeholder="Mobile Number">
					<input type="email" name="ip_email" placeholder="Email Id" >
					<input type="text" name="ip_pan" placeholder="PAN number">
					<input type="text" name="ip_gst" placeholder="GST number">
					<textarea name="ip_address" placeholder="Address"></textarea>
                    <input type="password" name="ip_password" placeholder="New Password">
                    <input type="text" name="userpassword" placeholder="Confirm Password">
					<input type="submit" onclick="JSalert()"class="clearfix btn">
					<!--<input type="submit" id="submit" class="clearfix btn" value="Register "> -->                 
				</div>
			</form>
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
<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script src="js/validate.js"></script>
</body>
</html>