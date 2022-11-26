<!DOCTYPE html>
<html>
<head>
    <title>
      Menampilkan hasil inputan Form pelangan
    </title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<form action="proses-input-pelanggan.php" method="POST">

			<div class="form-group">
			<label for="kd_plgn">Id Pelanggan</label>
			<input type="text" name="kd_plgn"class="form-control">
			</div>

			<div class="form-group">
			<label for="nama">Nama Pelanggan</label>
			<input type="text" name="nama" class="form-control">
			</div>


			<div class="form-group">
			<label for="jk">Jenis kelamin</label>
			<select name="jk" class="form-control">
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option></select>
			</div>

			<div class="form-group">
			<label for="usia">Usia</label>
			<input type="text" name="usia" class="form-control">
			</div>

			<div class="form-group">
			<label for="pekerjaan">Pekerjaan</label>
			<select name="pekerjaan" class="form-control">
			<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
			<option value="BUMN">BUMN</option>
			<option value="CPNS">CPNS</option> 
		    <option value="Lainnya">Lainnya</option></select>
			</div>

			<div class="form-group">
			<label for="no_telp">Nomor telepon</label>
			<input type="number" name="no_telp" class="form-control">
			</div>

			<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea name="alamat" class="form-control"></textarea>
		</div>

			<input type="submit" name="simpan" value="simpan" class="btn btn-info">
			<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">
	</form>

</div>
</div>
</div>
<script src="bootstrap/js/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 