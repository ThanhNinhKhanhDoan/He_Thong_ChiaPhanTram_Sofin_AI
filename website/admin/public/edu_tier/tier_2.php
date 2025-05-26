
<?php
$error = false;
$tier_1_id = $params[3];
$count_tier_1_id = $db->countId("edu_tier_1", $tier_1_id);
if ($count_tier_1_id == 0) {
    $error = true;
}

$data_tier_1 = $db->findOneId("edu_tier_1", $tier_1_id);
$data_tier_1 = $data_tier_1[0];

if ($error) {
    ?>
    <script>
        window.location.href = "<?=set_route_to_link(["public","edu_tier","index"])?>";
    </script>
    <?php
} else {
?>



<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">Tạo khu vực</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="tier_1_id" value="<?=$tier_1_id?>">
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-star">
                        <path d="M10 15.27L16.18 19 14.54 12.97 20 8.64 13.81 8.63 10 2 6.19 8.63 0 8.64 5.46 12.97 3.82 19 10 15.27z"></path>
                    </svg>
                    <input class="form-control" id="name" placeholder="Nhập tên khu vực">
                </div>
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user">
                        <path d="M10.0179 8C10.9661 8 11.7333 7.23285 11.7333 6.28458C11.7333 5.33631 10.9661 4.56916 10.0179 4.56916C9.06968 4.56916 8.30249 5.33631 8.30249 6.28458C8.30249 7.23285 9.06968 8 10.0179 8Z"></path>
                        <path d="M13.5468 13.9999H6.46891C6.27358 14.0001 6.08237 13.9341 5.92092 13.8124C5.75947 13.6906 5.63582 13.5191 5.56823 13.3231C5.50064 13.1271 5.49241 12.9155 5.54464 12.7146C5.59686 12.5138 5.70702 12.3335 5.86123 12.1999C7.0188 11.1999 8.49563 10.6665 10.0079 10.6665C11.5201 10.6665 12.9969 11.1999 14.1545 12.1999C14.3087 12.3335 14.4188 12.5138 14.4711 12.7146C14.5233 12.9155 14.5151 13.1271 14.4475 13.3231C14.3799 13.5191 14.2562 13.6906 14.0948 13.8124C13.9333 13.9341 13.7421 14.0001 13.5468 13.9999Z"></path>
                    </svg>
                    <input class="form-control" id="representative_name" placeholder="Nhập tên người đại diện">
                </div>

                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-phone">
                        <path d="M4.73912 2.68978C4.98682 2.44208 5.35535 2.37871 5.67767 2.53373L8.5 4C8.82089 4.15434 9.01312 4.48398 9 4.83333V7.5C9 7.77614 8.77614 8 8.5 8H6.5C5.67157 8 5 7.32843 5 6.5V4.83333C5 4.48398 4.80777 4.15434 4.48689 4L3.32233 3.30294C3.00001 3.14792 2.63148 3.21129 2.38378 3.45899L2.29289 3.54989C1.90237 3.94042 1.90237 4.57358 2.29289 4.96411L3.5 6.17122L3.5 8.5C3.5 9.88071 4.61929 11 6 11H7.17157C7.70201 11 8.21071 11.2107 8.58579 11.5858L13.5858 16.5858C13.9609 16.9609 14.4696 17.1716 15 17.1716H16.5C17.0523 17.1716 17.5 16.7239 17.5 16.1716V14.6716C17.5 14.1193 17.0523 13.6716 16.5 13.6716H15C14.4477 13.6716 14 13.2239 14 12.6716V11.1716C14 10.6193 14.4477 10.1716 15 10.1716H16.5C17.0523 10.1716 17.5 9.72387 17.5 9.17157V7.67157C17.5 7.11929 17.0523 6.67157 16.5 6.67157H15C14.4477 6.67157 14 6.22386 14 5.67157V4.17157C14 3.61929 14.4477 3.17157 15 3.17157H16.5C17.0523 3.17157 17.5 2.72386 17.5 2.17157V1.5"></path>
                    </svg>
                    <input class="form-control" id="phone" placeholder="Nhập số điện thoại liên hệ">
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

                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-percent">
                        <path d="M5 15L15 5M7.5 5C6.11929 5 5 6.11929 5 7.5C5 8.88071 6.11929 10 7.5 10C8.88071 10 10 8.88071 10 7.5C10 6.11929 8.88071 5 7.5 5ZM12.5 10C11.1193 10 10 11.1193 10 12.5C10 13.8807 11.1193 15 12.5 15C13.8807 15 15 13.8807 15 12.5C15 11.1193 13.8807 10 12.5 10Z"></path>
                    </svg>
                    <input type="number" class="form-control" id="discount_percent" placeholder="Phần trăm chiết khấu khoá học" min="0" max="100">
                </div>
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-percent">
                        <path d="M5 15L15 5M7.5 5C6.11929 5 5 6.11929 5 7.5C5 8.88071 6.11929 10 7.5 10C8.88071 10 10 8.88071 10 7.5C10 6.11929 8.88071 5 7.5 5ZM12.5 10C11.1193 10 10 11.1193 10 12.5C10 13.8807 11.1193 15 12.5 15C13.8807 15 15 13.8807 15 12.5C15 11.1193 13.8807 10 12.5 10Z"></path>
                    </svg>
                    <input type="number" class="form-control" id="software_discount_percent" placeholder="% chiết khấu của phần mềm" min="0" max="100">
                </div>
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-percent">
                        <path d="M5 15L15 5M7.5 5C6.11929 5 5 6.11929 5 7.5C5 8.88071 6.11929 10 7.5 10C8.88071 10 10 8.88071 10 7.5C10 6.11929 8.88071 5 7.5 5ZM12.5 10C11.1193 10 10 11.1193 10 12.5C10 13.8807 11.1193 15 12.5 15C13.8807 15 15 13.8807 15 12.5C15 11.1193 13.8807 10 12.5 10Z"></path>
                    </svg>
                    <input type="number" class="form-control" id="channel_revenue_discount_percent" placeholder="% chiết khấu của doanh thu kênh" min="0" max="100">
                </div>

                
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_submit_add_database" onclick="add_database()">Khở tạo</button>
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
        <h1 class="page-title">Quản lý khu vực</h1>
        <ul class="breadcrumb bg-light shadow-sm py-2 px-3">
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","index"])?>" class="text-primary fw-medium"><i class="fas fa-home me-1"></i>Hệ Thống</a></li>
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_2",$tier_1_id])?>" class="text-info fw-medium"><?=$data_tier_1["name"]?></a></li>
        </ul>
    </div>
    
    <div class="row">
        <!-- Danh sách chuyên mục (bên trái) -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        <i class="fas fa-folder"></i> Danh sách khu vực
                    </h5>
                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary me-2 border-2" id="btn_create_cate" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                            <i class="fas fa-plus-circle"></i> Tạo khu vực
                        </button>
                        <div class="input-group" style="width: 280px;">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-search text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="table_search" placeholder="Tìm kiếm kho lưu trữ...">
                            
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
                                <th>Tổ chức</th>
                                <th>Đại diện</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>%K.Học</th>
                                <th>%P.Mềm</th>
                                <th>%Kênh</th>
                                <th>Cấp 3</th>
                                <th>Cấp 4</th>
                                <th>Ngày tạo</th>
                                <th>Người tạo</th>
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