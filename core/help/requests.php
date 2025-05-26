<?php
function string_safe($string) {
// 	$string = htmlspecialchars(addslashes($string, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
// 	return htmlspecialchars($string);
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function string_safe_decode($string) {
    return htmlspecialchars_decode($string, ENT_QUOTES);
}

// kiểm tra độ mạnh của mật khẩu
function isStrongPassword($password) {
    $length = strlen($password);
    
    if ($length < 8) {
        return false;
    }
    
    $hasUpperCase = preg_match('/[A-Z]/', $password);
    $hasLowerCase = preg_match('/[a-z]/', $password);
    $hasDigit = preg_match('/[0-9]/', $password);
    $hasSpecialChar = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password);
    
    return $hasUpperCase && $hasLowerCase && $hasDigit && $hasSpecialChar;
}


function get_requests($method, $rules = []) {
    // $rules = [
    //  'username' => ["maxLen=10","minLen=5","password","email"],
    //  'password' => ["maxLen=10","minLen=5","password","email"]
    // ]
    $datas = [];
    $errors = [];
    if ($method == "POST") {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return ["stt" => false,"data" => []];
        }
        $method = "_POST";
        $requestDatas = $_POST;
    } else {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            return ["stt" => false,"data" => []];
        }
        $method = "_GET";
        $requestDatas = $_GET;
    }

    if (count($rules) > 0) {
        if (count($requestDatas) < 1) {
            $errors[$method][] = "Param does not exist.";
        }
    }
    
    foreach ($rules as $key => $data) {
        if (!isset($requestDatas[$key])) {
            $errors[$key][] = "The `$key` does not exist.";
        } else {
            # bảo mật bằng hàm string_safe
            $requestDatas[$key] = string_safe($requestDatas[$key]);
        }
    }
    
    foreach ($requestDatas as $key => $data) {
        // $data = string_safe($data);

        if (isset($rules[$key])) {
            foreach ($rules[$key] as $rowcs) {
                if ($rowcs == "email") {
                    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                        $errors[$key][] = "The `$key` attribute should contain a valid email address.";
                    }
                }

                if ($rowcs == "password") {
                    if (!isStrongPassword($data)) {
                        $errors[$key][] = "The `$key` attribute should meet the criteria for a strong password.";
                    }
                }

                if (strpos($rowcs, "minLen") !== false) {
                    $minLens = explode('=', $rowcs);
                    if (strlen($data) < intval($minLens[1])) {
                        $errors[$key][] = "The `$key` attribute should have a minimum length of " . $minLens[1] . " characters.";
                    }
                }

                if (strpos($rowcs, "maxLen") !== false) {
                    $maxLens = explode('=', $rowcs);
                    if (strlen($data) > intval($maxLens[1])) {
                        $errors[$key][] = "The `$key` attribute should have a maximum length of " . $maxLens[1] . " characters.";
                    }
                }

                if (strpos($rowcs, "number") !== false) {
                    if (!is_numeric($data)) {
                        $errors[$key][] = "The `$key` attribute should be a number.";
                    }
                }

                if (strpos($rowcs, "abs") !== false) {
                    $data2 = intval($data);
                    if ($data2 < 0) {
                        $errors[$key][] = "The `$key` attribute should be a positive number.";
                    }
                }
                if (strpos($rowcs, "minNumber") !== false) {
                    $min = explode('=', $rowcs);
                    if (intval($data) < intval($min[1])) {
                        $errors[$key][] = "The `$key` attribute should be at least " . $min[1] . ".";
                    }
                }
                if (strpos($rowcs, "maxNumber") !== false) {
                    $max = explode('=', $rowcs);
                    if (intval($data) > intval($max[1])) {
                        $errors[$key][] = "The `$key` attribute should be at most " . $max[1] . ".";
                    }
                }
            }
        }

        $datas[$key] = $data;
    }
    
    if (count($errors) > 0) {
    	return ["stt" => false,"data" => $errors];
    } else {
        $data_dones = [];
        foreach ($rules as $key => $data) {
            $data_dones[$key] = $requestDatas[$key];
        }
    	return ["stt" => true,"data" => $data_dones];
    }
}
