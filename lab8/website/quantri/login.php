<?php
session_start();
if (isset($_POST['btn'])) { // tiếp nhận user, pass từ form
    $u = $_POST['u'];
    $p = $_POST['p'];
    //validate dữ liệu tiếp nhận 
    $u = trim(strip_tags($u));
    $p = trim(strip_tags($p)); //truy xuất db 
    require_once("functions.php");
    $sql = "SELECT idUser, username, idgroup FROM users WHERE username='{$u}'";
    $kq = $conn->query($sql);
    if ($kq->rowCount() == 0) {
        $_SESSION['thongbao'] = "Username không tồn tại";
        header("location: login.php");
        exit();
    }
    $sql = "SELECT idUser, username, idgroup FROM users WHERE username='{$u}' AND pass='{$p}'";
    $kq = $conn->query($sql);
    if ($kq->rowCount() == 0) { // sai pass 
        $_SESSION['thongbao'] = "Mật khẩu không đúng";
        header("location: login.php"); //login thất bại, login lại 
        exit();
    } //thành công
    $row_user = $kq->fetch();
    $_SESSION['login_id'] = $row_user['idUser']; //tạo biển ghi nhận user đã login 
    $_SESSION['login_user'] = $row_user['username']; //tạo biển ghi nhận user đã login
    $_SESSION['login_group'] = $row_user['idgroup']; //user trong nhóm nào
    header("location: index.php"); //chuyển đến trang chủ admin 
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="" method="post" class="border border-primary col-5 m-auto p-2">
    <div class="form-group">
        <label>Username</label> <input name="u" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label>Mật khẩu</label> <input name="p" type="password" class="form-control" />
    </div>
    <div class="form-group"> <input name="nho" type="checkbox" /> Ghi nhớ </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Đăng nhập" class="btn btn-primary" />
    </div>
</form>