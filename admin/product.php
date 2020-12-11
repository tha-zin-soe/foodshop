<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
}
 ?>



<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Yangon Food Delivery Service</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:orange">
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-warning">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo2.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="view.php">Feedback</a></li>
						<li class="nav-item"><a class="nav-link" href="insert.php">Insert</a></li>
						<li class="nav-item"><a class="nav-link" href="view_order.php">View Order</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>





					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">

				</div>
			</div>
		</div>
	</div>
	<!-- End header -->

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 mt-5 ">
				<h1 class="text-center">View Product </h1>
				<table style="border-color:#000000;border-style: dotted" width="700" class="my-5">

					
					 <?php
					 error_reporting(1);
					 include('connect.php');
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table style='border-color:#000000;border-style: dotted;margin-left:-40px;' width='800px' align='left' ><tr><td>Image:</td><td>Product No:</td><td>Price:</td></tr>";
					   $n=0;
						while($arr=mysql_fetch_array($sel))
					   {
					   $i=$arr['img'];
					   
						if($n%1==0)
						{
						echo "<tr><tr>
							  ";
						}
					   echo 
					   "<td height='280' width='240' align='center'><img src='image/$i' height='200' width='200'></td>
					 <b>
					 <td>".$arr['prod_no'].
					   "</td><td>".$arr['price'].
					  "
					   
					   </td>";
					  
					  $n++;

					   }
						  echo "</tr></table>
						   </form>";
						?>
 <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> 				
				</table>




			</div>

		</div>

	</div>










	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o"
			aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>