<?php
$username = trim(strip_tags($_POST['u']));
$pass = trim(strip_tags($_POST['p']));

$password = base64_encode($pass);

echo "<p>Username: " . $username . "</p>";
echo "<p>Password: " . $password . "</p>";

session_start();
if($username =="admin"&&$password==base64_encode("caphenhe")){
    $_SESSION['dalogin']=1;
}
else{
    unset($_SESSION['dalogin']);
}

if(isset($_POST['nho'])==true){
    setcookie("username",$username, time()+3600*24*7);
    setcookie("password",$password, time()+3600*24*7);
}
else{
    setcookie("username","",-1);
    setcookie("password","",-1);
}
?>