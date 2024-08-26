<?php 
    session_start();
    include("../../admin/config/config.php");
    require('../../carbon/autoload.php');
    require('../../mail/sendmail.php');
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
 
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."','1','".$now."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //Thêm giỏ hàng chi tiết
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($mysqli,$insert_order_detail);

            //new
            if (!$order_detail_query) {
                die("Lỗi khi chèn chi tiết đơn hàng: " . mysqli_error($mysqli));
            }
        }

        $tieude = "Đặt hàng website bán giày thành công!";
        $noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng là: ".$code_order."</p>";
        
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail -> dathangmail($tieude,$noidung,$maildathang);
    } else {
        die("Lỗi khi chèn giỏ hàng: " . mysqli_error($mysqli));
    }

    unset($_SESSION['cart']);
    header('Location: ../../index.php?quanly=camon');
    exit();
?>