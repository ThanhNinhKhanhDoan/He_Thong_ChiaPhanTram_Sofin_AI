<?php

/**
 * Class Affiliate_Profit_System
 * Tính hoa hồng theo cấp
 */
class Affiliate_Profit_System 
{
    private $doanh_thu;
    private $phan_tram_thue;
    private $config_cap;
    
    /**
     * Constructor
     * 
     * @param float $doanh_thu - Doanh thu
     * @param float $phan_tram_thue - Phần trăm thuế (ví dụ: 10 = 10%)
     * @param array $config_cap - Cấu hình [cap1, chia_cap2, chia_cap3, chia_cap4]
     */
    public function __construct($doanh_thu, $phan_tram_thue, $config_cap = [80, 50, 30, 15]) 
    {
        $this->doanh_thu = $doanh_thu;
        $this->phan_tram_thue = $phan_tram_thue;
        $this->config_cap = $config_cap;
    }
    
    /**
     * Hàm tính ra số % của từng cấp
     * 
     * @return array
     */
    public function tinhPhanTram() 
    {
        list($cap1, $chia_cap2, $chia_cap3, $chia_cap4) = $this->config_cap;
        $cap0 = 100 - $cap1;
        
        return [
            'cap0' => $cap0,
            'cap1' => $cap1 - $chia_cap2,
            'cap2' => $chia_cap2 - $chia_cap3,
            'cap3' => $chia_cap3 - $chia_cap4,
            'cap4' => $chia_cap4,
            'thue' => $this->phan_tram_thue
        ];
    }
    
    /**
     * Hàm xuất ra số tiền nhận được của từng cấp (trước thuế)
     * 
     * @return array
     */
    public function tinhSoTien() 
    {
        $phan_tram = $this->tinhPhanTram();
        
        return [
            'cap0' => $this->doanh_thu * $phan_tram['cap0'] / 100,
            'cap1' => $this->doanh_thu * $phan_tram['cap1'] / 100,
            'cap2' => $this->doanh_thu * $phan_tram['cap2'] / 100,
            'cap3' => $this->doanh_thu * $phan_tram['cap3'] / 100,
            'cap4' => $this->doanh_thu * $phan_tram['cap4'] / 100
        ];
    }
    
    /**
     * Hàm xuất ra số tiền nhận được của từng cấp (đã trừ thuế)
     * 
     * @return array
     */
    public function tinhSoTienSauThue() 
    {
        $so_tien_truoc_thue = $this->tinhSoTien();
        $ty_le_sau_thue = (100 - $this->phan_tram_thue) / 100;
        
        return [
            'cap0' => $so_tien_truoc_thue['cap0'] * $ty_le_sau_thue,
            'cap1' => $so_tien_truoc_thue['cap1'] * $ty_le_sau_thue,
            'cap2' => $so_tien_truoc_thue['cap2'] * $ty_le_sau_thue,
            'cap3' => $so_tien_truoc_thue['cap3'] * $ty_le_sau_thue,
            'cap4' => $so_tien_truoc_thue['cap4'] * $ty_le_sau_thue
        ];
    }
    
    /**
     * Hàm tính số tiền phải đóng cho thuế của từng cấp
     * 
     * @return array
     */
    public function tinhSoTienThue() 
    {
        $so_tien_truoc_thue = $this->tinhSoTien();
        $ty_le_thue = $this->phan_tram_thue / 100;
        
        return [
            'truoc_thue' => [
                'cap0' => $so_tien_truoc_thue['cap0'],
                'cap1' => $so_tien_truoc_thue['cap1'],
                'cap2' => $so_tien_truoc_thue['cap2'],
                'cap3' => $so_tien_truoc_thue['cap3'],
                'cap4' => $so_tien_truoc_thue['cap4']
            ],
            'thue' => [
                'cap0' => $so_tien_truoc_thue['cap0'] * $ty_le_thue,
                'cap1' => $so_tien_truoc_thue['cap1'] * $ty_le_thue,
                'cap2' => $so_tien_truoc_thue['cap2'] * $ty_le_thue,
                'cap3' => $so_tien_truoc_thue['cap3'] * $ty_le_thue,
                'cap4' => $so_tien_truoc_thue['cap4'] * $ty_le_thue
            ]
        ];
    }
}

/*
// === VÍ DỤ SỬ DỤNG ===

// Tạo instance với 3 input: doanh_thu, % thuế, config cấp
$commission = new Affiliate Profit System(1000000, 10, [80, 60, 50]);

echo "=== VÍ DỤ SỬ DỤNG ===\n\n";
echo "Input: Doanh thu = 1,000,000, Thuế = 10%, Config = [80, 60, 50]\n\n";

// 1. Tính phần trăm từng cấp
echo "1. Phần trăm từng cấp:\n";
$phan_tram = $commission->tinhPhanTram();
foreach ($phan_tram as $cap => $pt) {
    echo "{$cap}: {$pt}%\n";
}

// // 2. Tính số tiền trước thuế
// echo "\n2. Số tiền trước thuế:\n";
// $so_tien = $commission->tinhSoTien();
// foreach ($so_tien as $cap => $tien) {
//     echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
// }

// 3. Tính số tiền sau thuế
echo "\n3. Số tiền sau thuế:\n";
$so_tien_sau_thue = $commission->tinhSoTienSauThue();
foreach ($so_tien_sau_thue as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}

// 4. Tính số tiền thuế phải đóng
// echo "\n4. Số tiền thuế:\n";
$so_tien_thue = $commission->tinhSoTienThue();


// echo "Trước thuế:\n";
// foreach ($so_tien_thue['truoc_thue'] as $cap => $tien) {
//     echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
// }

echo "\nThuế phải đóng:\n";
foreach ($so_tien_thue['thue'] as $cap => $tien) {
    echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
}

// echo "\n=== VÍ DỤ KHÁC ===\n";
// // Ví dụ với config khác
// $commission2 = new CommissionCalculator(500000, 15, [75, 45, 25]);
// echo "\nInput: Doanh thu = 500,000, Thuế = 15%, Config = [75, 45, 25]\n";
// echo "Số tiền sau thuế:\n";
// $result2 = $commission2->tinhSoTienSauThue();
// foreach ($result2 as $cap => $tien) {
//     echo "{$cap}: " . number_format($tien, 0, ',', '.') . "\n";
// }


*/
?>