<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        /* padding: 20px; */
    }

    ul.admin_list {
        list-style-type: none;
        padding: 0;
        margin: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    ul.admin_list li a {
        border-bottom: 1px solid #ddd;
    }

    ul.admin_list li:last-child {
        border-bottom: none;
    }

    ul.admin_list a {
        display: block;
        padding: 15px;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s;
    }

    ul.admin_list a:hover {
        background-color: #007bff;
        color: #fff;
    }

    ul.admin_list a.active {
        background-color: #0056b3;
        color: #fff;
    }
</style>
<ul class="admin_list">
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li>
    <li><a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
    <li><a href="index.php?action=quanlyweb&query=capnhat">Thông tin Website</a></li>
</ul>