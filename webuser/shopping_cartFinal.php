
<?php
	include "../config/koneksi.php";
	session_start();
	if($_SESSION['status'] == 'login') { 

	    $Id=$_GET['Id'];
		$query = "select * from shopping_cart where CustomerId=".$Id."";
		$result = mysqli_query($connect, $query);
        $total=0;
        $index = 1;
		while($row = mysqli_fetch_array($result))
		{
		$Id=$row['CartId'];
		$Name=$row['ItemName'];		
		$Price=$row['Price'];
        $total += $index*$row['Price'];	
        $index ++;			
		}
		$CID=$_SESSION['ID'];
		$ODate= date('y/m/d');
		mysqli_close ($connect);

		include "../config/koneksi.php";
		$query = "insert into shopping_cart_final(CartId,CustomerId,ItemName,Price,Total,OrderDate) values(".$Id.",".$CID.",'".$Name."',".$Price.",".$total.",".$ODate.")";
		mysqli_query($connect, $query);
		mysqli_close ($connect);
		echo '<script type="text/javascript">alert("Berhasil");window.location=\'index.php\';</script>';
	 
    }  else {
		echo '<script type="text/javascript">alert("You have to Log In");window.location=\'login.php\';</script>';
	}
	
?>

