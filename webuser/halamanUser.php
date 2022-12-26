<!DOCTYPE html>
<html lang="en">
<head>
<title>Kanaya Store - User</title>
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
</head>

<body>
<?php                     
	session_start();
	if($_SESSION['status'] == 'login') { 
?> 
	<div class="super_container">

	<?php 
		include "header.php";
	?>

	<br><br><br><br><br><br><br><br>
			
	<div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h3>Welcome <?php echo $_SESSION['Name'];?></h3>
					</div>
					<a href="shopping_cart.php"><button id="newsletter_submit" class="newsletter_submit_btn trans_300">GOTO CHART</button></a>
					<a href="logout.php"><button id="newsletter_submit" class="newsletter_submit_btn trans_300">Log Out</button></a>					
                </div>
            </div>
        </div>
    </div>

	
    
                          

	<?php 
		include "footer.php";
	?>
	

	</div>

<?php }  
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