<?php 
    include "../config/koneksi.php";

    // $ItemId = $_GET['ItemId'];
    $nama = $_POST['nama'];
    $description = $_POST['description'];
    $size = $_POST['size'];
    $price = $_POST['price'];

    $target_path = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../product/" .$target_path);

    $query = "INSERT INTO product(ItemId, ItemName, Description, Size, Image, Price)
                VALUES('', '$nama', '$description', '$size', '$target_path', '$price')";
    
    if (mysqli_query($connect, $query)) {
        header("Location:product.php");

    } else {
        echo "Record gagal ditambahkan". mysqli_error($connect);

    }
    
    mysqli_close($connect);
?>
