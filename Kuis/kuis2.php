   <?php

   $a = $_POST['nim'];
   $b = $_POST['nama'];
   $c = $_POST['jenis'];

   echo "Selamat Datang " .$b."<br>";
   if($c=="Pria"){
      echo "Anda adalah mahasiswa ";
   } else {
      echo "Anda adalah mahasiswi ";
   }

   $prgd = substr($a,0,2);
   if($prgd == "67"){
      echo "Progdi Teknik Informatika ";
   }
   if($prgd == "68"){
      echo "Progdi Sistem Informasi ";
   }
   if($prgd == "69"){
      echo "Progdi DKV ";
   } 

   $angkt = substr($a,2,4);
   echo "Angkatan " .$angkt;

   ?>