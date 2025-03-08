<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c98eb5;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            background-color: #cfb3cc;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        /* Update for form-inline class */
        .form-inline {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .form-inline label {
            margin-right: 10px;
            white-space: nowrap;
        }

        .form-inline input[type="radio"],
        .form-inline input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-inline label[for="male"],
        .form-inline label[for="female"],
        .form-inline label[for="shopping"],
        .form-inline label[for="singing"],
        .form-inline label[for="planes"] {
            margin-left: 5px;
        }

        .form-group .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group .btn-group input[type="submit"],
        .form-group .btn-group input[type="reset"] {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .form-group .btn-group input[type="submit"] {
            background-color: #007bff;
        }

        .form-group .btn-group input[type="reset"] {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Đăng ký thành viên</h2>

        <form action="xulydangki.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Tên truy cập</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group form-inline">
                <label>Phái:</label>
                <input type="radio" id="male" name="gender" value="Nam">
                <label for="male">Nam</label>
                <input type="radio" id="female" name="gender" value="Nữ">
                <label for="female">Nữ</label>
            </div>
            <div class="form-group form-inline">
                <label>Sở thích:</label>
                <input type="checkbox" id="shopping" name="hobbies[]" value="Nhìn mưa rơi">
                <label for="shopping">Nhìn mua rơi</label>
                <input type="checkbox" id="singing" name="hobbies[]" value="Nghe chim hót">
                <label for="singing">Nghe chim hót</label>
                <input type="checkbox" id="planes" name="hobbies[]" value="Ngắm máy bay">
                <label for="planes">Ngắm máy bay</label>
            </div>
            <div class="form-group">
                <label for="image">Hình</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="nghenghiep">Nghề nghiệp</label>
                <select id="nghenghiep" name="nghenghiep">
                    <option value="">Bạn làm nghề gì</option>
                    <option value="Lập trình viên">Lập trình viên</option>
                    <option value="Giáo viên">Giáo viên</option>
                    <option value="Kỹ sư">Kỹ sư</option>
                </select>
            </div>
            <div class="form-group">
                <label for="about">Giới thiệu bản thân</label>
                <textarea id="about" name="about" rows="4"></textarea>
            </div>
            <div class="form-group btn-group">
                <input type="submit" value="Đăng ký">
                <input type="reset" value="Làm lại">
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm-password');
            const errorMessage = document.createElement('p');
            errorMessage.style.color = 'red';

            form.addEventListener('submit', function(event) {
                if (password.value !== confirmPassword.value) {
                    event.preventDefault();
                    errorMessage.textContent = 'Mật khẩu không trùng khớp.';
                    confirmPassword.after(errorMessage);
                } else {
                    errorMessage.textContent = '';
                }
            });
        });
    </script>

</body>

</html>