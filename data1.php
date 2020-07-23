<html>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
  
}
</style>
<body> 
<? 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nama = test_input($_POST["nama"]);
	$nim = test_input($_POST["nim"]);
	$gender = test_input($_POST["gender"]);
	$prodi = test_input($_POST["prodi"]);
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<table style="width:50%">
<tr>
<td><b>Nama</b></td>
<td><?php echo $nama; ?></td>
</tr>

<tr>
<td><b>NIM</b></td>
<td><?php echo $nim; ?></td>
</tr>

<tr>
<td><b>Gender</b></td>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<td><b>Program Studi</b></td>
<td><?php echo $prodi; ?></td>
</tr>
	
</table>
</body>
</html>