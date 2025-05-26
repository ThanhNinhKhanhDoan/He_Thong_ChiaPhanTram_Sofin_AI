<?php







/* $where =
        
        # tìm kiếm %text%
        [
            'wildcard' => [
                'user' => '*log*'
            ]
        ]


        // user == 1
        ['match' => ['username' => '1']
        ['term' => ['username' => '1']]

        // user >= 1
        [
            'range' => [
                'user' => [
                    'gte' => 1
                ]
            ]
        ]
        // user <= 1
        [
            'range' => [
                'user' => [
                    'lte' => 1
                ]
            ]
        ]
        // user > 1
        [
            'range' => [
                'user' => [
                    'gt' => 1
                ]
            ]
        ]
        // giá trị nhỏ hơn
        [
            'range' => [
                'user' => [
                    'lt' => 1
                ]
            ]
        ]

        // user < 1
        [
            'bool' => [
                'must_not' => [
                    'term' => ['user' => 1]
                ]
            ]
        ]
        
        // user >= 1 and user < 10
        ['bool' => 
            [
                'must' => [
                    ['match' => ['name' => $name]],
                    ['match' => ['path_folder_location' => $path_folder_location]]
                ]
            ]
        ]


        [
            'range' => [
                'user' => [
                    'gte' => 1,
                    'lt' => 10
                ]
            ]
        ]

        // user >=1 or user == 10
        [
            'bool' => [
                'should' => [
                    [
                        'range' => [
                            'user' => [
                                'gte' => 1
                            ]
                        ]
                    ],
                    [
                        'term' => [
                            'user' => 10
                        ]
                    ]
                ]
            ]
        ]

        # user == 1 and user == 3 and user == 10
        [
            'bool' => [
                'must' => [
                    [
                        'term' => [
                            'user' => 1
                        ]
                    ],
                    [
                        'term' => [
                            'user' => 3
                        ]
                    ],
                    [
                        'term' => [
                            'user' => 10
                        ]
                    ]
                ]
            ]
        ]

        // user == 1 and user == 2 or time >= 3 and pass = "456"
        [
            'bool' => [
                'should' => [
                    [
                        'bool' => [
                            'must' => [
                                [
                                    'term' => [
                                        'user' => 1
                                    ]
                                ],
                                [
                                    'term' => [
                                        'user' => 2
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'bool' => [
                            'must' => [
                                [
                                    'range' => [
                                        'time' => [
                                            'gte' => 3
                                        ]
                                    ]
                                ],
                                [
                                    'term' => [
                                        'pass' => '456'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
        */








/*
        $datas = [
            "text" => "Long",
            "username" => "text",
            "password" => "text"
        ];

        'type' => 'keyword'

        Long: Kiểu số nguyên 64-bit. Thường được sử dụng cho các trường chứa các giá trị số nguyên lớn.

        Integer: Kiểu số nguyên 32-bit. Thường được sử dụng cho các trường chứa các giá trị số nguyên.

        Short: Kiểu số nguyên 16-bit. Thường được sử dụng khi bạn cần tiết kiệm dung lượng lưu trữ.

        Byte: Kiểu số nguyên 8-bit. Cũng được sử dụng để tiết kiệm dung lượng lưu trữ cho các giá trị số nguyên nhỏ.

        Float: Kiểu số thực 32-bit. Thường được sử dụng cho các trường chứa giá trị số thực.

        Double: Kiểu số thực 64-bit. Được sử dụng cho các trường chứa giá trị số thực với độ chính xác cao hơn so với kiểu Float.

        Text: Kiểu dữ liệu dùng để lưu trường văn bản. Có thể sử dụng cho các trường chứa chuỗi văn bản.

        Keyword: Kiểu dữ liệu dùng để lưu trường có giá trị không bị phân tích (unanalyzed), thường được sử dụng cho các trường chứa giá trị duy nhất như từ khoá, mã sản phẩm, hay danh mục.

        Date: Kiểu dữ liệu dùng để lưu ngày tháng, cho phép tìm kiếm và sắp xếp theo ngày tháng.

        Long/Integer/Short/Byte: Kiểu dữ liệu số nguyên có kích thước khác nhau (long: 64-bit, integer: 32-bit, short: 16-bit, byte: 8-bit).

        Float/Double: Kiểu dữ liệu số thực với độ chính xác khác nhau (float: 32-bit, double: 64-bit).

        Boolean: Kiểu dữ liệu chỉ có 2 giá trị: true hoặc false.

        IP: Kiểu dữ liệu dùng để lưu địa chỉ IP.

        Geo-point: Kiểu dữ liệu dùng để lưu tọa độ địa lý (latitude và longitude).

        Geo-shape: Kiểu dữ liệu dùng để lưu hình dạng địa lý phức tạp như polygon hoặc linestring.

        Binary: Kiểu dữ liệu dùng để lưu dữ liệu nhị phân.

        Object: Kiểu dữ liệu dùng để lưu một đối tượng JSON lồng trong một trường.

        Nested: Kiểu dữ liệu dùng để lưu một danh sách các đối tượng JSON có cấu trúc tương tự (nested documents).

        Array: Elasticsearch không hỗ trợ trực tiếp kiểu dữ liệu mảng, thay vào đó bạn có thể sử dụng kiểu Object hoặc Nested để lưu mảng dữ liệu.
        */


use Ramsey\Uuid\Uuid;
class TD_elastic {
    private $esUrl;
    private $apiKey;

    public function __construct($esUrl, $apiKey) {
        $this->esUrl = $esUrl;
        $this->apiKey = $apiKey;
    }

    public function getCustomIndices() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/_cat/indices?h=index');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return array('error' => 'Lỗi cURL: ' . curl_error($ch));
        }

        curl_close($ch);

        // Phân tích và xử lý kết quả để lấy danh sách tên index mà bạn đã tạo
        $lines = explode("\n", $response);
        $customIndices = array();

        foreach ($lines as $line) {
            $data = explode(" ", $line);
            if (count($data) == 2) {
                // Lọc các tên index theo các tiêu chí cụ thể
                $indexName = $data[0];
                $creationDate = $data[1];
                if ($creationDate != 'system') {
                    $customIndices[] = $indexName;
                }
            }
        }

        return $customIndices;
    }




    public function insertData($indexName, $datas = []) {
        $uuid = Uuid::uuid4(); // Tạo một UUID ngẫu nhiên
        $uuid = $uuid->toString(); // Chuyển UUID sang dạng chuỗi
        $uuid = str_replace("-", "", $uuid);
        $uuid = str_replace("_", "", $uuid);
        $uuid = str_replace(".", "", $uuid);
        $datas['u_id'] = $uuid;
        $datas['create_at'] = time();
        $datas['update_at'] = time();
        $jsonData = json_encode($datas);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_doc/' . $uuid); // Sử dụng ID cụ thể
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return false;
        }

        curl_close($ch);
        $dataReturn = json_decode($response, true);
        return $dataReturn['_id'];
    }

    public function deleteIndex($indexName) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return false;
        }

        curl_close($ch);
        $dataReturn = json_decode($response, true);
        if (!isset($dataReturn['acknowledged'])) {
            return false;
        }
        if ($dataReturn['acknowledged'] == true) {
            return true;
        } else {
            return false;
        }

    }

    public function rowId($indexName, $documentId) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_doc/' . $documentId);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return [];
        }
        curl_close($ch);
        $datas = json_decode($response, true);
        if (isset($datas['error'])) {
            return [];
        }
        if (isset($datas['found'])) {
            if ($datas['found'] == false) {
                return [];
            }
        }
        return $datas['_source'];
    }


    public function select_sql($sqlQuery) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/_sql?format=json');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $sqlQuery]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return [];
        }
        curl_close($ch);
        $jsonResponse = json_decode($response, true);
        if (isset($jsonResponse['error'])) {
            return [];
        }

        if (!$jsonResponse || !isset($jsonResponse['columns']) || !isset($jsonResponse['rows'])) {
            return [];
        }

        $columns = $jsonResponse['columns'];
        $rows = $jsonResponse['rows'];

        $formattedResult = array(
            'columns' => $columns,
            'rows' => array()
        );

        foreach ($rows as $row) {
            $formattedRow = array();
            foreach ($columns as $key => $column) {
                $formattedRow[$column['name']] = $row[$key];
            }
            $formattedResult['rows'][] = $formattedRow;
        }

        return $formattedResult['rows'];
    }



    public function select($indexName, $where = []) {
        $searchQuery = [
            'query' => $where
        ];
        $jsonData = json_encode($searchQuery);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_search');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return [];
        }

        curl_close($ch);
        $jsonResponse = json_decode($response, true);
        if (isset($jsonResponse['error'])) {
            return [];
        }
        $datas = [];
        foreach ($jsonResponse['hits']['hits'] as $key => $rows) {
            $datas[] = $rows['_source'];
        }
        return $datas;
    }


    public function count($indexName, $where = []) {
        $countQuery = [
            'query' => $where
        ];
        $jsonData = json_encode($countQuery);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_count');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return array('error' => 'Lỗi cURL: ' . curl_error($ch));
        }

        curl_close($ch);
        $countData = json_decode($response, true);
        if (isset($countData['error'])) {
            return 0;
        }
        // Trả về số lượng tài liệu thỏa mãn điều kiện
        return $countData['count'];
    }



    public function deleteId($indexName, $documentId) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_doc/' . $documentId);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return false;
        }

        curl_close($ch);

        return json_decode($response, true);
    }


    public function deletes($indexName, $where = []) {
        // Tạo truy vấn xoá dựa trên điều kiện (where)
        $deleteQuery = [
            'query' => $where
        ];
        $jsonData = json_encode($deleteQuery);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_delete_by_query');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return false;
        }

        curl_close($ch);

        return json_decode($response, true);
    }



    public function updateId($indexName, $documentId, $updatedData) {
        $updatedData['create_at'] = time();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_doc/' . $documentId);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($updatedData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
        }
        curl_close($ch);
        return json_decode($response, true);
    }
    
    public function updates($indexName,$where = [],$setDatas = []) {
        $setDatas['create_at'] = time();
        



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

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->esUrl . '/' . $indexName . '/_update_by_query');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

        $updateQuery = [
            'script' => [
                'source' => $updateScript,
                'lang' => 'painless'
            ],
            'query' => $where
        ];
        $jsonData = json_encode($updateQuery);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: ApiKey ' . $this->apiKey
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return array('error' => 'Lỗi cURL: ' . curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true);
    }




}

?>
