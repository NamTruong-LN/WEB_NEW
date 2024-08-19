<?php
session_start();
include("../../admin/config/config.php");
//Thêm số lượng
if(isset($_GET['cong']))
{
    $id = $_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item)
    {
        if($cart_item['id'] != $id)
        {
            $pro[] = array(
                'tensanpham' => $cart_item['tensanpham'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'giasanpham' => $cart_item['giasanpham'],
                'hinhanh' => $cart_item['hinhanh'],
                'masanpham' => $cart_item['masanpham']
            );
            $_SESSION['cart'] = $pro; 
        }else{ 
            $tangsoluong = $cart_item['soluong'] + 1;
            if($cart_item['soluong'] <= 9){
                
                $pro[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'giasanpham' => $cart_item['giasanpham'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masanpham' => $cart_item['masanpham']
                );
            }else{
                $pro[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'giasanpham' => $cart_item['giasanpham'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masanpham' => $cart_item['masanpham']
                );
            }
            $_SESSION['cart'] = $pro;
        }
    }
    header('location: ../../index.php?quanly=giohang');
}
//Trừ số lượng
if(isset($_GET['tru']))
{
    $id = $_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item)
    {
        if($cart_item['id'] != $id)
        {
            $pro[] = array(
                'tensanpham' => $cart_item['tensanpham'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'giasanpham' => $cart_item['giasanpham'],
                'hinhanh' => $cart_item['hinhanh'],
                'masanpham' => $cart_item['masanpham']
            );
            $_SESSION['cart'] = $pro; 
        }else{ 
            $tangsoluong = $cart_item['soluong'] - 1;
            if($cart_item['soluong'] > 1){
                $pro[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'giasanpham' => $cart_item['giasanpham'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masanpham' => $cart_item['masanpham']
                );
            }else{
                $pro[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'giasanpham' => $cart_item['giasanpham'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masanpham' => $cart_item['masanpham']
                );
            }
            $_SESSION['cart'] = $pro;
        }
    }
    header('location: ../../index.php?quanly=giohang');
}
//Xóa sản phẩm
 if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){

        if($cart_item['id'] != $id){
            $pro[] = array(
                'tensanpham' => $cart_item['tensanpham'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'giasanpham' => $cart_item['giasanpham'],
                'hinhanh' => $cart_item['hinhanh'],
                'masanpham' => $cart_item['masanpham']
                );
            }

        $_SESSION['cart'] = $pro; 
        header('location: ../../index.php?quanly=giohang');
        }
}
// Xóa tất cả
if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
    unset($_SESSION['cart']);
    header('location: ../../index.php?quanly=giohang');
}

//Thêm sản phẩm vào giỏ hàng
if (isset($_POST['themgiohang'])) {
    //session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '" . $id . "' LIMIT 1";
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
        //Kiểm tra session giỏ hàng tông tại
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //Nếu dữ liệu trùng
                if ($cart_item['id'] == $id) {
                    $pro[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $soluong + 1,
                        'giasanpham' => $cart_item['giasanpham'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masanpham' => $cart_item['masanpham']
                    );
                    $found = true;
                } else {
                    //Nếu dữ liệu không trùng
                    $pro[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'],
                        'giasanpham' => $cart_item['giasanpham'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masanpham' => $cart_item['masanpham']
                    );
                }
            }
            if ($found == false) {
                //Liên kết dữ liệu new_produc với pro
                $_SESSION['cart'] = array_merge($pro, $new_product);
            } else {
                $_SESSION['cart'] = $pro;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('location: ../../index.php?quanly=giohang');
}
