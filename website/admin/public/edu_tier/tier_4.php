
<?php
$error = false;
$tier_3_id = $params[3];
$count_tier_3_id = $db->countId("edu_tier_3", $tier_3_id);
if ($count_tier_3_id == 0) {
    $error = true;
}
$data_tier_3 = $db->findOneId("edu_tier_3", $tier_3_id);
$data_tier_3 = $data_tier_3[0];
$tier_1_id = $data_tier_3['tier_1_id'];
$tier_2_id = $data_tier_3['tier_2_id'];

$count_tier_1_id = $db->countId("edu_tier_1", $tier_1_id);
if ($count_tier_1_id == 0) {
    $error = true;
}

$count_tier_2_id = $db->countId("edu_tier_2", $tier_2_id);
if ($count_tier_2_id == 0) {
    $error = true;
}


$data_tier_1 = $db->findOneId("edu_tier_1", $tier_1_id);
$data_tier_1 = $data_tier_1[0];

$data_tier_2 = $db->findOneId("edu_tier_2", $tier_2_id);
$data_tier_2 = $data_tier_2[0];

if ($error) {
    // print_r($data_tier_3);
    ?>
    <script>
        window.location.href = "<?=set_route_to_link(["public","edu_tier","tier_3",$tier_2_id])?>";
    </script>
    <?php
} else {
?>

<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">Tạo học viên</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tier_3_id" value="<?=$tier_3_id?>">
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-star">
                        <path d="M10 15.27L16.18 19 14.54 12.97 20 8.64 13.81 8.63 10 2 6.19 8.63 0 8.64 5.46 12.97 3.82 19 10 15.27z"></path>
                    </svg>
                    <input class="form-control" id="name" placeholder="Nhập họ và tên">
                </div>
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email">
                        <path d="M2 5.5L9 9.5L16 5.5M3.5 15.5H14.5C15.3284 15.5 16 14.8284 16 14V6C16 5.17157 15.3284 4.5 14.5 4.5H3.5C2.67157 4.5 2 5.17157 2 6V14C2 14.8284 2.67157 15.5 3.5 15.5Z"></path>
                    </svg>
                    <input class="form-control" id="email" placeholder="Nhập email">
                </div>

                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-lock-on">
                        <path d="M5 12.5V9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5V12.5H5Z"></path>
                        <path d="M4 12.5H15C15.5523 12.5 16 12.9477 16 13.5V16.5C16 17.0523 15.5523 17.5 15 17.5H4C3.44772 17.5 3 17.0523 3 16.5V13.5C3 12.9477 3.44772 12.5 4 12.5Z"></path>
                    </svg>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_submit_add_database" onclick="add_database()">Khởi tạo</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Archive Modal -->
<div class="modal fade" id="editArchiveModal" tabindex="-1" aria-labelledby="editArchiveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editArchiveModalLabel">Chỉnh sửa thông tin kho</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit_archive_id">
                <div class="mb-3">
                    <label for="edit_name" class="form-label">Tên kho</label>
                    <input type="text" class="form-control" id="edit_name" placeholder="Nhập tên kho">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_submit_edit_database" onclick="update_database()">Cập nhật</button>
            </div>
        </div>
    </div>
</div>





<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Quản lý học viên</h1>
        <ul class="breadcrumb bg-light shadow-sm py-2 px-3">
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","index"])?>" class="text-primary fw-medium"><i class="fas fa-home me-1"></i>Hệ Thống</a></li>
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_2",$tier_1_id])?>" class="text-info fw-medium"><?=$data_tier_1["name"]?></a></li>
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_3",$tier_2_id])?>" class="text-success fw-medium"><?=$data_tier_2["name"]?></a></li>
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_4",$tier_3_id])?>" class="text-success fw-medium"><?=$data_tier_3["name"]?></a></li>
        </ul>
    </div>
    
    <div class="row">
        <!-- Danh sách chuyên mục (bên trái) -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        <i class="fas fa-folder"></i> Danh sách học viên
                    </h5>
                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary me-2 border-2" id="btn_create_cate" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                            <i class="fas fa-plus-circle"></i> Tạo học viên
                        </button>
                        <div class="input-group" style="width: 280px;">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-search text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="table_search" placeholder="Tìm kiếm giảng viên...">
                            
                        </div>
                    </div>
                </div>
                
                <div class="card-body border-bottom bg-light py-2">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center">
                            <div class="d-flex me-2 align-items-center">
                                <div class="input-group input-group-sm me-2">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-list-ol"></i>
                                    </span>
                                    <select id="page_length" class="form-select shadow-sm" onchange="table_change_page_length({elm_table_id: 'table_lists', elm_id_page_length: 'page_length'})">
                                        <option value="1">1</option>
                                        <option value="10" selected>10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                        <option value="5000">5000</option>
                                        <option value="10000">10000</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm me-2">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-filter"></i>
                                    </span>
                                    <select id="status-load" class="form-select shadow-sm" onchange="table_load_status({elm_table_id: 'table_lists', elm_id_status: 'status-load', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected'})">
                                        <option value="active">Đang hoạt động</option>
                                        <option value="pending">Chờ duyệt</option>
                                        <option value="deleted">Dừng hoạt động</option>
                                    </select>
                                </div>





                                <div class="input-group input-group-sm me-2">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <select id="date_range_preset_set" class="form-select shadow-sm" onchange="applyDateRangePreset()">
                                        <option value="custom">Tùy chỉnh</option>
                                        <option value="today">Hôm nay</option>
                                        <option value="yesterday">Hôm qua</option>
                                        <option value="7days">7 ngày qua</option>
                                        <option value="1month">1 tháng qua</option>
                                        <option value="2months">2 tháng qua</option>
                                        <option value="3months">3 tháng qua</option>
                                        <option value="4months">4 tháng qua</option>
                                        <option value="5months">5 tháng qua</option>
                                        <option value="6months">6 tháng qua</option>
                                        <option value="7months">7 tháng qua</option>
                                        <option value="8months">8 tháng qua</option>
                                        <option value="9months">9 tháng qua</option>
                                        <option value="10months">10 tháng qua</option>
                                        <option value="11months">11 tháng qua</option>
                                        <option value="12months">12 tháng qua</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-sm me-2">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <input type="date" id="date_start" class="form-control shadow-sm" placeholder="Từ ngày" onchange="validateDateRange()">
                                    <input type="hidden" id="date_start_time_int_hidden" name="date_start" value="<?= strtotime(date('Y-m-d 00:00:00', strtotime('-1 year'))) ?>">
                                </div>

                                <div class="input-group input-group-sm me-2">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <input type="date" id="date_end" class="form-control shadow-sm" placeholder="Đến ngày" onchange="validateDateRange()">
                                    <input type="hidden" id="date_end_time_int_hidden" name="date_end" value="<?= strtotime(date('Y-m-d 23:59:59')) ?>">
                                </div>

                                
                            </div>
                            
                        </div>
                        
                        
                        <button type="button" class="btn btn-success btn-sm btn-xs" id="btn_active_selected" onclick="table_update_status('active',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","admin_panel_videos","update_status_cates"])?>'})">
                            <i class="fas fa-trash-restore"></i> Kích hoạt
                        </button>
                        <button type="button" class="btn btn-success btn-sm btn-xs" id="btn_pending_selected" onclick="table_update_status('pending',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","admin_panel_videos","update_status_cates"])?>'})">
                            <i class="fas fa-clock"></i> Chuyển sang chờ duyệt
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-xs" id="btn_delete_selected" onclick="table_update_status('deleted',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","admin_panel_videos","update_status_cates"])?>'})">
                            <i class="fas fa-trash"></i> Khoá hoạt động
                        </button>

                        
                    </div>

                    
                </div>
                <div style="overflow-x: auto;">
                    <table class="custom-table" id="table_lists">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="d-flex align-items-end justify-content-end">
                                        <div class="form-check">
                                            <input type="checkbox" name="check_all" id="check_all" class="form-check-input" onclick="table_checkbox_all(this,{elm_table_id: 'table_lists'})">
                                            <label class="form-check-label" for="check_all">All</label>
                                        </div>
                                    </div>
                                </th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Điểm</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>