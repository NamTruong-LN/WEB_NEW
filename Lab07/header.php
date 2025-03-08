<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        header {
            position: relative;
            height: 100px;
        }

        #chao {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-weight: bolder;
            color: green;
            padding: 5px 10px;
        }

        img {
            width: 40%;
            height: 100%;
        }
    </style>

</head>

<body>
    <img src="images/logo1.png" alt="">
    <div id="chao">
        <?php
        $h = gmdate("H") + 7;
        if ($h <= 12) {
            echo "<span class='sang'>Bây giờ là $h giờ sáng! Chúc một ngày an lành</span>";
        } else if ($h <= 18) {
            echo "<span class='chieu'>Bây giờ là $h giờ chiều! Chúc vui vẻ</span>";
        } else {
            echo "<span class='chieu'>Bây giờ là $h giờ tối! Chúc vui vẻ</span>";
        }
        ?>
    </div>
</body>

</html>