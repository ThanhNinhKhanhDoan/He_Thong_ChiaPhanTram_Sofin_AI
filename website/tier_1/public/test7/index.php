<?php
    // $count_tests7 = $db->count("tests7",["employeeEmail" => "thanhninh05102001@gmail.com"]);
    $count_tests7 = $db->count("tests7",[]);
    
?>



<div class="row">
    <div class="col-11">
        <!-- Header Card -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="card-title mb-2 fw-bold">
                            <i class="bi bi-people-fill me-2 text-primary"></i>
                            Quản Lý Nhân Viên
                        </h1>
                        <p class="card-text text-muted mb-0">Thêm và quản lý thông tin nhân viên</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#employeeModal">
                            <i class="bi bi-plus-circle me-2"></i>
                            Thêm Nhân Viên
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-1 fw-semibold">
                    <i class="bi bi-table me-2 text-primary"></i>
                    Danh Sách Nhân Viên
                </h5>
                <small class="text-muted">Tổng cộng: <span id="count_danh_sach" class="fw-bold text-primary"><?=$count_tests7?></span> nhân viên</small>
            </div>
        </div>

        <!-- Table Card -->
        <div class="card">
            <div class="card-body p-0">
                <!-- Empty State -->
                <!-- <div id="emptyState" class="text-center py-5">
                    <i class="bi bi-people display-1 text-muted"></i>
                    <h4 class="fw-semibold mt-3">Chưa có dữ liệu</h4>
                    <p class="text-muted mb-0">Bấm nút "Thêm Nhân Viên" để bắt đầu</p>
                </div> -->

                <!-- Table -->
                <div id="tableContainer">
                    <table class="table table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Chức Vụ</th>
                                <th>Phòng Ban</th>
                                <th class="text-center">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="loadData7">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="employeeModalLabel">
                    <i class="bi bi-person-plus me-2 text-primary"></i>
                    Thêm Nhân Viên Mới
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="employeeName" class="form-label fw-semibold">Họ Tên <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="employeeName" placeholder="Nhập họ tên" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeeEmail" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="employeeEmail" placeholder="Nhập email" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeePhone" class="form-label fw-semibold">Số Điện Thoại <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="employeePhone" placeholder="Nhập số điện thoại" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeePosition" class="form-label fw-semibold">Chức Vụ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="employeePosition" placeholder="Nhập chức vụ" required>
                </div>
                
                <div class="mb-3">
                    <label for="employeeDepartment" class="form-label fw-semibold">Phòng Ban <span class="text-danger">*</span></label>
                    <select class="form-select" id="employeeDepartment" required>
                        <option value="">Chọn phòng ban</option>
                        <option value="Kỹ Thuật">Kỹ Thuật</option>
                        <option value="Kinh Doanh">Kinh Doanh</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Nhân Sự">Nhân Sự</option>
                        <option value="Kế Toán">Kế Toán</option>
                        <option value="Hành Chính">Hành Chính</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i>
                    Hủy
                </button>
                <button type="submit" class="btn btn-primary" onclick="add7()">
                    Thêm Mới
                </button>
            </div>
        </div>
    </div>
</div>