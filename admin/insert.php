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
			<div class="col-md-8  ">
<?php
         session_start();
        if($_SESSION['sid']=="")
        {
           header('location:index.php');
         }
				else{
				 ?>
				<?php
				error_reporting(1);
				include('connect.php');
				$img=$_FILES['img']['name'];
				$prono=$_POST['t1'];
				$price=$_POST['t2'];
				if($_POST['sub'])
				{
					$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
					$result=mysql_query($qry) or die ("save items query fail.");
					if($result)			
					   {
						   mkdir("image/$i");
							move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
				  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
						
						$err="<font size='+2'>item inserted successfully</font>";
					
						}
					else
					 {
					   echo "item is not inserted";
					   }
					}  
					mysql_close($con);
				}


?>




			</div>

		</div>

	</div>
	<div class="container">
	 <h2>Insert Image</h2>
	  <div class="row">
	 
                
			<form  name="testform" method="post" enctype="multipart/form-data" >
			<table style="border-color:#000000;border-style: dotted;margin-left:-40px;" width="600px" align="left">
				
						
				
				 <tr>
						<td height="20px"></td>
				</tr>	
				<tr>
				<td><span class="style3">Image:</span></td>
				<td>
					<input name="img" type="file">
				</td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">product name: </span></td>
				  <td><label>
					<input name="t1" type="text" id="t1">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">Price:</span></td>
				  <td><label>
					<input name="t2" type="text" id="t2">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				
				
				
				<tr>
				<td  colspan="2" align="center">
					<input name="sub" type="submit" value="Submit">
					
				</td>
				</tr>
				
			</table>
			</form>
				<h2><?php echo $err;?></h2>
            </div> 
       
        
        <div class="clear"></div>
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