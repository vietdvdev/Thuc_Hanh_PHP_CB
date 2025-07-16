<?php
define("SO_NGUYEN_TO_CAN_TIM", 10);

// Hàm kiểm tra số nguyên tố
function laSoNguyenTo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$mang_nguyen_to = [];
$so = 2;

while (count($mang_nguyen_to) < SO_NGUYEN_TO_CAN_TIM) {
    if (laSoNguyenTo($so)) {
        $mang_nguyen_to[] = $so;
    }
    $so++;
}

echo "Danh sách " . SO_NGUYEN_TO_CAN_TIM . " số nguyên tố đầu tiên: " . implode(", ", $mang_nguyen_to);

?>

