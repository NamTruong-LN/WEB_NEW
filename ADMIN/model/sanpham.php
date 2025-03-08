<?php

function delsanpham($id) {
    $conn = connectdb();
    $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
        // use exec() because no results are returned
    $conn->exec($sql);
}
function insert_sanpham($iddanhmuc,$tensanpham,$gia,$img){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (iddanhmuc, tensanpham, gia, img) VALUES ('$iddanhmuc','$tensanpham','$gia','$img')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_sanpham() {
        $conn = connectdb();
        $stmt = $conn -> prepare("SELECT * FROM tbl_sanpham");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;

}
function getonesanpham($id){
    $conn = connectdb();
    $stmt = $conn -> prepare("SELECT * FROM tbl_sanpham WHERE id = ".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

?>