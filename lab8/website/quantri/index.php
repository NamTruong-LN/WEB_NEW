<?php
session_start();
$page = trim(strip_tags($_GET['page']));
require_once "functions.php";

if (isset($_SESSION['login_id']) == false) {
    $_SESSION['thongbao'] = "Bạn chưa đăng nhập";
    header("location: login.php");
    exit();
}
if ($_SESSION['login_group'] != 1) {
    $SESSION['thongbao'] = "Bạn không phải là admin";
    header("location: login.php");
    exit();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

<head>
    <title>Quản trị website</title>
    <meta charset="utf-8">
    <style>
        header.row {
            height: 90px;
        }

        div.noidung>aside,
        div.noidung>main {
            min-height: 500px
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="row bg-info"> </header>
        <div class="row noidung">
            <aside class="col-2 bg-dark text-white">

            </aside>
            <main class="col-10 border">
                <?php switch ($page) {
                    case "theloai_ds":
                        require_once 'theloai_ds.php';
                        break;
                    case "theloai_them":
                        require_once 'theloai_them.php';
                        break;
                    case "theloai_sua":
                        require_once 'theloai_sua.php';
                        break;
                    case "loaitin_ds":
                        require_once 'loaitin ds.php';
                        break;
                    case "loaitin_them":
                        require_once 'loaitin_them.php';
                        break;
                    case "loaitin_sua":
                        require_once 'loaitin sua.php';
                        break;
                } ?>
            </main>
        </div>
    </div>
</body>