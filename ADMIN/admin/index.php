<?php 
 
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    //connectdb();
    include "view/header.php";
    
    if(isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'danhmuc':
                //Nhận yêu cầu và xử lý
                //Lấy danh sách danh mục
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
            case 'adddanhmuc':
                //Nhận yêu cầu và xử lý
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tendm = $_POST['tendm'];
                    themdm($tendm);
                }
                //Lấy danh sách danh mục
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
            case 'deldanhmuc':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    deldanhmuc($id);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
            case 'updatedanhmucform':
                //LẤY 1 RECORD ĐÚNG VỚI ID TRUYỀN VÀO
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kqone = getonedanhmuc($id);
                    //DANH SÁCH DANH MỤC
                    $kq = getall_dm();
                    include "view/updatedanhmucform.php";
                }
                if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    updatedanhmuc($id,$tendm);
                    //DANH SÁCH DANH MỤC
                    $kq = getall_dm();
                    include "view/danhmuc.php";
                }
                 break;

            case 'sanpham':
                // LOAD DSDM
                $dsdm = getall_dm();
                //LOAD DSSP
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;

            case 'updatesanphamform':
                // LOAD DSDM
                $dsdm = getall_dm();
                //SẢN PHẨM CHI TIÊT THEO GET ID
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $spct = getonesanpham($_GET['id']);
                }
                //LOAD DSSP
                $kq = getall_sanpham();
                include "view/updatesanphamform.php";
                break;
            case 'sanpham_add':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensanpham = $_POST['tensanpham'];
                    $gia = $_POST['gia'];
            
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if($uploadOk == 1){
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        // if($_FILES['hinh']['name']!="") $img = $_FILES['hinh']['name'];else $img ="";
                        insert_sanpham($iddanhmuc,$tensanpham,$gia,$img);
                    }
                }
                // LOAD DSDM
                $dsdm = getall_dm();
                //LOAD DSSP
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;

            case 'taikhoan':
                include "view/taikhoan.php";
                break;
            case 'donhang':
                include "view/donhang.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }else {
        include "view/home.php";
    }

    include "view/footer.php";


?>