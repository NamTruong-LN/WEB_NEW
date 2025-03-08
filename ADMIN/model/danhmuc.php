<?php
function themdm($tendm){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_danhmuc (tendanhmuc) VALUES ('$tendm')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updatedanhmuc($id, $tendm){
    $conn = connectdb();
    $sql = "UPDATE tbl_danhmuc SET tendanhmuc='".$tendm."' WHERE id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function getonedanhmuc($id){
    $conn = connectdb();
    $stmt = $conn -> prepare("SELECT * FROM tbl_danhmuc WHERE id = ".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function deldanhmuc($id){
    $conn = connectdb();
    $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_dm() {
        $conn = connectdb();
        $stmt = $conn -> prepare("SELECT * FROM tbl_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;

}

?>