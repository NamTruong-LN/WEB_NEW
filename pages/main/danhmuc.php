<?php 
    $sql_product = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_product = mysqli_query($mysqli, $sql_product);
    //GET tên danh mục
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
    
?>

<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc']?></h3>
<ul class="product_list">
    <?php 
        while ($row_product = mysqli_fetch_assoc($query_product)) {
    ?>
    <li>        
        <a href="./index.php?quanly=sanpham&id=<?php echo $row_product['id_sanpham']?>">
            <img src="./admin/module/quanlysanpham/uploads/<?php echo $row_product['hinhanh']?>">
            <p class="title_product">Tên sản phẩm:<?php echo $row_product['tensanpham']?></p>
            <p class="price_product">Giá:<?php echo number_format($row_product['giasanpham'],0,',','.').'vnđ'?></p>
        </a>
    </li>
    <?php 
        }   
    ?>
</ul>