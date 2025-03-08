<?php
require_once 'connectdb.php';

$u = $_POST['username'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$email = $_POST['email'];
$phai = $_POST['phai'];
$nghenghiep = $_POST['nghenghiep'];
$sothich = $_POST['st'];
$mota = $_POST['mota'];

//validate dữ liệu
$u = trim(strip_tags($u));
$pass = trim(strip_tags($pass));
$repass = trim(strip_tags($repass));
$email = trim(strip_tags($email));
settype($phai, "int");
settype($nghenghiep, "int");

//Kiểm tra và báo lỗi 
$loi = "";
if ($nghenghiep == 0)  $loi .= "Bạn chưa chọn nghề<br>";
if ($phai != 0 && $phai != 1) $loi .= "Chọn phái đi nha bạn<br >";
if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) $loi . "Email không đúng<br>";
if ($pass != $repass) $loi .= "Hai mật khẩu không giống nhau<br>";

$sql_check_username = "SELECT * FROM users WHERE username = '$u'";
$kq = $conn->query($sql_check_username);
if ($kq->rowCount() > 0) {
    $loi .= "Tên truy cập đã tồn tại<br>";
}
$sql_check_email = "SELECT * FROM users WHERE email = '$email'";
$kq = $conn->query($sql_check_email);
if ($kq->rowCount() > 0) {
    $loi .= "Email đã tồn tại<br>";
}

if ($loi != "") { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="col-8 m-auto">
        <div class="alert alert-danger mt-5 text-center ">
            <?= $loi ?>
            <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
        </div>
    </div>
<?php } else {
    $sothich_str = implode(", ", $sothich);
    $sql = "INSERT INTO users(username, pass, email, phai, nghenghiep, sothich, mota, ngay) 
            VALUES ('$u','$pass','$email', '$phai', '$nghenghiep', '$sothich_str', '$mota', Now())";
    $kq = $conn->exec($sql);
    if ($kq == 1) {
        echo "Thành công";
        //gửi mail
    } else echo "Cập nhật không thành công";
} ?>