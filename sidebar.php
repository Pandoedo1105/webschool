<script src="plugin/coolclock/coolclock.js" type="text/javascript"></script>
<script src="plugin/coolclock/moreskins.js" type="text/javascript"></script>
<?php
if (!defined("INDEX")) die("---");
?>	

<ul class="nav nav-tabs">
    <li class="active"><a href="#konten1" data-toggle="tab">Terbaru</a></li>
    <li><a href="#konten2" data-toggle="tab">Popular</a></li>
    <li><a href="#konten3" data-toggle="tab">Komentar</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="konten1">
        <ul>
            <?php
            $artikel = $connection->query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 5");
            while ($data = $artikel->fetch_assoc()) {
                echo "<li><img src='gambar/artikel/{$data['gambar']}'><a href='?tampil=artikel_detail&id={$data['id_artikel']}'>{$data['judul']}</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="tab-pane fade" id="konten2">
        <ul>
            <?php
            $artikel = $connection->query("SELECT * FROM artikel ORDER BY hits DESC LIMIT 5");
            while ($data = $artikel->fetch_assoc()) {
                echo "<li><img src='gambar/artikel/{$data['gambar']}'><a href='?tampil=artikel_detail&id={$data['id_artikel']}'>{$data['judul']}</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="tab-pane fade" id="konten3">
        <ul>
            <?php
            $komentar = $connection->query("SELECT * FROM komentar ORDER BY id_komentar DESC LIMIT 5");
            while ($data = $komentar->fetch_assoc()) {
                echo "<li><b>{$data['nama']}: </b> <a href='?tampil=artikel_detail&id={$data['id_artikel']}'>{$data['komentar']}</a></li>";
            }
            ?>
        </ul>
    </div>
</div>

<video src="media/sablon.mp4" width="100%" controls></video>
