<?php

    $dulieu = $db->findOneId("tests6", $params[3]);
    $dataEdit = $dulieu[0];

?>



<div class="card-body">
<!-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true"> -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Edit thông tin cá nhân</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" value="<?=$dataEdit['_id']?>">
                <div class="mb-3">
                    <label class="form-label" for="fullName" >Họ và tên</label>
                    <input type="text" class="form-control" id="fullName" value ="<?=$dataEdit["fullName"]?>">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="dob">Ngày sinh</label>
                    <input type="date" class="form-control" id="dob" value="<?=$dataEdit['dob']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="gender">Giới tính</label>
                    <select class="form-select" id="gender">
                        <option value="" selected>Chọn giới tính</option>
                        <option value="male" <?=$dataEdit['gender'] == 'male' ? 'selected' : ''?>>Nam</option>
                        <option value="female" <?=$dataEdit['gender'] == 'female' ? 'selected' : ''?>>Nữ</option>
                        <option value="other" <?=$dataEdit['gender'] == 'other' ? 'selected' : ''?>>Khác</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="idCard">Số CMND/CCCD</label>
                    <input type="text" class="form-control" id="idCard" value = "<?=$dataEdit['idCard']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" value = "<?=$dataEdit['email']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" value = "<?=$dataEdit['phone']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="address">Địa chỉ</label>
                    <textarea class="form-control" id="address" rows="2"><?=$dataEdit['address']?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="education">Trình độ học vấn</label>
                    <select class="form-select" id="education">
                        <option value="" selected>Chọn trình độ học vấn</option>
                        <option value="highschool" <?=$dataEdit['education'] == 'highschool' ? 'selected' : ''?>>THPT</option>
                        <option value="college" <?=$dataEdit['education'] == 'college' ? 'selected' : ''?>>Cao đẳng</option>
                        <option value="university" <?=$dataEdit['education'] == 'university' ? 'selected' : ''?>>Đại học</option>
                        <option value="master" <?=$dataEdit['education'] == 'master' ? 'selected' : ''?>>Thạc sĩ</option>
                        <option value="phd" <?=$dataEdit['education'] == 'phd' ? 'selected' : ''?>>Tiến sĩ</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="note">Ghi chú</label>
                    <textarea class="form-control" id="note" rows="3"><?=$dataEdit['note']?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?=set_route_to_link(["public","test6","index"])?>" class="btn btn-outline-secondary">Quay Lại</a>
                <button type="submit" class="btn btn-primary" onclick="edit6()">Lưu thông tin</button>
            </div>
        </div>
    </div>
</div>


