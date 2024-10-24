<?php
	if(!defined("INDEX")) die("---");

	$isi = addslashes($_POST['isi']);
	mysql_query("UPDATE halaman SET 
			judul	= '$_POST[judul]', 
			isi		= '$isi' 
		WHERE id_halaman='$_POST[id]'") or die(mysql_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=halaman'>";
?>