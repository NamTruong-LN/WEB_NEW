<?php
$host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
$dbname = "banlaptop"; //tên database sẽ kết nối đến 
$username = "root"; //username để kết nối đến database 
$password = ""; // mật khẩu để kết nối đến database 
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password); // kết nối đến db. $conn gọi là đối tượng kết nối. 

$sql = "SELECT idLoai, tenLoai, anHien FROM loaisanpham WHERE anHien = 1 ORDER BY ThuTu";
$kq = $conn->query($sql); // $kq là đối tượng dữ liệu, chứa các dòng dữ liệu đổ về từ mysql 
$sodong = $kq->rowCount(); //lấy số dòng dữ liệu 

$row = $kq->fetch();
echo $row['tenLoai'];
$row = $kq->fetch();
echo $row['tenLoai'];
$row = $kq->fetch();
echo $row['tenLoai'];
$row = $kq->fetch();
echo $row['tenLoai'];
$row = $kq->fetch();
echo $row['tenLoai'];
$row = $kq->fetch();
echo $row['tenLoai'];
?>
<h4> Lấy được <span> <?php echo $sodong; ?> </span> dòng loại sản phẩm.</h4>