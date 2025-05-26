<?php
function rw($input) {
    // Sử dụng biểu thức chính quy để giữ lại chỉ những ký tự mong muốn
    $diacriticsMap = array(
        'à' => 'a', 'á' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a',
        'ằ' => 'a', 'ắ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a',
        'ầ' => 'a', 'ấ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a',
        'è' => 'e', 'é' => 'e', 'ẻ' => 'e', 'ẽ' => 'e', 'ẹ' => 'e',
        'ề' => 'e', 'ế' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e',
        'ì' => 'i', 'í' => 'i', 'ỉ' => 'i', 'ĩ' => 'i', 'ị' => 'i',
        'ò' => 'o', 'ó' => 'o', 'ỏ' => 'o', 'õ' => 'o', 'ọ' => 'o',
        'ồ' => 'o', 'ố' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
        'ờ' => 'o', 'ớ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o',
        'ù' => 'u', 'ú' => 'u', 'ủ' => 'u', 'ũ' => 'u', 'ụ' => 'u',
        'ừ' => 'u', 'ứ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u',
        'ỳ' => 'y', 'ý' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'ỵ' => 'y',
        'đ' => 'd'
    );
    $input = strtr($input, $diacriticsMap);
    // $sanitized = preg_replace('/[^\w\s.+"]+/', '_', $input);
    return $input;
}

// function get_url() {
//     $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
//     $uri = $_SERVER['REQUEST_URI'];
//     $host = $_SERVER['HTTP_HOST'];
//     return $protocol . $host . $uri;
// }
// function get_domain() {
//     $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
//     $host = $_SERVER['HTTP_HOST'];
//     return $protocol . $host;
// }

function get_url() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || 
                (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') 
                ? 'https://' : 'http://';
    $uri = $_SERVER['REQUEST_URI'];
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host . $uri;
}
function get_domain() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || 
                (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') 
                ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host;
}


function asset($pathFile) {
    return get_domain()."/assets".$pathFile;
}
function get_path_url() {
    $url = get_url();
    $parsedUrl = parse_url($url);
    $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    return trim($path, '/');
}
function path_urls() {
    $pathUrl = get_path_url();
    $pathSegments = explode('/', $pathUrl);
    $datas = [];
    foreach ($pathSegments as $value) {
        $datas[] = rw($value);
    }
    return $datas;
}
function get_url_request_param() {
    $url = get_url();
    $parsedUrl = parse_url($url);
    if (isset($parsedUrl['query'])) {
        $query = $parsedUrl['query'];
    } else {
        $query = "";
    }
    return $query;
}
function get_route_to_file_rules() {
    $pathUrls = path_urls();
    if (count($pathUrls) < 1) {
        return "public/rules.php";
    } else if (count($pathUrls) == 1 and $pathUrls[0] === "") {
        return "public/rules.php";
    } else if (count($pathUrls) == 1) {
        return $pathUrls[0]."/rules.php";
    } else if (count($pathUrls) == 2) {
        return $pathUrls[0]."/rules.php";
    } else if (count($pathUrls) == 3) {
        return $pathUrls[0]."/rules.php";
    } else {
        return $pathUrls[0]."/rules.php";
    }
}
function get_route_to_file() {
    $pathUrls = path_urls();
    if (count($pathUrls) < 1) {
        return "public/home/index.php";
    } else if (count($pathUrls) == 1 and $pathUrls[0] === "") {
        return "public/home/index.php";
    } else if (count($pathUrls) == 1) {
        return $pathUrls[0]."/home/index.php";
    } else if (count($pathUrls) == 2) {
        return $pathUrls[0]."/".$pathUrls[1]."/index.php";
    } else if (count($pathUrls) == 3) {
        return $pathUrls[0]."/".$pathUrls[1]."/".$pathUrls[2].".php";
    } else {
        return $pathUrls[0]."/".$pathUrls[1]."/".$pathUrls[2].".php";
    }
}

function get_route_to_file_css() {
    $pathUrls = path_urls();
    if (count($pathUrls) < 1) {
        return "css/home/index.php";
    } else if (count($pathUrls) == 1 and $pathUrls[0] === "") {
        return "css/home/index.php";
    } else if (count($pathUrls) == 1) {
        return"css/home/index.php";
    } else if (count($pathUrls) == 2) {
        return "css/".$pathUrls[1]."/index.php";
    } else if (count($pathUrls) == 3) {
        return "css/".$pathUrls[1]."/".$pathUrls[2].".php";
    } else {
        return "css/".$pathUrls[1]."/".$pathUrls[2].".php";
    }
}

function get_route_to_file_js() {
    $pathUrls = path_urls();
    if (count($pathUrls) < 1) {
        return "js/home/index.php";
    } else if (count($pathUrls) == 1 and $pathUrls[0] === "") {
        return "js/home/index.php";
    } else if (count($pathUrls) == 1) {
        return"js/home/index.php";
    } else if (count($pathUrls) == 2) {
        return "js/".$pathUrls[1]."/index.php";
    } else if (count($pathUrls) == 3) {
        return "js/".$pathUrls[1]."/".$pathUrls[2].".php";
    } else {
        return "js/".$pathUrls[1]."/".$pathUrls[2].".php";
    }
}



function set_route_to_link($pathUrls = []) {
    $datas = [];
    foreach ($pathUrls as $value) {
        $datas[] = rw($value);
    }
    $pathUrls = $datas;
    if (count($pathUrls) < 1) {
        return get_domain();
    } else if (count($pathUrls) == 1 and $pathUrls[0] === "") {
        return get_domain();
    } else if (count($pathUrls) == 1) {
        return get_domain()."/".$pathUrls[0];
    } else if (count($pathUrls) == 2) {
        return get_domain()."/".$pathUrls[0]."/".$pathUrls[1];
    } else if (count($pathUrls) == 3) {
        return get_domain()."/".$pathUrls[0]."/".$pathUrls[1]."/".$pathUrls[2];
    } else {
        $valueUrl = get_domain();
        foreach ($pathUrls as $value) {
            $value = trim($value, '/');
            $valueUrl .= "/".$value;
        }
        return $valueUrl;
    }
}
?>