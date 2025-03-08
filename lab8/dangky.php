
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="col-6 m-auto border border-secondary">
    <form action="xulydangky.php" method="post">
        <h4 class="bg-secondary text-white p-2 my-0 mx-n3">ĐĂNG KÝ THÀNH VIÊN</h4>
        <div class="form-group">
            <label for="username">Tên truy cập</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="pass">
        </div>
        <div class="form-group">
            <label for="repass">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="repass" name="repass">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label>Phái : </label>
            <input type="radio" name="phai" id="nam" value=1> <label for="nam">Nam</label>
            <input type="radio" name="phai" id="nu" value=0> <label for="nu">Nữ</label>
        </div>
        <div class="form-group">
            <label>Sở thích: </label>
            <input type="checkbox" name="st[]" id="st1" value="Nghe nhạc"> <label for="st1">Nghe nhạc</label>
            <input type="checkbox" name="st[]" id="st2" value="Chơi game"> <label for="st2">Chơi game</label>
            <input type="checkbox" name="st[]" id="st3" value="Ngủ"> <label for="st2">Ngủ</label>
        </div>
        <div class="form-group">
            <label for="hinh">Hình</label>
            <input type="file" class="form-control" id="hinh" name="hinh">
        </div>
        <div class="form-group">
            <label for="nghenghiep">Nghề nghiệp</label>
            <select class="form-control" id="nghenghiep" name="nghenghiep">
                <option value="0">Bạn làm nghề gì</option>
                <option value="1">Sinh viên</option>
                <option value="2">Học sinh</option>
                <option value="3">Giáo viên</option>
                <option value="4">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mota">Giới thiệu bản thân</label>
            <textarea class="form-control" id="mota" name="mota" rows="4"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary py-2 px-5" value="Đăng ký">
            <input type="reset" class="btn btn-danger py-2 px-5" value="Làm lại">
        </div>
    </form>
</div>