<?php
class Rules {
	public function users() {
		return [
		   'Admin' => ['Admin','danger','Administrator'],
		   'U-ID' => ['U-ID','success','Quản lý thành viên ID'],
		   'Dev' => ['Dev','info','Lập trình viên'],
		   'Investor' => ['Investor','info','Nhà đầu tư'],
		   'SP' => ['SP','success','Hỗ trợ khách hàng'],
		   'Lock' => ['Lock','dark','Tài khoản bị khoá'],
		];
	}

}