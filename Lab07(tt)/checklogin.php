<?php
session_start();
if(isset($_SESSION['dalogin'])==true&&$_SESSION['dalogin']==1){
    echo"Đã login";
}
else{
    echo "Bạn chưa login";
}
?>