<?php
define("FIBO_SO", 10); 
define("CHIA_CHO", 7); 
// kiểm tra 10 số fibonacci đầu số đầu chia hết cho  CHIA-CHO
$fibo = [0, 1]; 
$i = 2; 

do {
    $so = $fibo[$i - 1] + $fibo[$i - 2]; 
    $fibo[] = $so;
    
    if ($so % CHIA_CHO == 0) {
        echo "So Fibonacci dau tien chia het cho " . CHIA_CHO . " la: $so";
        break;
    }
    
    $i++;
} while ($i < FIBO_SO);

?>
