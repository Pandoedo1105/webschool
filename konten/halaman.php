<?php
if (!defined("INDEX")) die("---");

$id_halaman = $_GET['id'];
$artikel = $connection->query("SELECT * FROM halaman WHERE id_halaman = '$id_halaman'");
$data = $artikel->fetch_assoc();
$isi = $data['isi'];
?>
<ul class="breadcrumb">
    <li>Home</li>
    <li class="active"><?php echo htmlspecialchars($data['judul']); ?></li>
</ul>

<div class="halaman">
    <h2 class="judul"><?php echo htmlspecialchars($data['judul']); ?></h2>
    <p>
        <?php echo $isi; ?> 
    </p>
</div>
