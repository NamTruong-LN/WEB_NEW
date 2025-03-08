<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page){
    case 'blog': require_once 'tintuc.php'; break;
    case 'sp': require_once 'sanpham.php'; break;
    case 'gt': require_once 'gioithieu_bai10.php'; break;
    case 'lh': require_once 'lienhe.php'; break;
    default:
        echo '<p style="text-align: center; font-weight: bold; font-size: 1.5em; padding-top: 10px;">
                Phương thức tuyển sinh đại học chính quy 2024 
              </p>
              <p style="padding:0 10px 0 10px" > Trường Đại học Giao thông vận tải TP. Hồ Chí Minh thông báo Phương thức tuyển sinh đại học chính quy 2024 </p>
              <img src="images/tuyensinh.jpg" style="padding:0; width: 100%; height: 50%">';
}