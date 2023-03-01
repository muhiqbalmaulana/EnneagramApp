<?php

   ob_start();
   $koneksi;
   $namaserver=	"localhost";
   $username	=	"root";
   $password	=	"";
   $namadb		=	"db_enneagram";

   $koneksi	=	mysqli_connect($namaserver,$username,$password,$namadb);
   if(!$koneksi) {
      die("Maaf, Koneksi Gagal:".mysqli_connect_error());
   }

?>
