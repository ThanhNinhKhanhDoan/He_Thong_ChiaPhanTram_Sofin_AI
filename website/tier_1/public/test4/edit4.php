<?php
    // Lấy dữ liệu hiện tại từ database theo ID
    $dulieu = $db->findOneId("tests4", $params[3]);
    $dulieu = $dulieu[0];
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Chỉnh sửa thông tin</h4>
                </div>
                <div class="card-body">
                    <!-- Thông tin cá nhân -->
                    <div class="mb-4">
                        <h5 class="border-bottom pb-2">Thông tin cá nhân</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" value="<?=$dulieu['name']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@domain.com" value="<?=$dulieu['email']?>">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" value="<?=$dulieu['password']?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại" value="<?=$dulieu['phone']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Địa chỉ -->
                    <div class="mb-4">
                        <h5 class="border-bottom pb-2">Địa chỉ</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label">Địa chỉ chi tiết</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Số nhà, đường, phường/xã" value="<?=$dulieu['address']?>">
                            </div>
                        </div>
                    </div>

                    <!-- Danh mục -->
                    <div class="mb-4">
                        <h5 class="border-bottom pb-2">Danh mục</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="category" class="form-label">Danh mục</label>
                                <select class="form-select" id="category" name="category">
                                    <option value="1" <?=$dulieu['category'] == 1 ? 'selected' : ''?>>Danh mục 1</option>
                                    <option value="2" <?=$dulieu['category'] == 2 ? 'selected' : ''?>>Danh mục 2</option>
                                    <option value="3" <?=$dulieu['category'] == 3 ? 'selected' : ''?>>Danh mục 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <!-- Trường input ẩn (hidden) để lưu ID của bản ghi hiện tại -->
                    <!-- '_id' là ID duy nhất của document trong MongoDB -->
                    <!-- __toString() chuyển đối tượng ObjectId thành chuỗi để có thể sử dụng trong JavaScript -->
                    <!-- Giá trị này sẽ được gửi đi khi gọi hàm edit3() để xác định bản ghi cần cập nhật -->

                    
                    
                    <div class="text-center mt-4">
                        <button class="btn btn-warning" onclick="edit4()">Cập nhật thông tin</button>
                        <a href="<?=set_route_to_link(["public","test4","index"])?>" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

