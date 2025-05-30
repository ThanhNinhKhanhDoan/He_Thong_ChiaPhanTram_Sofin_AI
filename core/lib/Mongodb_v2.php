<?php
use MongoDB\Client;
class Mongodb_v2 {
    private $conn;
    private $db;
    public function __construct($url) {
        $this->conn = new Client($url);
        $this->db = $this->conn->datas;
    }

    public function count($table, $wheres) {
        $table_db = $this->db->$table;
		$result = $table_db->count(
			$wheres
		);
		return $result;
    }
    public function countId($table, $id) {
        $table_db = $this->db->$table;
        try {
			$id = new MongoDB\BSON\ObjectId($id);
			$result = $table_db->count(
    			[
    				'_id' => $id
    			]
    		);
    		return $result;
		} catch (Exception $e) {
			return 0;
		}
		
    }
    
    
    public function findOne($table, $wheres) {
    	if ($this->count($table, $wheres) > 0) {
    		$table_db = $this->db->$table;
			$result = $table_db->findOne(
				$wheres
			);
			return [$result];
    	} else {
    		return [];
    	}
    }
    public function findOneId($table, $id) {
		$table_db = $this->db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
			$result = $table_db->findOne(
				[
					'_id' => $id
				]
			);
			return [$result];
		} catch (Exception $e) {
			return false;
		}
    }

	
    public function find($table, $wheres) {
        $table_db = $this->db->$table;
		$result = $table_db->find(
			$wheres,
			[
			    'sort' => ["create_at" => -1]
			]
		);
		return $result->toArray();
    }
    
    public function find_analytic_country($table, $wheres) {
        $table_db = $this->db->$table;
		$result = $table_db->find(
			$wheres,
			[
			    'sort' => ["view" => -1]
			]
		);
		return $result->toArray();
    }
    
    public function find_by_name($table, $wheres) {
        $table_db = $this->db->$table;
		$result = $table_db->find(
			$wheres,
			[
			    'sort' => ["name" => 1]
			]
		);
		return $result->toArray();
    }
    
    public function find_sort_name($table, $wheres) {
        $table_db = $this->db->$table;
		$result = $table_db->find(
			$wheres,
			[
			    'sort' => ["name" => 1]
			]
		);
		return $result->toArray();
    }
    
    public function datatable_js($table,$wheres,$sort,$sortOder,$skip,$limit) {
		$table_db = $this->db->$table;
		if ($sort == "") {
		    $sort = "create_at";
		}
		if ($sortOder == "") {
		    $sortOder = 1;
		} else if ($sortOder == "DESC" or $sortOder == "desc") {
			$sortOder = -1;
		} else {
			$sortOder = 1;
		}
		$result = $table_db->find(
			$wheres,
			[
			    'limit' => $limit,
			    'skip' => $skip,
			    'sort' => [$sort => $sortOder]
		    ]
		);
		return $result->toArray();
    }
    
    public function countDistinct($table, $col, $wheres) {
        $table_db = $this->db->$table;
        // Xây dựng điều kiện tìm kiếm
        $matchStage = ['$match' => $wheres];
        // Tạo pipeline aggregation
        if (count($wheres) < 1) {
            $pipeline = [
                [
                    '$group' => [
                        '_id' => '$'.$col, // Nhóm theo giá trị của trường col
                    ],
                ],
                [
                    '$count' => 'total' // Đếm số lượng nhóm đã tạo
                ]
            ];
        } else {
            $pipeline = [
                $matchStage,
                [
                    '$group' => [
                        '_id' => '$'.$col, // Nhóm theo giá trị của trường col
                    ],
                ],
                [
                    '$count' => 'total' // Đếm số lượng nhóm đã tạo
                ]
            ];
        }
            
    
        // Thực thi truy vấn aggregation
        $result = $table_db->aggregate($pipeline)->toArray();
    
        return $result[0]->total;
    }
    // lấy ra giá trị không trùng lặp 
    public function findDistinct($table,$col,$wheres) {
		$table_db = $this->db->$table;
		$result = $table_db->distinct($col,$wheres);
		return $result;
	}
	// lấy ra dữ liệu không trùng lặp của 1 trường và lấy luôn số lượng trùng lặp của từng giá trị của trường đó
	public function findDistinctAndCount($table,$col,$wheres) {
		$table_db = $this->db->$table;
        // Xây dựng điều kiện tìm kiếm
        $matchStage = ['$match' => $wheres];
        // Tạo pipeline aggregation
        if (count($wheres) < 1) {
            $pipeline = [
                [
                    '$group' => [
                        '_id' => '$'.$col, // Nhóm theo giá trị của trường col
                        'count' => ['$sum' => 1]
                    ],
                ]
            ];
        } else {
            $pipeline = [
                $matchStage,
                [
                    '$group' => [
                        '_id' => '$'.$col, // Nhóm theo giá trị của trường col
                        'count' => ['$sum' => 1]
                    ],
                ]
            ];
        }
            
    
        // Thực thi truy vấn aggregation
        $result = $table_db->aggregate($pipeline);
    
        return $result;
	}
    
    
    public function add_v2($table,$data) {
		/*
			$data = ['a' => 'b']
		*/
// 		$data["create_at"] = time();
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		return $table_db->insertOne($data)->getInsertedId()->__toString();
	}
    
    public function add($table,$data) {
		/*
			$data = ['a' => 'b']
		*/
		$data["create_at"] = time();
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		return $table_db->insertOne($data)->getInsertedId()->__toString();
	}
	public function adds($table,$data) {
		/*
			$data = [['a' => '1'],['a' => '2']]
		*/
		$table_db = $this->db->$table;
		return $table_db->insertMany($data);
	}
	
	
	
	
	
	
	
	
	
	
	public function editId($table,$data,$id) {
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
		} catch (Exception $e) {
			return false;
		}
		return $table_db->updateOne(['_id' => $id],['$set' => $data]);
	}
	public function editIds($table,$data,$ids) {
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			array_push($dataIds,['_id' => $id]);
		}
		$wheres = ['$or' => $dataIds];
		return $table_db->updateMany($wheres,['$set' => $data]);
	}
	
	
	public function edit($table,$data,$wheres) {
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		return $table_db->updateOne($wheres,['$set' => $data]);
	}
	public function edits($table,$data,$wheres) {
		$data["update_at"] = time();
		$table_db = $this->db->$table;
		return $table_db->updateMany($wheres,['$set' => $data]);
	}
	public function increment($table, $field, $value, $wheres) {
		$table_db = $this->db->$table;
		return $table_db->updateOne($wheres, ['$inc' => [$field => $value]]);
	}
	
	public function incrementId($table, $field, $value, $id) {
		$table_db = $this->db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
			return $table_db->updateOne(['_id' => $id], ['$inc' => [$field => $value]]);
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function incrementIds($table, $field, $value, $ids) {
		$table_db = $this->db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			array_push($dataIds, ['_id' => $id]);
		}
		$wheres = ['$or' => $dataIds];
		return $table_db->updateMany($wheres, ['$inc' => [$field => $value]]);
	}
	
	public function incrementMany($table, $fields, $wheres) {
		$table_db = $this->db->$table;
		return $table_db->updateMany($wheres, ['$inc' => $fields]);
	}
	
	
	
	
	
	
	
	
	
	
	public function delId($table,$id) {
		$table_db = $this->db->$table;
		try {
			$id = new MongoDB\BSON\ObjectId($id);
			return $table_db->deleteOne(['_id' => $id]);
		} catch (Exception $e) {
			return false;
		}
	}
	public function delIds($table,$ids) {
		$table_db = $this->db->$table;
		$dataIds = [];
		foreach ($ids as $id) {
			$id = new MongoDB\BSON\ObjectId($id);
			array_push($dataIds,['_id' => $id]);
		}
		$wheres = ['$or' => $dataIds];
		return $table_db->deleteMany($wheres);
	}
	
	
	public function del($table,$wheres) {
		$table_db = $this->db->$table;
		return $table_db->deleteOne($wheres);
	}
	public function dels($table,$wheres) {
		$table_db = $this->db->$table;
		return $table_db->deleteMany($wheres);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function listCollections() {
        try {
            $collections = $this->db->listCollections();
            $collectionNames = [];
            foreach ($collections as $collection) {
                $collectionNames[] = $collection->getName();
            }
            return $collectionNames;
        } catch (Exception $e) {
            return false;
        }
    }
	
	
	
	
    
    
    
    public function listCollectionsWithPrefix($prefix) {
        try {
            $collections = $this->db->listCollections();
            $collectionNames = [];
            foreach ($collections as $collection) {
                if (strpos($collection->getName(), $prefix) === 0) {
                    $collectionNames[] = $collection->getName();
                }
            }
            return $collectionNames;
        } catch (Exception $e) {
            return false;
        }
    }
    
    
    public function renameCollection($oldName, $newName) {
        try {
            $this->db->selectCollection($oldName)->rename($newName);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    // public function delCollection($table) {
    //     $table_db = $this->db->$table;
    //     try {
    //         $table_db->drop();
    //         return true;
    //     } catch (Exception $e) {
    //         return false;
    //     }
    // }
    public function delCollection($table) {
        try {
            $this->db->command([
                'drop' => $table
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
	
}
?>
