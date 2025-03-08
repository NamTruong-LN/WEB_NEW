<?php
$ngay = $_GET['ngay'];
$arr = explode("/", $ngay);
if (checkdate($arr[1], $arr[0], $arr[2]) == true) {
    echo "<p>Ngày hợp lệ</p>";
    $n = $arr[2] . "-" . $arr[1] . "-" . $arr[0];
    $t = strtotime($n);
    $thu = date("w", $t);
    switch ($thu) {
        case 0:
            $tenthu = "Chủ nhật";
            break;
        case 1:
            $tenthu = "Thứ hai";
            break;
        case 2:
            $tenthu = "Thứ ba";
            break;
        case 3:
            $tenthu = "Thủ tư";
            break;
        case 4:
            $tenthu = "Thứ năm";
            break;
        case 5:
            $tenthu = "Thứ sáu";
            break;
        case 6:
            $tenthu = "Thứ bảy";
            break;
    }
} else {
    echo "<p>Ngày không hợp lệ</p>";
}
$ngaySinh = "18/10/2003";
$arrNS = explode("/", $ngaySinh);
if (checkdate($arrNS[1], $arrNS[0], $arrNS[2]) == true) {
    $n = $arrNS[2] . "-" . $arrNS[1] . "-" . $arrNS[0];
    $t = strtotime($n);
    $thu = date("w", $t);
    switch ($thu) {
        case 0:
            $tenThu = "Chủ nhật";
            break;
        case 1:
            $tenThu = "Thứ hai";
            break;
        case 2:
            $tenThu = "Thứ ba";
            break;
        case 3:
            $tenThu = "Thứ tư";
            break;
        case 4:
            $tenThu = "Thứ năm";
            break;
        case 5:
            $tenThu = "Thứ sáu";
            break;
        case 6:
            $tenThu = "Thứ bảy";
            break;
    }
}
echo "<p>Ngày sinh của tôi là ".$tenThu."</p>";
echo "<p>Thứ trong tuần của ngày $ngay là " . $tenthu . "</p>";
echo "<p>Ngày trong năm của ngày $ngay là " . date("z", $t) . "</p>";
