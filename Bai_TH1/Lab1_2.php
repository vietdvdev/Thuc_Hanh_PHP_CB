<?php
// Toán tử số học

echo"<pre>";


$a = 10;
$b = 5;

echo "Tổng: " . ($a + $b) .PHP_EOL;
echo "Hiệu: " . ($a - $b)  .PHP_EOL;
echo "Tích: " . ($a * $b) .PHP_EOL;
echo "Thương: " . ($a / $b) .PHP_EOL;
echo "Lũy thừa: " . ($a ** $b) .PHP_EOL;
echo "Chia lấy dư: " . ($a % $b) . "<br><br>";

// Toán tử so sánh
echo "10 == 5: " . ($a == $b ? "true" : "false") .PHP_EOL;
echo "10 != 5: " . ($a != $b ? "true" : "false") .PHP_EOL;
echo "10 > 5: " . ($a > $b ? "true" : "false")  .PHP_EOL;
echo "10 < 5: " . ($a < $b ? "true" : "false") .PHP_EOL;
echo "10 >= 5: " . ($a >= $b ? "true" : "false") .PHP_EOL;
echo "10 <= 5: " . ($a <= $b ? "true" : "false") . "<br><br>";



// Toán tử logic
$x = true;
$y = false;

echo "true AND false: " . ($x && $y ? "true" : "false") .PHP_EOL;
echo "true OR false: " . ($x || $y ? "true" : "false") .PHP_EOL;
echo "NOT true: " . (!$x ? "true" : "false") .PHP_EOL;
echo "NOT true: " . (!$x ? "true" : "false") .PHP_EOL;
echo "NOT true: " . (!$x ? "true" : "false") .PHP_EOL;
?>
