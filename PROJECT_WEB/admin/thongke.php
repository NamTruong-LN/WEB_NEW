<?php 
    require('../carbon/autoload.php');
    use Carbon\Carbon;
    include('./config/config.php');
    if(isset($_POST['thoigian'])) {
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian = '';
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')-> subdays(365)->toDateString();
    }
    

    $subdays = Carbon::now('Asia/Ho_Chi_Minh')-> subdays(365)->toDateString();
    $now =Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $sql = "SELECT * FROM "
?>