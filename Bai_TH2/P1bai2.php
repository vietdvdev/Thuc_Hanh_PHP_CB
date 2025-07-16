<?php
// tính tổng các phần tử trong mảng
define("GIOI_HAN_GIA_TRI", 50); 
$mang_so = [10, 20, 30, 40, 60, 70, 80, 5, 15, 55];
$tong = 0;

foreach ($mang_so as $so) {
    if ($so > GIOI_HAN_GIA_TRI) {
        continue;
    }
    $tong += $so;
}

echo "Tong cac gia tri hop le trong mang la: $tong";
?>
