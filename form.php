
    <?php
        $no_Kontak = $_POST['no_Kontak'];
        $nama_Kontak = $_POST['nama_Kontak'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        //echo "$no_Kontak dan $nama_kontak";

        include "koneksi.php";

        $query = "insert into kontak values ('$no_Kontak','$nama_Kontak','$alamat','$email')";
        mysqli_query($conn , $query);

        
        if(mysqli_affected_rows($conn) > 0) {
            //redirect ke halaman index.php 
            echo "<script>
                    alert('data berhasil di tambahkan!');
                    document.location.href='LihatData.php'
                </script>";
            
        } else {
            //pesan error gagal update data
            echo "<script>
            alert('data gagal di tambahkan!');
        </script>";
        }
        
    ?>
