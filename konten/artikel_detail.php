<?php
if (!defined("INDEX")) die("---");

$artikelId = $_GET['id'];
$connection->query("UPDATE artikel SET hits = hits + 1 WHERE id_artikel = '$artikelId'");

$artikel = $connection->query("SELECT * FROM artikel WHERE id_artikel = '$artikelId'");
$data = $artikel->fetch_assoc();
$isi = $data['isi'];
?>
<ul class="breadcrumb">
    <li>Home</li>
    <li class="active">Artikel detail</li>
</ul>

<div class="artikel">
    <h2 class="judul"><?php echo htmlspecialchars($data['judul']); ?></h2>
    <p>
        <?php if ($data['gambar'] != "") { ?>
            <img src="gambar/artikel/<?php echo htmlspecialchars($data['gambar']); ?>" class="thumbnail" width="100%">
        <?php } ?>
        <?php echo $isi; ?> 
    </p>
</div>

<?php
$komentar = $connection->query("SELECT * FROM komentar WHERE id_artikel = '$artikelId'");
$jmlkomentar = $komentar->num_rows;
?>
<h3><?php echo $jmlkomentar; ?> Komentar</h3>
<hr>
<?php
while ($datakomen = $komentar->fetch_assoc()) {
    $tgl_komen = tgl_indonesia($datakomen['tanggal']);
?>
    <div class="komentar">
        <h5><b><?php echo htmlspecialchars($datakomen['nama']); ?> - <?php echo $tgl_komen; ?></b></h5> 
        <p><?php echo htmlspecialchars($datakomen['komentar']); ?></p>
    </div>
    <hr>
<?php
}
?>

<h3>Isi Komentar</h3>

<form method="post" action="?tampil=komentar_proses" id="formkomentar" class="form-horizontal well">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id_artikel']); ?>">
    <div class="form-group">
        <label for="nama" class="control-label col-md-2">Nama</label>
        <div class="col-md-10">
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="control-label col-md-2">Email</label>
        <div class="col-md-10">
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="komentar" class="control-label col-md-2">Komentar</label>
        <div class="col-md-10">
            <textarea name="komentar" id="komentar" rows="8" class="form-control" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
            <input type="submit" value="Kirim Pesan" class="btn btn-primary">
        </div>
    </div>
</form>
