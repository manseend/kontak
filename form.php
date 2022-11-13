
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $no_Kontak = $_POST['no_Kontak'];
        $nama_Kontak = $_POST['nama_Kontak'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        //echo "$no_Kontak dan $nama_kontak";

        include "koneksi.php";

        mysqli_query($conn,"insert into kontak values ('$no_Kontak','$nama_Kontak','$alamat','$email')");

        header("location:LihatData.php");
    ?>
</body>
</html>