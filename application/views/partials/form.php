DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter </h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url('index.php/monitoring/updatedata')?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>kd_room</td>
				<td><input type="text" name="kd_room"></td>
			</tr>
			<tr>
				<td>suhu</td>
				<td><input type="varchar" name="suhu"></td>
			</tr>
			<tr>
				<td>kelembapan</td>
				<td><input type="varchar" name="kelembapan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
