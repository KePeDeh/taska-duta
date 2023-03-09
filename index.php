<?php
include ('config.php');
//code

	$result = mysqli_query($con, "SELECT * FROM data");

?>

<table align="center">
<p align="center">Pendaftaran Taska Duta</p>
		<td align="center" bgcolor="cyan">ID ANAK</td>
		<td align="center" bgcolor="cyan">NAMA ANAK</td>
		<td align="center" bgcolor="cyan">NAMA PENJAGA</td>
		<td align="center" bgcolor="cyan">JANTINA</td>
			<td align="center" bgcolor="cyan">UMUR</td>
            <td align="center" bgcolor="cyan">HAPUS</td>
			

<?php
//code
	while($res = mysqli_fetch_array($result)){	
		echo "<tr>";
		echo "<td>".$res['id_anak']."</td>";
		echo "<td>".$res['nama_anak']."</td>";
		echo "<td>".$res['nama_penjaga']."</td>";
		echo "<td>".$res['jantina']."</td>";
		echo "<td>".$res['umur']."</td>";
        echo "<td>","<a href= \"pros_delete.php?id_anak=$res[id_anak]\">HAPUS</a>";
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br><h3><center><a href="form.php">Daftar Kursus</a></center></h3>