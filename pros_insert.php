<?php
include 'config.php';

//code

if (isset($_POST['update'])){

	$id_anak = $_POST['id_anak'];
	$nama_anak = $_POST['nama_anak'];
	$nama_penjaga = $_POST['nama_penjaga'];
	$jantina = $_POST['jantina'];
	$umur = $_POST['umur'];

	$query = "INSERT INTO data(id_anak, nama_anak, nama_penjaga, jantina, umur)"."VALUES('$id_anak', '$nama_anak', '$nama_penjaga', '$jantina', '$umur')";

	if (mysqli_query($con,$query)) {
		echo "alert Data berjaya direkod";
		header('location:index.php');
	}
	else{
		echo"data tidak berjaya direkod";
	}

}


?>