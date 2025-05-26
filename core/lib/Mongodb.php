<?php
Class Mongodb {
	/*
	$wheres = 
	[
		'$or' => 
		[
	    	[
	            "level" => array('$lte' => 10),
	            "vip" => array('$eq' => 1),
	        ],
		    [
	            "vip" => array('$eq' => 2),
	            "level" => array('$eq' => 4),
	        ]
	    ]
	];
	*/
	public function rowId($table,$id) {
		global $db;
		$table = $db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
		} catch (Exception $e) {
			return false;
		}
		$result = $table->findOne(
			[
				'_id' => $id
			]
		);
		return $result;
	}

	public function row($table,$wheres) {
		global $db;
		$table = $db->$table;
		$result = $table->findOne(
			$wheres
		);
		return $result;
	}
	public function isRowId($table,$id) {
		global $db;
		try {
			$table = $db->$table;
			try {
				$id = new MongoDB\BSON\ObjectId($id);
			} catch (\Exception $e) {
				return false;
			}
			$result = $table->count(
				[
					'_id' => $id
				]
			);
			if ($result > 0) {
				return true;
			} else {
				return false;
			}
		} catch (\Exception $e) {
			return false;
		}
	}
	public function isRow($table,$wheres) {
		global $db;
		$table = $db->$table;
		$result = $table->count(
			$wheres
		);
		if ($result > 0) {
			return true;
		} else {
			return false;
		}
	}
	//public function 
	public function selectAllUnique($table,$col) {
		global $db;
		$table = $db->$table;
		$result = $table->distinct($col);
		return $result;
	}
	//public function 
	public function selectAll($table,$wheres) {
		global $db;
		$table = $db->$table;
		$result = $table->find(
			$wheres
		);
		return $result->toArray();
	}
	//public function 
	public function selectAllsortOder($table,$wheres,$sort,$sortOder) {
		global $db;
		$table = $db->$table;
		if ($sortOder == "DESC" or $sortOder == "desc") {
			$sortOder = -1;
		} else {
			$sortOder = 1;
		}
		$result = $table->find(
			$wheres,
			[
			    'sort' => [$sort => $sortOder]
		    ]
		);
		return $result->toArray();
	}
	//public function 
	public function select($table,$wheres,$sort,$sortOder,$skip,$limit) {
		global $db;
		$table = $db->$table;
		if ($sortOder == "DESC" or $sortOder == "desc") {
			$sortOder = -1;
		} else {
			$sortOder = 1;
		}
		$result = $table->find(
			$wheres,
			[
			    'limit' => $limit,
			    'skip' => $skip,
			    'sort' => [$sort => $sortOder]
		    ]
		);
		return $result->toArray();
	}
	public function selectLimit($table,$wheres,$limit) {
		global $db;
		$limit = intval($limit);
		$table = $db->$table;
		$result = $table->find(
			$wheres,
			[
			    'limit' => $limit
		    ]
		);
		return $result->toArray();
	}
	public function select2($table,$wheres) {
		global $db;
		$table = $db->$table;
		$result = $table->find(
			$wheres,
			[
			    'sort' => ['created_at' => -1]
		    ]
		);
		return $result->toArray();
	}
	public function count($table,$wheres) {
		global $db;
		$table = $db->$table;
		$result = $table->count(
			$wheres
		);
		return $result;
	}
	public function countId($table,$id) {
		global $db;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
		} catch (Exception $e) {
			return false;
		}
		$table = $db->$table;
		$result = $table->count(
			['_id' => $id]
		);
		return $result;
	}
	public function add($table,$data) {
		/*
			$data = ['a' => 'b']
		*/
		global $db;
		$data["create_at"] = time();
		$data["update_at"] = time();
		$table = $db->$table;
		return $table->insertOne($data)->getInsertedId()->__toString();
	}
	public function adds($table,$data) {
		/*
			$data = [['a' => '1'],['a' => '2']]
		*/
		global $db;
		$table = $db->$table;
		return $table->insertMany($data);
	}
	public function editId($table,$data,$id) {
		global $db;
		$data["update_at"] = time();
		$table = $db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
		} catch (Exception $e) {
			return false;
		}
		return $table->updateOne(['_id' => $id],['$set' => $data]);
	}
	public function edit($table,$data,$wheres) {
		global $db;
		$data["update_at"] = time();
		$table = $db->$table;
		return $table->updateOne($wheres,['$set' => $data]);
	}
	public function editIds($table,$data,$ids) {
		global $db;
		$data["update_at"] = time();
		$table = $db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			array_push($dataIds,['_id' => $id]);
		}
		$wheres = ['$or' => $dataIds];
		return $table->updateMany($wheres,['$set' => $data]);
	}
	public function edits($table,$data,$wheres) {
		global $db;
		$data["update_at"] = time();
		$table = $db->$table;
		return $table->updateMany($wheres,['$set' => $data]);
	}
	public function delId($table,$id) {
		global $db;
		$table = $db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
		} catch (Exception $e) {
			return false;
		}
		return $table->deleteOne(['_id' => $id]);
	}
	public function del($table,$wheres) {
		global $db;
		$table = $db->$table;
		return $table->deleteOne($wheres);
	}
	public function delIds_account($table,$ids,$account_id) {
		global $db;
		$table = $db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			//$dataIds[] = ['_id' => $id,'account_id' => $account_id];
			array_push($dataIds,['_id' => $id,'account_id' => $account_id]);
		}
		$wheres = ['$or' => $dataIds];
		
		return $table->deleteMany($wheres);
	}
	public function delIds($table,$ids) {
		global $db;
		$table = $db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			array_push($dataIds,['_id' => $id]);
		}
		$wheres = ['$or' => $dataIds];
		return $table->deleteMany($wheres);
	}
	public function dels($table,$wheres) {
		global $db;
		$table = $db->$table;
		return $table->deleteMany($wheres);
	}
}