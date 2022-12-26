<?php 
    include "../config/koneksi.php";

    // $ItemId = $_GET['ItemId'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    MD5($password = $_POST['password']);

    $query = "INSERT INTO customer_registration(CustomerId, UserName, Email, Password)
                VALUES('', '$username', '$email', '$password')";
    
    if (mysqli_query($connect, $query)) {
        echo '<script type="text/javascript">alert("Your Registration has been created");window.location=\'register.php\';</script>';

    } else {
        echo '<script type="text/javascript">alert("Cannot Registration");window.location=\'register.php\';</script>';

    }
    
    mysqli_close($connect);
?>
