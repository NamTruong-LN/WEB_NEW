<p>Quản lý thông tin website</p>
<?php
$sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1 ";
$query_lh = mysqli_query($mysqli, $sql_lh);
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        /* padding: 20px; */
    }

    p {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }

    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
        color: #333;
    }

    td:first-child {
        background-color: #f9f9f9;
        font-weight: bold;
    }

    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
        resize: none;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        display: block;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    form {
        margin: 0;
    }
</style>
<table border="1px" width="100%" style="border-collapse:collapse">
    <?php
    while ($dong = mysqli_fetch_array($query_lh)) {

    ?>
        <form method="POST" action="../admin/module/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">

            <tr>
                <td>Thông tin liên hệ</td>
                <td><textarea rows="10" name="thongtinlienhe" style="resize:none"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="submitlienhe" value="Cập nhật"></td>
            </tr>
        <?php
    }
        ?>
        </form>
</table>