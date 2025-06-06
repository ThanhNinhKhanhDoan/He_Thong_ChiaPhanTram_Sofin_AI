<div class="row">
    <div class="col-12">
        <div>
            <div class="card-body">

                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModalLabel">Thông tin cá nhân</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label" for="fullName">Họ và tên</label>
                                    <input type="text" class="form-control" id="fullName" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" for="dob">Ngày sinh</label>
                                    <input type="date" class="form-control" id="dob" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="gender">Giới tính</label>
                                    <select class="form-select" id="gender">
                                        <option value="" selected>Chọn giới tính</option>
                                        <option value="male">Nam</option>
                                        <option value="female">Nữ</option>
                                        <option value="other">Khác</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="idCard">Số CMND/CCCD</label>
                                    <input type="text" class="form-control" id="idCard" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="phone">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="address">Địa chỉ</label>
                                    <textarea class="form-control" id="address" rows="2" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="education">Trình độ học vấn</label>
                                    <select class="form-select" id="education">
                                        <option value="" selected>Chọn trình độ học vấn</option>
                                        <option value="highschool">THPT</option>
                                        <option value="college">Cao đẳng</option>
                                        <option value="university">Đại học</option>
                                        <option value="master">Thạc sĩ</option>
                                        <option value="phd">Tiến sĩ</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" for="note">Ghi chú</label>
                                    <textarea class="form-control" id="note" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-primary" onclick="add6()">Thêm thông tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title mb-4">Thông tin cá nhân</h5>
                <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="modal" data-bs-target="#formModal">Nhập thông tin cá nhân</button>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title">Danh sách thông tin cá nhân</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Ngày sinh</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Số CMND/CCCD</th>
                                <th scope="col">Email</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Trình độ học vấn</th>
                                <th scope="col">Ghi chú</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="loadData6">
                            <!-- Dữ liệu sẽ được hiển thị ở đây -->
                        </tbody>
                    </table>
                </div>
                <!-- <div id="noDataMessage" class="text-center py-4">
                    <p class="text-muted">Chưa có dữ liệu. Vui lòng nhập thông tin cá nhân.</p>
                </div> -->
            </div>
        </div>
    </div>
</div>

