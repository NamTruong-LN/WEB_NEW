<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}

?>
<div class="menu">
    <ul class="list_menu">
        <li><a href="./index.php">Trang chủ</a></li>
        <div class="danhmuc">
            <li><a href="./index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>">Danh mục<i class="fa-solid fa-chevron-down"></i></a></li>
            <div class="list_danhmuc">
                <?php
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                    <li><a href="./index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                <?php
                }
                ?>
            </div>
        </div>
        
        <li><a href="./index.php?quanly=tintuc">Tin tức</a></li>
        <li><a href="./index.php?quanly=lienhe">Liên hệ</a></li>    
        <?php

        if (isset($_SESSION['dangky'])) {
        ?>
            <li><a href="./index.php?quanly=lichsudonhang"><i class="fa-solid fa-truck-fast"></i></a></li>
            <li><a href="./index.php?dangxuat=1">Đăng xuất</a></li>
            <li><a href="./index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
        <?php
        } else {
        ?>
            <li><a href="./index.php?quanly=dangky">Đăng ký</a></li>
            <li><a href="./index.php?quanly=dangnhap">Đăng nhập</a></li>
        <?php
        }
        ?>

        <?php 
            if (isset($_SESSION['dangky']) && isset($_POST['dangnhap'])) {
        ?>

        <?php 
        }
        ?>
    </ul>
    
</div>