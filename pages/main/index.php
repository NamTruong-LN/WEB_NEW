<?php

    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = 1;
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*3) - 4;
    }
$sql_product = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
$query_product = mysqli_query($mysqli, $sql_product);
?>

<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_product)) {

    ?>
        <li>
            <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="./admin/module/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product">Tên sản phẩm:<?php echo $row['tensanpham'] ?></p>
                <p class="price_product">Giá:<?php echo number_format($row['giasanpham'], 0, ',', '.') . 'vnđ' ?></p>
                <p class="cate_product"><?php echo $row['tendanhmuc'] ?></p>
            </a>
        </li>
    <?php } ?>
</ul>
<div style="clear: both;"></div>
<style>
    .list_trang {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .list_trang li {
        float: left;
        padding: 5px 15px;
        margin: 5px;
        background: rebeccapurple;
        display: block;
    }

    .list_trang li a {
        text-decoration: none;
        color: black;
        text-align: center;
    }
</style>
<?php
$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count/8);
?>
<p>Trang hiện tại:<?php echo $page?>/<?php echo $trang?></p>
<ul class="list_trang">
    <?php 
        for($i=1; $i<= $trang; $i++){
        ?>
         <li <?php if($i ==$page){echo 'style="background:brown;"';}else{echo '';} ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php
        }
        ?>
   
</ul>