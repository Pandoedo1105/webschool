<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysql_query("SELECT * FROM halaman WHERE id_halaman='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Halaman</h2>

<form name="edit" method="post" action="?tampil=halaman_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_halaman']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Halaman</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Isi Halaman</label>			
			<div class="col-md-10"><textarea name="isi" rows="15" class="form-control"><?php echo $data['isi']; ?></textarea></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div> 
		</div>
	
</form>