<?php

include('database/dbConnect.php');
if (isset($_GET['uid'])) {
	session_start();
 	$uid = $_GET['uid'];
} 

$product_id = $_GET['pro_id'];

$get_product = "SELECT * FROM products WHERE product_id=$product_id";

$run_pro = mysqli_query($con, $get_product);

$product_row = mysqli_fetch_assoc($run_pro);

$product_name = $product_row['product_name'];
$product_category = $product_row['product_category'];
$product_description = $product_row['product_desc'];
$product_image1 = $product_row['product_img1'];
$product_image2 = $product_row['product_img2'];
$product_price = $product_row['product_price'];


$get_similar = "SELECT * FROM products WHERE product_category='$product_category' ORDER BY RAND() LIMIT 0,3";

$run_sim = mysqli_query($con, $get_similar);

$row_sim = mysqli_fetch_assoc($run_sim);
$prodid = $row_sim['product_id'];
$prodimg1= $row_sim['product_img1'];
$prodimg2= $row_sim['product_img2'];


// echo $product_id;


?>
<!DOCTYPE html>
<html>
<head>
<title>Oldish | <?php echo "$product_name";  ?></title>
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
						<?php if (isset($_SESSION['username'])) {
							echo "<li><i class='glyphicon glyphicon-user' ></i><a href='#'> ".$_SESSION['username']."</a></li>
						<li><i class='glyphicon glyphicon-log-out' ></i><a href='login.php'>Logout</a></li>";
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
							<li ><a href="products1.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
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
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="<?php echo "single.php?pro_id=$prodid" ?>"><img src="images/<?php echo "$prodimg1";  ?>" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="<?php echo "single.php?pro_id=$prodid" ?>"><img src="images/<?php echo "$prodimg2";  ?>" alt="" class="img-responsive"></a>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s"><?php echo "$product_name";  ?></h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="<?php if (isset($_GET['uid'])){
								echo "products1.php?uid=$uid";
							}
							else{
								echo "products1.php";
							}

							 ?>">Home</a><label>/</label>Products <label>/</label> <?php echo "$product_name";  ?> </h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
		<div class="col-md-3 product-bottom ">
			<!--categories-->
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>Categories</h3>
					<ul class="cate">
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">All</a> <span></span></li>
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
				<div class="price animated wow fadeInUp animated" data-wow-delay=".5s" >
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
			
			<div class="sellers animated wow fadeInDown" data-wow-delay=".5s">
					
								<!-- <h3 class="best">BEST SELLERS</h3> -->
		<!-- 			<div class="product-head">
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/pcc.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html">Lorem ipsum </a></h6>
								<span class=" price-in1"> <del>$50.00</del>$40.00</span>
								<p>The standard chunk of Lorem Ipsum used</p>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/pcc1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html">Lorem ipsum </a></h6>
								<span class=" price-in1"> <del>$50.00</del>$40.00</span>
								<p>The standard chunk of Lorem Ipsum used</p>
							</div>
							<div class="clearfix"> </div>
							</div>
							
							</div> -->
				</div>
				<!---->
 	</div>
			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="col-md-5 grid-im">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/<?php echo $product_image1;?> " >
			        <div class="thumb-image"> <img src="images/<?php echo $product_image1; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/<?php echo $product_image2;?> " >
			         <div class="thumb-image"> <img src="images/<?php echo $product_image2;?> " data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/<?php echo $product_image2;?> ">
			       <div class="thumb-image"> <img src="images/<?php echo $product_image2;?> " data-imagezoom="true" class="img-responsive"></div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3><?php echo $product_name; ?></h3>
				<p class="in-para"><?php echo $product_category; ?> </p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$<?php echo $product_price; ?></span>
				 <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
				 <div class="clearfix"></div>
				</div>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		   <!----- tabs-box ---->
		<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p > <?php echo $product_description; ?> </p>
										       
							        </div>

							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

								</div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h6><a href="#">Hendri</a> - September 3, 2014</h6>
					
									<p>Wow nice!</p>
				</div>
				<div class="clearfix"> </div>
				<a class="add-re" href="single.html">Add Review</a>
			</div>


							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!---->
					</div>
			
</div>
<div class='clearfix'> </div>
<div class='col-md-si'>
<h3>Other Similar Items</h3>
<?php

if (isset($_GET['uid'])) {
	while ($row_similar = mysqli_fetch_assoc($run_sim)) {
	$sim_prod_id = $row_similar['product_id'];
	$product_name= $row_similar['product_name'];
	$product_price= $row_similar['product_price'];
	$product_image1= $row_similar['product_img1'];
	$product_image2= $row_similar['product_img2'];

	echo "
					<div class='col-sm-4 item-grid item-gr  simpleCart_shelfItem'>
							<div class='grid-pro'>
								<div  class='grid-product' >
									<figure>		
										<a href='single.php?uid=$uid&pro_id=$sim_prod_id'>
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
									
									<h6><a href='single.php?uid=$uid&pro_id=$sim_prod_id'>$product_name</a></h6>
									<p ><em class='item_price'>$ $product_price</em></p>
									<a href='#' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
								</div>
							</div>
						</div>" ;

}
	
}
else{
while ($row_similar = mysqli_fetch_assoc($run_sim)) {
	$sim_prod_id = $row_similar['product_id'];
	$product_name= $row_similar['product_name'];
	$product_price= $row_similar['product_price'];
	$product_image1= $row_similar['product_img1'];
	$product_image2= $row_similar['product_img2'];

	echo "
					<div class='col-sm-4 item-grid item-gr  simpleCart_shelfItem'>
							<div class='grid-pro'>
								<div  class='grid-product' >
									<figure>		
										<a href='single.php?pro_id=$sim_prod_id'>
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
									
									<h6><a href='single.php?pro_id=$sim_prod_id'>$product_name</a></h6>
									<p ><em class='item_price'>$ $product_price</em></p>
									<a href='#' data-text='Add To Cart' class='but-hover1 item_add'>Add To Cart</a>
								</div>
							</div>
						</div>" ;

}

}

?>
					</div>
					<div class="clearfix"> </div>
		</div>
			</div class="clearfix"></div>
			</div>			
		</div>
				<!--//products
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
<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


</body>
</html>