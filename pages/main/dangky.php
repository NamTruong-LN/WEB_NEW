<?php 
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = $_POST['matkhau'];

        // Kiểm tra nếu bất kỳ trường nào bị bỏ trống
            if(empty($tenkhachhang) || empty($email) || empty($dienthoai) || empty($diachi) || empty($matkhau)) {
                echo '<p style="color:red">Vui lòng điền đầy đủ thông tin!</p>';
            } else {
            // Mã hóa mật khẩu
            $matkhau = md5($matkhau);
            // Thực hiện truy vấn đăng kí
            $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
            VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");

        if($sql_dangky){
            // echo '<p style ="color:green">Bạn đã đăng ký thành công</p> ';
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['email'] = $email;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            echo '<script>alert("Đăng ký thành công");</script>';
            // header('location: index.php?quanly=dangnhap');
            echo '<script>setTimeout(function(){ window.location.href = "index.php?quanly=dangnhap"; }, 1000);</script>';
            exit();
        }
    }
}
?>
<p>Đăng ký thành viên</p>
<style>
    .dangky tr td {
        padding: 5px;
    }
</style>
<form action="" method="POST">
    <table class="dangky" border="1" width="50%" style="border-collapse: collapse">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" size="50" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" size="50" name="email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" size="50" name="dienthoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" size="50" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" size="50" name="matkhau"></td>
        </tr>
        <tr>
            <td><input type="submit" name="dangky" value="Đăng ký"></td>
            <td><a href="index.php?quanly=dangnhap">Đăng nhập</a></td>
        </tr>
    </table>
</form>