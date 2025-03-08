<?php
$host = "localhost"; //địa chỉ mysql server sẽ kết nối đến
$dbname = "php1_news"; //tên database sẽ kết nối đến
$userdb = "root"; //username để kết nối đến database
$passdb = ""; // mật khẩu để kết nối đến database
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $userdb, $passdb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function layDanhSachTheLoai()
{
    $sql = "SELECT idTL,TenTL,ThuTu,AnHien,lang FROM theloai ORDER BY ThuTu";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function themTheLoai($tenTL, $thuTu, $anHien, $lang)
{
    $sql = "INSERT INTO theloai(tenTL,thuTu,anHien,lang)
    VALUES ('{$tenTL}','{$thuTu}','{$anHien}','{$lang}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
function xoaTheLoai($idTL)
{
    $sql = "DELETE FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->exec($sql);
}
function layChiTietTheLoai($idTL)
{
    $sql = "SELECT idTL, TenTL,ThuTu,AnHien,lang,HienMenu FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return false;
    else return $kq->fetch();
}

function capnhatTheLoai($idTL, $tenTL, $thuTu, $anHien, $lang)
{
    $sql = "UPDATE theloai SET tenTL='{$tenTL}', thuTu='{$thuTu}',anHien='{$anHien}',lang='{$lang}' WHERE idTL=$idTL ";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
