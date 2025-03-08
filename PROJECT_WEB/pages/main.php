<div id="main">
    <?php 
        include("./pages/sidebar/sidebar.php");
    ?>

    <div class="maincontent">
        <?php 
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam = '';
            }
            if($tam == 'danhmucsanpham'){
                include("../PROJECT_WEB/pages/main/danhmuc.php");
            }
            elseif($tam == 'giohang'){
                include("../PROJECT_WEB/pages/main/giohang.php");
            }
            elseif($tam == 'danhmucbaiviet'){
                include("../PROJECT_WEB/pages/main/danhmucbaiviet.php");
            }
            elseif($tam == 'baiviet'){
                include("../PROJECT_WEB/pages/main/baiviet.php");
            }
            elseif($tam == 'tintuc'){
                include("../PROJECT_WEB/pages/main/tintuc.php");
            }
            elseif($tam == 'lienhe'){
                include("../PROJECT_WEB/pages/main/lienhe.php");
            }
            elseif($tam == 'sanpham'){
                include("../PROJECT_WEB/pages/main/sanpham.php");
            }elseif($tam == 'dangky'){
                include("../PROJECT_WEB/pages/main/dangky.php");
            }
            elseif($tam == 'thanhtoan'){
                include("../PROJECT_WEB/pages/main/thanhtoan.php");
            }
            elseif($tam == 'dangnhap'){
                include("../PROJECT_WEB/pages/main/dangnhap.php");
            }
            elseif($tam == 'timkiem'){
                include("../PROJECT_WEB/pages/main/timkiem.php");
            }
            elseif($tam == 'camon'){
                include("../PROJECT_WEB/pages/main/camon.php");
            }
            elseif($tam == 'thaydoimatkhau'){
                include("../PROJECT_WEB/pages/main/thaydoimatkhau.php");
            }
            elseif($tam == 'vanchuyen'){
                include("../PROJECT_WEB/pages/main/vanchuyen.php");
            }
            elseif($tam == 'thongtinthanhtoan'){
                include("../PROJECT_WEB/pages/main/thongtinthanhtoan.php");
            }
            elseif($tam == 'donhangdadat'){
                include("../PROJECT_WEB/pages/main/donhangdadat.php");
            }
            elseif($tam == 'lichsudonhang'){
                include("../PROJECT_WEB/pages/main/lichsudonhang.php");
            }
            elseif($tam == 'xemdonhang'){
                include("../PROJECT_WEB/pages/main/xemdonhang.php");
            }
            elseif($tam == 'muahangngay'){
                include("../PROJECT_WEB/pages/main/muahangngay.php");
            }
            else{
                 include("./pages/main/index.php");   
            }
        ?>
    </div>
</div>