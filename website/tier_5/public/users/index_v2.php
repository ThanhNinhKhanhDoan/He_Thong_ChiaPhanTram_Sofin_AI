<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">Tạo kho mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="form-label">Tên kho <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" required placeholder="Nhập tên kho">
                </div>
                <div class="form-group mt-3">
                    <label for="keywords" class="form-label">Từ khoá <span class="text-muted">(tuỳ chọn)</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="keyword-input" placeholder="Nhập từ khoá và nhấn Enter hoặc dấu phẩy">
                    </div>
                    <div class="form-text">Nhập từ khoá và nhấn Enter hoặc dấu phẩy (,) để thêm</div>
                    <div id="keywords-container" class="d-flex flex-wrap gap-2 mt-2"></div>
                    <input type="hidden" id="keywords" name="keywords" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_save_category" onclick="add_database()">Lưu kho</button>
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
                <div class="mb-3">
                    <label for="edit_keywords_input" class="form-label">Từ khoá</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="edit_keywords_input" placeholder="Nhập từ khoá và nhấn Enter">
                    </div>
                    <div id="edit_keywords_container" class="d-flex flex-wrap gap-2 mt-2"></div>
                    <input type="hidden" id="edit_keywords" name="edit_keywords">
                    <small class="form-text text-muted">Nhập từ khoá và nhấn Enter hoặc dấu phẩy để thêm</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btn_update_archive" onclick="update_database()">Cập nhật</button>
            </div>
        </div>
    </div>
</div>





<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Quản lý kho</h1>
    </div>
    
    <div class="row">
        <!-- Danh sách chuyên mục (bên trái) -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        <i class="fas fa-folder"></i> Danh sách kho
                    </h5>
                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary me-2 border-2" id="btn_create_cate" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                            <i class="fas fa-plus-circle"></i> Tạo kho
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

                                <div class="input-group input-group-sm">
                                    <span class="input-group-text bg-light text-secondary">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                    <select id="delete_status" class="form-select shadow-sm" onchange="table_load_delete_status({elm_table_id: 'table_lists', elm_id_delete_status: 'delete_status', elm_id_btn_restore_deleted: 'btn_restore_deleted', elm_id_btn_delete_selected: 'btn_delete_selected'})">
                                        <option value="false">Chưa xoá</option>
                                        <option value="true">Đã xoá</option>
                                    </select>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        
                        <button type="button" class="btn btn-success btn-sm btn-xs" id="btn_restore_deleted" style="display: none;" onclick="table_restore_delete('restore',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_restore_deleted: 'btn_restore_deleted', elm_id_btn_delete_selected: 'btn_delete_selected', url_delete : '<?=set_route_to_link(["backend","admin_panel_videos","restore_deleted_archives"])?>'})">
                            <i class="fas fa-trash-restore"></i> Khôi phục
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-xs" id="btn_delete_selected" onclick="table_restore_delete('delete',{elm_table_id: 'table_lists', checkboxName: 'table_checkbox', elm_id_btn_restore_deleted: 'btn_restore_deleted', elm_id_btn_delete_selected: 'btn_delete_selected', url_delete : '<?=set_route_to_link(["backend","admin_panel_videos","delete_archives"])?>'})">
                            <i class="fas fa-trash"></i> Xoá
                        </button>

                        
                    </div>

                    
                </div>
                <div style="overflow-x: auto;">
                    <table class="custom-table" id="table_lists">
                        <thead>
                            <tr>
                                <th class="text-muted text-small text-uppercase">ID</th>
                                <th class="text-muted text-small text-uppercase">Email</th>
                                <th class="text-muted text-small text-uppercase">Tên</th>
                                <th class="text-muted text-small text-uppercase">Tiền</th>
                                <th class="text-muted text-small text-uppercase">Quyền</th>
                                <th class="text-muted text-small text-uppercase">SĐT</th>
                                <th class="text-muted text-small text-uppercase">Telegram</th>
                                <th class="text-center">
                                    <div class="d-flex align-items-end justify-content-end">
                                        <div class="form-check">
                                            <input type="checkbox" name="check_all" id="check_all" class="form-check-input" onclick="table_checkbox_all(this,{elm_table_id: 'table_lists'})">
                                            <label class="form-check-label" for="check_all">All</label>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>