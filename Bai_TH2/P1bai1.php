<?php
define("GIOI_HAN", 30);
$tong = 0;

for ($i = 1; $i <= GIOI_HAN; $i++) {
    if ($i % 2 == 0) {
        continue; 
    }
    $tong += $i;
}

echo "Tong cac so le tu 1 den " . GIOI_HAN . " la: $tong";
?>
