<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<table border="1">
<head>
		<th>Kode</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Tanggal Lahir</th>
		<th>Action</th>
</head>
<body>
	
	<?php
		$sql ="SELECT * FROM mahasiswa";
		$result =mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$kode =$row['kode'];
				echo "<tr>";
				echo "<td>".$row['kode']."</td>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['nim']."</td>";
				echo "<td>".$row['tgl_lahir']."</td>";
				echo "<td>"."<a href='edit.php?kode=$kode'>Edit</a> | <a href='hapus.php?kode=$kode'>Delete</a>"."</td>";
				echo "</tr>";				
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>
</body>
</table>
</html>
