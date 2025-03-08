<?php
session_start();
if (isset($_SESSION['login_user']) == false) {
    header("location:login.php");
    exit();
}
$u = $_SESSION['login_user'];
$pass_old = $_POST['pass_old'];
$pass_new1 = $_POST['pass_new1'];
$pass_new2 = $_POST['pass_new2'];

$pass_old = trim(strip_tags($pass_old));
$pass_new1 = trim(strip_tags($pass_new1));
$pass_new2 = trim(strip_tags($pass_new2));
$thongbao = "";
if (strlen($pass_new1) < 6) { //kiểm tra độ dài pass 
    $thongbao .= "Mật khẩu mới quá ngắn<br>";
}
if ($pass_new1 != $pass_new2) { //kiếm tra 2 pass phải giống nhau 
    $thongbao .= "Hai mật khẩu mới không giống nhau<br>";
}
require_once 'connectdb.php';
$sql = "select count(*) from users where username='{$u}' AND pass='{$pass_old}'";
$kq = $conn->query($sql); //kiếm tra pass old có đúng không 
$row = $kq->fetch();
if ($row[0] != 1) { //pass old không chính xác 
    $thongbao .= "Mật khẩu cũ không đúnng nha bồ<br>";
}
if ($thongbao == "") {
    require_once 'connectdb.php';
    try {
        $sql = "UPDATE users SET pass = '{$pass_new1}' WHERE username='{$u}'";
        $kq = $conn->exec($sql);
        if ($kq == 1) $thongbao = "Đã cập nhật thành công<br>";
        else $thongbao = "Chưa cập nhật được<br>";
    } catch (Exception $ex) {
        $thongbao = "Lỗi : " . $ex->getMessage();
    }
} ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="col-8 m-auto">
    <div class="alert alert-danger mt-5 text-center ">
        <?= $thongbao ?>
        <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
        <a href="index.php" class="btn btn-info">Trang chủ</a>
    </div>
</div>