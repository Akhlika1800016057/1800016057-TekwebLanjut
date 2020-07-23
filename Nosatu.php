<html>
<body>

<?php 
$nama = $nim = $gender = $prodi = "";
?>

<h2> Form Data Mahasiswa </h2>
<form action="datatugas1.php" method="post">
Nama : <input type="text" name="nama"><br><br>
NIM:  <input type="text" name="nim"><br><br>
Jenis Kelamin : 
Jenis Kelamin : <BR><br>
<input type=RADIO name="gender" value="Laki-laki"> Laki-laki 
<input type=RADIO name="gender" value="Perempuan"> Perempuan <BR><br>

<label for="cars"> Program Studi : </label>
<select id="cars" name="prodi">
<option value="Sistem Informasi" selected> Sistem Informasi </option>
<option value="Biologi"> Biologi </option>
<option value="Fisika"> Fisika </option>
<option value="Matematika"> Matematika </option>
</select>
<br><br>

<input type="submit" name="submit" value="Kirim">
</form>
</body>
</html>