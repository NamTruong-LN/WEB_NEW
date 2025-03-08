<?php
$soluong = [491 => 2, 501 => 3, 495 => 5];
$tensp = [491 => "HTC M10", 501 => "Galaxy S8", 495 => "OPPO A92"];
$gia = [491 => 2000000, 501 => 3000000, 495 => 2500000];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4472C4;
            color: white;
        }

    </style>

</head>
<body>
    <div class="container" style="width: 500px">
        <h3 style="text-align: center">GIỎ HÀNG CỦA BẠN</h3>

    <table border="1" width="500">
    <tr style="border: none; background-color: #ff009c; color: white; margin: 0; padding:0; font-weight: bold;">
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Thành tiền</td>

            </tr>
        <?php 
        reset ($soluong);
        reset ($tensp);
        reset ($gia);
        ?>
        <?php while (key($soluong)!=null) {?>
        <tr>
            <td> <?php echo current($tensp) ; ?></td>
            <td><?php echo current($soluong) ; ?></td>
            <td><?php echo current($gia) ; ?></td>
            <td>
            <?php echo current($gia) * current($soluong) ; ?>
            </td>
        </tr>

        <?php
        next($soluong);
        next ($tensp);
        next ($gia);
        ?>
        <?php } ?>
    </table>
    </div>
</body>
</html>