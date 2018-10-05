<?php
require_once("db.php");
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$tgl_lahir=$_POST['tgl_lahir'];

$sql="UPDATE mahasiswa SET nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir' where kode='$kode' ";
if(mysqli_query($conn,$sql)){
	header("location:proses.php");
}else{
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
;

?>