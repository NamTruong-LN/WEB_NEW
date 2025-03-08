<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sản phẩm</title>
</head>
<style>

    .column {
        flex: 50%;
        padding: 10px;
    }
    .sanpham {
        border-radius: 10px;
        box-shadow: 5px 5px gray;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
    .sanpham .ten {
        font-size: larger;
        /* font-variant: small-caps; */
        color: blue;
    }
    .sanpham img {
        max-width: 95%;
    }
    .sanpham .gia {
        color: red;
        font-weight: bold;
        font-size: larger;
    }

    .introduction {
        font-size: 16px;
        line-height: 1.5;
        padding: 10px;
    }
</style>
<body>
    <div class="row">
        <div class="column">
            <div class="sanpham">
                <div class="ten">Đồng phục UTH Viện Shape</div>
                <img src="images/đp.jpg">
                <div class="gia">
                     200.000VND
                </div>
            </div>
        </div>

    </div>
</body>
</html>