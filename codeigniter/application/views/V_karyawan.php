<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Tugas 2 View Tabel</title>
</head>
<body>
		<div style="float:right;margin-right:2em;">
			<a class="btn btn-outline-dark" href="<?php echo base_url()?>index.php/karyawan/destroy_sess">Logout</a>
		</div>
		
		<div class="Data Diri" style="margin-top:2em; margin-left:1em;">
			<p>Nama : M Darojatun Hogi</p>
			<p>NPM : 18081010088</p>
			<a class="btn btn-outline-primary" href="<?php echo base_url()?>index.php/karyawan/insert" >Tambah Data</a>
		</div>
		<div class="tabel" style="text-align:center;">
			<h3>Tabel Karyawan</h3>
		</div>
		<table border = "1" class="table table-striped">
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Telp</td>
					<td>Alamat</td>
					<td>Gaji</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php $a=1; foreach ($karyawan as $key): ?>
				<tr>
					<td><?php echo $a++; ?></td>
					<td><?php echo $key->nama ?></td>
					<td><?php echo $key->telp ?></td>
					<td><?php echo $key->alamat ?></td>
					<td><?php echo $key->gaji ?></td>
					<td><a class="btn btn-outline-success" href="<?php echo base_url()?>index.php/karyawan/update/<?php echo $key->id_karyawan?>">Update</a>    <a class="btn btn-outline-danger" href="<?php echo base_url()?>index.php/karyawan/delete/<?php echo $key->id_karyawan?>">Delete</a></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

</body>
</html>