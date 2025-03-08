<?php 
    include('../../config/config.php');
    if(isset( $_GET['code'])){
        $code_cart = $_GET['code'];
        $sql = "UPDATE tbl_giohang SET cart_status = '0' WHERE code_cart = '".$code_cart."'";
        $query = mysqli_query($mysqli, $sql);
        header("Location: ../../index.php?action=quanlydonhang&query=lietke");
    }
    //Vận chuyển
    if(isset($_POST['capnhat']) && isset($_GET['code'])){
        $code_cart = $_GET['code'];
        $cart_status = $_POST['cart_status'];
    
        // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
        $sql = "UPDATE tbl_giohang SET cart_status = '$cart_status' WHERE code_cart = '".$code_cart."'";
        $query = mysqli_query($mysqli, $sql);
    
        // Điều hướng về trang quản lý đơn hàng
        header("Location: ../../index.php?action=quanlydonhang&query=lietke");
    }
    
?>