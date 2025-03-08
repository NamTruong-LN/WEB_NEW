<?php
$host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
$dbname = "banlaptop"; //tên database sẽ kết nối đến 
$username = "root"; //username để kết nối đến database 
$password = ""; // mật khẩu để kết nối đến database 
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password); // kết nối đến db. $conn gọi là đối tượng kết nối. 

$idLoai = $_GET['id'];
$tenLoai = $_GET['tenLoai'];
$thuTu = $_GET['thuTu'];
$anHien = $_GET['anHien'];

$idLoai = trim(strip_tags($idLoai));
$tenLoai = trim(strip_tags($tenLoai));
settype($idLoai, "int");
settype($thuTu, "int");
if ($thuTu <= 0) $thuTu = 1;
settype($anHien, "int");
if ($anHien != 0 && $anHien != 1) $anHien = 0;
if ($tenLoai == "" || $idLoai <= 0) exit();

$sql = "UPDATE loaisanpham SET tenLoai = '$tenLoai', thuTu = $thuTu, anHien = $anHien WHERE idLoai = $idLoai";
$kq = $conn->exec($sql);
if ($kq == 1) echo "Update thành công";
