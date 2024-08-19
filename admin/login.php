<?php 
    session_start();
    include('../admin/config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['user_name'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE user_name = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("location: index.php");
        }else{ 
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại");</script>';
            header("location: login.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập ADMIN</title>
    <style>
        body {
            background: #f2f2f2;
        }
        form {
            border: 1px solid ;
            width: 250px;
        }
        .forget a {
            text-decoration: none;
            color: #990033;
        }
        .wrapper-login {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper-login">
        <form action="" autocomplete="off" method="post" style="text-align: center;">
            <p>Đăng nhập ADMIN</p>
            <p>Tài Khoản</p>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="user_name" placeholder="User Name" class="username">
            </div>
            <p class="passworg_tag">Mật khẩu</p>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <!-- <p class="forget"><a href="">Quên mật khẩu?</a></p> -->
            <p><input type="submit" name="dangnhap" value="Đăng nhập"></p>
            <div class="loging_icon">
                <a href="#"><i class="fa-brands fa-google"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>