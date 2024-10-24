<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Menu</h2>

<a href="?tampil=menu_tambah" class="btn btn-primary">Tambah Menu</a><br><br>

<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Judul Menu</th>
			<th>Link</th>
			<th>Urutan</th>
			<th>Aksi</th>
		</tr>
		
		<?php
			$no=1;
			$sql = mysql_query("SELECT * FROM menu order by urutan") or die(mysql_error());
			while($data=mysql_fetch_array($sql)){
		?>
		
		<tr>
			<td> <?php echo $no; ?> </td>
			<td> <?php echo $data['judul']; ?> </td>
			<td> <?php echo $data['link']; ?> </td>
			<td> <?php echo $data['urutan']; ?> </td>
			<td> 
				<a href="?tampil=menu_edit&id=<?php echo $data['id_menu']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
				<a href="?tampil=menu_hapus&id=<?php echo $data['id_menu']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
			</td>
		</tr>
		
		<?php 
				$no++;
			} 
		?>
		
	</table>
</div>