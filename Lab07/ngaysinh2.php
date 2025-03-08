<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chọn ngày tháng năm sinh</title>
    <style>
        fieldset {
            border: 1px solid #d97a5e;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .container legend {
            display: block;
            margin: auto;
        }

        .container select {
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
            <select id="ngay" name="ngay">
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == 18) echo "<option value='$i' selected>Ngày $i</option>";
                    else echo "<option value='$i'>Ngày $i</option>";
                }
                ?>
            </select>
            <select id="thang" name="thang">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    if ($i == 10) echo "<option value='$i' selected>Tháng $i</option>";
                    else echo "<option value='$i'>Tháng $i</option>";
                }
                ?>
            </select>

            <select id="nam" name="nam">
                <?php
                for ($i = 1900; $i <= 2024; $i++) {
                    if ($i == 2003) echo "<option value='$i' selected>Năm $i</option>";
                    else echo "<option value='$i'>Năm $i</option>";
                }
                ?>
            </select>
        </fieldset>
    </div>
</body>

</html>