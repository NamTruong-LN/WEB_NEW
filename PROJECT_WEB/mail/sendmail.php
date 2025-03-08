<?php 
    include 'PHPMailer/src/PHPMailer.php';
    include 'PHPMailer/src/Exception.php';
    // include 'PHPMailer/src/OAuth.php';
    include 'PHPMailer/src/POP3.php';
    include 'PHPMailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
class Mailer {
    public function dathangmail($tieude,$noidung,$maildathang){
    // print_r($mail);
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); // Sử dụng SMTP để gửi mail
        $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
        $mail->SMTPAuth = true; // Bật xác thực SMTP
        $mail->Username = 'lnntruong2003@gmail.com'; // Tài khoản email
        $mail->Password = 'ekcyaglzpoimvpfc'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
        $mail->SMTPSecure = 'tls'; // Mã hóa SSL
        $mail->Port = 587; // Cổng kết nối SMTP là 465
        
        //Recipients
        $mail->setFrom('lnntruong2003@gmail.com', 'Mailer'); // Địa chỉ email và tên người gửi
        $mail->addAddress('$maildathang', 'Trường'); // Địa chỉ mail và tên người nhận
        
        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $tieude; // Tiêu đề
        $mail->Body = $noidung; // Nội dung
        
        $mail->send();
        echo 'Message has been sent';
        } catch (Exception $e) {

        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
    
?>
