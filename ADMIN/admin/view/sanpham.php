<div class="main">
    <h2>SẢN PHẨM</h2>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
        <select name="iddanhmuc" id="">
            <option value="0">Chọn danh mục</option>
            <?php
                if(isset($dsdm)){
                    foreach ($dsdm as $key => $dm){
                        echo '<option value="'.$dm['id'].'">'.$dm['tendanhmuc'].'</option>';
                    }
                }
            ?>  
        </select>
        <input type="text" name="tensanpham" id="">
        <input type="file" name="hinh" id="">
        <?php
            if(isset($uploadOk)&& ($uploadOk == 0 )){
                echo "Yêu cầu nhập đúng file hình ảnh!";
            }
        
        ?>
        <input type="text" name="gia" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>

        <?php
        //var_dump($kq);
        ?>

        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $item) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$item['tensanpham'].'</td>
                        <td><img src ="'.$item['img'].'" width="80px"></td>
                        <td>'.$item['gia'].'</td>
                        <td><a href="index.php?act=updatesanphamform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=delsanpham&id='.$dm['id'].'">Xóa</a></td>
                    </tr>';
            }
        }
        ?>

    </table>

</div>