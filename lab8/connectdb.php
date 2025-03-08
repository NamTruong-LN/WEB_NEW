<?php
try {
    $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
    $dbname = "php1_news";
    $username = "root"; //tên database sẽ kết nối đến 
    $password = ""; //username để kết nối đến database // mật khẩu để kết nối đến database 
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { //bắt lỗi kết kết nối không được 
    die("Lỗi: " . $e->getMessage());
}
function layChiTietTin($id = 0)
{
    try {
        $sql = "SELECT TieuDe, TomTat, Ngay, SoLanXem, Content FROM tin WHERE idTin=$id AND AnHien=1";
        global $conn;
        $kq = $conn->query($sql);
        return $kq->fetch();
    } catch (Exception $e) {
        die("Lỗi trong hàm: " . __FUNCTION__ . ":" . $e->getMessage());
    }
}

function tangSoLanXem($id = 0)
{
    try {
        $sql = "UPDATE tin SET SoLanXem =SoLanXem+1 WHERE idTin=$id";
        global $conn;
        $conn->exec($sql);
    } catch (Exception $e) {
        die("Lỗi trong:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}

function layTinTrongLoai($id = 0, $page_num = 1, $page_size = 5)
{
    try {
        $startRow = ($page_num - 1) * $page_size;
        $sql = "SELECT idTin, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE idLT=$id AND AnHien=1 " .
            "LIMIT $startRow, $page_size";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm :" . __FUNCTION__ . ":" . $e->getMessage());
    }
}


function demTinTrongLoai($id = 0)
{
    $sql = "SELECT count(*) FROM tin WHERE idLT=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}
function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size = 5, $offset = 3)
{

    if ($page_num <= 0) return "";
    $total_pages = ceil($total_rows / $page_size); //tính tổng số trang
    if ($total_pages <= 1) return "";
    $links = "<ul class='pagination'>";
    if ($page_num > 1) { //chỉ hiện 2 link đầu, trước khi user từ trang 2 trở đi
        $first = "<li><a href='{$base_url}' > << </a></li>";
        $page_prev = $page_num - 1;
        $prev = "<li><a href='{$base_url}&page_num={$page_prev}'> < </a></li>";
        $links .= $first . $prev;
    }
    $from = $page_num - $offset;
    $to = $page_num + $offset;
    if ($from < 1) $from = 1;
    if ($to > $total_pages)
        $to = $total_pages;
    for ($i = $from; $i < $to; $i++) {
        if ($i == $page_num) $str = "<li><span class='active'> {$i}</span></li>";
        else $str = "<li><a href='{$base_url}&page_num={$i}'> {$i} </a></li>";
        $links .= $str;
    }
    // echo "Page number: " . $page_prev;
    //aaa
    if ($page_num < $total_pages) { //chỉ hiện link cuối, kế khi user kô ở trang cuối
        $page_next = $page_num + 1;
        $next = "<li><a href='{$base_url}&page_num={$page_next}'> > </a></li>";
        $last = "<li><a href='{$base_url}&page_num={$total_pages}'> >> </a></li>";
        $links .= $next . $last;
    }
    $links .= "</ul>";
    return $links;
}
function layKetQuaTim($tukhoa = "aabbccdd", $page_num = 1, $page_size = 5)
{
    try {
        $startRow = ($page_num - 1) * $page_size; // Tính dòng bắt đầu
        $sql = "SELECT idTin, idLT, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE AnHien=1 AND (TieuDe LIKE '%$tukhoa%' OR TomTat LIKE '%$tukhoa%') LIMIT $startRow, $page_size";
        global $conn;
        $kq = $conn->query($sql);
        
        return $kq->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả dưới dạng mảng
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}
function demSoTin($tukhoa)
{
    try {
        $sql = "SELECT COUNT(*) as total FROM tin WHERE AnHien=1 AND (TieuDe LIKE '%$tukhoa%' OR TomTat LIKE '%$tukhoa%')";
        global $conn;
        $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        
        return $result['total']; // Trả về tổng số tin
    } catch (Exception $e) {
        die("Lỗi trong hàm:" . __FUNCTION__ . ":" . $e->getMessage());
    }
}
