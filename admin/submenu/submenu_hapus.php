<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("delete from submenu where id_submenu='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=submenu'>";
?>