<?php
use Ramsey\Uuid\Uuid;

$session_login = Uuid::uuid4(); // Tạo một UUID ngẫu nhiên
$session_login = $session_login->toString();
# sửa tạm thời thôi -> nhớ sửa lại : chỉ cần xoá biến $session_login mới ở dưới là ok 
// $session_login = "HCN-3DHN-HNK";
$rules = [
    "email" => ["maxLen=160", "email"],
    "password" => ["maxLen=90"]
];


$requests = get_requests("POST", $rules);

$errors = [];

if ($requests['stt'] === false) {
    $errors = $requests['data'];
}
if (count($errors) > 0) {
    echo json_encode(["stt" => false, "data" => $errors]);
} else {
	$password = $requests['data']['password'];
	
	$email = $requests['data']['email'];
	$cookie_expire = time() + (86400 * 360);
	
	if (count($errors) > 0) {
	    echo json_encode(["stt" => false, "data" => $errors]);
	} else {
	    
		$check_mail = $db->count("users",["email" => $requests['data']['email']]);
		if ($check_mail < 1) {
		    $errors["email"][] = "Couldn’t find your Account.";
		} else {
		    
		    $data_users = $db->findOne("users",["email" => $requests['data']['email']]);
		    $data_users = $data_users[0];
		    $id = $data_users["_id"]->__toString();
			if (!password_verify($password, $data_users['password'])) {
			    $errors["password"][] = "Wrong password. Try again or click Forgot password to reset it.";
			} else {
				# update session password
				$db->editId("users",["session_login" => $session_login],$id);
			}
		}

		if (count($errors) > 0) {
		    echo json_encode(["stt" => false, "data" => $errors]);
		} else {
		    $id = $data_users["_id"]->__toString();
		    $dataUsers = $data_users;
		    // if (strpos($dataUsers['roles'], "Lock")) {
		    //     $errors["email"][] = "Account is locked.";
		    // }

		    // if (strpos($dataUsers['roles'], "Admin") === false) {
		    //     $errors["email"][] = "Your account does not have sufficient permissions to access this feature.";
		    // }

		    if (count($errors) > 0) {
		        echo json_encode(["stt" => false, "data" => $errors]);
		    } else {
		        $cookie_expire = time() + (86400 * 360);
		        setcookie("u_id", $id, $cookie_expire, "/");
		        setcookie("session_login", $session_login, $cookie_expire, "/");
		        echo json_encode(["stt" => true, "data" => ["Logged in successfully",$email]]);
		    }
		}
	}
}
?>