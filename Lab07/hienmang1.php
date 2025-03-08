<?php
$thu = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ
sáu", "Thứ bảy"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiện mảng 1</title>
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
        <p class="p-1">Các thứ trong tuần</p>
        <?php
        for ($i = 0; $i < count($thu); $i++) {
        ?>
            <p class="thu"><?php echo $i + 1, ".", $thu[$i]; ?></p>
        <?php
        } ?>

    </div>
</body>

</html>