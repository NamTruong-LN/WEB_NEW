<?php
$tukhoa = trim(strip_tags($_GET['tukhoa']));
$page_size = 5;
$page_num = 1;
if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
if ($page_num <= 0) $page_num = 1;
if ($tukhoa != "") $listTin = layKetQuaTim($tukhoa, $page_num, $page_size);
else $listTin = NULL;
$count = 0;
?>
<style>
    .dstin h1 a {
        text-decoration: none;
        color: #2c3e50;
    }

    ul.pagination {
        list-style: none;
        padding: 0;
        margin: 20px 0;
        display: flex;
        justify-content: center;
        font-family: Arial, sans-serif;
    }

    ul.pagination li {
        margin: 0 5px;
    }

    ul.pagination li a {
        text-decoration: none;
        color: #007bff;
        font-size: 16px;
        padding: 8px 12px;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    ul.pagination li a:hover {
        background-color: #007bff;
        color: white;
    }

    ul.pagination li a:focus,
    ul.pagination li a.active {
        background-color: #007bff;
        color: white;
        outline: none;
    }

    ul.pagination li span.active {
        text-decoration: none;
        background-color: blue;
        font-size: 16px;
        padding: 8px 12px;
        border: 1px solid blue;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }
</style>
<h3>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($tukhoa); ?>"</h3>
<div class="dstin">
    <?php foreach ($listTin as $tin) {
        $idLT = $tin['idLT'];
        $sql = "SELECT idLT,Ten FROM loaitin WHERE idLT=$idLT AND AnHien=1";
        global $conn;
        $loaitin = $conn->query($sql);
        $loaitin = $loaitin->fetch();
        $count++
    ?>
        <h1><a href="index.php?page=loai&tintrongloai.php&idLT=<?= $loaitin['idLT'] ?>"><?php echo $loaitin['Ten'] ?></a></h1>
        <div class="tin">
            <h3 class="tieude"><a href="index.php?page=tin&idTin=<?= $tin['idTin'] ?>">
                    <?= $tin['TieuDe'] ?> </a>
            </h3>
            <div class="info">
                <span class="ngay">Ngày: <?= date('d/m/Y', strtotime($tin['Ngay'])); ?>.</span>
                <span class="binhluan">Số bình luận : 0 </span>
            </div>
            <div class="tomtat"> <?= $tin['TomTat'] ?> </div>
        </div>
        <hr>

    <?php } ?>
</div>
<?php
$total_rows = demSoTin($tukhoa);
$base_url = "index.php?page=search&tukhoa=" . $tukhoa;
echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
