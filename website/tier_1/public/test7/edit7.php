<?php
    $dulieu = $db->findOneId("tests7", $params[3]);
    $dataEdit = $dulieu[0];
?>


<div id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" id="employeeName" placeholder="Nhập họ tên" value="<?=$dataEdit['employeeName']?>">
                </div>
                
                <div class="mb-3">
                    <label for="employeeEmail" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="employeeEmail" placeholder="Nhập email" value="<?=$dataEdit['employeeEmail']?>">
                </div>
                
                <div class="mb-3">
                    <label for="employeePhone" class="form-label fw-semibold">Số Điện Thoại <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="employeePhone" placeholder="Nhập số điện thoại" value="<?=$dataEdit['employeePhone']?>">
                </div>
                
                <div class="mb-3">
                    <label for="employeePosition" class="form-label fw-semibold">Chức Vụ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="employeePosition" placeholder="Nhập chức vụ" value="<?=$dataEdit['employeePosition']?>">
                </div>
                
                <div class="mb-3">
                    <label for="employeeDepartment" class="form-label fw-semibold">Phòng Ban <span class="text-danger">*</span></label>
                    <select class="form-select" id="employeeDepartment">
                        <!-- <option value="" selected>Chọn phòng ban</option> -->
                        <option value="Kỹ Thuật" <?=$dataEdit['employeeDepartment'] == 'Kỹ Thuật' ? 'selected' : ''?>>Kỹ Thuật</option>
                        <option value="Kinh Doanh" <?=$dataEdit['employeeDepartment'] == 'Kinh Doanh' ? 'selected' : ''?>>Kinh Doanh</option>
                        <option value="Marketing" <?=$dataEdit['employeeDepartment'] == 'Marketing' ? 'selected' : ''?>>Marketing</option>
                        <option value="Nhân Sự" <?=$dataEdit['employeeDepartment'] == 'Nhân Sự' ? 'selected' : ''?>>Nhân Sự</option>
                        <option value="Kế Toán" <?=$dataEdit['employeeDepartment'] == 'Kế Toán' ? 'selected' : ''?>>Kế Toán</option>
                        <option value="Hành Chính" <?=$dataEdit['employeeDepartment'] == 'Hành Chính' ? 'selected' : ''?>>Hành Chính</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?=set_route_to_link(["public","test7","index"])?>" class="btn btn-primary">
                    <i class="bi bi-x-circle me-1"></i>
                    Quay Lại
                </a>
                <button type="submit" class="btn btn-primary" onclick="edit7()">
                    Chỉnh Sửa
                </button>
            </div>
        </div>
    </div>
</div>