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
<title>Oldish Vintage | Products </title>
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

<script type="text/javascript">
	function showSearchHint(str){
		if(str.length == 0){
			document.getElementById("seachHint").innerHTML = "";
		}
	}
</script>
</head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@oldish.com">info@oldish.com</a></li>
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
						<a href="<?php if (isset($_GET['uid'])){
								echo "checkout.php?uid=$uid";
							}
							else{

								echo "login.php";
							}

							 ?>">
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
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="<?php if (isset($_GET['uid'])) {
								echo "products1.php?uid=$uid";
							}else{
								echo "products1.php";
							}

							 ?>">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="products1.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">

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
							<li> <div class="login-mail" id="search-bar">
								<input type="text" id="search_item" placeholder="Search Products" name="search">
								
										</div></li>
							
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Products</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Products<label>/</label>All</h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
						<div class="col-md-3 product-bottom">
			<!--categories-->
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>Categories</h3>
					<ul class="cate">
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="<?php if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>">All</a> <span></span></li>
						<ul>
						<?php

						if (isset($_GET['uid'])) {

						$get_cats = "SELECT * FROM categories";

						$run_cats = mysqli_query($con, $get_cats);
		
							while ($row_cats = mysqli_fetch_assoc($run_cats)) {
							$cat_id = $row_cats['cat_id'];							
							$cat_title = $row_cats['cat_title'];

							$get_cat_qty = "SELECT * FROM products WHERE product_category = '$cat_title'";
							$run_cat_qty = mysqli_query($con, $get_cat_qty);
							$cat_qty = mysqli_num_rows($run_cat_qty);

								echo "<li><i class='glyphicon glyphicon-menu-right' ></i><a href='products2.php?uid=$uid&cat=$cat_id'>$cat_title</a> <span>($cat_qty)</span></li>";
							}

							
						}
						else{
						$get_cats = "SELECT * FROM categories";

						$run_cats = mysqli_query($con, $get_cats);
		
							while ($row_cats = mysqli_fetch_assoc($run_cats)) {
							$cat_id = $row_cats['cat_id'];							
							$cat_title = $row_cats['cat_title'];

							$get_cat_qty = "SELECT * FROM products WHERE product_category = '$cat_title'";
							$run_cat_qty = mysqli_query($con, $get_cat_qty);
							$cat_qty = mysqli_num_rows($run_cat_qty);

								echo "<li><i class='glyphicon glyphicon-menu-right' ></i><a href='products2.php?cat=$cat_id'>$cat_title</a> <span>($cat_qty)</span></li>";
							}
						}

						?>

						</ul>

					</ul>

				</div>
		<!--//menu-->
		<!--price-->
				<div class="price animated wow fadeInLeft animated" data-wow-delay=".5s" >
					<h3>Price Range</h3>
					<div class="price-head">
					<div class="col-md-6 price-head1">
                                        <div class="price-top1">
                                            <span class="price-top">$</span>
                                            <input type="text"  value="0">
                                        </div>
                                    </div>
									<div class="col-md-6 price-head2">
                                        <div class="price-top1">
                                            <span class="price-top">$</span>
                                            <input type="text"  value="500">
                                        </div>
                                    </div>
									<div class="clearfix"></div>
                                    </div>
                                    </div>
			<!--//price-->
			
			<div class="sellers animated wow fadeInLeft" data-wow-delay=".5s">
					
								<h3 class="best">BEST SELLERS</h3>
					
				</div>
				<!---->

	<?php 

			if (!isset($_GET['cat'])) {
				
			
			$get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";

			$run_pro = mysqli_query($con, $get_pro);

			$product_row_count = mysqli_num_rows($run_pro);

			?>
 	</div>
			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="mens-toolbar">
						<p >Showing 1–<?php echo $product_row_count;  ?> of <?php echo $product_row_count;  ?></p>
	                
					 <p class="showing">Sorting By
			            <select>
			                  <option value=""> Name</option>
			                  <option value="">  Rate</option>
			                    <option value=""> Color </option>
			                    <option value=""> Price </option>
			            </select>
			          </p> 
					  <p>Show
			            <select>
			                  <option value=""><?php echo $product_row_count;  ?></option>

			                  <option value=""> <?php echo $product_row_count + 1;  ?> </option>
			                    <option value=""><?php echo $product_row_count + 2;  ?></option>
			                    <option value=""> <?php echo $product_row_count + 3;  ?> </option>
			            </select>

			          </p>
			    

<style type="text/css">
	#search-bar{
		width: 300px;
		margin-top: 7px;
		/*margin-left: 600px;*/

	}
</style>


	    		    
    	      
                	<div class="clearfix"></div>		
		        </div>

			<div class="mid-popular">

			<style type="text/css">
				.grid-pro{
					height: 400px;
				}

			</style>

			<?php

			if (isset($_GET['uid'])) {

				while ($row_pros=mysqli_fetch_assoc($run_pro)) {
				$product_id = $row_pros['product_id'];
				$product_name = $row_pros['product_name'];
				$product_category = $row_pros['product_category'];
				$product_price = $row_pros['product_price'];
				$product_description = $row_pros['product_desc'];
				$product_image1 = $row_pros['product_img1'];
				$product_image2 = $row_pros['product_img2'];

			

			 echo "<div class='col-sm-4 item-grid item-gr  simpleCart_shelfItem'>
							<div class='grid-pro'>
								<div  class='grid-product' >
									<figure>		
										<a href='single.php?uid=$uid&pro_id=$product_id'>
											<div class='grid-img'>
												<img  src='images/$product_image2' class='img-responsive' alt=''>
											</div>
											<div class='grid-img'>
												<img  src='images/$product_image1' class='img-responsive'  alt=''>
											</div>			
										</a>		
									</figure>	
								</div>
								<div class='women'>
									
									<h6><a href='single.php?uid=$uid&pro_id=$product_id'>$product_name</a></h6>
									<p ><em class='item_price'>$ $product_price</em></p>
									<a href='#' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
								</div>
							</div>
						</div>" ;

				}
			}

			else{

			while ($row_pros=mysqli_fetch_assoc($run_pro)) {
				$product_id = $row_pros['product_id'];
				$product_name = $row_pros['product_name'];
				$product_category = $row_pros['product_category'];
				$product_price = $row_pros['product_price'];
				$product_description = $row_pros['product_desc'];
				$product_image1 = $row_pros['product_img1'];
				$product_image2 = $row_pros['product_img2'];

			

			 echo "<div class='col-sm-4 item-grid item-gr  simpleCart_shelfItem'>
							<div class='grid-pro'>
								<div  class='grid-product' >
									<figure>		
										<a href='single.php?pro_id=$product_id'>
											<div class='grid-img'>
												<img  src='images/$product_image2' class='img-responsive' alt=''>
											</div>
											<div class='grid-img'>
												<img  src='images/$product_image1' class='img-responsive'  alt=''>
											</div>			
										</a>		
									</figure>	
								</div>
								<div class='women'>
									
									<h6><a href='single.php?pro_id=$product_id'>$product_name</a></h6>
									<p ><em class='item_price'>$ $product_price</em></p>
									<a href='#' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
								</div>
							</div>
						</div>" ;

				}

			}




			}


			?>
				
					<div class="clearfix"></div>
				</div>
			</div>

		
			</div class="clearfix"></div>
			</div>			
		</div>
				<!--//products-->
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
<script type="text/javascript">

$('search_item').autocomplete({
	source: function(request, response){
		$.ajax({
			url:'ajax.php',
			dataType: "json",
			data: {
				name_startsWith: request.term,
				type: 'product_name'
			},

			success: function(data){
				response($.map(data, function(item){
					return { 
						label: item,
						value: item
					}
				}));
			}
		});
	},
	autoFocus : true,
	minLength: 0
});


	
</script>
