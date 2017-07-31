<?php

$con = mysqli_connect('localhost', 'root','', 'oldish_vintage');

//getting products

function getProduct(){

	if (!isset($_GET['cat'])) {
				
			
			$get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";
			
			$run_pro = mysqli_query($con, $get_pro);

			$product_row_count = mysqli_num_rows($run_pro);

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