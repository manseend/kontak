<?php 
    $conn = mysqli_connect("localhost","root","","namakalian");
    if (!$conn) {
        die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
    }
 
    // if (mysqli_connect_errno()){
    //     echo "koneksi database gagal : " .mysqli_conncet_error();
    // }
    // else{
    //     echo "berhasil";
    // }
    // ?>