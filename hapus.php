<?php
require_once("db.php");

//simpan data kode
$kode =$_GET['kode'];
//query sql
$sql = "DELETE FROM mahasiswa where kode=$kode ";
mysqli_query($conn,$sql);
header("Location:proses.php");
?>
