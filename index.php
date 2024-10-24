<?php
session_start();

include("lib/koneksi.php");
include("lib/fungsi_tglindonesia.php");
define("INDEX", true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Bina Nusa Slawi</title>
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
</head>
<body>
    <header id="header"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img src="judul.png" width="40%" alt="Logo"></div>
            </div>
        </div>
    </header>			
			
    <nav id="menu"> 	
        <div class="container">
            <div class="row">
                <div class="col-md-12"><?php include("menu.php"); ?></div>
            </div>
        </div>
    </nav>			
			
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><?php include("konten.php"); ?></div>
                <div class="col-md-4"><?php include("sidebar.php"); ?></div>	
            </div>
        </div>
    </main>
			
    <footer id="footer"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p align="center">Copyright &copy; SMK Bina Nusa Slawi</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
