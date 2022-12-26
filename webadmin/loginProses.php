
<?php 
    include "../config/koneksi.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];;

    $sql = "SELECT * FROM admin WHERE username='$username' and password='$password' ";
    $result = mysqli_query($connect, $sql);
    $cek = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($cek == 0) {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.html\';</script>';

    } else {
        session_start();
        $_SESSION['Name'] = $row["nama"];
        $_SESSION['status'] = 'login';
        header("Location:index.php");        
    }
   
?>
