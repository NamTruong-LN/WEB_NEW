<?php
$sql_lietke_dh = "SELECT * FROM tbl_giohang,tbl_dangky WHERE tbl_giohang.id_khachhang=tbl_dangky.id_dangky 
    ORDER BY tbl_giohang.id_cart DESC ";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    /* padding: 20px; */
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
  }

  th,
  td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
    color: #333;
  }

  th {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
  }

  td {
    background-color: #f9f9f9;
  }

  tr:hover td {
    background-color: #f1f1f1;
  }

  a {
    /* color: #007bff; */
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  select {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
    margin-top: 5px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  td:last-child {
    text-align: center;
    background-color: #fff;
    border-top: 1px solid #ddd;
    padding: 10px;
  }
  p {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
  }
</style>
<p>Liệt kê đơn hàng</p>
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
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
  ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['code_cart'] ?></td>
      <td><?php echo $row['tenkhachhang'] ?></td>
      <td><?php echo $row['diachi'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['dienthoai'] ?></td>
      <td>
        <?php
        if ($row['cart_status'] == 1) {
          echo '<a href ="module/quanlydonhang/xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
        } else {
          echo 'Đã xác nhận';
        }
        ?>
      </td>
      <td>
        <form method="POST" action="module/quanlydonhang/xuly.php?code=<?php echo $row['code_cart']; ?>">
          <select name="cart_status">
            <option value="1" <?php echo ($row['cart_status'] == 1) ? 'selected' : ''; ?>>Đơn hàng mới</option>
            <option value="2" <?php echo ($row['cart_status'] == 2) ? 'selected' : ''; ?>>Đang xử lý</option>
            <option value="3" <?php echo ($row['cart_status'] == 3) ? 'selected' : ''; ?>>Đang giao hàng</option>
            <option value="4" <?php echo ($row['cart_status'] == 4) ? 'selected' : ''; ?>>Đã giao hàng</option>
            <option value="5" <?php echo ($row['cart_status'] == 5) ? 'selected' : ''; ?>>Đã hủy đơn hàng</option>
          </select>
          <input type="submit" name="capnhat" value="Cập nhật">
        </form>

      </td>
      <td>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>