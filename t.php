<?php
require("load_system.php");
echo password_hash("Sofin123@", PASSWORD_BCRYPT);
echo "<br>";
echo password_verify("Sofin123@", '$2y$10$y5cER8np7bDjF4lLCEBZVOgmnMSN9MSZCx8kKJmXa/CutwEOtoxIi');












echo "<hr>";
$commission = new Affiliate_Profit_System(1000000, 10, [80, 60, 50, 20]);



echo "=== VÍ DỤ SỬ DỤNG ===\n\n";
echo "Input: Doanh thu = 1,000,000, Thuế = 10%, Config = [80, 50, 30]\n\n";

// 1. Tính phần trăm từng cấp
echo "1. Phần trăm từng cấp:\n";
$phan_tram = $commission->tinhPhanTram();
foreach ($phan_tram as $cap => $pt) {
    echo "{$cap}: {$pt}%\n";
}

// 2. Tính số tiền trước thuế
echo "\n2. Số tiền trước thuế:\n";
$so_tien = $commission->tinhSoTien();
foreach ($so_tien as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}

// 3. Tính số tiền sau thuế
echo "\n3. Số tiền sau thuế:\n";
$so_tien_sau_thue = $commission->tinhSoTienSauThue();
foreach ($so_tien_sau_thue as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}

// 4. Tính số tiền thuế phải đóng
echo "\n4. Số tiền thuế:\n";
$so_tien_thue = $commission->tinhSoTienThue();

echo "Trước thuế:\n";
foreach ($so_tien_thue['truoc_thue'] as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}

echo "\nThuế phải đóng:\n";
foreach ($so_tien_thue['thue'] as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}



