<?php
include('database/dbConnect.php');
if (isset($_GET['uid'])) {
 	session_start();
 	$uid = $_GET['uid'];
 	$pid = 0;

  } 

?>
<!DOCTYPE html>
<html>
<head>
<title>Oldish Vintage | Contact </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">info@oldish.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
						<?php if (isset($_GET['uid'])) {
							echo "<li><i class='glyphicon glyphicon-user' ></i><a href='#'> ".$_SESSION['username']."</a></li>
						<li><i class='glyphicon glyphicon-log-out' ></i><a href='login.php?pid=$pid'>Logout</a></li>";
						} else{
								echo "<li><i class='glyphicon glyphicon-log-in' ></i><a href='login.php'> Login</a></li>
						<li><i class='glyphicon glyphicon-book' ></i><a href='register.php'>Register</a></li>";
							}?>
					</ul>
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="
							<?php if (isset($_GET['uid'])){
								echo "checkout.php?uid=$uid";
							}
							else{
								echo "login.php";
							}

							 ?>
						">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/cart.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">
				
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="
							<?php 

							if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>
							 ">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="<?php 

							if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>

							" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Featured</h6>
												<?php 
											if (isset($_GET['uid'])) {
												$get_cats = "SELECT * FROM categories ORDER BY RAND() LIMIT 0,7";

											$run_cats = mysqli_query($con, $get_cats);

											while ($row_cats = mysqli_fetch_assoc($run_cats)) {

												$cat_id = $row_cats['cat_id'];					
												$cat_title = $row_cats['cat_title'];

												echo "<li><a href='products2.php?uid=$uid&cat=$cat_id'>  $cat_title</a> </li>";
											}
												
											}
											else{

											$get_cats = "SELECT * FROM categories ORDER BY RAND() LIMIT 0,7";

											$run_cats = mysqli_query($con, $get_cats);

											while ($row_cats = mysqli_fetch_assoc($run_cats)) {

												$cat_id = $row_cats['cat_id'];					
												$cat_title = $row_cats['cat_title'];

												echo "<li><a href='products2.php?cat=$cat_id'>  $cat_title</a> </li>";
											}
											}

											?>
											
											
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									
								</ul>
							</li>
							
							
							<li class="active"><a href="contact1.php">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Contact</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="<?php if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>">Home</a><label>/</label>Contact</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="contact">
		<div class="container">
		
			
			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
				<form method="POST">
						<div class="contact-form2">
							<h4>Name</h4>
							
							<input type="text" placeholder="" name="client_name" required="">
							
						</div>
										
						<div class="contact-form2">
							<h4>Email</h4>
						
								<input name="client_email" type="email" placeholder="" required="">
						
						</div>
						<div class="contact-form2">
							<h4>Subject</h4>
						
								<input name="client_subject" type="text" placeholder="" required="">
						
						</div>
					
			
				<div class="contact-me ">
					<h4>Message</h4>
				
						<textarea type="text"  name="client_message" placeholder=""> </textarea>
						</div>
						<input type="submit" name="send" value="Submit" >
				</form>
				
			</div>
			
			<div class="col-md-4 contact-grids">
				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>95 Limuru Road, 4th Floor <span>Nairobi.</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>+xxxxxxxxxxxx<span></span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p><a href="contactto:info@example.com">info@oldish.com</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="map">
		<iframe class="animated wow fadeInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.9579945977393!2d-73.87657738464283!3d40.806916839740346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f510a78ff341%3A0xe5b1e682c2e91238!2sNYS+Agriculture+%26+Markets!5e0!3m2!1sen!2sin!4v1456403781501" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div >
<!-- //contact -->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
	<div class="container">
		<div class="col-sm-3 social-ic">
			<a href="#">FACEBOOK</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">TWITTER</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">GOOGLE+</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">PINTEREST</a>
		</div>
	<div class="clearfix"></div>
	</div>
</div>


<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>We are Oldish Vintage. Dedicated to providing you with all the antiques you desire at the comfort of your home</p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>333 Ole Sangale Road, Jiji, <span>Nairobi</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">info@oldish.co.ke</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+254 70777789  </li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
				<h3>Sign up for our newsletter </h3>
				<form>
					<input type="text" placeholder="Email"  required="">
					<input type="submit" value="Submit">
				</form>
			
				</div>
			
				<div class="clearfix"> </div>
			</div>
			
			
		</div>
	</div>
<!-- //footer -->
</body>
</html>
<?php 

if (isset($_POST['send'])) {

//Data from the text fields
$name = $_POST['client_name'];
$email = $_POST['client_email'];
$subject = $_POST['client_subject'];
$message = $_POST['client_message'];


	$insert_message = "INSERT INTO contact(Name, Email, Subject, Message) VALUES('$name', '$email', '$subject', '$message')";
	

	$insert_msg = mysqli_query($con, $insert_message);


		if ($insert_msg) {
			echo "<script type = 'text/javascript'> alert('Message sent Successfully'); </script>";
			
		}
		else{
			echo "<script type = 'text/javascript'> alert('Something went wrong Inserting your message'); </script>";
		}

		// mysqli_close($con);


// 	}
// 	catch(PDOException $e){
// 		echo $e->getMessage();
// 	}

}



 ?>
