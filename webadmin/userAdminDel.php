<?php 
    include "../config/koneksi.php";

    $id = $_GET['id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location:userAdmin.php");
    } else {
        header("Location:userAdmin.php");
    }
?>