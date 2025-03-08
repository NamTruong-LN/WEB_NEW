<?php
require_once "connectdb.php";
$sql = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi' " . "ORDER BY ThuTu DESC";
$theloai = $conn->query($sql);
?>

<style>
    .menu1 {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .menu1 li {
        display: inline-block;
        height: 45px;
        line-height: 45px;
        text-align: center;
        color: white;
    }

    .menu1 li::after {
        content: ' | '
    }

    .menu1 li a {
        color: yellow;
    }
</style>
<ul class="menu1">
    <li><a href="layout.php"> Trang chủ</a></li>
    <?php
    foreach ($theloai as $row) {
    ?>
        <li><a href="#"><?php echo $row['TenTL'] ?></a></li>
    <?php
    }
    ?>
    <li><a href="layout.php?page=lienhe">Liên hệ</a></li>
    <li><a href="layout.php?page=gioithieu">Giới thiệu</a></li>
    
</ul>