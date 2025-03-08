<?php 
    include("../../admin/config/config.php");
    if(isset($_POST['guilienhe'])){
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $status = 1;

    
        $sql = "INSERT INTO tbl_thongtinlienhe(username,phone,email,note,status_lienhe)
        VALUE('". $username."','". $phone."','". $email."','". $note."','". $status."') ";
        $row = mysqli_query($mysqli,$sql);
        // echo '<p style="color:green">Thông báo đã được gửi đi, vui lòng chờ chúng tôi</p>';   
        header('location: ../../index.php?quanly=lienhe');
    }
?>
