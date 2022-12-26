<?php 
    include "../config/koneksi.php";

    // $ItemId = $_GET['ItemId'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO admin(id, nama, nohp, alamat, username, password)
                VALUES('', '$nama', '$nohp', '$alamat', '$username', '$password')";
    
    if (mysqli_query($connect, $query)) {
        header("Location:userAdmin.php");

    } else {
        echo "Record gagal ditambahkan". mysqli_error($connect);

    }
    
    mysqli_close($connect);
?>
