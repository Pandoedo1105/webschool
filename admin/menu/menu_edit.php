<?php
	if(!defined("INDEX")) die("---");

	$sql = mysql_query("SELECT * FROM menu WHERE id_menu='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($sql);
?>

<h2 class="sub-header">Edit Menu</h2>

<form name="edit" method="post" action="?tampil=menu_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_menu']; ?>">
	<div class="form-group">
		<label class="label-control col-md-2">Judul Menu</label>	
		<div class="col-md-4">
			<input type="text" class="form-control" name="judul" class="form-control" value="<?php echo $data['judul']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Link</label>	
		<div class="col-md-6">
			<input type="text" class="form-control" name="link" class="form-control" value="<?php echo $data['link']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Urutan</label>	
		<div class="col-md-1">
			<input type="text" class="form-control" name="urutan" class="form-control" value="<?php echo $data['urutan']; ?>">
		</div>
	</div>	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" name="edit" value="Edit" class="btn btn-primary">
		</div>
	</div>	
</form>