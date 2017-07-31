<?php

include('database/dbConnect.php');
session_start();

if (isset($_GET['pid'])) {
	session_destroy();
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Oldish Vintage| Login </title>
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
		
						<li><i class="glyphicon glyphicon-log-in" ></i><a href="login.php">Login</a></li>
						<li><i class="glyphicon glyphicon-book" ></i><a href="register.php">Register</a></li>
					</ul>
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="checkout.html">
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
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="<?php if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="start.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Featured Categories</h6>

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
							
							
							
							<li><a href="<?php if (isset($_GET['uid'])){
								echo "contact1.php?uid=$uid";
							}
							else{
								echo "contact1.php";
							}

							 ?>">Contact Us</a></li>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Login</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="start.php">Home</a><label>/</label>Login</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<style type="text/css">
	#match{
		padding-left: 50px;
		font-size: 15px;
		
		}
</style>
<!-- contact -->
	<div class="login">
		<div class="container">
		<form method="POST">
			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<input type="text" placeholder="Username or Email" name="login_email" required="" >
					<i class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="login_password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>

				<label class="news-letter" id="match"> <i></i></label>

				   

			
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit" name="loginbtn" value="login">
					</label>
					<p>Do not have an account?</p>
				<a href="register.php" class="hvr-sweep-to-top">Signup</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>

	</div>
	</div>


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
					<input type="text" placeholder="Email" name="newsletter_email"  required="">
					<input type="submit" value="Submit" name="submit_newsletter" >
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


if (isset($_POST['loginbtn'])) {
	$username_email = $_POST['login_email'];
	$user_password = $_POST['login_password'];

	
	    $link = "SELECT * FROM oldish_users WHERE username = '$username_email' OR email = '$username_email' ";
	    $row = mysqli_query($con, $link);
	    $result = mysqli_fetch_assoc($row);

        $hashed_password =$result['password'];

        $pass = password_verify($user_password, $hashed_password);
        

        if ($pass) {

        $sql = "SELECT * FROM oldish_users WHERE username='$username_email' or email = '$username_email' AND password = '$hashed_password' ";
        
        $runUser = mysqli_query($con, $sql);
        $user_result = mysqli_fetch_assoc($runUser);
        $user_id = $user_result['user_id'];

        $check_user = mysqli_num_rows($runUser);
                
        if ($check_user > 0) {

        	$_SESSION['username'] = $username_email;

            echo "<script type= 'text/javascript'>alert('Login Success');</script>";
            echo "<script type= 'text/javascript'>window.open('products1.php?uid=$user_id','_self');</script>";
        } 
        else {
            echo "<script type= 'text/javascript'>alert('Wrong Username or password');</script>";
        }
    } 

    else{
    	echo "<script type= 'text/javascript'>alert('Login Failed. Username or Password incorrect!');</script>";
    }
	
	}

?>