
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body class="bg-gray-100">
<form method="post" action="form.php" >
    <div class="flex justify-center h-screen w-screen items-center">
        <div class="w-full md:w-1/2 flex flex-col items-center ">
            
            <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">Entry Data Kontak</h1>
            
            
                <div class="w-3/4 mb-2">
                    <input type="text" name="no_Kontak" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="No HP" required></input>
                </div>

                <div class="w-3/4 mb-2">
                    <input type="text" name="nama_Kontak"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Nama"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="alamat"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Alamat"></input>  
                </div> 

                <div class="w-3/4 mb-2">
                    <input type="text" name="email"class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Email"></input>  
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
           <div class="w-2/4 text-center rounded p-4 m-2 bg- hober:ring-1 outline-blue-500">
                <i class="fa-regular fa-eye rounded text-gray-900 px-8" ><a href="LihatData.php"> Lihat Data</a></i>
            
            </div>
                
            
</body>
</html>