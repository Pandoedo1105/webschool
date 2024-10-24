<?php
	if(!defined("INDEX")) die("---");
	
	if($_POST['password'] == ""){
	    mysql_query("UPDATE user SET 
			username	= '$_POST[username]'
		") or die(mysql_error());
		echo"Profil berhasil di edit";
	}else{
		if($_POST['password'] != $_POST['password_ulang']){
			echo"<p style='color:red'>Password dan ulang password tidak sama</p>";
		}else{
			$password = md5($_POST['password']);
			mysql_query("UPDATE user SET 
					username	= '$_POST[username]',
					password	= '$password'
				") or die(mysql_error());
			echo"Profil berhasil di edit";
		}
	}
	
	echo"<meta http-equiv='refresh' content='1; url=?tampil=user_edit'>";
?>