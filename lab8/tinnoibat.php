<?php require_once "connectdb.php";

try {
    $sql = "SELECT idTin, TieuDe, SoLanXem FROM tin WHERE NoiBat=1 ORDER BY Ngay DESC LIMIT 0,8";
    $kq = $conn->query($sql);
} catch (Exception $e) {
    die("Lỗi thực thi sql: " . $e->getMessage());
}
?>
<style>
    .data {
        font-family: Arial, sans-serif;
        line-height: 1.8em;
        margin: 20px;
    }

    .data a {
        text-decoration: none;
    }

    .data p {
        font-size: 18px;
        color: #333;
        margin: 10px 0;
        padding: 10px 15px;
        border: 2px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .data p span {
        font-size: 16px;
        color: #555;
        margin-left: 10px;
        font-weight: bold;
    }

    .data p:hover {
        color: #0066cc;
        cursor: pointer;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .data p:hover span {
        color: #0099ff;
    }
</style>
<div id="txn" class="data">
    <?php foreach ($kq as $tin) {
    ?>
        <a href="index.php?page=tin&tinchitiet.php&idTin=<?php echo $tin['idTin'] ?>">
            <?php echo "<p>", $tin['TieuDe'], "<span>(", $tin['SoLanXem'], " lượt xem)</span></p>"; ?>
        </a>
    <?php
    } ?>
</div>