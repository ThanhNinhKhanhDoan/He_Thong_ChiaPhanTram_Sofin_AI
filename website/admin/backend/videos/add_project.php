<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_user();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "group" => ["maxLen=10000","minLen=1"],
        "name" => ["maxLen=10000","minLen=1"],
        "voice" => ["maxLen=10000","minLen=1"],
        "music" => ["maxLen=10000","minLen=1"],
        "music_volume" => ["maxLen=10000","minLen=1"],
        "video" => ["maxLen=10000","minLen=1"],
        "gif" => ["maxLen=10000","minLen=1"],
        "image_effects" => ["maxLen=10000","minLen=1"],
        "path_voice" => ["maxLen=10000","minLen=1"],
        "play_time" => ["maxLen=10000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        // $count_music = $db->count("video_projects", ["name" => $requests['data']['name']]);
        // if ($count_music > 0) {
        //     $error["name"][] = "Tên dữ liệu đã tồn tại.";
        // }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {

            $dir_ids = explode(",", $requests['data']['video']);
            $where_video = ['$or' => []];
            foreach ($dir_ids as $dir_id) {
                $where_video['$or'][] = ["folder_id" => $dir_id, "type" => ['$in' => ["mp4", "avi", "mov", "wmv", "flv", "mkv"]]];
            }

            $data_videos = $db->find("video_data_ids", $where_video);
            $urls = [];
            foreach ($data_videos as $data_video) {
                $urls[] = $data_video["url"];
            }
            
            $play_time = (int)$requests['data']['play_time'];
            $play_time = $play_time + 10;
            
            // quyết định độ dài của video đầu vào (10s)
            $count_url = $play_time/5;

            // Calculate how many URLs we need
            $count_url = ceil($count_url);
            $selected_urls = [];
            
            // If we need more URLs than available, we'll need to reuse some
            if ($count_url >= count($urls)) {
                // Keep selecting URLs until we reach the required count
                $index = 0;
                for ($i = 0; $i < $count_url; $i++) {
                    // Reset index if we've gone through all URLs
                    if ($index >= count($urls)) {
                        $index = 0;
                    }
                    $selected_urls[] = $urls[$index];
                    $index++;
                }
            } else {
                // We need fewer URLs than available, so select random ones without duplicates
                $random_keys = array_rand($urls, $count_url);
                
                // If only one URL is needed, array_rand returns a single integer
                if (!is_array($random_keys)) {
                    $random_keys = [$random_keys];
                }
                
                foreach ($random_keys as $key) {
                    $selected_urls[] = $urls[$key];
                }
            }
            
            // Shuffle the selected URLs
            shuffle($selected_urls);
            
            // Convert the array to a string with newline separators
            $urls_string = implode("\n", $selected_urls);

            


            $datas = [
                "u_id" => $dataRole["_id"]->__toString(),
                "u_email" => $dataRole["email"],
                "u_name" => $dataRole["name"],
                "u_token" => $dataRole["token"],
                "u_roles" => $dataRole["roles"],
                "group" => $requests['data']['group'],
                "name" => $requests['data']['name'],
                "voice" => $requests['data']['voice'],
                "music" => $requests['data']['music'],
                "music_volume" => $requests['data']['music_volume'],
                "video" => $urls_string,
                "gif" => $requests['data']['gif'],
                "image_effects" => $requests['data']['image_effects'],
                "path_voice" => $requests['data']['path_voice'],
                "play_time" => $requests['data']['play_time'],
                "path_video" => "",
                "path_output" => "",
                "status" => "pending",
            ];

            $dataToInserts = $db->add("video_projects", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}