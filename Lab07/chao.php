<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #chao {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: white;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .sang {
            color: #ff8c00;
        }
        .chieu {
            color: #20b2aa;
        }
        .toi {
            color: #483d8b;
        }
    </style>
</head>
<body>
    <div id="chao">
        <?php
        $h = gmdate("H")+7;
        if($h <=12){
            echo"<span class='sang'>Bây giờ là $h giờ sáng! Chúc một ngày an lành</span>";
        } else if ($h<=18)
        {
            echo"<span class='chieu'>Bây giờ là $h giờ chiều! Chúc vui vẻ</span>";
        }
        else{
            echo"<span class='chieu'>Bây giờ là $h giờ tối! Chúc vui vẻ</span>";
        }
        ?>
    </div>
</body>
</html>