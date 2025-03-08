<?php
$listtin = [
    ['https://longnv.name.vn/featured/su-dung-sse-trong-php', 'Sử dụng SSE trong PHP'],
    ['https://longnv.name.vn/featured/phalcon-la-gi', 'Phalcon là gì'],
    ['http://songdep.xitrum.net/trenon/547.html', 'Bạn có bao nhiêu người bạn?'],
    ['http://songdep.xitrum.net/nghethuatsong/876.html', 'Bài học từ loài ngỗng'],
    ['http://songdep.xitrum.net/nghethuatsong/872.html', 'Đường hầm xuyên qua trái đất'],
    ['http://songdep.xitrum.net/ngungon/673.html', 'Tham ăn'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin xem nhiều</title>
    <style>
        #tinxemnhieu {
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #0e0e2f;
            width: 300px;
            min-height: 396px;
        }

        #tinxemnhieu h2 {
            background-color: #2f4f4f;
            color: #fce94f;
            margin: 0;
            padding: 10px;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        #tinxemnhieu p {
            padding: 5px;
        }

        #tinxemnhieu a {
            color: blue;
            text-decoration: none;
            font-size: 18px;
        }

        #tinxemnhieu a:hover {
            color: green;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div  id="tinxemnhieu">
        <h2>Tin xem nhiều</h2>
        <?php $i = 0; ?>
        <?php while ($i < count($listtin)) { ?>
            <?php $tin = $listtin[$i]; ?>
            <p> <a href="<?= $tin[0]; ?>"> <?= $tin[1]; ?> </a></p>
            <?php $i++; ?>
        <?php } ?>
    </div>

</body>
</html>