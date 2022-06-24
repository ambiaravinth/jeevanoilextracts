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
				<li class="propClone" ><a href="admin1.html" >Home</a></li>
				<!--  <li class="propClone"><a href="###">Product</a></li>
				<li class="propClone"><a href="###" >Checkout</a></li> -->
                <li class="propClone"><a href="users.html" >View Users</a></li>
                <li class="propClone"><a href="product_list.html" >Manage Products</a></li>


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
						Products List 
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
			<h1 class="text-center latestitems">Products List</h1>
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



<!-- PRODUCTS TABLE -->





<div class="row" style="margin-left:15%;">
    <div class="col-md-10">

        <table class="table table-hover" >
            <thead>
              <tr  class="bg-primary"  >
                <th scope="col">#</th>
                <th scope="col">ProductID</th>
                <th scope="col">Productname</th>
                <th scope="col">Price</th>
                <th scope="col" >Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>pq12</td>
                <td>Rice Bran oil</td>
                <td>150</td>
                <td><button class="btn btn-warning"><i class="fa fa-trash"></i><span style="margin-left:15% ;">Remove</span></button></td>
              
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>hg45</td>
                <td>coconut oil</td>
                <td>100</td>
                <td><button class="btn btn-warning"><i class="fa fa-trash"></i><span style="margin-left:15% ;">Remove</span></button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>we23</td>
                <td>Neem Oil</td>
                <td>250</td>
                <td><button class="btn btn-warning"><i class="fa fa-trash"></i><span style="margin-left:15% ;">Remove</span></button></td>
              </tr>
            </tbody>
          </table>
      

        <button id="btn" class="btn btn-primary" style="margin-left:40%;">Add New Product</button> 
        <!-- <form id="form">
            <input type="text" />
            <input type="text" />
            <input type="text" />
          </form> -->


        <form class="signup-form"  method="post" id="form" style="margin-left:20%;display: none;">
   
            <div class="row">
            <div class="col-md-4">
              <label for="pid" class="form-label">ProductID:</label>
              <input type="text" class="form-control" id="name" name="pid"  />
            </div>
            <div class="col-md-4">
              <label for="name" class="form-label">Product Name:</label>
              <input
                type="text"
                class="form-control"
                id="pname"
                name="pname"
                 />
            </div>
        </div>

        




		<div class="row" style="margin-top:2%;" >
            <div class="col-md-4">
              <label for="price" class="form-label">Price:</label>
              <input type="text" class="form-control" id="price" name="cost" />
            </div>
            <div class="col-md-4">
              <label for="pan" class="form-label">Product Image URL:</label>
              <input
                type="url"
                class="form-control"
                id="img"
                name="image"
                />
            </div>
        </div>


	
   
          
           
         
            

            <div class="col-12" style="margin-top:2%; margin-left:45% ">
                <br>
              
			  <button type="submit" onclick="myfun()" class="btn btn-primary" style="margin-left:25%;">save</button>
            </div>
          </form>
        

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
<script>
 const btn = document.getElementById('btn');

btn.addEventListener('click', () => {
  const form = document.getElementById('form');

  if (form.style.display === 'none') {

    form.style.display = 'block';
  } else {

    form.style.display = 'none';
  }
});


</script>
</body>
</html>