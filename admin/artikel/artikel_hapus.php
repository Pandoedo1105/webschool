<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from artikel where id_artikel='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/artikel/$data[gambar]");

	mysql_query("delete from artikel where id_artikel='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=artikel'>";
?>