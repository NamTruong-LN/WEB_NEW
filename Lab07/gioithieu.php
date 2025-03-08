<?php
$ho = "Lương";
$ten = "Nguyễn Nam Trường";
$ngaysinh = "18/10/2003";
$diem = 8;
if ($diem >= 9) $xeploai = "Xuất sắc";
else if ($diem >= 8) $xeploai = "Giỏi   ";
else if ($diem >= 6.5) $xeploai = "Khá";
else if ($diem >= 5) $xeploai = "Trung bình";
else if ($diem >= 3) $xeploai = "Yếu";
else $xeploai = "Kém";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        #gioithieu {
            background-color: #556b2f;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        #gioithieu p {
            margin: 10px 0;
            font-size: 16px;
        }

        #gioithieu span {
            color: yellow;
            font-weight: bold;
        }

        #gioithieu p:first-child {
            text-align: center;
            background-color: #b22222;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px;
            font-size: 18px;
        }

        #gioithieu p:first-child span {
            color: cyan;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div id="gioithieu">
        <p><span>Thông tin sinh viên</span></p>
        <p><span>Họ tên</span>: <?php echo $ho . " " . $ten; ?></p>
        <p><span>Ngày sinh</span>: <?php echo $ngaysinh; ?></p>
        <p><span>Điểm</span>: <?php echo $diem; ?></p>
        <p><span>Xếp loại</span>: <?php echo $xeploai; ?></p>
    </div>
</body>

</html>