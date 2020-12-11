<?php
error_reporting(1);
include('connect.php');
if($_POST['submit'])
{ 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mesg=$_POST['mesg'];
 if(mysql_query("insert into content(con_id,name,email,phone,mesg) values('','$name','$email','$phone','$mesg')"))

///$query ="INSERT INTO content (con_id,name,email,phone,mesg) VALUES('$name','$email','$phone',
         //'$mesg')";
         //mysqli_query($con,$query);

{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
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
	<title>Live Dinner Restaurant - Responsive HTML5 Template</title>
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

<body style="background-color:pink">
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				
					<img src="images/logo2.png" alt="" />
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center">Contact<h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Our Food Delivery Service</span></h1>
						<h4>Little Story</h4>
						<p>Hungry? Had a long and busy day? You’ve come to the right place. foodpanda Myanmar offers fast and
							convenient food delivery service from the best restaurants near you. Whether you’re craving for pizza,
							burger, Japanese or anything in between, there’s something for you at foodpanda.
							Fancy some Kyay Oh? How about a scrumptious bowl of Shan noodles and roasted duck? We have plenty of
							restaurants in Yangon available for you to order food online and delivered straight to your location. </p>

						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/photo1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut
							massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium
							ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum.
							Nullam vitae nulla elit. </p>
						<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur
							quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum.
							Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus
							mauris. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	<div class="container">
	       <div class="row">
				<div class="col-md-4 mt-5 ">
				<h1>Contact Information</h1>
				<h2>Send a Message</h2>
				   <form method="post">
  <div class="form-group">
    <label> Name</label>
    <input type="text" class="form-control" name="name"  >
    
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  <div class="form-group">
    <label>Message</label><br>
     <textarea  name="mesg" rows="5" cols="50"  required></textarea>
  </div>
 <input  type="submit" name="submit" value="Save">
</form>
<h2><?php echo $er;?></h2>
				</div>
				<div class="col-md-8 mt-5 text-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488797.79020234646!2d95.90136958313794!3d16.83960980011405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1597073341991!5m2!1sen!2smm"
				width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
				aria-hidden="false" tabindex="0"></iframe>
				   <h3>Location </h3>
                    Food Delivery Service<br />
                    NO(97) Ground Floor, ThahaYa Street,<br />
                    Hlaing Township<br /><br />
                    
                    Tel: 09253787295<br />
				</div>
	   
          </div>
		  </div>
		  <!-- Start Contact info -->
  <div class="contact-imfo-box">
    <div class="container">
      <div class="row">
        <div class="col-md-4 arrow-right">
          <i class="fa fa-volume-control-phone"></i>
          <div class="overflow-hidden">
            <h4>Phone</h4>
            <p class="lead">
              +01 123-456-4590
            </p>
          </div>
        </div>
        <div class="col-md-4 arrow-right">
          <i class="fa fa-envelope"></i>
          <div class="overflow-hidden">
            <h4>Email</h4>
            <p class="lead">
              yourmail@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <i class="fa fa-map-marker"></i>
          <div class="overflow-hidden">
            <h4>Location</h4>
            <p class="lead">
              800, Lorem Street, US
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact info -->

	
				
	   
   

                

	

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
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	

</html>