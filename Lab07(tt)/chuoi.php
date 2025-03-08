<?php 
// $soKyTu = $_GET['sokytu']+0;
$soKyTu = isset($_GET['sokytu']) ? $_GET['sokytu'] + 0 : 8;
// if($soKyTu == 0) $soKyTu =8;
$soNgauNhien =random_int(0,99999);
$chuoiNgauNhien=md5($soNgauNhien);
$matKhauNgauNhien=substr($chuoiNgauNhien,0,$soKyTu);
$matKhauMD5 = md5($matKhauNgauNhien);
$matKhauSHA1 = sha1($matKhauNgauNhien);
$matKhauBase64 = base64_encode($matKhauNgauNhien);
$matKhauUpperCase = strtoupper($matKhauNgauNhien);
?>
<p>Mật khẩu ngẫu nhiên: <?=$matKhauNgauNhien?></p>
<p>Mã hóa với MD5: <?=$matKhauMD5?></p>
<p>Mã hóa với SHA1: <?=$matKhauSHA1?></p>
<p>Mã hóa với Base64: <?=$matKhauBase64?></p>
<p>Mật khẩu chữ hoa: <?=$matKhauUpperCase?></p>