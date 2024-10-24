<?php
if(!defined("INDEX")) die("---");

mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],"From: pemilikwebsite@gmail.com");

echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=pesan'>";
?>