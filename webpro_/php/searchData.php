<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbakademik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<tr>
    <td class="padding border-bottom bg-color center" colspan="5">

<form action="" method="post">
	<label>Search :</label>
	<input type="text" name="search">
	<input type="submit" value="search">
</form>

<?php 
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		echo "<b>Hasil pencarian : ".$search."</b>";
	}
?>

 	<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>

	<?php 
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama LIKE '%".$search."%'");				
	}else{
		$result = mysqli_query($conn, "SELECT * FROM mahasiswa");		
	}

	$no = 1;
	while($d = mysqlI_fetch_array($result)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>


</table>

	</td>
	</tr>

