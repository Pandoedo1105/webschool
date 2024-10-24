<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Sub Menu</h2>

<a href="?tampil=submenu_tambah" class="btn btn-primary">Tambah Sub Menu</a><br><br>
	
<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Sub Menu</th>
		<th>Induk</th>
		<th>Link</th>
		<th>Urutan</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$sql = mysql_query("SELECT * FROM submenu order by urutan") or die(mysql_error());
		while($data=mysql_fetch_array($sql)){
			$sqlmenu = mysql_query("SELECT * FROM menu where id_menu='$data[id_menu]'");
			$datamenu = mysql_fetch_array($sqlmenu);
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $datamenu['judul']; ?> </td>
		<td> <?php echo $data['link']; ?> </td>
		<td> <?php echo $data['urutan']; ?> </td>
		<td> 
			<a href="?tampil=submenu_edit&id=<?php echo $data['id_submenu']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=submenu_hapus&id=<?php echo $data['id_submenu']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>