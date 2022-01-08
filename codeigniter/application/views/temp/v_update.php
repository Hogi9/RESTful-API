<!DOCTYPE html>
<html>
<head>
	<title>Update Data Karyawan</title>
</head>
<body>
	<div style="display:block; text-align:center; margin-top:5em;">
	<h2>Update Data</h2>
		<div style="display:inline-block; text-align:left;">
			<form action="<?php echo base_url(); ?>index.php/karyawan/store_data" method="POST">
				<?php foreach ($karyawan as $key): ?>
				ID : <br><input type="text" name="id" value="<?php echo $key->id_karyawan ?>" READONLY> <br>
				Nama : <br><input type="text" name="nama" value="<?php echo $key->nama ?>"> <br>
				Telp : <br><input type="text" name="telp" value="<?php echo $key->telp ?>"> <br>
				Alamat : <br><textarea cols="22" name="alamat"><?php echo $key->alamat ?></textarea> <br>
				Gaji : <br><input type="number" name="gaji" value="<?php echo $key->gaji ?>"> <br>
				<?php endforeach ?>
				<div style="display:inline;">
					<input type="submit" name="submit" value="update" style="float:right;margin-top:1em;">
					<button href="<?php echo base_url(); ?>" style="float:left; margin-top:1em;">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>