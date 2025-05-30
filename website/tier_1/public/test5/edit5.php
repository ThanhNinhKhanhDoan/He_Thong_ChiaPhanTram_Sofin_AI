<?php

    $dulieu = $db->findOneId("tests5", $params[3]);
    $dataEdit = $dulieu[0];
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0"><i class="fas fa-user-edit me-2"></i>Chỉnh sửa thông tin</h5>
            </div>
            <div class="card-body p-4">
                <form id="editForm">
                    <input type="hidden" id="id" value="<?=$dataEdit['_id']?>">
                    
                    <div class="mb-3">
                        <label class="form-label fw-medium" for="name">Tên</label>
                        <input type="text" class="form-control" id="name" value="<?=$dataEdit['name']?>">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-medium" for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="<?=$dataEdit['email']?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium" for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" value="<?=$dataEdit['password']?>">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                                <i class="fas fa-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                        <script>
                            function togglePassword() {
                                const passwordInput = document.getElementById('password');
                                const icon = document.getElementById('togglePasswordIcon');
                                
                                if (passwordInput.type === 'password') {
                                    passwordInput.type = 'text';
                                    icon.classList.remove('fa-eye');
                                    icon.classList.add('fa-eye-slash');
                                } else {
                                    passwordInput.type = 'password';
                                    icon.classList.remove('fa-eye-slash');
                                    icon.classList.add('fa-eye');
                                }
                            }
                        </script>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-medium" for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" value="<?=$dataEdit['address']?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium" for="category">Danh mục</label>
                        <select class="form-select" id="category">
                            <option value="">Chọn danh mục</option>
                            <option value="category1" <?=$dataEdit['category'] == 'category1' ? 'selected' : ''?>>Category 1</option>
                            <option value="category2" <?=$dataEdit['category'] == 'category2' ? 'selected' : ''?>>Category 2</option>
                            <option value="category3" <?=$dataEdit['category'] == 'category3' ? 'selected' : ''?>>Category 3</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label fw-medium" for="message">Nội dung</label>
                        <textarea class="form-control" id="message" rows="4"><?=$dataEdit['message']?></textarea>
                    </div>

                    <div class="d-flex gap-2 justify-content-end">
                        <a href="<?=set_route_to_link(["public","test5","index"])?>" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Quay lại
                        </a>
                        <button type="button" class="btn btn-primary" onclick="edit5()">
                            <i class="fas fa-save me-1"></i> Lưu thay đổi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
