<?php
	 include_once 'back/db.php';
   require_once 'back/session.php';
     require_once 'back/cart_process.php';
     $delivery=$_SESSION["current_username"];
     $sql = "SELECT * FROM users where username='$delivery'"; 
     $query = mysqli_query($conn,$sql);
     
     $data  = mysqli_fetch_array($query);
     $email = $data['email'];
     $number = $data['mobile_no'];
     $name = $data['name'];
     $address_no = $data['address'];
     $username = $data['username'];
     $password = $data['password'];
     $pan = $data['pan_no'];
     $gst = $data['gst_no'];
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
        <li class="propClone"><a href="order.php" >Orders</a></li>
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
						 Profile 
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
			<h1 class="text-center latestitems">Profile</h1>
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





<!-- PROFILE FORM -->




<div class="row" style="margin-left:20%;">
      <div class="col-6 offset-3">
        <div class="container mt-5 card bg-white p-3">
          <form class="signup-form"  method="post">
   
            <div class="row">
            <div class="col-md-4">
              <label for="fname" class="form-label">Username :</label>
              <input type="text" class="form-control" id="name" name="user_name" value="<?php echo "$username" ?>" readonly/>
            </div>
            <div class="col-md-4">
              <label for="name" class="form-label">Password :</label>
              <input
                type="text"
                class="form-control"
                id="pass"
                name="password"
                value="<?php echo "$password" ?>"
                readonly />
            </div>
        </div>

        




		<div class="row" style="margin-top:2%;" >
            <div class="col-md-4">
              <label for="names" class="form-label">Name:</label>
              <input type="text" class="form-control" id="names" name="name1" value="<?php echo "$name" ?>" readonly/>
            </div>
            <div class="col-md-4">
              <label for="pan" class="form-label">PAN NO :</label>
              <input
                type="text"
                class="form-control"
                id="pan_no"
                name="pan"
                value="<?php echo "$name" ?>"
                readonly/>
            </div>
        </div>


		<div class="row" style="margin-top:2%;">
            <div class="col-md-4">
              <label for="email" class="form-label">Email :</label>
              <input
                type="email"
                class="form-control"
                id="email"
                value="<?php echo "$email" ?>"
                placeholder="abc@gmail.com"
                name="Email_ID"
                readonly/>
            </div>


			<div class="col-md-4">
              <label for="name" class="form-label">GST NO:</label>
              <input
                type="text"
                class="form-control"
                id="gst"
                value="<?php echo "$gst" ?>"
                name="gstno"
                readonly/>
            </div>
            </div>
   
            <div class="row" style="margin-top:2%;">
            
       
            <div class="col-md-4">
              <label for="mobile" class="form-label">Mobile number :</label>
              <input
                type="text"
                class="form-control"
                id="mobile"
                value="<?php echo "$number" ?>"
                name="Mobile_No"
                readonly/>
            </div>


			<div class="col-md-4">
              <label for="address" class="form-label">Address :</label>
              <input
                type="textarea"
                class="form-control"
                id="address"
                value="<?php echo "$address_no" ?>"
                name="adrs"
                readonly
              />
            </div>



        </div>
           
         
            

            <div class="col-12" style="margin-top:2%; margin-left:15% ">
                <br>
              <button  id="qwe" class="btn btn-primary">Edit</button>
			  <button onclick="myfun()" class="btn btn-primary" style="margin-left:25%;">save</button>
            </div>
          </form>
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


<!-- <script>
  function updateform()
  {
    document.getElementById("pass").removeAttribute("readonly"); 

  }
</script> -->



<script>
document.getElementById("qwe").addEventListener("click", function(event){
  event.preventDefault()
  document.getElementById("name").removeAttribute("readonly");
  document.getElementById("pass").removeAttribute("readonly");
  document.getElementById("names").removeAttribute("readonly");
  document.getElementById("pan_no").removeAttribute("readonly");
  document.getElementById("email").removeAttribute("readonly");
  document.getElementById("gst").removeAttribute("readonly");
  document.getElementById("mobile").removeAttribute("readonly");
  document.getElementById("address").removeAttribute("readonly");

});


</script>

<script>

function myfun()
{

  
  document.getElementById("name").setAttribute("readonly");
  document.getElementById("pass").setAttribute("readonly");
  document.getElementById("names").setAttribute("readonly");
  document.getElementById("pan_no").setAttribute("readonly");
  document.getElementById("email").setAttribute("readonly");
  document.getElementById("gst").setAttribute("readonly");
  document.getElementById("mobile").setAttribute("readonly");
  document.getElementById("address").setAttribute("readonly");

}
    



</script>

</body>
</html>