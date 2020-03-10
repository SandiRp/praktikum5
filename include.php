<?php 
//kondisi saat user/email kosong
if (empty ($_POST['nama'] && $_POST['Email'])) {
	header("Location:kosong.php");
}
else{
echo "<br><br><b><u><center>Halo ".$_POST['nama']."</center></u></b>";
echo "<center>Anda Login dengan email ".$_POST['Email']."</center>";}
?>