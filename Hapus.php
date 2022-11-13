<?php
include 'koneksi.php';

$id = $_GET ['id'];
echo $id;

mysqli_query($conn,"delete from Kontak where no_Kontak='$id'");


header("location:LihatData.php");