<?php
require_once "connectdb.php";
$sql_1 = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi' " . "ORDER BY ThuTu DESC";
$theloai = $conn->query($sql_1);

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
        color: blue;
    }
</style>
<ul class="menu1">
    <li><a href="index.php"> Trang chủ</a></li>
    <?php
    foreach ($theloai as $row) {
    ?>
        <li><a href="index.php?page=theloai&tintrongtheloai.php&idTL=<?php echo $row['idTL'] ?>"><?php echo $row['TenTL'] ?></a></li>
    <?php
    }
    ?>
    <li><a href="index.php?page=lienhe">Liên hệ</a></li>
    <li><a href="index.php?page=gioithieu">Giới thiệu</a></li>
</ul>