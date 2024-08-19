<h3>Lịch sử đơn hàng</h3>
<?php 

    $id_khachhang = $_SESSION['id_khachhang'];
    $sql_lietke_dh = "SELECT * FROM tbl_giohang,tbl_dangky WHERE tbl_giohang.id_khachhang = tbl_dangky.id_dangky  
    AND tbl_giohang.id_khachhang= '$id_khachhang' ORDER BY tbl_giohang.id_cart DESC ";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1" tyle="border-collapse:collapse">
  <tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Đơn hàng</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
    <th>Hình thức thanh toán</th>
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['code_cart']?></td>
    <td><?php echo $row['tenkhachhang']?></td>
    <td><?php echo $row['diachi']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['dienthoai']?></td>
    <td>
        <?php 
            if($row['cart_status'] == 1){
                echo '<a href ="module/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
            }else{
                echo 'Đã xác nhận';
            }
            
        ?>
    </td>
    <td>
        <?php 
            if($row['cart_status'] == 1){
                echo 'Đơn hàng mới';
            } elseif($row['cart_status'] == 2){
                echo 'Đang xử lý';
            } elseif($row['cart_status'] == 3){
                echo 'Đang giao hàng';
            } elseif($row['cart_status'] == 4){
                echo 'Đã giao hàng';
            } elseif($row['cart_status'] == 5){
                echo 'Đã hủy đơn hàng';
            }
        ?>
    </td>
    <td>
        <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
    </td>
    <td>
        <?php 
            if($row['cart_payment'] == 'vnpay' || $row['cart_payment'] == 'momo'){
        ?>
        <a href=""><?php echo $row['cart_payment']?></a>
        <?php
            }else{
        ?>
        <?php echo $row['cart_payment']?>
        <?php
            }
        ?>
    </td>
  </tr>
  <?php 
    }
  ?>
</table>