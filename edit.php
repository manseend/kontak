<?php 
                include "koneksi.php";

                $id = $_GET ['id'];

                $query = "SELECT * FROM kontak WHERE no_Kontak = $id";

                $result = mysqli_query($conn, $query);

                $row = mysqli_fetch_array($result); 
                
                ?>
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

<form action="update.php?di=<?php echo $row['no_Kontak'];?>"  method="post" >
                    
    <div class="flex justify-center h-screen w-screen items-center">
        <div class="w-full md:w-1/2 flex flex-col items-center ">
            
            <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">Edit Data Kontak</h1>
            
            
                <div class="w-3/4 mb-2">
                    <input type="text" name="no_Kontak" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " value="<?php echo $row['no_Kontak']; ?>"  placeholder="No HP" required></input>
                </div>

                <div class="w-3/4 mb-2">
                    <input type="text" name="nama_Kontak"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" value="<?php echo $row['nama_Kontak']; ?>" placeholder="Nama"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="alamat"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" value="<?php echo $row['alamat']; ?>" placeholder="Alamat"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="email"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" value="<?php echo $row['email']; ?>" placeholder="Email"></input>  
                </div> 
                <div>
                    <button type="submit" value="Simpan"  class="py-4 bg-blue-600 w-full rounded text-blue-50 font-bold hover:bg-blue-700" >
                        Simpan</button> 
                    <a hre></a>
                </div>
                
               
                <div class="w-3/4  mt-2">
                   
                    <button type="reset" value="Batal"  class="py-4 bg-gray-700 w-full rounded text-blue-50 font-bold hover:bg-red-700">
                        Reset</button>  
                </div>
                </form>
                
                    
                
</body>
</html>