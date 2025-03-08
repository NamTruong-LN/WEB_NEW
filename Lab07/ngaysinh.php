<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai3</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        fieldset {
            border: 1px solid #d97a5e;
        }

        legend {
            display: block;
            margin: auto;
        }

        select {
            text-align: center;
            width: 100px;
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #FF6F61;
            border-radius: 4px;
        }

        #ngay {
            background-color: #f9f9f9;
            color: #B8860B;
            border-color: #e2e2e2;
        }

        #thang {
            background-color: #f7e1c1;
            color: #B8860B;
            border-color: #d4a571;
            width: 150px;
        }

        #nam {
            background-color: #b22222;
            color: white;
            border-color: #a52a2a;
        }
    </style>
</head>

<body>
    <div class="container">
        <fieldset>
            <legend>Chọn ngày tháng năm sinh</legend>
            <select id="ngay">
                <option value="0">Chọn ngày</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>Ngày $i</option>";
                }
                ?>
            </select>
            <select id="thang">
                <option value="0">Chọn tháng</option>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>Tháng $i</option>";
                }
                ?>
            </select>
            <select id="nam">
                <option value="0">Chọn năm</option>
                <?php
                for ($i = 1930; $i <= 2020; $i++) {
                    echo "<option value='$i'>Năm $i</option>";
                }
                ?>
            </select>
        </fieldset>
    </div>
</body>

</html>