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

            .col-9 {
                width: 75%;
                background-color: azure;
            }

            .col-3 {
                width: 25%;
                background-color: #1fcfd5;
            }

            footer.row {
                height: 120px;
                background-color: darkblue;
                clear: both;
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
                    default:
                        require_once 'home.php';
                } //switch
                ?>

            </main>
            <aside class="col-3">
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