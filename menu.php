<?php
if (!defined("INDEX")) die("---");
?>
<div class="navbar navbar-inverse">
    <div class="header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
        </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <?php
            $menu = $connection->query("SELECT * FROM menu ORDER BY urutan");
            while ($data = $menu->fetch_assoc()) {
                $submenu = $connection->query("SELECT * FROM submenu WHERE id_menu='" . $data['id_menu'] . "'");
                if ($submenu->num_rows < 1) {
            ?>
                    <li><a href="<?php echo $data['link']; ?>"> <?php echo $data['judul']; ?> </a></li>
            <?php
                } else {
            ?>
                    <li class="dropdown">
                        <a href="<?php echo $data['link']; ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $data['judul']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            while ($datasub = $submenu->fetch_assoc()) {
                            ?>
                                <li><a href="<?php echo $datasub['link']; ?>"> <?php echo $datasub['judul']; ?> </a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
            <?php
                }
            }
            ?>
            <form method="post" action="?tampil=pencarian" class="search pull-right col-md-4">
                <div class="input-group">
                    <input type="text" name="kata" placeholder="Cari di sini..." class="form-control">
                    <span class="input-group-btn">
                        <input type="submit" value="Cari" class="btn">
                    </span>
                </div>
            </form>
        </ul>
    </div>
</div>
