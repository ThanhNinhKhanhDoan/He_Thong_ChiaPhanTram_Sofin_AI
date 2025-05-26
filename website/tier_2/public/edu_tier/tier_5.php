<?php
$error = false;
$user_id = $params[3];
$count_user_id = $db->countId("users", $user_id);
if ($count_user_id == 0) {
    $error = true;
}
$data_user = $db->findOneId("users", $user_id);
$data_user = $data_user[0];
$tier_1_id = $data_user['tier_1_id'];
$tier_2_id = $data_user['tier_2_id'];
$tier_3_id = $data_user['tier_3_id'];

$count_tier_1_id = $db->countId("edu_tier_1", $tier_1_id);
if ($count_tier_1_id == 0) {
    $error = true;
}

$count_tier_2_id = $db->countId("edu_tier_2", $tier_2_id);
if ($count_tier_2_id == 0) {
    $error = true;
}

$count_tier_3_id = $db->countId("edu_tier_3", $tier_3_id);
if ($count_tier_3_id == 0) {
    $error = true;
}


$data_tier_1 = $db->findOneId("edu_tier_1", $tier_1_id);
$data_tier_1 = $data_tier_1[0];

$data_tier_2 = $db->findOneId("edu_tier_2", $tier_2_id);
$data_tier_2 = $data_tier_2[0];

$data_tier_3 = $db->findOneId("edu_tier_3", $tier_3_id);
$data_tier_3 = $data_tier_3[0];


if ($error) {
    // print_r($data_tier_3);
    ?>
    <script>
        window.location.href = "<?=set_route_to_link(["public","edu_tier","tier_4",$tier_3_id])?>";
    </script>
    <?php
} else {
?>

<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">Mời bạn bè</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="user_id" value="<?=$user_id?>">





                <div class="mb-3 filled">
                    <small class="text-warning fw-bold bg-light p-2 rounded d-block mt-2" style="border-left: 4px solid #ffc107;">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Lưu ý: hãy nhập đúng email ngay từ đầu – email đã tạo không thể chỉnh sửa hoặc xóa.
                    </small>
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


                <!-- <hr class="my-3 border-secondary"> -->

                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-star">
                        <path d="M10 15.27L16.18 19 14.54 12.97 20 8.64 13.81 8.63 10 2 6.19 8.63 0 8.64 5.46 12.97 3.82 19 10 15.27z"></path>
                    </svg>
                    <input class="form-control" id="name" placeholder="Nhập họ và tên">
                </div>



               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_submit_add_database" onclick="add_database()">Mời bạn bè</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Archive Modal -->
<div class="modal fade" id="editArchiveModal" tabindex="-1" aria-labelledby="editArchiveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editArchiveModalLabel">Chỉnh sửa thông tin học viên</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit_archive_id">


                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email">
                        <path d="M2 5.5L9 9.5L16 5.5M3.5 15.5H14.5C15.3284 15.5 16 14.8284 16 14V6C16 5.17157 15.3284 4.5 14.5 4.5H3.5C2.67157 4.5 2 5.17157 2 6V14C2 14.8284 2.67157 15.5 3.5 15.5Z"></path>
                    </svg>
                    <input class="form-control" id="edit_email" placeholder="Nhập email" disabled>
                </div>



                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-lock-on">
                        <path d="M5 12.5V9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5V12.5H5Z"></path>
                        <path d="M4 12.5H15C15.5523 12.5 16 12.9477 16 13.5V16.5C16 17.0523 15.5523 17.5 15 17.5H4C3.44772 17.5 3 17.0523 3 16.5V13.5C3 12.9477 3.44772 12.5 4 12.5Z"></path>
                    </svg>
                    <div class="input-group">
                        <input type="password" class="form-control" id="edit_password" placeholder="Nhập mật khẩu">
                        <button class="btn btn-primary" type="button" id="togglePassword">
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                </div>



                <hr class="my-3 border-secondary">
                <div class="mb-3 filled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user">
                        <path d="M10.0179 8C10.9661 8 11.7333 7.23285 11.7333 6.28458C11.7333 5.33631 10.9661 4.56916 10.0179 4.56916C9.06968 4.56916 8.30249 5.33631 8.30249 6.28458C8.30249 7.23285 9.06968 8 10.0179 8Z"></path>
                        <path d="M13.5468 13.9999H6.46891C6.27358 14.0001 6.08237 13.9341 5.92092 13.8124C5.75947 13.6906 5.63582 13.5191 5.56823 13.3231C5.50064 13.1271 5.49241 12.9155 5.54464 12.7146C5.59686 12.5138 5.70702 12.3335 5.86123 12.1999C7.0188 11.1999 8.49563 10.6665 10.0079 10.6665C11.5201 10.6665 12.9969 11.1999 14.1545 12.1999C14.3087 12.3335 14.4188 12.5138 14.4711 12.7146C14.5233 12.9155 14.5151 13.1271 14.4475 13.3231C14.3799 13.5191 14.2562 13.6906 14.0948 13.8124C13.9333 13.9341 13.7421 14.0001 13.5468 13.9999Z"></path>
                    </svg>
                    <input class="form-control" id="edit_name" placeholder="Tên">
                </div>


                <!-- <hr class="my-3 border-secondary"> -->
                



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

        <div class="alert alert-warning mb-3" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-flask fa-2x me-3 text-warning"></i>
                <div>
                    <h5 class="alert-heading mb-1">Chào mừng bạn đến trang quản lý <span class="text-primary" style="font-weight: 900; font-size: 1.2rem;">"Cấp Học Viên"</span> đây là phiên bản basic.</h5>
                    <p class="mb-0">Chúng tôi đang hoàn thiện và sẽ liên tục cập nhật các tính năng mới trong thời gian tới.</p>
                </div>
            </div>
        </div>
        <!-- <h1 class="page-title">Quản lý học viên</h1> -->
        <ul class="breadcrumb shadow-sm py-2 px-3" style="font-size: 0.8rem; font-weight: 600;">
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_4",$tier_3_id])?>" class="text-success fw-medium"><?=$data_tier_3["name"]?></a></li>
            <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","edu_tier","tier_5",$user_id])?>" class="text-success fw-medium"><?=$data_user["name"]?></a></li>
        </ul>
    </div>
    


    <div class="row">
        <div class="col-12 p-0">
            <div class="glide glide-small glide--ltr glide--slider glide--swipeable" id="statsCarousel">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides d-flex flex-wrap">

                        <div class="glide__slide col-12 col-sm-6 col-md-4 col-lg-2">
                            <div class="card mb-5 hover-border-primary">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-blood text-primary">
                                            <ellipse cx="6.49996" cy="5.99999" rx="4.5" ry="4" transform="rotate(-30 6.49996 5.99999)"></ellipse>
                                            <path d="M7.799 5.25C8.07515 5.72829 7.7174 6.45181 6.99997 6.86603C6.28253 7.28024 5.47707 7.22829 5.20093 6.75"></path>
                                            <ellipse cx="13.3819" cy="14.0284" rx="4.5" ry="4" transform="rotate(15 13.3819 14.0284)"></ellipse>
                                            <path d="M14.8308 14.4166C14.6879 14.9501 13.9233 15.2087 13.1231 14.9943C12.3229 14.7799 11.7901 14.1736 11.933 13.6401"></path>
                                        </svg>
                                    </div>
                                    <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                        Đào tạo  
                                    </div>
                                    <div class="display-6 text-primary"><?=$data_user["discount_percent"]?>%</div>
                                </div>
                            </div>
                        </div>
                        


                        <div class="glide__slide col-12 col-sm-6 col-md-4 col-lg-2">
                            <div class="card mb-5 hover-border-primary">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-laptop text-primary">
                                            <path d="M2 14.5V5.5C2 4.94772 2.44772 4.5 3 4.5H17C17.5523 4.5 18 4.94772 18 5.5V14.5C18 15.0523 17.5523 15.5 17 15.5H3C2.44772 15.5 2 15.0523 2 14.5Z"></path>
                                            <path d="M5.5 17.5H14.5"></path>
                                            <path d="M8.5 15.5L7.5 17.5"></path>
                                            <path d="M11.5 15.5L12.5 17.5"></path>
                                        </svg>
                                    </div>
                                    <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                        Phần mềm  
                                    </div>
                                    <div class="display-6 text-primary"><?=$data_user["software_discount_percent"]?>%</div>
                                </div>
                            </div>
                        </div>



                        <div class="glide__slide col-12 col-sm-6 col-md-4 col-lg-2">
                            <div class="card mb-5 hover-border-primary">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-network text-primary">
                                            <path d="M10 9C11.1046 9 12 8.10457 12 7C12 5.89543 11.1046 5 10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9Z"></path>
                                            <path d="M3 15C4.10457 15 5 14.1046 5 13C5 11.8954 4.10457 11 3 11C1.89543 11 1 11.8954 1 13C1 14.1046 1.89543 15 3 15Z"></path>
                                            <path d="M17 15C18.1046 15 19 14.1046 19 13C19 11.8954 18.1046 11 17 11C15.8954 11 15 11.8954 15 13C15 14.1046 15.8954 15 17 15Z"></path>
                                            <path d="M5 13H15"></path>
                                            <path d="M12 7H19V2"></path>
                                            <path d="M8 7H1V2"></path>
                                        </svg>
                                    </div>
                                    <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                        Kênh  
                                    </div>
                                    <div class="display-6 text-primary"><?=$data_user["channel_revenue_discount_percent"]?>%</div>
                                </div>
                            </div>
                        </div>




                        <div class="glide__slide col-12 col-sm-6 col-md-4 col-lg-2">
                            <div class="card mb-5 hover-border-primary">
                                <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                    <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary">
                                            <circle cx="10" cy="7" r="3"></circle>
                                            <path d="M3 18C3 14.6863 6.02944 12 10 12C13.9706 12 17 14.6863 17 18"></path>
                                        </svg>
                                    </div>
                                    <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                        Bạn bè  
                                    </div>
                                    <div class="display-6 text-primary"><?=$data_user["count_ref_level"]?></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
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
                            <i class="fas fa-plus-circle"></i> Mời bạn bè
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
                        
                        
                        <button type="button" class="btn btn-success btn-sm btn-xs" id="btn_active_selected" onclick="table_update_status('active',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","edu_tier","update_status_tier_4"])?>'})">
                            <i class="fas fa-trash-restore"></i> Kích hoạt
                        </button>
                        <button type="button" class="btn btn-success btn-sm btn-xs" id="btn_pending_selected" onclick="table_update_status('pending',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","edu_tier","update_status_tier_4"])?>'})">
                            <i class="fas fa-clock"></i> Chuyển sang chờ duyệt
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-xs" id="btn_delete_selected" onclick="table_update_status('deleted',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_active_selected: 'btn_active_selected', elm_id_btn_pending_selected: 'btn_pending_selected', elm_id_btn_delete_selected: 'btn_delete_selected', url_update_status : '<?=set_route_to_link(["backend","edu_tier","update_status_tier_4"])?>'})">
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
                                <th>%K.Học</th>
                                <th>%P.Mềm</th>
                                <th>%Kênh</th>
                                <th>Đã mời</th>
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