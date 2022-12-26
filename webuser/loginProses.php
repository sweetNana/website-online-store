<?php 
    include "../config/koneksi.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];;

    $sql = "SELECT * FROM customer_registration WHERE UserName='$username' and Password='$password' ";
    $result = mysqli_query($connect, $sql);
    $cek = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($cek == 0) {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';

    } else {
        $_SESSION['ID']=$row['CustomerId'];
        $_SESSION['Name']=$row['UserName'];
        $_SESSION['Email']=$row['Email'];
        $_SESSION['status'] = 'login';
        header("Location:halamanUser.php");        
    }
   
?>
