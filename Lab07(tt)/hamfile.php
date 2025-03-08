<?php
$hoten = $_GET['hoten'];
$namsinh = $_GET['namsinh'];
$phai = $_GET['phai'];
$hoten = trim(strip_tags($hoten));
settype($namsinh, "int");
settype($phai, "int");
if ($phai == 0) {
    $phai = "Nữ";
} else {
    $phai = "Nam";
}

$filename = "thongtin.txt";
if(file_exists($filename)==true){
    unlink($filename);
    echo "Đã xóa file";
}
if($hoten!=""&& $namsinh>0){
    $str ="Họ tên: $hoten \r\n";
    $str .="Phái: $phai \r\n";  
    $tuoi=date('Y') - $namsinh;
    $str .="Tuổi: $tuoi \r\n";
    file_put_contents($filename,$str);
    echo "Đã tạo xong file";
}
?>