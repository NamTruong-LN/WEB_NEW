<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiện mảng 2</title>
    <style>
        .container {
            border: 2px solid green;
            width: 20%;
            border-radius: 20px;
            overflow: hidden;
            width:250px;
        }

        .p-1 {
            padding: 5px 0;
            margin: 0;
            background-color: green;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .thu {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $thu = [
            "1" => "Chủ nhật",
            "2" => "Thứ hai",
            "3" => "Thứ ba",
            "4" => "Thứ tư",
            "5" => "Thứ năm",
            "6" => "Thứ sáu",
            "7" => "Thứ bảy"
        ];
        reset($thu);
        ?>
        <p class="p-1">Các thứ trong tuần</p>
        <?php
        while (key($thu) != null) {
        ?>

            <p class="thu"><?php echo key($thu)." ".current($thu); ?></p>
            <?php next($thu); ?>
        <?php
        }
        ?>
    </div>

</body>

</html>