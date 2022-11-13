<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="LihatData.php">kembali</a>
<?php 
                include "koneksi.php";
                $id = $_GET ['id'];
                $data = mysqli_query($conn,"select * from Kontak where no_Kontak='$id'");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <form method="post" action="form.php" >
    <div class="flex justify-center h-screen w-screen items-center">
        <div class="w-full md:w-1/2 flex flex-col items-center ">
            
            <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">Edit Data Kontak</h1>
            
            
                <div class="w-3/4 mb-2">
                    <input type="text" name="no_Kontak" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="No HP">value="<?php echo $d['no_Kontak']; ?>"></input>
                </div>

                <div class="w-3/4 mb-2">
                    <input type="text" name="nama_Kontak"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Nama">value="<?php echo $d['nama_Kontak']; ?>"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="alamat"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Alamat">value="<?php echo $d['alamat']; ?>"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="email"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Email">value="<?php echo $d['email']; ?>"></input>  
                </div> 

                <div class="w-3/4 mt-2">
                    <button type="submit" value="Simpan"  class="py-4 bg-blue-600 w-full rounded text-blue-50 font-bold hover:bg-blue-700">
                        Simpan</button>  
                </div>
                <div class="w-3/4  mt-2">
                    <button type="reset" value="Batal"  class="py-4 bg-gray-700 w-full rounded text-blue-50 font-bold hover:bg-red-700">
                        Reset</button>  
                </div>
                </form>
                
                    
                <?php } ?>
</body>
</html>