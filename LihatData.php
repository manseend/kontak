

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
    <title>Document</title>
</head>
<body>
<div class="max-w-7xl mx-auto">
    <div class="inline-block min-w-full py-2 align-middle">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nomer_kontak</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">alamat</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">action</th>
                    </tr>
                </thead>
              
                <tbody class="divide-y divide-gray-200 bg-white">

<?php 
                include "koneksi.php";
                $data = mysqli_query($conn,"select * from kontak");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                     <tr class ="">
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 title"><h5></h5></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php echo $d['nama_Kontak'];?></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php echo $d['no_Kontak'];?></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?php echo $d['alamat']; ?></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                        <?php echo $d['email'];?>
                        </td> <td>
                        <a href="edit.php?id=<?php echo $d['no_Kontak'];?>" >UPDATE | </a>
                        <a href="Hapus.php?id=<?php echo $d['no_Kontak'];?>">HAPUS</a>
                </td>
                
                <td class="whitespace-nowrap px-3 py-4 text-sm">
                            <span class="flex justify-center">
                                 <i class="fa-thin fa-pen-to-square"></i>
                                   
                              
                            </span>
                        </td>
                
                <?php } ?>
               
                   
                        
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
             
                <a href="index.php" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Back</a>

                <script>
                .title{
                    counter-increment: h5;
                    title::berfor{
                        content: "chapter" counter(h5);
                        

                    }
                }
                    </script>
</body>

</html>