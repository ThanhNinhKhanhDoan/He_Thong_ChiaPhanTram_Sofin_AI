<?php
use Elastic\Elasticsearch\ClientBuilder;
use Ramsey\Uuid\Uuid;
class TD_elastic_v2 {
    private $client;
    public function __construct($cloud_id, $apiKey) {
        $this->client = ClientBuilder::create()->setElasticCloudId($cloud_id)->setApiKey($apiKey)->build();
    }
    public function isIndex($indexName) {
        return $this->client->indices()->exists(['index' => $indexName])->asBool();
    }

    public function deleteIndex($indexName) {
        try {
            return $this->client->indices()->delete(['index' => $indexName])->asBool();
        } catch (Exception $e) {
            return false;
        }
    }

    public function create_index($indexName,$datas = []) {
        $datas['u_id'] = 'keyword';
        $datas["create_at"] = "long";
        $datas["update_at"] = "long";
        $datas["user_update_info"] = "keyword";

        $dataSet = [];
        foreach ($datas as $key => $rows) {
            $dataSet[$key] = ['type' => $rows];
        }
        
        $params = [
            'index' => $indexName,
            'body' => [
                'mappings' => [
                    'properties' => $dataSet
                ]
            ]
        ];
        
        // Tạo hoặc cập nhật mappings cho index
        $response = $this->client->indices()->create($params);

        // Kiểm tra xem có lỗi không
        if (isset($response['error'])) {
            echo "Error creating index mapping: " . $response['error']['reason'];
        } else {
            echo "Index mapping created successfully.";
        }
    }

    public function update_index($indexName,$datas = []) {
        $datas['u_id'] = 'keyword';
        $datas["create_at"] = "long";
        $datas["update_at"] = "long";
        $datas["user_update_info"] = "keyword";
        $dataSet = [];
        foreach ($datas as $key => $rows) {
            $dataSet[$key] = ['type' => $rows];
        }
        
        $params = [
            'index' => $indexName,
            'body' => [
                'properties' => $dataSet
            ]
        ];
        
        // Tạo hoặc cập nhật mappings cho index
        $response = $this->client->indices()->putMapping($params);

        // Kiểm tra xem có lỗi không
        if (isset($response['error'])) {
            echo "Error creating index mapping: " . $response['error']['reason'];
        } else {
            echo "Index mapping created successfully.";
        }
    }

    


    public function insertData($indexName, $datas = []) {
        if (isset($_COOKIE["u_id"]) and isset($_COOKIE["session_login"])) {
            try {
                $members = $this->rowId("users",$_COOKIE["u_id"]);
                if (count($members) > 0) {
                    $user_id = $members['u_id'];
                } else {
                    $user_id = "";
                }
            } catch (Exception $e) {
                $user_id = "";
            }
        } else {
            $user_id = "";
        }

        $dataSet = [];
        $uuidInserts = [];
        foreach ($datas as $key => $rows) {
            $uuid = Uuid::uuid4(); // Generate a random UUID
            $uuid = $uuid->toString(); // Convert UUID to a string
            $uuid = str_replace("-", "", $uuid);
            $uuid = str_replace("_", "", $uuid);
            $uuid = str_replace(".", "", $uuid);
            $uuid = time()."".$uuid;
            $uuidInserts[] = $uuid;
            $dataSet[] = [
                'index' => [
                    '_index' => $indexName,
                    '_id' => $uuid,
                ],
            ];
            $rows["u_id"] = $uuid;
            $rows["create_at"] = time();
            $rows["update_at"] = time();
            $rows["user_update_info"] = $user_id;
            $dataSet[] = $rows;
        }
        // Create the bulk request using the client instance
        $params = ['body' => $dataSet];
        try {
            $response = $this->client->bulk($params);
            return $uuidInserts;
        } catch (Exception $e) {
            return [];
        }
    }








    public function rowId($indexName, $documentId) {
        $params = [
            'index' => $indexName,
            'id' => $documentId,
        ];
        try {
            $response = $this->client->get($params);
            $datas = $response->asArray();
            if (isset($datas['found'])) {
                if ($datas['found'] == false) {
                    return [];
                }
            }
            return $datas['_source'];
        } catch (Exception $e) {
            return [];
        }
    }





    public function select_sql($sqlQuery) {
        try {
            $params = [
                'format' => 'json',
                'body' => [
                    'query' => $sqlQuery
                ]
            ];
            $response = $this->client->sql()->query($params);
            // Xử lý kết quả
            if (isset($response['error'])) {
                return [];
            }
            $columns = $response['columns'];
            $rows = $response['rows'];
            $formattedResult = [
                'columns' => $columns,
                'rows' => []
            ];
            foreach ($rows as $row) {
                $formattedRow = [];
                foreach ($columns as $key => $column) {
                    $formattedRow[$column['name']] = $row[$key];
                }
                $formattedResult['rows'][] = $formattedRow;
            }
            return $formattedResult['rows'];
        } catch (\Elasticsearch\Common\Exceptions\ElasticsearchException $e) {
            return [];
        }
    }



    public function select($indexName, $where = []) {
        try {
            $searchParams = [
                'index' => $indexName, // Thay 'my_index' bằng tên index của bạn
                'body' => [
                    'query' => $where,
                    'sort' => [
                        ["u_id" => ['order' => 'desc']]
                    ],
                ]
            ];

            $response = $this->client->search($searchParams);
            $response = $response->asArray();
            // Xử lý kết quả
            if (isset($response['error'])) {
                return [];
            }
            $datas = [];
            foreach ($response['hits']['hits'] as $key => $rows) {
                $datas[] = $rows['_source'];
            }
            return $datas;
        } catch (\Elasticsearch\Common\Exceptions\ElasticsearchException $e) {
            echo "Error executing search query: " . $e->getMessage();
            return [];
        }
    }

    public function select_search($indexName,$where, $orderBy, $orderSort, $offset, $limit) {
        // try {
            $params = [
                'index' => $indexName,
                'from' => $offset,
                'size' => $limit,
                'body' => [
                    'query' => $where,
                    'sort' => [
                        [$orderBy => ['order' => $orderSort]]
                    ],
                ]
            ];
            // echo json_encode($params);
            // Thực hiện truy vấn
            $response = $this->client->search($params);
            $response = $response->asArray();
            // Xử lý kết quả
            if (isset($response['error'])) {
                return [];
            }
            $datas = [];
            foreach ($response['hits']['hits'] as $key => $rows) {
                $datas[] = $rows['_source'];
            }
            return $datas;
        // } catch (\Elasticsearch\Common\Exceptions\ElasticsearchException $e) {
        //     echo "Error executing search query: " . $e->getMessage();
        //     return [];
        // }
    }



    public function count($indexName, $query = []) {
        try {
            $where = [
                'index' => $indexName,
                'body' => [
                    'query' => $query,
                ],
            ];
            // echo json_encode($where);
            // Thực hiện truy vấn
            $response = $this->client->count($where);
            // Số lượng dữ liệu
            return $response['count'];
        } catch (Exception $e) {
            return 0;
        }
    }


    public function deleteId($indexName, $documentId) {
        try {
            $params = [
                'index' => $indexName,
                'id' => $documentId,
            ];
            $response = $this->client->delete($params);
            // Kiểm tra kết quả
            if ($response['result'] == 'deleted') {
                return true;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
    }


    function deletes($indexName, $query) {
        try {
            $params = [
                'index' => $indexName,
                'body' => [
                    'query' => $query
                ]
            ];
            $response = $this->client->deleteByQuery($params);
            if ($response['deleted'] > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }



    public function updateId($indexName, $documentId, $updatedData) {
        if (isset($_COOKIE["u_id"]) and isset($_COOKIE["session_login"])) {
            try {
                $members = $this->rowId("users",$_COOKIE["u_id"]);
                if (count($members) > 0) {
                    $user_id = $members['u_id'];
                } else {
                    $user_id = "";
                }
            } catch (Exception $e) {
                $user_id = "";
            }
        } else {
            $user_id = "";
        }
        $updatedData['create_at'] = time();
        $updatedData["user_update_info"] = $user_id;
        $params = [
            'index' => $indexName,
            'id' => $documentId,
            'body' => [
                'doc' => $updatedData // Dữ liệu mới bạn muốn cập nhật
            ]
        ];
        $response = $this->client->update($params);
        if ($response['_shards']['successful'] > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function updates($indexName, $where, $setDatas) {
        if (isset($_COOKIE["u_id"]) and isset($_COOKIE["session_login"])) {
            try {
                $members = $this->rowId("users",$_COOKIE["u_id"]);
                if (count($members) > 0) {
                    $user_id = $members['u_id'];
                } else {
                    $user_id = "";
                }
            } catch (Exception $e) {
                $user_id = "";
            }
        } else {
            $user_id = "";
        }
        $setDatas['create_at'] = time();
        $setDatas["user_update_info"] = $user_id;
        $updateScript = '';
        foreach ($setDatas as $field => $value) {
            if (is_numeric($value)) {
                // Nếu giá trị là số, không đặt ngoặc kép cho nó
                $updateScript .= 'ctx._source.' . $field . ' = ' . $value . '; ';
            } else {
                // Nếu giá trị không phải số, đặt ngoặc kép cho nó
                $updateScript .= 'ctx._source.' . $field . ' = "' . $value . '"; ';
            }
        }

        $params = [
            'index' => $indexName,
            'body' => [
                'script' => [
                    'source' => $updateScript,
                    'lang' => 'painless',
                ],
                'query' => $where,
            ],
        ];

        try {
            $response = $this->client->updateByQuery($params);
            $datas = $response->asArray();
            // Kiểm tra kết quả
            return $datas['updated'];
        } catch (Exception $e) {
            return 0;
        }
    }
}
?>