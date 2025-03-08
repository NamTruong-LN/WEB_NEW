<?php

for($i = 0; $i <10; $i++){
    echo $i.'<br>';
}

/*
Bài tập vòng lặp FOR
1. Hiển thị số chẵn,số lẻ trong dãy số từ:1,2,3,...,100
Bắt đầu:1 
Điều kiện lặp: 100
Biến tăng: 1
*/

$start = 1;
$end = 100;


$demSoLe = 0; //Đếm số lẻ 
$demSoChan = 0; //Đếm số Chẵn

$resultSoLe = null; //Biến để lưu số lẻ
$resultSoChan = null; //Biến để lưu số chẵn

for($i = $start; $i <= 100; $i++) {
    //Kiểm tra cái số chẵn - lẻ 
    if($i % 2 == 0){
        //$i số chẵn 
        $resultSoChan .= $i .'  ' ;
        $demSoChan++;
    }
    else {
        //$i số lẻ
        $resultSoLe .= $i . '  ';
        $demSoLe++;
    }
}


if($demSoChan > 0){
    echo "Tìm thấy".' '.$demSoChan.' '."số chẵn là:".$resultSoChan;
}
else {
    echo "Không tìm thấy số chẵn nào";
}

echo '<br>';

if($demSoLe > 0){
    echo "Tìm thấy".'  '.$demSoLe.' '."số lẻ là:".$resultSoLe;
}
else {
    echo "Không tìm thấy số lẻ nào";
}

echo '<br>';

/*
2.Tính giai thừa của một số nhập vào và hiển thị kết quả 
Giải thích:
    Input: Nhập vào số N
    Output: Hiển thị kết quả N
    Công thức: N! = 1*2*3*..*100 (N>0)
*/

$n = 10;
if($n > 0){
    //Sử lý giai thừa
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result *= $i;
    }
    echo "Kết quả giai thừa: ". $result.'<br>';
}
else {
    echo $n.'Không hợp lệ';
}