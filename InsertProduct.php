<?php

include("database/dbConnect.php");


?>

<!DOCTYPE html>
<html>
<head>
<title>Oldish Vintage| Insert Product</title>
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
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="start.php">Oldish<span>Vintage</span></a></h1>
						</div>

					</div> 
					
				
		</div>
	</div>
<!-- //header -->
<style type="text/css">
	body{
		background-color: #FFFFFF;
	}

</style>

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">INSERT PRODUCT</h2>
		<!-- <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="start.php">Home</a><label>/</label>Login</h3> -->
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="login">
		<div class="container">
		
		<form method="POST" enctype="multipart/form-data" action="InsertProduct.php">

			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				
				<div class="login-mail">
					<input type="text" placeholder="Product Name" name="prod_name" required="" >
					
				</div>
				
				<div class="login-mail">
						<select name="prod_cat">
							<option> Product Category </option>
							<?php
							$get_cats= "SELECT * FROM categories";

							$run_cats = mysqli_query($con, $get_cats);

							while ($row_cats = mysqli_fetch_array($run_cats)) {
								$cat_title = $row_cats['cat_title'];
								echo "<option> $cat_title </option>";
							}

							?>
						</select>
						
				</div>

				<div class="login-mail">
					<input type="text" placeholder="Product Price" name="prod_price" required="">
					
				</div>
				<div class="login-mail">

					<!-- <input type="text" placeholder="Product Description" >
 -->					<textarea name="prod_desc" cols="55" rows="10"></textarea>
					
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Product keywords" name="prod_keywords" required="" >
					
				</div>
				<div class="login-mail">
					<input type="file" placeholder="" name="prod_img1" required=""> 
					<i><p>Product Image 1</p></i>
					
				</div>
				<div class="login-mail">
					<input type="file" placeholder="" name="prod_img2" required="">
					<i><p>Product Image 2</p></i>
					
				</div>
				   

			
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit" name="insert" value="Add Product">
				</label>
					<p> </p>
				<a href="#" class="hvr-sweep-to-top">Reset Form</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>

	</div>
	</div>


</body>
</html>

<?php 


if (isset($_POST['insert'])) {

//Data from the text fields
$prod_name = $_POST['prod_name'];
$prod_category = $_POST['prod_cat'];
$prod_price = $_POST['prod_price'];
$prod_desc = $_POST['prod_desc'];
$prod_keywords = $_POST['prod_keywords'];

//Getting image
$product_image1 = $_FILES['prod_img1']['name'];
$product_image1_tmp = $_FILES['prod_img1']['tmp_name'];



$product_image2 = $_FILES['prod_img2']['name'];
$product_image2_tmp = $_FILES['prod_img2']['tmp_name'];



	$insert_product = "INSERT INTO products(product_name, product_category, product_price, product_desc, product_keywords, product_img1, product_img2) VALUES('$prod_name', '$prod_category', '$prod_price', '$prod_desc', '$prod_keywords', '$product_image1', '$product_image2')";
	

	$insert_pro = mysqli_query($con, $insert_product);


		if ($insert_pro) {
			echo "<script type = 'text/javascript'> alert('Product Inserted Successfully'); </script>";
			move_uploaded_file($product_image1_tmp, "images/$product_image1");
			move_uploaded_file($product_image2_tmp, "images/$product_image2");

			echo "<script type = 'text/javascript'> window.open('InsertProduct.php', '_self'); </script>";
			
			
		}
		else{
			echo "<script type = 'text/javascript'> alert('Something went wrong'); </script>";
		}

		// mysqli_close($con);


// 	}
// 	catch(PDOException $e){
// 		echo $e->getMessage();
// 	}

}



 ?>
