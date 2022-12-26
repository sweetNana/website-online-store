<?php
	include "../config/koneksi.php";
	session_start();
	if($_SESSION['status'] == 'login') { 
		$Id=$_GET['Id'];
		$query = "select * from product where ItemId=".$Id."";
		$result = mysqli_query($connect, $query);

		while($row = mysqli_fetch_array($result))
		{
		$Id=$row['ItemId'];
		$Name=$row['ItemName'];
		$Description=$row['Description'];
		$Size=$row['Size'];
		$Price=$row['Price'];		
		$Image=$row['Image'];
		}
		$CID=$_SESSION['ID'];
		$ODate= date('y/m/d');
		mysqli_close ($connect);

		include "../config/koneksi.php";
		$query = "insert into shopping_cart(CustomerId,ItemName,Price,OrderDate) values(".$CID.",'".$Name."',".$Price.",".$ODate.")";
		mysqli_query($connect, $query);
		mysqli_close ($connect);
		echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'categories.php\';</script>';
	 }  
		else {
			echo '<script type="text/javascript">alert("You have to Log In");window.location=\'login.php\';</script>';
		}
	
?>