
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
