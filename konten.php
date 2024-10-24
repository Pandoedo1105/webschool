<?php
if (!defined("INDEX")) die("---");

$tampil = isset($_GET['tampil']) ? $_GET['tampil'] : "home";
?>

<div class='box'>
    <?php
    switch ($tampil) {
        case "home":
            include("konten/home.php");
            break;
        case "halaman":
            include("konten/halaman.php");
            break;
        case "galeri":
            include("konten/galeri.php");
            break;
        case "artikel_detail":
            include("konten/artikel_detail.php");
            break;
        case "kontak":
            include("konten/kontak.php");
            break;
        case "kontak_proses":
            include("konten/kontak_proses.php");
            break;
        case "pencarian":
            include("konten/pencarian.php");
            break;
        case "komentar_proses":
            include("konten/komentar_proses.php");
            break;
        default:
            echo "Halaman tidak ditemukan";
            break;
    }
    ?>
</div>
