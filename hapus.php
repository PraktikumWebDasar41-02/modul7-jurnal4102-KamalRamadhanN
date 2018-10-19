<?php
include'conn.php';
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM kuliah WHERE id = $id");
if (mysqli_affected_rows($conn)>0) {
	echo "Berhasil";
	header('location:conn.php');
}
?>