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
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-collapse: collapse;
        margin: 0 auto;
    }

    td {
        padding: 15px;
        font-size: 16px;
        color: #333;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    td:first-child {
        text-align: center;
        font-weight: bold;
        background-color: #f9f9f9;
        border-right: 1px solid #ddd;
        /* width: 25%; */
    }

    td input[type="text"],
    td input[type="file"],
    td textarea,
    td select {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s;
    }

    td input[type="text"]:focus,
    td input[type="file"]:focus,
    td textarea:focus,
    td select:focus {
        border-color: #007bff;
    }

    td textarea {
        resize: none;
    }

    td input[type="submit"] {
        background-color: #237ee1;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        width: 100%;
    }

    td input[type="submit"]:hover {
        background-color: #007bff;
    }

    td[colspan="2"] {
        text-align: center;
        border: none;
    }

    td:last-child {
        border-bottom: none;
    }
</style>
<p>Thêm sản phẩm</p>
<table border="1px" width="100%" style="border-collapse:collapse">
    <form method="POST" action="../admin/module/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasanpham"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea rows="10" name="tomtat" style="resize:none"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" name="noidung" style="resize:none"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>