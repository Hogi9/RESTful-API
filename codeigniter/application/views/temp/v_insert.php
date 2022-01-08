<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Karyawan</title>
</head>
<body>
	<div style="display:block; text-align:center; margin-top:5em;">
		<h2>Input Data</h2>
		<div style="display:inline-block; text-align:left;">
			<form action="<?php echo base_url(); ?>index.php/karyawan/insert" method="POST">
				Nama : <br><input type="text" name="nama"> <br>
				Telp : <br><input type="text" name="telp"> <br>
				Alamat : <br><textarea cols="22" name="alamat"></textarea> <br>
				Gaji : <br><input type="number" name="gaji"> <br>
				<div style="display:inline;">
					<input type="submit" name="submit" value="submit" style="float:right;margin-top:1em;">
					<button href="<?php echo base_url(); ?>" style="float:left; margin-top:1em;">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>