<?php
if (session_id() == '') session_start();
if (isset($_SESSION['login_user']) == false) {
    header("location:login.php");
    exit();
}
$u =$_SESSION['login_user']; // username đang đăng nhập
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="xulydoipass.php" method="post" id="frmlogin" class="border border-primary col-5m-auto p-2">
    <div class="form-group">
        <label>Username</label> <input name="u" type="text" class="form-control" disabled value="<?=$u;?>"/>
    </div>
    <div class="form-group">
        <label>Mật khẩu cũ</label> <input name="pass_old" type="password" class="form-control" />
    </div>
    <div class="form-group">
        <label>Mật khẩu mới</label> <input name="pass_new1" type="password" class="form-control" />
    </div>
    <div class="form-group">
        <label>Nhập lại mật khẩu mới</label> <input name="pass_new2" type="password" class="form-control" />
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Cập nhật" class="btn btn-primary" />
    </div>
</form>