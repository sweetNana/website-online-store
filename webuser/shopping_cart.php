<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link href="css/style1.css" rel="stylesheet">
</head>

<body>
<?php
	include "../config/koneksi.php";
	session_start();
	if($_SESSION['status'] == 'login') { 
?>
	<div class="super_container">

		<?php 		
			include "header.php";
		?>

		<br><br><br><br><br><br><br><br>
			

		<div class="row table-cart">
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				<form method="POST" action="save_cart.php">
				<table class="table table-bordered table-striped ">
					<thead>
						<!-- <th>Delete</th> -->
						<th>Name</th>
						<th>Price</th>											
					</thead>
					<tbody>
						<?php
							$total = 0;
							$index = 1;
							$query = "SELECT * FROM shopping_cart WHERE CustomerId=".$_SESSION['ID']." ";
							$result = mysqli_query($connect, $query);
							if(mysqli_num_rows($result) > 0){						
							//create array of initail qty which is 1
							
								while ($row = mysqli_fetch_assoc($result)) {	
									?>
									<tr>
										<!-- <td>
											<a href="delete_item.php?id=<?php echo $row['ItemId']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
										</td> -->
										<td><?php echo $row['ItemName']; ?></td>
										<td><?php echo number_format($row['Price'], 2); ?></td>										
										<?php $total += $index*$row['Price']; ?>
									</tr>
									<?php
									$index ++;
								}
							} else { ?>
								
								<tr>
									<td colspan="3" class="text-center">No Item in Cart</td>
								</tr>
								<?php
							}

						?>
						<tr>
							<td colspan="1" align="right"><b>Total</b></td>
							<td><b><?php echo number_format($total, 2); ?></b></td>
						</tr>
					</tbody>
				</table>
				<!-- <a href="produk.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a> -->
				<!-- <button type="submit" class="btn btn-success" name="save">Save Changes</button> -->
				<!-- <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a> -->
				
				<a href="shopping_cartFinal.php?Id=<?php echo $_SESSION['ID']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
				</form>
			</div>
		</div>

		<?php 
			include "footer.php";
		?>
	</div>
<?php
}  
	else {
		echo '<script type="text/javascript">alert("You have to Log In");window.location=\'login.php\';</script>';
	}
	
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>