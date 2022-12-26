<?php 
    include "../config/koneksi.php";

    $FeedbackId = $_GET['FeedbackId'];

    $query = "DELETE FROM feedback WHERE FeedbackId='$FeedbackId' ";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location:feedback.php");
    } else {
        header("Location:feedback.php");
    }
?>