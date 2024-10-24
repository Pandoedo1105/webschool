<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("INSERT INTO submenu set
			judul 	= '$_POST[judul]',
			id_menu ='$_POST[induk]', 
			link	= '$_POST[link]',
			urutan	= '$_POST[urutan]'
		") or die(mysql_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=submenu'>";
?>