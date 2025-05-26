<?php
class Is_login_tier_5 {
	private $db;
	private $u_id;
	private $session_login;
	public function __construct($db) {
		$this->db = $db;
		try {
			if (isset($_COOKIE["u_id"]) and isset($_COOKIE["session_login"])) {
				$this->u_id = urldecode($_COOKIE["u_id"]);
				$this->session_login = urldecode($_COOKIE["session_login"]);
			} else {
				$this->u_id = false;
				$this->session_login = false;
			}
		} catch (Exception $e) {
			$this->u_id = false;
			$this->session_login = false;
		}
	}

	public function is_user() {
		if (!$this->u_id or !$this->session_login) {
			return false;
		}
		$where = [
			"_id" => new MongoDB\BSON\ObjectId($this->u_id),
			"session_login" => $this->session_login,
			"status" => "active"
		];
		if ($this->db->count("users",$where) > 0) {
			$datas = $this->db->findOne("users",$where);
			return $datas[0];
		} else {
			return false;
		}
	}
}
?>
