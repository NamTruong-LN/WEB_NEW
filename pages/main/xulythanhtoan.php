<?php 
    session_start();
    include('../../admin/config/config.php');
    require('../../carbon/autoload.php');
    require('../../mail/sendmail.php');
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
 
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $cart_payment = $_POST['payment'];

    // Lấy thông tin vận chuyển
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping 
    WHERE id_dangky = '$id_dangky' LIMIT 1");
    $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
    $id_shipping = $row_get_vanchuyen['id_shipping'];

    // INSERT CART
    $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) 
    VALUE('".$id_khachhang."','".$code_order."','1','".$now."','".$cart_payment."','".$id_shipping."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){

        //Thêm giỏ hàng chi tiết
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) 
            VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($mysqli,$insert_order_detail);

            //Quản lý số lượng sản phẩm còn
            $sql_chitiet = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sanpham='$id_sanpham' LIMIT 1";
            $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
            while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
                $soluongtong = $row_chitiet['soluong'];
                $soluongcon = $row_chitiet['soluong'] -  $soluong ;
                $soluongbanra = $soluong + $row_chitiet['soluongban'];
            }

            //UPDATE lại số lượng
            $sql_update_sl = "UPDATE tbl_sanpham 
            SET soluong='". $soluongcon."',soluongban ='". $soluongbanra."' WHERE id_sanpham='$id_sanpham'";
            mysqli_query($mysqli,$sql_update_sl);
        }

        $tieude = "Đặt hàng website bán giày thành công!";
        $noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng là: ".$code_order."</p>";
        
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail -> dathangmail($tieude,$noidung,$maildathang);
    }

    unset($_SESSION['cart']);
    header('Location: ../../index.php?quanly=camon');
?>