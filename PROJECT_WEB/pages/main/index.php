<?php

    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = 1;
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*4) - 3;
    }
    $sql_product = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,6";
    $query_product = mysqli_query($mysqli, $sql_product);

?>
<?php 
if (isset($_POST['themgiohang'])) {
    $id = $_POST['id_sanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'tensanpham' => $row['tensanpham'],
            'id' => $id,
            'soluong' => $soluong,
            'giasanpham' => $row['giasanpham'],
            'hinhanh' => $row['hinhanh'],
            'masanpham' => $row['masanpham']
        ));
        // Kiểm tra session giỏ hàng tồn tại
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    $pro[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'] + 1,
                        'giasanpham' => $cart_item['giasanpham'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masanpham' => $cart_item['masanpham']
                    );
                    $found = true;
                } else {
                    $pro[] = $cart_item;
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($pro, $new_product);
            } else {
                $_SESSION['cart'] = $pro;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('location: '.$_SERVER['HTTP_REFERER']);
}
?>

<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_product)) {

    ?>
        <li>
            <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="./admin/module/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
            </a>  

            <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <p class="title_product">Tên sản phẩm:<?php echo $row['tensanpham'] ?></p>
            </a> 

            <p class="price_product">Giá:<?php echo number_format($row['giasanpham'], 0, ',', '.') . 'vnđ' ?></p>
            <p class="cate_product"><?php echo $row['tendanhmuc'] ?></p>

            <form method="post" action="">
                <input type="hidden" name="id_sanpham" value="<?php echo $row['id_sanpham'] ?>">
                <?php 
                    if($row['soluong'] > 1){
                ?>
                <button type="submit" name="themgiohang">
                    <i class="fa-solid fa-cart-plus"></i> 
                </button>
                <?php 
                    } else {
                ?>
                  <input type="submit"  value="Hết" disabled="none">      
                <?php 
                    }
                ?>
            </form>
        </li>
    <?php 
        } 
    ?>
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
<br>
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