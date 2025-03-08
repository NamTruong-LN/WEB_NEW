<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
<h4 class="col-10 m-auto p-2 text-center">DANH SÁCH THỂ LOẠI</h4>
<table class="table table-bordered">
    <tr>
        <th>Tên TL</th>
        <th>Thứ tự</th>
        <th>Ẩn hiện</th>
        <th>Ngôn ngữ</th>
    </tr>
    <?php
    $listTheLoai=layDanhSachTheLoai();
     foreach ($listTheLoai as $row) { ?>
        <tr>
            <td> <?= $row['TenTL'] ?> </td>
            <td> <?= $row['ThuTu'] ?> </td>
            <td> <?= $row['AnHien'] ?> </td>
            <td> <?= $row['lang'] ?> </td>
        </tr>
    <?php } ?>
</table>