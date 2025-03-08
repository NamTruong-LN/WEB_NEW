<?php

$idTin = $_GET['idTin'];
settype($idTin, "int");
$tin = layChiTietTin($idTin);
tangSoLanXem($idTin);
?>
<style>
    .chitiettin {
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .tieude {
        font-size: 28px;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-size: 14px;
        color: #7f8c8d;
    }

    .ngay,
    .xem {
        font-style: italic;
    }

    .tomtat {
        font-size: 20px;
        font-weight: bold;
        color: #34495e;
        margin-bottom: 15px;
        padding-left: 10px;
        border-left: 5px solid #2980b9;
    }

    .gachngang {
        border: 0;
        height: 1px;
        background: #ecf0f1;
        margin: 20px 0;
    }

    .noidung {
        font-size: 16px;
        color: #2c3e50;
        text-align: justify;
    }

    .noidung p {
        margin-bottom: 15px;
    }

    .noidung a {
        color: #2980b9;
        text-decoration: none;
    }

    .noidung a:hover {
        text-decoration: underline;
    }
</style>
<div class="chitiettin">
    <h1 class="tieude">
        <?php echo $tin['TieuDe'] ?> </h1>
    <div class="info">
        <span class="ngay">Ngày đăng: <?= $tin['Ngay']; ?> </span>
        <span class="xem">Số lần xem: <?= $tin['SoLanXem'] ?> </span>
    </div>
    <h2 class="tomtat"> <?php echo $tin['TomTat'] ?> </h2>
    <hr class="gachngang" />
    <div class="noidung">
        <?php echo $tin['Content'] ?>
    </div>
</div>