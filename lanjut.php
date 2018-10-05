<?php
require_once("db.php");
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbase = "webdasar";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$tgl_lahir=$_POST['tgl_lahir'];

$sql="INSERT INTO mahasiswa(kode, nama, nim, tgl_lahir) 
		VALUES ('$kode','$nama','$nim','$tgl_lahir')";

if (mysqli_query($conn,$sql)) {
	header("Location:proses.php");
} 
else{
	echo "Eror:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>