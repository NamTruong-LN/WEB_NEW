<?php
require_once "functions.php";
$idTL = $_GET['idTL'];
settype($idTL, "int");
xoaTheLoai($idTL);
header("location: index.php?page=theloai_ds");
