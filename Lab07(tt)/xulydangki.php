<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
    $nghenghiep = trim($_POST['nghenghiep']);
    $about = trim($_POST['about']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);

        // Ensure the uploads directory exists
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_path = $target_file;
        } else {
            $image_path = "Error uploading file.";
        }
    } else {
        $image_path = "No file uploaded or error during upload.";
    }

    echo "<h3>Thông tin đã nhập</h3>";
    echo "<p><strong>Tên truy cập:</strong> $username</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phái:</strong> $gender</p>";
    echo "<p><strong>Sở thích:</strong> " . implode(', ', $hobbies) . "</p>";
    echo "<p><strong>Nghề nghiệp:</strong> $nghenghiep</p>";
    echo "<p><strong>Giới thiệu bản thân:</strong> $about</p>";
    echo "<p><strong>Hình ảnh:</strong> <img src='$image_path' alt='Uploaded image'></p>";
}
