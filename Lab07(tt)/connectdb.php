<?php
try {
    $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
    $dbname = "php1_news";
    $username = "root"; //tên database sẽ kết nối đến 
    $password = ""; //username để kết nối đến database // mật khẩu để kết nối đến database 
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { //bắt lỗi kết kết nối không được 
    die("Lỗi: " . $e->getMessage());
}
