<!-- <p>Hình thức thanh toán</p> -->
<!-- <div><a href="index.php?quanly=vanchuyen">Vận chuyển</a></div> -->
<form action="pages/main/xulythanhtoan.php" autocomplete="off" method="post" class="shipping-form">
    <div class="row">
        <?php
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping 
        WHERE id_dangky = '$id_dangky' LIMIT 1");
        $count = mysqli_num_rows($sql_get_vanchuyen);
        if ($count > 0) {
            $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
            $name = $row_get_vanchuyen['name'];
            $phone = $row_get_vanchuyen['phone'];
            $address = $row_get_vanchuyen['address'];
            $note = $row_get_vanchuyen['note'];
        } else {
            $name = '';
            $phone = '';
            $address = '';
            $note = '';
        }
        ?>
        <div class="shipping-details">
            <h4>Thông tin vận chuyển và đơn hàng</h4>
            <ul>
                <li>Họ và tên vận chuyển: <b><?php echo $name ?></b></li>
                <li>Số điện thoại: <b><?php echo $phone?></b></li>
                <li>Địa chỉ: <b><?php echo $address ?></b></li>
                <li>Ghi chú: <b><?php echo $note?></b></li>
            </ul>
        </div>
</form>
<!-- ----------------------------Giỏ hàng----------------------- -->
<table style="width: 100%; text-align:center;border-collapse:collapse" border="1">
    <tr>
        <th>ID</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
    </tr>

    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
            $tongtien = $tongtien + $thanhtien;
            $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $cart_item['masanpham'] ?></td>
                <td><?php echo $cart_item['tensanpham'] ?></td>
                <td><img src="./admin/module/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>
                <td>
                    <a href="../PROJECT_WEB/pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus fa-style"></i></a>
                    <?php echo $cart_item['soluong'] ?>
                    <a href="../PROJECT_WEB/pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus fa-style"></i></a>

                </td>
                <td><?php echo number_format($cart_item['giasanpham'], 0, ',', '.') . 'vnđ' ?></td>
                <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="8">
                <p style="float:left;">Tổng tiền:<?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
                <div style="clear: both;"></div>
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                    <!-- <p><a href="index.php?quanly=vanchuyen">Hình thức vận chuyển</a></p> -->
                <?php
                } else {
                ?>
                    <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                <?php
                }
                ?>


            </td>
        </tr>
    <?php
    } else {
    ?>
        <tr>
            <td colspan="8">
                <p>Hiện tại giỏ hàng trống</p>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<div class="payment-form">
    <h4>Hình thức thanh toán</h4>
    <div>
        <input type="radio" name="payment" value="tien mat" checked>
        <label for="">
            Tiền mặt
        </label>
    </div>
    <div>
        <input type="radio" name="payment" value="Chuyen khoan" checked>
        <label for="">
            Chuyển khoản
        </label>
    </div>
    <div>
        <input type="radio" name="payment" value="momo" checked>
        <label for="">
            MONO
        </label>
    </div>
    <div>
        <input type="radio" name="payment" value="vnpay" checked>
        <label for="">
            VNPAY
        </label>
    </div>
    <div>
        <input type="radio" name="payment" value="paypal" checked>
        <label for="">
            Paypal
        </label>
    </div>
    <p>Tổng tiền thanh toán:<?php echo number_format($tongtien,0,',','.').'vnđ'?></p>
    <input type="submit" name="checkout" value="Thanh toán ngay">
</div>