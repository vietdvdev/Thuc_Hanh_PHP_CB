<?php
echo "<pre>";
// Khai báo các biến với các kiểu dữ liệu khác nhau
$a = 10;         
$b = 10.5;       
$c = "Hello";    
$d = true;      
$e = [1, 2, 3]; 
$f = null;      

// Hiển thị giá trị và kiểu dữ liệu của các biến
echo "Số nguyên: ";
var_dump($a) .PHP_EOL;

echo "Số thực:   ";
var_dump($b) .PHP_EOL;

echo "Chuỗi: ";
var_dump($c) .PHP_EOL;

echo "Đúng/Sai:  ";
var_dump($d) .PHP_EOL;

echo "Mảng: ";
var_dump($e) .PHP_EOL ;

echo "NULL: ";
var_dump($f) .PHP_EOL ;

?>
