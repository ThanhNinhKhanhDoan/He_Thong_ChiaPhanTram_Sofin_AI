<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Nhập thông tin</h4>
                </div>
                <div class="card-body">

                        <!-- Thông tin cá nhân -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">Thông tin cá nhân</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="example@domain.com">
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                                </div>
                                <!-- <div class="col-md-6 mb-3">
                                    <label for="birthdate" class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                                </div> -->
                            </div>
                        </div>
                        
                        <!-- Địa chỉ -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">Địa chỉ</h5>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="address" class="form-label">Địa chỉ chi tiết</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Số nhà, đường, phường/xã">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="text-center mt-4">
                            <button class="btn btn-primary" onclick="add3()">Tạo thông tin</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Container để hiển thị dữ liệu từ database -->
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Danh sách thông tin</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="loadData3">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
