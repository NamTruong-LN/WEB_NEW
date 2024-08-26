<?php 
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);

        if(empty($email) || empty($matkhau)){
            echo'<p style="coler:red">Vui lòng điền đầy đủ thông tin</p>';
        }else{
        $sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("location: index.php");
        }else{ 
            echo '<p style="coler:red">Mật khẩu hoặc email sai, vui lòng nhập lại.</p>';
        }
    }
}
?>

<form class="dangnhap" action=""  method="post" style="text-align: center;">
    <p>Đăng nhập khách hàng</p>
    <p>Tài Khoản</p>
    <div class="user">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="email" size="50" placeholder="Email...." class="username">
    </div>
    <p class="passworg_tag">Mật khẩu</p>
    <div class="password">
        <i class="fa-solid fa-lock"></i>
        <input type="password" size="50" name="password" placeholder="Password">
    </div>
    <!-- <p class="forget"><a href="">Quên mật khẩu?</a></p> -->
    <p><input type="submit" name="dangnhap" value="Đăng nhập"></p>
    <div class="loging_icon">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
</form>