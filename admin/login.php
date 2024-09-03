<?php
session_start();
include('../admin/config/config.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['user_name'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_admin WHERE user_name = '" . $taikhoan . "' AND password = '" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("location: index.php");
    } else {
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
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper-login {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        form p {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .user,
        .password {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .user i,
        .password i {
            margin-right: 10px;
            color: #888;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .loging_icon {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .loging_icon a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .loging_icon a:hover {
            color: #007bff;
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