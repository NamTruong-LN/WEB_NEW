<?php
$links = [
    ['http://google.com', 'Google'],
    ['http://w3schools.com', 'W3Schools'],
    ['https://longnv.name.vn', 'Thầy Long Web'],
    ['http://vnexpress.net', 'VnExpress'],
    ['http://tuoitre.vn', 'Tuổi trẻ'],
    ['http://thanhnien.vn', 'Thanh niên'],
    ['http://youtube.com', 'Youtube'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên kết Website</title>
    <style>
        #lienketwebsite {
            text-align: center;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            background-color: #5f9ea0;
        }

        #lienketwebsite h2 {
            background-color: #2f4f4f ;
            color: #fce94f;
            margin: 0;
            padding: 10px;
            font-size: 20px;
            text-transform: uppercase;
        }

        #lienketwebsite select {
            width: calc(100% - 20px);
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div id="lienketwebsite">
        <h2>Liên kết website</h2>
        <select onchange="window.open(this.value)">
            <?php foreach ($links as $link) { ?>
                <option value="<?= $link[0]; ?>" <?= $link[1] == 'W3Schools' ? 'selected' : ''; ?>> <?= $link[1]; ?> </option>
            <?php } ?>
        </select>
    </div>
</body>

</html>