<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "kanayastore";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect -> connect_error){
        die('Maaf koneksi gagal' . $connect -> connect_error);
    }
?>