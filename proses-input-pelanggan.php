<?php

$kd_plgn=$_POST['kd_plgn'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$usia=$_POST['usia'];
$pekerjaan=$_POST['pekerjaan'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];

include "koneksi.php";
$simpan=$koneksi->query("insert into tb_pelanggan(kd_plgn,nama,jk,usia,pekerjaan,no_telp,alamat) values 
	('$kd_plgn','$nama','$jk','$usia','$pekerjaan','$no_telp','$alamat')");

if($simpan==true){
	header("location:tampilpelanggan.php?pesan=inputBerhasil");

}else{
	echo "Error";
}



?>