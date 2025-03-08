<?php
require_once "index.php";
$idTL = $_GET['idTL'];
settype($idTL, "int");
$sql = "SELECT idTin,idLT, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE idTL=$idTL AND AnHien=1";
global $conn;
$kq = $conn->query($sql);
$lastIDLT = null;
?>
<style>
    .dstin {
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .tin {
        padding: 20px;
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .tieude {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .tieude a {
        text-decoration: none;
        color: #2c3e50;
    }

    .tieude a:hover {
        color: #2980b9;
    }

    .info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 14px;
        color: #7f8c8d;
    }

    .ngay,
    .binhluan {
        font-style: italic;
    }

    .container1 {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .tomtat {
        font-size: 16px;
        color: #34495e;
        margin-bottom: 15px;
    }


    .chitiet {
        text-align: right;
    }

    h1 a {
        text-decoration: none;
        color: #2c3e50;
    }

    .chitiet a {
        text-decoration: none;
        color: #2980b9;
        font-weight: bold;
        background-color: #ecf0f1;
        padding: 8px 12px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .chitiet a:hover {
        background-color: #2980b9;
        color: #fff;
    }
</style>
<div class="dstin">
    <?php
    foreach ($kq as $tin) {
        $idLT = $tin['idLT'];
        $sql = "SELECT idLT,Ten FROM loaitin WHERE idLT=$idLT AND AnHien=1";
        global $conn;
        $loaitin = $conn->query($sql);
        $loaitin = $loaitin->fetch();
        if ($lastIDLT !== $idLT) {
            echo "<h1><a href='index.php?page=loai&tintrongloai.php&idLT={$loaitin['idLT']}'>" . $loaitin['Ten'] . "</a></h1>";
            $lastIDLT = $idLT;
        }
    ?>

        <div class="tin">
            <h3 class="tieude">
                <a href="index.php?page=tin&tinchitiet.php&idTin=<?php echo $tin['idTin'] ?>">
                    <?= $tin['TieuDe'] ?>
                </a>
            </h3>
            <div class="info">
                <span class="ngay">Ngày đăng: <?= $tin['Ngay']; ?> </span>
                <span class="binhluan">Số bình luận: 0 </span>
            </div>
            <div class="container1">
                <img src="<?= $tin['urlHinh'] ?>" height="100" width="100px">
                <div class="tomtat">
                    <?= $tin['TomTat'] ?>
                </div>
            </div>

            <div class="chitiet">
                <a href="index.php?page=tin&tinchitiet.php&idTin=<?php echo $tin['idTin'] ?>">
                    Chi tiết
                </a>
            </div>
        </div>
    <?php
    }
    ?>
</div>