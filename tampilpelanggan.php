<!doctype html>
<html>
<head>
	<title>data pelanggan</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
	<h1><center>Data Pelanggan</center></h1>
    <div class="container">
<div class="row">
		<div class="col-md-12">
	<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
		<thead>
<tr>
	<td>Id Pelanggan</td><td>Nama Pelanggan</td><td>Jenis Kelamin</td><td>Usia</td>
	<td>Pekerjaan</td><td>No Telp</td><td>Alamat</td><td><a href="inputpelanggan.php">
			<button class="btn btn-info glyphicon glyphicon-plus"></button></a>
</tr>
</thead>
<tbody>
<?php

include "koneksi.php";
$sql=$koneksi->query("select * from tb_pelanggan order by kd_plgn DESC");

while($row= $sql->fetch_assoc()){

?>
		<tr>
			<td><?php echo $row['kd_plgn']?></td>
			<td><?php echo $row['nama']?></td>
			<td><?php echo $row['jk']?></td>
			<td><?php echo $row['usia']?></td>
			<td><?php echo $row['pekerjaan']?></td>
			<td><?php echo $row['no_telp']?></td>
			<td><?php echo $row['alamat']?></td>
			<td>

				<a href="edit_pelanggan.php?id=<?php echo $row['kd_plgn']?>">
				<button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button></a> 
				
				 <a href="hapus.php?id=<?php echo $row['kd_plgn']?>"  onclick=" return confirm('Anda yakin menghapus data?')">
		<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button></a>
		</tr>
   
	<?php
}
?>

   
</tbody>

	</table></div></div></td></div>

	<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
	<script type="text/javascript">
		<$(document).ready(function(){
			$('#dataTables').DataTables();
		});
	</script>
	
</body>
</html>
