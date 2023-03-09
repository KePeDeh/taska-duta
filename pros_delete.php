<?php
include 'config.php';

$id_anak = $_GET['id_anak'];
$query = "DELETE FROM data WHERE id_anak = $id_anak";
$result = mysqli_query($con,$query);

if (mysqli_query($con,$query)){
    echo "<script>alert('Maklumat berjaya dihapuskan')</script>"."<script>window.location='index.php'</script>";
}
else {
    echo "<script>alert('Maklumat tidak berjaya dihapuskan')</script>";
}
?>