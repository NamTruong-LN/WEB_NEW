<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        .menu>ul>li {
            display: inline-block;
            position: relative;
        }

        .menu>ul>li>a {
            display: block;
            text-decoration: none;

            font-size: larger;
            color: white;
            padding: 0 2px;
            line-height: 40px;
        }

        .menu>ul {
            padding: 0px;
            margin: 0px;
            list-style: none;
            border-radius: 3px;
            /* background-color: orangered; */
            text-align: center;
        }

        .menu>ul>li>a:hover {
            color: yellow;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="layout.php">Trang chủ |</a></li>
            <li><a href="layout.php?page=blog">Tin tức |</a></li>
            <li>
                <a href="layout.php?page=sp">Sản phẩm |</a>
            </li>
            <li><a href="layout.php?page=gt">Giới thiệu |</a></li>
            <li><a href="layout.php?page=lh">Liên hệ </a></li>
        </ul>
    </nav>

</body>

</html>