<?php 
    include "../config/koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE admin SET nama='$nama', nohp='$nohp', alamat='$alamat', username='$username', password='$password' WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        //echo "Berhasil update data ke database ";
        header("Location:userAdmin.php");
    } else {
        // header("Location:productEdit.php");
        echo '<script type="text/javascript">alert("There is Something Wrong");window.location=\'userAdminEdit.php\';</script>';
    }
?>