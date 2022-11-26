




<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from tb_pelanggan where kd_plgn='$id'");

if($hapus==true){

header("location:tampilpelanggan.php?pesan=hapusBerhasil");

} else{

   echo "Error";
}

?>