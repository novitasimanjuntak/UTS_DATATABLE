<?php

$id=$_GET['id_pelanggan'];

include "hubung.php";
$hapus=$hubung->query("delete from pelanggan where id_pelanggan='$id'");

if($hapus==true){

	header("location:tampilpelanggan.php?pesan=hapusBerhasil");


}else{
	echo "Error";
}

?>