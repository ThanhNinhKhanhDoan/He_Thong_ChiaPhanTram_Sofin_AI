<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $where = [];
    $count_data = $db->count("voice_openais", $where);
    $datas =  $db->find("voice_openais", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_set = json_encode([
                "id" => $row["id"],
                "prompt" => $row["prompt"],
                "gender" => $row["gender"],
                "name" => $row["name"],
                "description" => $row["description"]
            ]);
            ?>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center hover-light" onclick="document.getElementById(`voice_id_<?=$row['_id']->__toString()?>`).checked = true; return false;">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="voice" id="voice_id_<?=$row['_id']->__toString()?>" value='<?=$data_set?>'>
                        <label class="form-check-label" for="voice_id_<?=$row['_id']->__toString()?>">
                            <span class="fw-bold"><?=$row["name"]?></span>
                            <small class="text-muted d-block"><?=$row["description"]?></small>
                        </label>
                    </div>
                </div>
                <?php if ($row["gender"] == "male") { ?>
                    <span class="badge bg-warning rounded-pill">Nam</span>
                <?php } else { ?>
                    <span class="badge bg-primary rounded-pill">Nữ</span>
                <?php } ?>
                
            </a>
            <?php
        }
    }
}


?>