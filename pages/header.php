<?php
    $i=0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $cart_item) {
            $id_sanpham = $cart_item['id'];
            $i ++; // Cộng dồn vào tổng chỉ số
    }
}
?>
<div class="header">
    <img src="../images/loging_bg.png" alt="">
    
    <form class="timkiem" action="index.php?quanly=timkiem" method="POST">
            <p>
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                <input type="submit" name="timkiem" value="Tìm kiếm">
            </p>
    </form>

    <li class="giohang">
            <a href="./index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping" style="padding:5px;"></i></a>
                <div class="chiso">
                    <i class="fa-regular fa-comment"></i>
                    <span><?php echo $i ?></span>
                </div>
    </li>
</div>