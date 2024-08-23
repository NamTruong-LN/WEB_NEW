<p>Liên hệ</p>
<?php 
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1 ";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>

        <?php 
            while($dong = mysqli_fetch_array($query_lh)){
        
        ?>
            <p><?php echo $dong['thongtinlienhe']?></p>
        <?php 
            }
        ?>

<p>Gửi thông tin liên hệ</p>
<table border="1px" width="50%" style="border-collapse:collapse">
    <form action="../PROJECT_WEB/pages/main/form_lienhe.php" method="POST">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" required name="username"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" required name="phone"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" required name="email"></td>
        </tr>
        <tr>
            <td>Note</td>
            <td><textarea rows="10" style="resize: none;" required name="note"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="guilienhe" value="Gửi thông báo"></td>
        </tr>
    </form>
</table>