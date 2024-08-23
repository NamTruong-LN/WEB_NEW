<p>Chi tiết sản phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {

?>
    <div class="wrapper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="100%" src="./admin/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
        </div>
        <form method="post" action="../PROJECT_WEB/pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="chitiet_sanpham">
                <h3 style="margin: 0;">Tên sản phẩm:<?php echo $row_chitiet['tensanpham'] ?></h3>
                <p>Mã sản phẩm:<?php echo $row_chitiet['masanpham'] ?></p>
                <p>Giá:<?php echo number_format($row_chitiet['giasanpham'], 0, ',', '.') . 'vnđ' ?></p>
                <p>Số lượng:<?php echo $row_chitiet['soluong'] ?></p>
                <p>Danh mục:<?php echo $row_chitiet['tendanhmuc'] ?></p>
                
                <?php 
                    if($row_chitiet['soluong'] > 1 ){

                ?>
                <p><input class="addtocart" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
                <?php 
                    }else{
                ?>
                <span class="text text-danger">Số lượng còn ít nên không được đặt hàng</span>
                <?php 
                    }
                ?>
            </div>
        </form>
    </div>

    <div class="clear"></div>

    <div class="tabs">
        <ul id="tabs-nav">
            <li><a href="#tab1">Thông số</a></li>
            <li><a href="#tab2">Nội dung chi tiết</a></li>
            <li><a href="#tab3">Hình ảnh sản phẩm</a></li>
        </ul> <!-- END tabs-nav -->
        <div id="tabs-content">
            <div id="tab1" class="tab-content">
                <?php echo $row_chitiet['tomtat'] ?>
            </div>
            <div id="tab2" class="tab-content">
                <?php echo $row_chitiet['noidung'] ?>
            </div>
            <div id="tab3" class="tab-content">
            <img width="100%" src="./admin/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
            </div>
        </div> <!-- END tabs-content -->
    </div> <!-- END tabs -->
<?php
}
?>