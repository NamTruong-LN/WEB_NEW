<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    p {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 50%;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-collapse: collapse;
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
        /* width: 30%; */
    }

    td input[type="text"] {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s;
    }

    td input[type="text"]:focus {
        border-color: #007bff;
    }

    td input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s;
    }

    td input[type="submit"]:hover {
        background-color: #0056b3;
    }

    td[colspan="2"] {
        text-align: center;
        border: none;
    }

    td:last-child {
        border-bottom: none;
    }
</style>
<p>Thêm danh mục bài viết</p>
<table border="1px" width="50%" style="border-collapse:collapse">
    <form action="../admin/module/quanlydanhmucbaiviet/xuly.php" method="POST">
        <tr>
            <td>Tên danh mục bài viết</td>
            <td><input type="text" name="tendanhmucbaiviet"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmucbaiviet" value="Thêm danh mục bài viết"></td>
        </tr>
    </form>
</table>