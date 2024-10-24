<div id="mycarousel" class="carousel slide">
	
<?php
if (!defined("INDEX")) die("---");
?>
	<ol class="carousel-indicators">
	<?php
		$result = $connection->query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 4");
		$no = 0;
		while ($data = $result->fetch_assoc()) {
	?>
		<li data-target="#mycarousel" data-slide-to="<?php echo $no; ?>"
			<?php if ($no == 0) echo ' class="active"'; ?>
		></li>
	<?php
			$no++;
		}	
	?>
	</ol>
	
	<div class="carousel-inner">
	<?php
		$result->data_seek(0); // Reset the pointer
		$no = 0;
		while ($data = $result->fetch_assoc()) {
			$isi = substr($data['isi'], 0, 300);
			$isi = substr($isi, 0, strrpos($isi, " "));
	?>
		<div class="item<?php if ($no == 0) echo ' active'; ?>">
			<img src="gambar/artikel/<?php echo $data['gambar']; ?>" width="100%">
		</div>
	<?php
			$no++;
		}
	?>
	</div>
	
	<a class="left carousel-control" href="#mycarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#mycarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
