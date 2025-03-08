<?php
require_once "connectdb.php";

try {
    $sql = "SELECT TieuDe,TomTat,Ngay,urlHinh FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,12";
    $kq = $conn->query($sql);
} catch (Exception $e) {
    die("Lỗi thực thi sql: " . $e->getMessage());
}

?>
<style>
    #tinmoinhat {
        width: 100%;
        font-size: 1.2em;
    }

    #tinmoinhat h4 {
        height: 60px;
        font-size: 1.3em;
        overflow: hidden;
        margin-top: 0;
        color: #2c3e50;
        text-transform: uppercase;
        font-weight: bold;
    }

    #tinmoinhat h4 a {
        text-decoration: none;
        color: inherit;
    }

    #tinmoinhat h4 a:hover {
        color: #e74c3c;
    }

    #tinmoinhat .col {
        width: 48%;
        float: left;
        height: 430px;
        border: 1px solid #ccc;
        margin: 5px;
        overflow: hidden;
        box-sizing: border-box;
        padding: 20px;
        background-color: #f9f9f9;
        transition: box-shadow 0.3s, transform 0.3s;
    }

    #tinmoinhat .col:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    #tinmoinhat .col img {
        margin: auto;
        width: 100%;
        border-radius: 8px;
    }

    #tinmoinhat .tomtat {
        height: 120px;
        overflow: hidden;
        line-height: 1.5em;
        color: #7f8c8d;
        font-style: italic;
    }

    #tinmoinhat em {
        color: #2980b9;
        font-style: normal;
        display: block;
        margin-bottom: 10px;
    }
</style>
<div id="tinmoinhat" class="data ">
    <?php foreach ($kq as $tin) { ?>
        <div class="col">
            <h4> <a href="#"><?= $tin['TieuDe'] ?> </a> </h4>
            <em> Ngày đăng : <?= date('d/m/Y', strtotime($tin['Ngay'])); ?></em><br>
            <img src="<?= $tin['urlHinh'] ?>" height="180" width="100%">
            <div class="tomtat"> <?= $tin['TomTat'] ?></div>
        </div>
    <?php } ?>
</div>