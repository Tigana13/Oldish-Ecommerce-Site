<?php
include('database/dbConnect.php');

$get_similar = "SELECT * FROM products ORDER BY RAND() LIMIT 0,3";

$run_sim = mysqli_query($con, $get_similar);

$row_sim = mysqli_fetch_assoc($run_sim);
$prodid = $row_sim['product_id'];
$prodimg1= $row_sim['product_img1'];
$prodimg2= $row_sim['product_img2'];


?>
<!DOCTYPE html>
<html>
<head>
<title>Oldish Vintage Shop</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

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
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="products1.php">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="products1.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
											<h6>Featured Categories</h6>
											<li><a href="products1.php">All</a></li>

											<?php 
											$get_cats = "SELECT * FROM categories ORDER BY RAND() LIMIT 0,7";

											$run_cats = mysqli_query($con, $get_cats);

											while ($row_cats = mysqli_fetch_assoc($run_cats)) {
												
												$cat_title = $row_cats['cat_title'];

												echo "<li><a href='products1.php'>$cat_title</a></li>";
											}

											?>
												
												
											</ul>
										</div>
										
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="<?php echo "single.php?pro_id=$prodid" ?>"><img src="images/<?php echo "$prodimg1";  ?>" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products1.php"><img src="images/<?php echo "$prodimg2";  ?>" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							
							
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header --><!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Register</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="start.php">Home</a><label>/</label>Register</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<style type="text/css">
	#match{
		padding-left: 390px;
		padding-top: 10px;
		padding-bottom: 10px;
		color: white;
		/*margin-bottom:  500px;*/
	}
	#length{
		padding-left: 390px;
		padding-top: 10px;
		padding-bottom: 10px;
		color: white;
		/*margin-bottom:  500px;*/
	}
</style>
<!-- contact -->
	<div class="login">
		<div class="container">
		<form method="POST" action="">
			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<input type="text" placeholder="Username" required="" name="username">
					<i class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
				<input name="email" type="text" placeholder="Email" required="">
					<i class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" id="pass1" placeholder="Password" required="" name="pwd1">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				<label class="news-letter" id="length"><i> </i></label>
				<div class="login-mail">
					<input type="password" onchange="checkPasswordMatch();" id="pass2" placeholder="Repeated password" required="" name="pwd2">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				 <label class="news-letter" id="match"><i> </i></label>

				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" required=""><i> </i>I agree with the terms</label>
					   </a>
	
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit" id="submit" value="Submit" name="submit_register">
					</label>
					<p>Already registered</p>
				<a href="login.php" class="hvr-sweep-to-top">Login</a>
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
					<input type="text" placeholder="Email"  required="">
					<input type="submit" value="Submit" name="submit_newsletter" >
				</form>
			
				</div>
			
				<div class="clearfix"> </div>
			</div>
			
			
		</div>
	</div>
<!-- //footer -->


<?php

if (isset($_POST["submit_register"]) || isset($_POST["checkbox"])) {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    try {
        
        $pdo = new PDO("mysql:host=$hostname;dbname=oldish_vintage", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION); // <== add this line

        echo "Connect Success";

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['pwd2'];

       
       
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO oldish_users (username, email, password)
              VALUES ('$username','$email', '$hash_pass' )";
       
        if ($pdo->query($sql)) {

            echo "<script type= 'text/javascript'>alert('You Have been successfully Registered');</script>";
            echo "<script type = 'text/javascript'> window.open('login.php', '_self'); </script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Data not successfully Taken.');</script>";
        }
    } 


    catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
</body>
</html>

<script type="text/javascript">

	function checkPasswordMatch(){
		var pass1=  $("#pass1").val();
		var pass2 = $("#pass2").val();
		var match_region = document.getElementById("match");
		var submit = document.getElementById("submit");

		if (pass1.length < 6) {
			$("#length").html("Password too short");
			match_region.style.backgroundColor = 'Red';
			submit.disabled = true;

		}

		if (pass1 != pass2) {
			$("#match").html("Password don't Match");
			match_region.style.backgroundColor = 'Red';
			submit.disabled = true;

		} else{
			$("#match").html("Passwords match");
			match_region.style.backgroundColor = 'green';
			submit.disabled = false;
		}
	}

$(document).ready(function(){

	$("#pass1, #pass2").keyup(checkPasswordMatch);
});

</script>

