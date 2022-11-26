
 
<!DOCTYPE HTML>
<html>
<head>
	
	<title> Menampilkan hasil inputan form </title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
</head>
  <body>
	    <div class="container">
		<div class="row">
			<div action="col-md-12">
				<form action="proses_edit.php" method="POST">
				
				<?php
				$id=$_GET['id'];
				include "koneksi.php";
				$tampil=$koneksi->query("select * from tb_pelanggan where kd_plgn='$id'");
				$row=$tampil->fetch_assoc();
				?>
					
					<div class="form-group">
						<label form="kd_plgn">ID</label>
						<input type="hidden" name="kd_plgn" value="<?php echo $row['kd_plgn']?>" class="form-control">
						<input type="number" name="kd_plgn" value="<?php echo $row['kd_plgn']?>" class="form-control">
					</div>
					
					
					<div class="form-group">
						<label form="nama">NAMA PELANGGAN</label>
						<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					</div>
					
					 <div class="form-group">
						<label form="jk">Jenis Kelamin</label>
						<select name="jk" class="form-control">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option></select>
					</div>
					
					<div class="form-group">
						<label form="usia">Usia</label>
						<input type="text" name="usia" value="<?php echo $row['usia']?>"class="form-control">
					</div>
				 
					<div class="form-group">
						<label form="pekerjaan">Pekerjaan</label>
						 <select name="pekerjaan" class="form-control">  
						<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
								<option value="BUMN">BUMN</option>
								<option value="CPNS">CPNS</option> 
								<option value="Lainnya">Lainnya</option></select>	
					</div>
					
				<div class="form-group">
						<label form="no_telp">No Telepon</label>
						<input type="number" name="no_telp" value="<?php echo $row['no_telp']?>"class="form-control">
					</div>
					
				<div class="form-group">
						<label form="alamat">Alamat</label>
						<input type="text" name="alamat" value="<?php echo $row['alamat']?>"class="form-control">
					</div>
					</div>
					</div>
				
						<input type="submit" name="ubah" value=ubah class="btn btn-info">
						<input type="reset" name="kosongkan" value=kosongkan class="btn btn-danger">
						
				</form>	
			</div>
		 
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>