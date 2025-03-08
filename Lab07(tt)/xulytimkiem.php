<?php
$tukhoa = $_GET['tukhoa'];
$tukhoa = trim(strip_tags($tukhoa));
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .search-results-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }

        p b {
            color: #000;
        }
    </style>
</head>

<body>

    <div class="search-results-container">
        <p>Kết quả tìm kiếm theo từ khóa: <b><?php echo $tukhoa; ?></b></p>
        <p>Tin 1</p>
        <p>Tin 2</p>
    </div>

</body>

</html>