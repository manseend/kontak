
<?php

$no_Kontak = $_POST['no_Kontak'];
$nama_Kontak = $_POST['nama_Kontak'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$id = $_GET ['di'];

//query update data ke dalam database berdasarkan ID
include 'koneksi.php';
$query = "UPDATE kontak SET no_Kontak='$no_Kontak', nama_Kontak='$nama_Kontak', alamat='$alamat', email='$email' WHERE no_Kontak='$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 

    header("location:LihatData.php");
} else {
    //pesan error gagal update data
    echo $query;
  
    echo "Data Gagal Diupate!";
}
