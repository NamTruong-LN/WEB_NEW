<style>
    /* body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        /* display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    } */

    table {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 50%;
        border-collapse: collapse;
    }

    p {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    td {
        padding: 15px;
        font-size: 16px;
        color: #333;
        text-align: center;
    }

    td:first-child {
        text-align: center;
        font-weight: bold;
        background-color: #f7f7f7;
        border-right: 1px solid #ccc;
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

    td[colspan="2"] {
        text-align: center;
    }

    td input[type="submit"] {
        background-color: #237ee1;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    td input[type="submit"]:hover {
        background-color: #007bff;
    }
</style>

<p>Thêm danh mục sản phẩm</p>
<table border="1px" width="50%" style="border-collapse:collapse">
    <form action="../admin/module/danhmucsp/xuly.php" method="POST">
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
        </tr>
    </form>
</table>