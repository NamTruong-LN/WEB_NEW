<?php
require_once "index.php";
$idLT = $_GET['idLT'];
settype($idLT, "int");
$page_size = 5;
$page_num = 1;
if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
if ($page_num <= 0) $page_num = 1;
$listTin = layTinTrongLoai($idLT, $page_num, $page_size);
$sql = "SELECT Ten FROM loaitin WHERE idLT=$idLT AND AnHien=1";
global $conn;
$loaitin = $conn->query($sql);
$loaitin = $loaitin->fetch();
// echo '<pre>';
// print_r($loaitin);
// echo '</pre>';
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
<div class="dstin">
    <h1><?php echo $loaitin['Ten'] ?></h1>
    <?php
    foreach ($listTin as $tin) {
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
<?php
$total_rows = demTinTrongLoai($idLT);
$base_url = "index.php?page=loai&idLT=$idLT";
// var_dump($base_url, $total_rows, $page_num, $page_size);
$paginationLinks = taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
echo $paginationLinks;
