<?php
if(!defined("INDEX")) die("---");
	
$data=mysql_fetch_array(mysql_query("select * from galeri where id_galeri='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/galeri/$data[gambar]");

mysql_query("delete from galeri where id_galeri='$_GET[id]'") or die(mysql_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=galeri'>";
?>