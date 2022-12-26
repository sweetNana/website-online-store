<?php 
    include "../config/koneksi.php";

    $ItemId = $_POST['ItemId'];
    $nama = $_POST['nama'];
    $description = $_POST['description'];
    $size = $_POST['size'];
    $price = $_POST['price'];

    $target_path = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../product/" .$target_path);

    $query = "UPDATE product SET ItemName='$nama', Description='$description', Size='$size', Image='$target_path', Price='$price' WHERE ItemId='$ItemId'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        //echo "Berhasil update data ke database ";
        header("Location:product.php");
    } else {
        // header("Location:productEdit.php");
        echo '<script type="text/javascript">alert("There is Something Wrong");window.location=\'productEdit.php\';</script>';
    }
?>