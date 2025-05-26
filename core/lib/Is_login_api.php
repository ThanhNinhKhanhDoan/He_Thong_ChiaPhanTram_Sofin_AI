<?php
class Is_login_api {
    private $db;
    private $u_id;
    private $session_login;
    private $token;
    public function __construct($db,$token) {
        $this->db = $db;
        $this->token = $token;
    }
    public function is_user() {
        $where = [
            "token" => $this->token
        ];
        if ($this->db->count("users",$where) > 0) {
            $datas = $this->db->findOne("users",$where);
            return $datas[0];
        } else {
            return 0;
        }
    }
    
    public function is_admin() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Lock") !== false) {
                return 0;
            }
            if (strpos($data['roles'], "Admin") === false) {
                return 0;
            }
            return 1;
        }
    }
    
    public function is_dev() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Lock") !== false) {
                return 0;
            }
            if (strpos($data['roles'], "Admin") !== false or strpos($data['roles'], "Dev") !== false) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    
    public function is_investor() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Lock") !== false) {
                return 0;
            }
            if (strpos($data['roles'], "Admin") !== false or strpos($data['roles'], "Investor") !== false) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    
    
    public function is_u_id() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Lock") !== false) {
                return 0;
            }
            if (strpos($data['roles'], "Admin") !== false or strpos($data['roles'], "U-ID") !== false) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    
    
    public function is_sp() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Lock") !== false) {
                return 0;
            }
            if (strpos($data['roles'], "Admin") !== false or strpos($data['roles'], "U-ID") !== false or strpos($data['roles'], "Dev") !== false or strpos($data['roles'], "SP") !== false) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    
    
    
    public function is_lock() {
        $data = $this->is_user();
        if ($data == 0) {
            return 0;
        } else {
            if (strpos($data['roles'], "Admin" !== false) or strpos($data['roles'], "U-ID") !== false or strpos($data['roles'], "Dev") !== false or strpos($data['roles'], "SP") !== false  or strpos($data['roles'], "Lock") !== false) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    
    
}
?>
