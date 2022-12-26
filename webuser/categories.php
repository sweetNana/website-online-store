<!DOCTYPE html>
<html lang="en">
<head>
<title>Kanaya Store - Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>

<body>

<div class="super_container">

	<?php 
		include "header.php";
		session_start();
	?>

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shop</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
								<div class="benefit_content">
									<h6>free shipping</h6>
									<p>Suffered Alteration in Some Form</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
								<div class="benefit_content">
									<h6>cach on delivery</h6>
									<p>The Internet Tend To Repeat</p>
								</div>
							</div>
						</div>				
					</div>

					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
								<div class="benefit_content">
									<h6>45 days return</h6>
									<p>Making it Look Like Readable</p>
								</div>
							</div>
						</div>				
					</div>

					<!-- Color -->
					<div class="sidebar_section">
						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</div>
								<div class="benefit_content">
									<h6>opening all week</h6>
									<p>8AM - 09PM</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Main Content -->
					
					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">										
										<li>
											<span>Show</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>
									<br><br>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product 1 -->

									<?php 
                                		include "../config/koneksi.php";

                                		$query = "SELECT * FROM product";
                                		$result = mysqli_query($connect, $query);

                                		if (mysqli_num_rows($result) > 0) {
                                    		while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
									<form action="shopping_cartAdd.php" method="POST">
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="../product/<?php echo $row['Image']; ?>" height="235px" width="235px"/></td>
												<!-- height="125px" width="125px" -->
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html"><?php echo $row["ItemName"] ?></a></h6>
												<div class="product_price">Rp<?php echo $row["Price"] ?></div>												
												<!-- <span>$590.00</span> -->
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="shopping_cartAdd.php?Id=<?php echo $row['ItemId']; ?>">add to cart</a></div>
									</div>
									</form>
									<?php 
											}
										} else {
											echo "0 results";
										}
									?>

							</div>
						</div>
					</div>

					<!-- Product Sorting -->
								
					<div class="product_sorting_container product_sorting_container_bottom clearfix">
						<ul class="product_sorting">
							<li>
								<span>Show:</span>
								<span class="num_sorting_text">04</span>
								<i class="fa fa-angle-down"></i>
								<ul class="sorting_num">
									<li class="num_sorting_btn"><span>01</span></li>
									<li class="num_sorting_btn"><span>02</span></li>
									<li class="num_sorting_btn"><span>03</span></li>
									<li class="num_sorting_btn"><span>04</span></li>
								</ul>
							</li>
						</ul>
						<span class="showing_results">Showing 1–3 of 12 results</span>
						<div class="pages d-flex flex-row align-items-center">
							<div class="page_current">
								<span>1</span>
								<ul class="page_selection">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
								</ul>
							</div>
							<div class="page_total"><span>of</span> 3</div>
							<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		include "footer.php";
	?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>

</html>