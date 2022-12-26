<?php 
    include "../config/koneksi.php";

    $ItemId = $_GET['ItemId'];

    $query = "DELETE FROM product WHERE ItemId='$ItemId' ";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location:product.php");
    } else {
        header("Location:product.php");
    }
?>