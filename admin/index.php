<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/admin.css?ver=<?php echo rand() ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>ADMIN</title>
</head>
<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header("location: login.php");
}

?>

<body>
    <h3 class="title_admin">Welcome to ADMIN</h3>
    <div class="wrapper">
        <?php
        include("./config/config.php");
        include("./module/header.php");
        include("./module/menu.php");
        include("./module/main.php");
        include("./module/footer.php");
        ?>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
        CKEDITOR.replace('thongtinlienhe');

    </script>
    <script>
        new Morris.Area({
            // ID of the element in which to draw the chart.
            element: 'chart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [{
                    year: '2024-10-2',
                    order : 5,
                    sales : 15000,
                    quantity: 20
                },
                {
                    year: '2024-9-19',
                    order : 5,
                    sales : 18000,
                    quantity: 20
                },
                {
                    year: '2024-8-29',
                    order : 5,
                    sales : 19000,
                    quantity: 20
                },
                {
                    year: '2024-12-2',
                    order : 5,
                    sales : 12000,
                    quantity: 20
                },
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['order','sales','quantity'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Đơn hàng','Doanh thu','Số lượng bán ra']
        });
    </script>
</body>

</html>