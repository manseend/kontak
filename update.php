
<?php

$no_Kontak = $_POST['no_Kontak'];
$nama_Kontak = $_POST['nama_Kontak'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$id = $_GET ['di'];

include 'koneksi.php';
$query = "UPDATE kontak SET no_Kontak='$no_Kontak', nama_Kontak='$nama_Kontak', alamat='$alamat', email='$email' WHERE no_Kontak='$id'";
mysqli_query ($conn,$query);

if(mysqli_affected_rows($conn) > 0) {
    echo     
        "<script>
            alert('data berhasil di update!');
            document.location.href='LihatData.php'
        </script>";
} else {
    echo 
        "<script>
            alert('data gagal di tambahkan!');
        </script>";
}
