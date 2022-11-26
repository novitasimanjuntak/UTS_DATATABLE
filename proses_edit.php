


<?php

include "koneksi.php";

$kd_plgn=$_POST['kd_plgn'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$usia=$_POST['usia'];
$pekerjaan=$_POST['pekerjaan'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
 

$ubah=$koneksi->query("update tb_pelanggan set kd_plgn='$kd_plgn', nama='$nama', jk='$jk', usia='$usia', pekerjaan='$pekerjaan', no_telp='$no_telp', alamat='$alamat',  where kd_plgn='$'");
				  
				  
 if($ubah==true){

header("location:tampilpelanggan.php");
} else{
   echo "Error";
}

?>