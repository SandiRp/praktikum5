<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lighblue">
<?php
if (empty($_POST['NPM'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['Nama'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['usia'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['jurusan'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['Email'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['alamat'])) {
	header("Location:kurang.php");
}
elseif (empty($_POST['telp'])) {
	header("Location:kurang.php");
}
else{
echo "<br><br><u><center>NPM anda  ".$_POST['NPM']."</center></u>";
echo "<center>Nama anda  ".$_POST['Nama']."</center>";
echo "<center>Usia anda  ".$_POST['usia']." Tahun</center>";
echo "<center>Jurusan  ".$_POST['jurusan']."</center>";
echo "<center>jenis Kelamin  ".$_POST['JK']."</center>";
echo "<center>Email  ".$_POST['Email']."</center>";
echo "<center>tempat tinggal di jl.  ".$_POST['alamat']."</center>";
echo "<center>No Telp   ".$_POST['telp']."</center>";
}
?>
<center><button><a href="tugas1.php">Kembali Login</a></button></center>
</body>
</html>
