<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("UPDATE menu SET judul='$_POST[judul]', link='$_POST[link]', urutan='$_POST[urutan]' 
				WHERE id_menu='$_POST[id]'") or die(mysql_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>