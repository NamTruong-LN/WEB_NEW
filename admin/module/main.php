<div class="clear"></div>
<div class="main">
    <?php 
        if(isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query='';
        }
        if($tam == 'quanlydanhmucsanpham' && $query =='them') {
            include("../admin/module/danhmucsp/them.php");
            include("../admin/module/danhmucsp/lietke.php");
        }
        elseif($tam == 'quanlydanhmucsanpham' && $query =='sua') {
            include("../admin/module/danhmucsp/sua.php");
        }
        elseif($tam == 'quanlysanpham' && $query =='them') {
            include("../admin/module/quanlysanpham/them.php");
            include("../admin/module/quanlysanpham/lietke.php");
        }
        elseif($tam == "quanlysanpham" && $query == 'sua') {
            include("../admin/module/quanlysanpham/sua.php");
        }
        elseif($tam == "quanlydonhang" && $query == 'lietke') {
            include("../admin/module/quanlydonhang/lietke.php");
        }
        elseif($tam == "donhang" && $query == 'xemdonhang') {
            include("../admin/module/quanlydonhang/xemdonhang.php");
        }
        elseif($tam == "quanlydanhmucbaiviet" && $query == 'them') {
            include("../admin/module/quanlydanhmucbaiviet/them.php");
            include("../admin/module/quanlydanhmucbaiviet/lietke.php");
        }
        elseif($tam == "quanlydanhmucbaiviet" && $query == 'sua') {
            include("../admin/module/quanlydanhmucbaiviet/sua.php");
        }
        elseif($tam == "quanlybaiviet" && $query == 'them') {
            include("../admin/module/quanlybaiviet/them.php");
            include("../admin/module/quanlybaiviet/lietke.php");
        }  
        elseif($tam == "quanlybaiviet" && $query == 'sua') {
            include("../admin/module/quanlybaiviet/sua.php");
        }
        elseif($tam == "quanlyweb" && $query == 'capnhat') {
            include("../admin/module/thongtinweb/quanly.php");
        }
        else {
            include("../admin/module/dashboard.php");
        }
    ?>
</div>