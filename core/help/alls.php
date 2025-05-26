<?php
function isValidDomain($domain) {
    $pattern = "/^(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/";
    return preg_match($pattern, $domain) === 1;
}
function getDomainFromUrl($url) {
    $parsedUrl = parse_url($url);
    return $parsedUrl['host'] ?? null;
}

/**
 * Định dạng số tiền theo định dạng tiền tệ Việt Nam
 * 
 * @param int|string $amount Số tiền cần định dạng
 * @return string Chuỗi đã được định dạng theo tiền tệ Việt Nam
 */
function formatCurrencyVND($amount): string
{
    // Chuyển đổi amount thành số
    $amount = is_numeric($amount) ? $amount : floatval(preg_replace('/[^0-9.]/', '', $amount));
    
    // Định dạng số với hàm number_format
    return number_format($amount, 0, '.', '.');
}

/**
 * Chuyển đổi chuỗi tiền tệ đã định dạng thành số
 * 
 * @param string $formattedAmount Chuỗi tiền tệ đã định dạng (ví dụ: "100.000")
 * @param string $thousandsSeparator Ký tự phân cách hàng nghìn (mặc định là dấu chấm)
 * @return float|int Số tiền dạng số
 */
function parseCurrencyVND($formattedAmount, $thousandsSeparator = '.'): float
{
    // Loại bỏ ký tự phân cách hàng nghìn
    $numericValue = str_replace($thousandsSeparator, '', $formattedAmount);
    
    // Chuyển đổi thành số
    return is_numeric($numericValue) ? floatval($numericValue) : 0;
}


/**
 * Get the real IP address of the user
 * 
 * @return string The IP address of the user
 */
function getUserIP(): string
{
    // Check for shared internet/ISP IP
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    
    // Check for IPs passing through proxies
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // HTTP_X_FORWARDED_FOR can include multiple IPs separated by comma
        // The first one is the original client IP
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    }
    
    // Check for Cloudflare IP
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    
    // If no proxy detected, use direct remote address
    return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}

/**
 * Lấy thông tin đầy đủ về trình duyệt và user agent của người dùng
 * 
 * @return array Mảng chứa thông tin chi tiết về trình duyệt và user agent
 */
function getBrowserInfo(): array
{
    // Lấy user agent string
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    // Mảng kết quả
    $browserInfo = [
        'user_agent' => $userAgent,
        'browser_name' => 'Unknown',
        'browser_version' => 'Unknown',
        'operating_system' => 'Unknown',
        'device_type' => 'Unknown',
        'is_mobile' => false,
        'is_tablet' => false,
        'is_desktop' => true,
        'is_bot' => false
    ];
    
    // Kiểm tra hệ điều hành
    if (preg_match('/windows|win32|win64/i', $userAgent)) {
        $browserInfo['operating_system'] = 'Windows';
    } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
        $browserInfo['operating_system'] = 'MacOS';
    } elseif (preg_match('/linux/i', $userAgent)) {
        $browserInfo['operating_system'] = 'Linux';
    } elseif (preg_match('/android/i', $userAgent)) {
        $browserInfo['operating_system'] = 'Android';
        $browserInfo['is_mobile'] = true;
        $browserInfo['is_desktop'] = false;
        
        // Kiểm tra nếu là tablet Android
        if (preg_match('/tablet|SM-T/i', $userAgent)) {
            $browserInfo['is_tablet'] = true;
            $browserInfo['is_mobile'] = false;
            $browserInfo['device_type'] = 'Tablet';
        } else {
            $browserInfo['device_type'] = 'Mobile';
        }
    } elseif (preg_match('/iphone/i', $userAgent)) {
        $browserInfo['operating_system'] = 'iOS';
        $browserInfo['device_type'] = 'Mobile';
        $browserInfo['is_mobile'] = true;
        $browserInfo['is_desktop'] = false;
    } elseif (preg_match('/ipad/i', $userAgent)) {
        $browserInfo['operating_system'] = 'iOS';
        $browserInfo['device_type'] = 'Tablet';
        $browserInfo['is_tablet'] = true;
        $browserInfo['is_desktop'] = false;
    }
    
    // Kiểm tra trình duyệt và phiên bản
    if (preg_match('/MSIE|Trident/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Internet Explorer';
        if (preg_match('/MSIE\s*(\d+\.\d+)/i', $userAgent, $matches)) {
            $browserInfo['browser_version'] = $matches[1];
        } elseif (preg_match('/Trident.*rv:(\d+\.\d+)/i', $userAgent, $matches)) {
            $browserInfo['browser_version'] = $matches[1];
        }
    } elseif (preg_match('/Edg/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Microsoft Edge';
        preg_match('/Edg\/([0-9\.]+)/i', $userAgent, $matches);
        $browserInfo['browser_version'] = $matches[1] ?? 'Unknown';
    } elseif (preg_match('/Firefox/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Firefox';
        preg_match('/Firefox\/([0-9\.]+)/i', $userAgent, $matches);
        $browserInfo['browser_version'] = $matches[1] ?? 'Unknown';
    } elseif (preg_match('/Chrome/i', $userAgent) && !preg_match('/Chromium|OPR|Edge/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Chrome';
        preg_match('/Chrome\/([0-9\.]+)/i', $userAgent, $matches);
        $browserInfo['browser_version'] = $matches[1] ?? 'Unknown';
    } elseif (preg_match('/Safari/i', $userAgent) && !preg_match('/Chrome|Chromium|OPR|Edge/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Safari';
        preg_match('/Version\/([0-9\.]+)/i', $userAgent, $matches);
        $browserInfo['browser_version'] = $matches[1] ?? 'Unknown';
    } elseif (preg_match('/Opera|OPR/i', $userAgent)) {
        $browserInfo['browser_name'] = 'Opera';
        if (preg_match('/OPR\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browserInfo['browser_version'] = $matches[1];
        } elseif (preg_match('/Opera\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browserInfo['browser_version'] = $matches[1];
        }
    }
    
    // Kiểm tra nếu là bot
    if (preg_match('/bot|crawl|slurp|spider/i', $userAgent)) {
        $browserInfo['is_bot'] = true;
        $browserInfo['device_type'] = 'Bot';
        $browserInfo['is_desktop'] = false;
    }
    
    return $browserInfo;
}

function parseEnvString($envString) {
    // Tạo một mảng rỗng để lưu trữ kết quả
    $result = [];

    // Tách chuỗi thành các dòng
    $lines = explode("\n", trim($envString));

    // Duyệt qua từng dòng
    foreach ($lines as $line) {
        // Bỏ qua các dòng trống
        if (trim($line) === '') {
            continue;
        }

        // Tách dòng thành key và value
        list($key, $value) = explode('=', $line, 2);

        // Loại bỏ khoảng trắng xung quanh key và value
        $key = trim($key);
        $value = trim($value);

        // Thêm key và value vào mảng kết quả
        $result[$key] = $value;
    }

    return $result;
}
function shortenString($string) {
    if (strlen($string) > 20) {
        return substr($string, 0, 20) . '...';
    } else {
        return $string;
    }
}
function roles($role) {
    if ($role == "W-1") {
        return '<span class="badge bg-warning-transparent">W-1</span> ';
    } else if ($role == "W-2") {
        return '<span class="badge bg-warning-transparent">W-2</span> ';
    } else if ($role == "W-3") {
        return '<span class="badge bg-warning-transparent">W-3</span> ';
    } else if ($role == "Dev") {
        return '<span class="badge bg-info-transparent">Dev</span> ';
    } else if ($role == "Investor") {
        return '<span class="badge bg-info-transparent">Investor</span> ';
    } else if ($role == "Admin") {
        return '<span class="badge bg-danger-transparent">Admin</span> ';
    } else if ($role == "C-ID") {
        return '<span class="badge bg-success-transparent">C-ID</span> ';
    } else if ($role == "Lock") {
        return '<span class="badge bg-dark-transparent">Lock</span> ';
    } else if ($role == "U-ID") {
        return '<span class="badge bg-success-transparent">U-ID</span> ';
    } else if ($role == "SP") {
        return '<span class="badge bg-success-transparent">SP</span> ';
    } else {
        return '<span class="badge bg-success-transparent">Active</span> ';   
    } 
}

// hiển thị thời gian full 
function displayDateTime($currentTime) {
    // Định dạng ngày tháng năm
    $formattedDate = date('d/m/Y', $currentTime);
    // Định dạng giờ phút
    $formattedTime = date('H:i', $currentTime);
    // Kết hợp cả hai định dạng thành kết quả cuối cùng
    $result = $formattedTime . ' - ' . $formattedDate;
    return $result;
}
// hiển thị thời gian full 
function displayDate($currentTime) {
    return date('d/m/Y', $currentTime);
}
// điếm thời gian theo kiểu 1 phút trước
function countTimeAgo($timestamp) {
    // Get the current time
    $currentTime = time();
    
    // Calculate the time difference between the provided time and the current time
    $timeDifference = $currentTime - $timestamp;

    if ($timeDifference < 1) {
        return "$timeDifference second ago";
    } elseif ($timeDifference < 60) {
        return "$timeDifference seconds ago";
    } elseif ($timeDifference < 3600) {
        $minutesAgo = floor($timeDifference / 60);
        return "$minutesAgo minutes ago";
    } elseif ($timeDifference < 86400) {
        $hoursAgo = floor($timeDifference / 3600);
        return "$hoursAgo hours ago";
    } elseif ($timeDifference < 2592000) {
        $daysAgo = floor($timeDifference / 86400);
        return "$daysAgo days ago";
    } elseif ($timeDifference < 31536000) {
        $monthsAgo = floor($timeDifference / 2592000);
        return "$monthsAgo months ago";
    } else {
        return date('H:i - d/m/Y', $timestamp);
    }
}

function removeAccents($text) {
    $text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
    $text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
    $text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
    $text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
    $text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
    $text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
    $text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
    $text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
    $text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
    $text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
    $text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
    $text = preg_replace("/(đ)/", 'd', $text);
    $text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
    $text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
    $text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
    $text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
    $text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
    $text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
    $text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
    $text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
    $text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
    $text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
    $text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
    $text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
    $text = preg_replace("/(Đ)/", 'D', $text);
    $text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
    $text = preg_replace("/(Đ)/", 'D', $text);
    return $text;
}