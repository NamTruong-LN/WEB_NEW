<?php
session_start();
require_once 'connectdb.php';
if (isset($_GET['page']))
    $page = trim(strip_tags($_GET['page']));
else $page = "";
?>

<head>
    <rel="stylesheet">
        <meta charset="utf-8" />
        <title>Tin tức online</title>
        <style>
header.row {
                height: 180px;
                background-color: darkcyan;
                position: fixed;
                top: 0;
                left: 8;
                right: 8;
                z-index: 1000;
            }

            nav.row {
                height: 45px;
                background-color: darkgreen;
                position: fixed;
                top: 180px;
                /* Chiều cao của header */
                left: 8;
                right: 8;
                z-index: 1000;
            }
            .col-9,
            .col-3 {
                float: left;
                min-height: 500px;
                padding-top: 20px; 
                margin-top: 180px;
            }


            footer.row {
                height: 120px;
                background-color: darkblue;
                clear: both;
            }

            .search-form {
                background-color: #5b99a6;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                font-family: Arial, sans-serif;
            }

            .search-form h2 {
                font-size: 18px;
                margin-bottom: 10px;
                color: white;
                font-weight: bold;
            }

            .search-input {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
                font-size: 16px;
            }

            .search-button {
                background-color: #007bff;
                /* Màu nền cho nút */
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            }

            .search-button:hover {
                background-color: #0056b3;
            }

            .search-button:focus {
                outline: none;
            }
        </style>
</head>

<body>
    <div class="container">
        <header class="row"> </header>
        <nav class="row"><?php require_once("menu.php"); ?></nav>
        <div class="row ">
            <main class="col-9">
                <?php
                switch ($page) {
                    case "lienhe":
                        require_once 'lienhe.php';
                        break;
                    case "gioithieu":
                        require_once 'gioithieu.php';
                        break;
                    case "tin":
                        require_once 'tinchitiet.php';
                        break;
                    case "loai":
                        require_once 'tintrongloai.php';
                        break;
                    case "search":
                        require_once 'ketquatim.php';
                        break;
                    case "theloai":
                        require_once 'tintrongtheloai.php';
                        break;
                    default:
                        require_once 'home.php';
                } //switch
                ?>

            </main>
            <aside class="col-3">
                <h2>Tìm kiếm</h2>
                <form method="get" action="index.php" class="search-form">
                    <input type="hidden" name="page" value="search">
                    <input type="text" name="tukhoa" placeholder="Nhập từ khóa tìm kiếm" class="search-input" value="<?php echo htmlspecialchars($_GET['tukhoa'] ?? ''); ?>">
                    <button type="submit" class="search-button">Tìm kiếm</button>
                </form>
                <h2>Tin nổi bật</h2>
                <?php
                require_once("tinnoibat.php");
                ?>
                <h2>Tin xem nhiều</h2>
                <?php require_once("tinxemnhieu.php");
                ?>
            </aside>
        </div>
        <footer class="row"> </footer>
    </div>