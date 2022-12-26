<?php 
    include "../config/koneksi.php";

    // $ItemId = $_GET['ItemId'];
    $email = $_POST['email'];
    

    $query = "INSERT INTO feedback(FeedbackId, email)
                VALUES('', '$email')";
    
    if (mysqli_query($connect, $query)) {
        header("Location:index.php");

    } else {
        echo "Record gagal ditambahkan". mysqli_error($connect);

    }
    
    mysqli_close($connect);
?>
