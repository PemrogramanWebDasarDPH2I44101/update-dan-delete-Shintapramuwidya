<?php
require_once("db.php");
$kode=$_GET['kode'];
$mahasiswa=mysqli_query($conn,"select*from mahasiswa where kode='$kode'");
$row = mysqli_fetch_array($mahasiswa);

function active_radio_button($value,$input){
$result = $value == $input?'chacked':'';
return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['kode'];?>" name="kode">
	<table >
		<form action="update.php" method="POST">
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['kode']; ?>" name="kode"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>

			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['tgl_lahir']; ?>" name="tgl_lahir"></td>
			</tr>

			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</form>
	</table>
</body>
</html>