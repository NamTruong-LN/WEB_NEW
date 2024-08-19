<?php 
    if(isset($_POST['doimatkhau'])){
        $taikhoan = $_POST['email'];
        $matkhau_cu = md5($_POST['password_cu']);
        $matkhau_moi = md5($_POST['password_moi']);
        $sql = "SELECT * FROM tbl_dangky WHERE email = '".$taikhoan."' AND matkhau = '".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau = '".$matkhau_moi."' ");
            echo '<p style="color:green">Mật khẩu đã thay đổi thành công</p>';
        }else{ 
            echo '<p style="color:red">Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại</p>';
        }
    }
?>



<form action="" autocomplete="off" method="post" style="text-align: center;">
    <p>Đổi mật khẩu ADMIN</p>
    <p>Tài Khoản</p>
    <div class="user">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="email" placeholder="Email...." class="username">
    </div>
    <p class="passworg_tag">Mật khẩu cũ</p>
    <div class="password">
        <i class="fa-solid fa-lock"></i>
        <input type="text" name="password_cu" placeholder="Password">
    </div>
    <p class="passworg_tag">Mật khẩu mới</p>
    <div class="password">
        <i class="fa-solid fa-lock"></i>
        <input type="text" name="password_moi" placeholder="Password">
    </div>
    <!-- <p class="forget"><a href="">Quên mật khẩu?</a></p> -->
    <p><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></p>
    <div class="loging_icon">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
</form>