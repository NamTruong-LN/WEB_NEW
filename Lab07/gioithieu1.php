<?php
// 1. Khai báo biến
$ho = $_GET['ho'];
$ten = $_GET['ten'];
$ngaysinh = $_GET['ngaysinh'];
$diem = $_GET['diem'];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <style>
        .container {
            border: 1px solid #fff;
            border-radius: 10px;
            width: 500px;
            overflow: hidden;
        }

        h2 {
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            margin: 0;
            font-size: 20px;
            text-transform: uppercase;
            background-color: aqua;
            color: green;
        }

        p {
            padding: 10px 0 10px 20px;
            margin: 0;
            background-color: rgb(87, 97, 97);
            font-size: 18px;
            color: #fff;
        }

        p>span {
            display: inline-block;
            width: 100px;
            color: darkorange;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Thông tin sinh viên</h2>
        <div id='gioithieu'>
            <p><span>Họ tên</span>: <?php echo $ho . ' ' . $ten; ?> </p>
            <p><span>Ngày sinh</span>: <?php echo $ngaysinh; ?> </p>
            <p><span>Điểm</span>: <?php echo $diem; ?> </p>
        </div>
        <?php
        switch (true) {
            case ($diem >= 9):
                $xeploai = "Xuất sắc";
                break;
            case ($diem >= 8):
                $xeploai = "Giỏi";
                break;
            case ($diem >= 6.5):
                $xeploai = "Khá";
                break;
            case ($diem >= 5):
                $xeploai = "Trung bình";
                break;
            case ($diem >= 3.5):
                $xeploai = "Yếu";
                break;
            default:
                $xeploai = "Kém";
                break;
        }
        ?>
        <p><span>Xếp loại</span>: <?php echo $xeploai; ?></p>
    </div>
</body>

</html>