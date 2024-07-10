<?php
    // tạo kết nối
    $conn=mysqli_connect('localhost','root','','qlsv_lehoangdieu');
    if($conn){
        mysqli_query($conn,"SET NAMES 'UTF8'");
    }
    else{
        die("ket noi that bai" . mysqli_connect_error());
    }
?>