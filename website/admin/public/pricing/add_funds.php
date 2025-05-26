<div class="card mb-5 shadow-sm">
    <div class="card-body">
        <!-- System Operating Hours - Added at the top for high visibility -->
        <div class="alert alert-warning border-start border-warning border-4 shadow-sm mb-4" role="alert">
            <div class="d-flex">
                <div class="me-3">
                    <i class="bi bi-clock-history fs-4"></i>
                </div>
                <div>
                    <h5 class="alert-heading"><strong>Giờ hoạt động của hệ thống nạp tiền</strong></h5>
                    <p class="mb-0">Hệ thống nạp tiền hoạt động từ <strong>8:00 - 21:00</strong> hàng ngày (kể cả thứ 7, chủ nhật và ngày lễ).</p>
                    <hr>
                    <p class="mb-0 text-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i> <strong>Lưu ý quan trọng:</strong> Các giao dịch nạp tiền ngoài khung giờ trên có thể không được xử lý ngay lập tức và sẽ được cập nhật vào ngày làm việc tiếp theo. Vui lòng chỉ thực hiện giao dịch trong khung giờ hoạt động để đảm bảo tiền được nạp nhanh chóng vào tài khoản của bạn.</p>
                </div>
            </div>
        </div>
        
        <?php
        $count_payment_history = $db->count("history_payments", ["u_id" => $dataUsers["_id"]->__toString(), "status" => "pending"]);
        if ($count_payment_history < 1) {
        ?>
            <!-- chưa có lệnh pending -->
            <div class="row g-4">
                <!-- QR Code Section -->
                <div class="col-md-4 text-center">
                    <div class="p-3 bg-light rounded mb-3">
                        <!-- Dynamic QR code that changes with bank tabs -->
                        <img id="mainQrCode" src="<?=asset("/image/qr/sofin-tp-bank-1.jpg")?>" class="img-fluid rounded shadow-sm" alt="QR Payment Code" style="max-width: 100%;">
                    </div>
                    <span class="badge bg-primary p-2 mb-2">Quét mã để thanh toán nhanh</span>
                </div>
                
                <!-- Payment Information Section -->
                <div class="col-md-8">
                    <h5 class="card-title text-primary border-bottom pb-2 mb-3">
                        <i class="bi bi-credit-card me-2"></i>Thông tin chuyển khoản
                    </h5>
                    
                    <!-- Account Balance Section - Moved here -->
                    <div class="mb-4">
                        <div class="card bg-light border-success shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="text-success mb-1"><i class="bi bi-wallet2 me-2"></i>Số dư tài khoản</h5>
                                        <p class="text-muted mb-0">Số dư khả dụng của bạn</p>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="text-success fw-bold mb-0"><b id="html_point"><?=$dataUsers->point?></b> VNĐ</h3>
                                        <span class="badge bg-success">Đang hoạt động</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bank Selection Tabs -->
                    <ul class="nav nav-tabs mb-3" id="bankTabs" role="tablist">
                        <?php
                        // Define bank information in a JSON array
                        $banks = [
                            [
                                'id' => 'TP-Bank',
                                'name' => 'TP Bank',
                                'account_number' => '38830011998',
                                'account_holder' => 'Nguyễn Thị Thu Hiền',
                                'qr_image' => asset("/image/qr/sofin-tp-bank-1.jpg"),
                                'active' => true
                            ]
                        ];

                        // Generate tabs
                        foreach ($banks as $bank) {
                            $activeClass = $bank['active'] ? 'active' : '';
                            $selectedAttr = $bank['active'] ? 'true' : 'false';
                            echo '
                            <li class="nav-item" role="presentation">
                                <button class="nav-link ' . $activeClass . '" id="' . $bank['id'] . '-tab" data-bs-toggle="tab" data-bs-target="#' . $bank['id'] . '" type="button" role="tab" aria-controls="' . $bank['id'] . '" aria-selected="' . $selectedAttr . '" onclick="document.getElementById(\'mainQrCode\').src=\'' . $bank['qr_image'] . '\'">
                                    <i class="bi bi-bank me-1"></i>' . $bank['name'] . '
                                </button>
                            </li>';
                        }
                        ?>
                    </ul>
                    
                    <!-- Bank Tab Contents -->
                    <div class="tab-content" id="bankTabsContent">
                        <?php
                        // Generate tab content
                        foreach ($banks as $bank) {
                            $activeClass = $bank['active'] ? 'show active' : '';
                            ?>
                            <div class="tab-pane fade <?= $activeClass ?>" id="<?= $bank['id'] ?>" role="tabpanel" aria-labelledby="<?= $bank['id'] ?>-tab">
                                <div class="card bg-white shadow-sm p-3 mb-3">
                                    <table class="table table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold text-secondary" style="width: 40%;"><i class="bi bi-bank me-2"></i>Ngân hàng:</td>
                                                <td class="text-dark"><?=$bank['name']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-secondary"><i class="bi bi-person me-2"></i>Chủ tài khoản:</td>
                                                <td class="text-dark"><?= $bank['account_holder'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-secondary"><i class="bi bi-credit-card-2-front me-2"></i>Số tài khoản:</td>
                                                <td class="text-dark fw-bold"><?= $bank['account_number'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-secondary"><i class="bi bi-chat-text me-2"></i>Nội dung chuyển khoản:</td>
                                                <td class="text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bold me-2"><?=$dataUsers->email?></span>
                                                        <button type="button" class="btn btn-sm btn-outline-primary copy-content" data-content="NAPTIEN <?=$dataUsers->email?>">
                                                            <i class="bi bi-clipboard me-1"></i>Sao chép
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    
                    <!-- Payment Confirmation Form -->
                    <div class="card border-primary shadow-sm mb-4">
                        <!-- <div class="card-header bg-primary bg-opacity-10">
                            <h5 class="mb-0 text-primary"><i class="bi bi-cash-coin me-2"></i>Xác nhận nạp tiền</h5>
                        </div> -->
                        <div class="card-body">
                            
                            <div class="mb-3">
                                <label for="amountPaid" class="form-label fw-bold"><i class="bi bi-currency-exchange me-2"></i>Số tiền đã chuyển khoản</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" id="amountPaid" placeholder="Nhập số tiền đã chuyển" required>
                                    <span class="input-group-text bg-light">VNĐ</span>
                                </div>
                                <div class="form-text">Vui lòng nhập chính xác số tiền bạn đã chuyển khoản.</div>
                            </div>
                            <div class="mb-3">
                                <label for="transactionId" class="form-label fw-bold"><i class="bi bi-upc me-2"></i>Mã giao dịch (nếu có)</label>
                                <input type="text" class="form-control" id="transactionId" placeholder="Nhập mã giao dịch từ ngân hàng của bạn">
                            </div>
                            <div class="mb-3">
                                <label for="paymentNote" class="form-label fw-bold"><i class="bi bi-pencil-square me-2"></i>Ghi chú</label>
                                <textarea class="form-control" id="paymentNote" rows="2" placeholder="Thông tin bổ sung về giao dịch (nếu có)"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" id="SubmitAddFunds" onclick="addFunds()" class="btn btn-primary btn-lg"><i class="bi bi-send-check-fill me-2"></i>Xác nhận đã chuyển khoản</button>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="alert alert-info border-start border-info border-4 shadow-sm" role="alert">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                Quét mã QR hoặc chuyển khoản theo thông tin trên. Hệ thống sẽ cập nhật số dư của bạn sau khi xác nhận giao dịch.
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-warning border-start border-warning border-4 shadow-sm" role="alert">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-exclamation-triangle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Lưu ý quan trọng:</strong> Hệ thống sẽ tự động cập nhật số dư sau khi nhận được thanh toán của bạn. Nếu sau 30 phút bạn vẫn chưa nhận được tiền trong tài khoản, vui lòng liên hệ với bộ phận hỗ trợ bên dưới để được giải quyết nhanh chóng. Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7 để đảm bảo trải nghiệm thanh toán thuận lợi nhất.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
            ?>
            <!-- đã có lệnh pending -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="alert alert-danger border-start border-danger border-4 shadow-sm" role="alert">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-exclamation-triangle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Lưu ý quan trọng:</strong> Bạn đã có một lệnh nạp tiền đang chờ xử lý. Vui lòng kiên nhẫn trong khi hệ thống xử lý yêu cầu của bạn, thời gian này có thể kéo dài từ 5 đến 30 phút. Nếu sau khoảng thời gian này bạn vẫn chưa nhận được thông báo về trạng thái giao dịch, hãy kiểm tra phần phản hồi bên dưới lịch sử thanh toán, vì nếu có vấn đề gì, admin sẽ ghi chú vào đó. Nếu cần thêm hỗ trợ, đừng ngần ngại liên hệ với bộ phận hỗ trợ để được giúp đỡ kịp thời.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>

        
    </div>
</div>











<div class="card mb-5 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="page-title-container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">Lịch sử thanh toán</h1>
                        </div>
                    </div>
                </div>
                <div class="data-table-rows slim">
                    <div class="data-table-responsive-wrapper">
                        <table id="datatableRowsAjax" class="data-table nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="text-muted text-small text-uppercase">ID</th>
                                    <th class="text-muted text-small text-uppercase">Time</th>
                                    <th class="text-muted text-small text-uppercase">amount</th>
                                    <th class="text-muted text-small text-uppercase">transaction_id</th>
                                    <th class="text-muted text-small text-uppercase">note</th>
                                    <th class="text-muted text-small text-uppercase">status</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>






<div class="card mb-5 shadow-sm">
    <div class="card-body">
        <!-- Support Information Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h5 class="card-title text-primary border-bottom pb-2 mb-3">
                    <i class="bi bi-headset me-2"></i>Thông tin liên hệ hỗ trợ
                </h5>
                
                <!-- Support Tabs -->
                <ul class="nav nav-pills mb-3" id="supportTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="hotline-tab" data-bs-toggle="pill" data-bs-target="#hotline" type="button" role="tab" aria-controls="hotline" aria-selected="true">
                            <i class="bi bi-telephone-fill me-1"></i>Hotline
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="zalo-tab" data-bs-toggle="pill" data-bs-target="#zalo" type="button" role="tab" aria-controls="zalo" aria-selected="false">
                            <i class="bi bi-chat-dots-fill me-1"></i>Zalo
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="telegram-tab" data-bs-toggle="pill" data-bs-target="#telegram" type="button" role="tab" aria-controls="telegram" aria-selected="false">
                            <i class="bi bi-telegram me-1"></i>Telegram
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="email-tab" data-bs-toggle="pill" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">
                            <i class="bi bi-envelope-fill me-1"></i>Email
                        </button>
                    </li>
                </ul>
                
                <!-- Support Tab Contents -->
                <div class="tab-content" id="supportTabsContent">
                    <!-- Hotline Support -->
                    <div class="tab-pane fade show active" id="hotline" role="tabpanel" aria-labelledby="hotline-tab">
                        <div class="card border-info bg-info bg-opacity-10 shadow-sm">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Người hỗ trợ:</strong> Nguyễn Văn Hỗ Trợ
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Số điện thoại:</strong> 0987 654 321
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Người hỗ trợ:</strong> Trần Thị Hỗ Trợ
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Số điện thoại:</strong> 0912 345 678
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 pt-2 border-top">
                                    <div class="bg-info text-white rounded-circle p-2 me-3">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div>
                                        <strong>Thời gian hỗ trợ:</strong> 8:00 - 22:00 (Thứ 2 - Chủ nhật)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Zalo Support -->
                    <div class="tab-pane fade" id="zalo" role="tabpanel" aria-labelledby="zalo-tab">
                        <div class="card border-info bg-info bg-opacity-10 shadow-sm">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Zalo:</strong> Nguyễn Văn Hỗ Trợ
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-chat-dots-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Số Zalo:</strong> 0987 654 321
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-qr-code"></i>
                                            </div>
                                            <div>
                                                <strong>Quét mã Zalo:</strong>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <img src="img/qr/zalo-qr.png" alt="Zalo QR" height="100" class="rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 pt-2 border-top">
                                    <div class="bg-info text-white rounded-circle p-2 me-3">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div>
                                        <strong>Thời gian hỗ trợ:</strong> 8:00 - 22:00 (Thứ 2 - Chủ nhật)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Telegram Support -->
                    <div class="tab-pane fade" id="telegram" role="tabpanel" aria-labelledby="telegram-tab">
                        <div class="card border-info bg-info bg-opacity-10 shadow-sm">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-telegram"></i>
                                            </div>
                                            <div>
                                                <strong>Telegram:</strong> @support_username
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Nhóm Telegram:</strong> @support_group
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-qr-code"></i>
                                            </div>
                                            <div>
                                                <strong>Quét mã Telegram:</strong>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <img src="img/qr/telegram-qr.png" alt="Telegram QR" height="100" class="rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 pt-2 border-top">
                                    <div class="bg-info text-white rounded-circle p-2 me-3">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div>
                                        <strong>Thời gian hỗ trợ:</strong> 8:00 - 22:00 (Thứ 2 - Chủ nhật)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email Support -->
                    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                        <div class="card border-info bg-info bg-opacity-10 shadow-sm">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Email hỗ trợ chung:</strong> support@example.com
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Email kỹ thuật:</strong> tech@example.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <strong>Email thanh toán:</strong> payment@example.com
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info text-white rounded-circle p-2 me-3">
                                                <i class="bi bi-clock-history"></i>
                                            </div>
                                            <div>
                                                <strong>Thời gian phản hồi:</strong> Trong vòng 24 giờ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 pt-2 border-top">
                                    <div class="bg-info text-white rounded-circle p-2 me-3">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </div>
                                    <div>
                                        <strong>Lưu ý:</strong> Vui lòng cung cấp đầy đủ thông tin về giao dịch khi liên hệ qua email để được hỗ trợ nhanh chóng.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>