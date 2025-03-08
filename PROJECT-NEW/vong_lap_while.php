<?php 

for($i = 1; $i < 10; $i++){
   if($i == 5){
        continue;
    }
    echo $i.'<br>';
}

exit('Dừng chương trình');

echo "Vòng lặp While: ";
$i = 0;
while($i < 10 ){
    echo $i."<br>";
    $i++;
}

echo $i;

$j = 0;
echo '<br>' . "Vòng lặp do-while : <br>";

do{
    echo $j.'<br>';
    $j++;
} while($j < 10);

?>