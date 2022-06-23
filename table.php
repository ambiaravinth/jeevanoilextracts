<?php
	include_once 'back/table_process.php';
	require_once 'back/session.php';
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  ;
}

#customers td, #customers th {
  border: 3px solid #ddd;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
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
						 Admin page
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
			<h1 class="text-center latestitems">ACTIVITIES</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
<?php
    echo '<br>';
    echo "<table style=\"width:100%\">
    <tr>
	<th>S.NO</th>
    <th>DATE</th>
    <th>NAME</th>
    <th>MESSAGES</th>
    </tr>";
    while($row = mysqli_fetch_array($display))
    {
        echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['commands'] . "</td>";
        echo "</tr>";
    }
    echo "</table></br><br>";
    echo "<button class='btn btn-light' style='margin-left:auto;margin-right:auto;display:block;color:black' onclick='history.go(-1)'>Send message</button><br><br>"
?>