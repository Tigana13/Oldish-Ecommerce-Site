<?php

include 'database/dbConnect.php';



function getDealer(){
	global $con;

	$get_dealer = "SELECT * FROM `dealers`";
	$run_dealer = mysqli_query($con, $get_dealer);

	while ($row_dealer = mysqli_fetch_assoc($run_dealer)) {


		global $dealerName , $dealerImage, $dealerCategory;

		$dealerName = $row_dealer['dealer_name'];
		$dealerImage= $row_dealer['dealer_image'];
		$dealerCategory = $row_dealer['dealer_category'];

		echo "
		
						<div class='wome'>
								<a href='single.php' ><img class='img-responsive' src='images/$dealerImage' alt='' />
								</a>
								
								<div class='women simpleCart_shelfItem'>
									
									<h6 ><a href='single.php'> $dealerName </a></h6>
									<p class='ba-price'><em class='item_price'>$dealerCategory</em></p>
									<a href='' data-text='View Dealer' class='but-hover1 item_add'>View Dealer</a>
						</div>	
						</div>



						

		";
			
	}

}



function getProduct(){

	global $con;
	$get_product = "SELECT * FROM `vintage_items`";
	$run_product = mysqli_query($con, $get_product);

	while($row_product = mysqli_fetch_assoc($run_product)){

		$itemName = $row_product['item_name'];
		$itemImage = $row_product['item_image'];
		$itemCategory = $row_product['item_category'];
		$itemPrice = $row_product['item_price'];
		$itemDealer = $row_product['associated_dealer'];

		echo "
					<div class='grid-pro'>
								<div  class='grid-product' >
									<figure>		
										<a href='single.php'>
											<div class='grid-img'>
												<img  src='images/$itemImage' class='img-responsive' alt=''>
											</div>
											<div class='grid-img'>
												<img  src='images/$itemImage' class='img-responsive'  alt=''>
											</div>			
										</a>		
									</figure>	
								</div>
								<div class='women'>
									<a href='#''><img src='images/11.png' alt=''></a>
									<h6><a href='single.php'>$itemName</a></h6><br>
									<p>Associated Dealer: <b><em class'item_price'>$itemDealer</em></b> </p>
									<p ><em class='item_price'>$ $itemPrice</em></p>
									<a href='' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
								</div>
							</div>

		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Oldish Vintage</title>
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
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
		
						<li><i class="glyphicon glyphicon-log-in" ></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" ></i><a href="register.html">Register</a></li>
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
						 <div class="navbar-brand logo-nav-left ">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Bags</a></li>
												<li><a href="products.html">Caps & Hats</a></li>
												<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="products.html">Jackets & Coats</a></li>
												<li><a href="products.html">Jeans</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Jumpers & Cardigans</a></li>
												<li><a href="products.html">Leather Jackets</a></li>
												<li><a href="products.html">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="products.html">Shirts</a></li>
												<li><a href="products.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products.html">Sunglasses</a></li>
												<li><a href="products.html">Sweatpants</a></li>
												<li><a href="products.html">Swimwear</a></li>
												<li><a href="products.html">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products.html"><img src="images/me.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products.html"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
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
<!-- //header -->

<!-- banner -->
	<div class="banner">
	
	
	<div class="banner-right">
					<ul id="flexiselDemo2">			
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="single.html" ><img class="img-responsive" src="images/bi1.jpg" alt="" />
								</a>
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p class="ba-price"><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>							
								</div>							
							</div></li>
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="single.html" ><img class="img-responsive" src="images/bi.jpg" alt="" />
								</a>	
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p class="ba-price"><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>						
								</div>						
							</div></li>
						<li><div class="banner-grid">
						<h2>Featured Products</h2>
						<div class="wome">
								<a href="single.html" ><img class="img-responsive" src="images/bi2.jpg" alt="" />
								</a>	
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p class="ba-price"><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>						
								</div>						
							</div></li>
						
					
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 5000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 1
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 1
		    		}
		    	}
		    });
		    
		});
	</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>

					</div>

				
				</div>

	</div>
<!-- //banner -->

<!--content-->
		<div class="content">
		<div class="content-head">
					
					<div class="col-md-6 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-1">
						<div class="col-md-6 col-2">
							<a href="single.html"><img src="images/gallery-1434487773-typewriter.jpg" class="img-responsive" alt="">
							</a></div>
							<div class="col-md-6 col-p">
								<h5>Entire Vintage Collections</h5>
								<p>Here is a collection of some of the most desirable vintage items and antiques available from our dealers</p>
								<a href="single.html" class="shop" data-hover="Shop Now">Shop Now</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						</div>
					
					<div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">
					
						<!---->
						 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 2,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">					                	 
										  
											<a href="single.html"><img class="img-responsive" src="images/gallery-1434489690-vintage-teapot.jpg" alt="" /></a>  
											<a href="single.html" class="shop-2" >Shop Now</a>
								
					                </div>
									<div class="item">					                	  
										
											<a href="single.html"><img class="img-responsive" src="images/bb1.png" alt="" /></a>  
											<a href="single.html" class="shop-2">Shop Now</a>									
																		
					                </div>
									
									<div class="item">					                	 
									
											<a href="single.html"><img class="img-responsive" src="images/bb.png" alt="" /> </a> 
											<a href="single.html" class="shop-2">Shop Now</a>									
																			
					                </div>
									<div class="item">					                	  
										
											<a href="single.html"><img class="img-responsive" src="images/bb1.png" alt="" /></a>  
											<a href="single.html" class="shop-2">Shop Now</a>									
																		
					                </div>
							</div>
					   </div>
					   <div class="clearfix"></div>
			</div>	
					</div>
				
			<!---->


			
				<div class="content-top">
					<div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-3">
							<a href="single.html"><img src="images/tumblr_vintage_quotes_wallpaper_free_desktop.jpg" class="img-responsive " alt="">
							<div class="col-pic">	
								<h5> Antiques</h5>
								<p>Featured</p>
							</div></a>
						</div>
						
					</div>

					<?php
global $con;
	$get_product = "SELECT * FROM `vintage_items`";
	$run_product = mysqli_query($con, $get_product);


while($row_product = mysqli_fetch_assoc($run_product)){

		$itemName = $row_product['item_name'];
		$itemImage = $row_product['item_image'];
		$itemCategory = $row_product['item_category'];
		$itemPrice = $row_product['item_price'];
		$itemDealer = $row_product['associated_dealer'];



?>
					<div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
						<div class="col-sm-4 item-grid simpleCart_shelfItem">

								<?php

								// getProduct();
								echo "
								<div class='grid-pro'>
									<div  class='grid-product' >
										<figure>		
											<a href='single.html'>
												<div class='grid-img'>
													<img  src='images/$itemImage' class='img-responsive' alt=''>
												</div>
												<div class='grid-img'>
													<img  src='images/$itemImage' class='img-responsive'  alt=''>
												</div>			
											</a>		
										</figure>	
									</div>
									<div class='women'>
										<a href='#''><img src='images/11.png' alt=''></a>
										<h6><a href='single.html'>$itemName</a></h6><br>
										<p>Associated Dealer: <b><em class'item_price'>$itemDealer</em></b> </p>
										<p ><em class='item_price'>$ $itemPrice</em></p>
										<a href='' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
									</div>
								</div>


															
						</div>";

						?>
	<?php

		}

	?>
						
					<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!----->
				
			
			
				<!--products-->
<div class="social animated wow fadeInDown" data-wow-delay=".1s">
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