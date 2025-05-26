<div class="page-title-container">
    <div class="row">
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Gói</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="Pages.html">Gói</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-12 col-md-5">
            <div class="card shadow-sm mb-3">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-gradient-light sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-wallet text-white">
                                <path d="M16 5H4C2.89543 5 2 5.89543 2 7V15C2 16.1046 2.89543 17 4 17H16C17.1046 17 18 16.1046 18 15V7C18 5.89543 17.1046 5 16 5Z"></path>
                                <path d="M2 5L2 4C2 2.89543 2.89543 2 4 2H13.5C14.6046 2 15.5 2.89543 15.5 4V5"></path>
                                <path d="M14 12C14 11.4477 14.4477 11 15 11H18V13H15C14.4477 13 14 12.5523 14 12V12Z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-muted text-small mb-1">Số dư hiện tại</div>
                            <div class="cta-3 text-primary"><b id="html_point"><?=$dataUsers['point']?></b> VNĐ</div>
                        </div>
                        <div class="ms-auto">
                            <a href="<?=set_route_to_link(["public","pricing","add_funds"])?>" class="btn btn-sm btn-outline-primary">Nạp thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hiển thị gói hiện tại của tài khoản -->
<div class="mb-4">
    <div class="card border-0 shadow" id="currentPlanCard">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <div class="d-flex align-items-center">
                        <div class="bg-white sw-7 sh-7 rounded-circle d-flex justify-content-center align-items-center me-3" id="planIcon">
                            <!-- Default icon, will be changed by script based on plan type -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-diamond text-primary">
                                <path d="M2 7L10 17L18 7M2 7L10 2L18 7M2 7H18"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white mb-2">Your current plan: <span class="fw-bolder" id="planName">Premium</span></h4>
                            <p class="text-white opacity-90 mb-0 fs-5" id="planExpiration">
                                Expiration: 15/12/2023 (30 days left)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-4 mt-md-0 text-md-end">
                    <a href="#packages" class="btn btn-lg btn-white me-2 shadow-sm">
                        <i class="bi bi-arrow-clockwise me-2"></i>Renew
                    </a>
                    <a href="#packages" class="btn btn-lg btn-info shadow-sm">
                        <i class="bi bi-arrow-up-circle me-2"></i>Upgrade
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4 pt-2 border-top border-white border-opacity-25">
                <div class="text-white">
                    <span class="badge bg-info text-dark fs-6 me-2 p-2" id="pointsUsed">650 points</span>
                    <span class="opacity-90 fs-5">used from the 1,000 points package</span>
                </div>
                <div>
                    <span class="badge bg-info text-dark fs-5 p-2">
                        <i class="bi bi-gem me-1"></i><span id="planType">Premium</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



<h2 class="small-title">Chọn một gói</h2>


<!-- Important Notice Section -->
<div class="alert alert-warning border-start border-warning border-4 shadow-sm mb-4" role="alert">
    <div class="d-flex">
        <div class="me-3">
            <i class="bi bi-exclamation-triangle-fill fs-3"></i>
        </div>
        <div>
            <h5 class="alert-heading fw-bold">Chú ý quan trọng trước khi mua gói</h5>
            <p class="mb-2">Khi đã mua gói dịch vụ, chúng tôi <strong>không hoàn lại phí</strong> dưới bất kỳ hình thức nào.</p>
            <hr>
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-lightbulb text-warning">
                        <path d="M10 3C6.68629 3 4 5.68629 4 9C4 10.2144 4.36 11.3447 4.98454 12.2893C5.35292 12.8371 6.19292 13.9936 6.4577 15.0015C6.57352 15.4769 6.57143 16.0002 6.57143 16.0002H13.4286C13.4286 16.0002 13.4265 15.4769 13.5423 15.0015C13.8071 13.9936 14.6471 12.8371 15.0155 12.2893C15.64 11.3447 16 10.2144 16 9C16 5.68629 13.3137 3 10 3Z"></path>
                        <path d="M10 17V18"></path>
                        <path d="M8 17H12"></path>
                    </svg>
                </div>
                <p class="mb-0 fw-medium">Vui lòng cân nhắc kỹ và đọc thông tin chi tiết về các gói dịch vụ trước khi quyết định mua để đảm bảo lựa chọn phù hợp nhất với nhu cầu của bạn.</p>
            </div>
        </div>
    </div>
</div>



<div class="mb-5">
    <div class="row row-cols-1 row-cols-lg-3 g-4" id="pricing-plans-container">
        <!-- Plans will be loaded here by JavaScript -->
    </div>
</div>
















<div class="card mb-5 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="page-title-container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">Package Purchase History</h1>
                        </div>
                    </div>
                </div>
                <div class="data-table-rows slim">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                <input class="form-control datatable-search" placeholder="Search" id="search-package-history">
                                <span class="search-magnifier-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-search undefined"><circle cx="9" cy="9" r="7"></circle><path d="M14 14L17.5 17.5"></path></svg>
                                </span>
                                <span class="search-delete-icon d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-close undefined"><path d="M5 5 15 15M15 5 5 15"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-responsive-wrapper">
                        <table id="datatableRowsAjax" class="data-table nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="text-muted text-small text-uppercase">ID</th>
                                    <th class="text-muted text-small text-uppercase">status</th>
                                    <th class="text-muted text-small text-uppercase">Time create</th>
                                    <th class="text-muted text-small text-uppercase">Time expired</th>
                                    <th class="text-muted text-small text-uppercase">Email</th>
                                    <th class="text-muted text-small text-uppercase">Phone</th>
                                    <th class="text-muted text-small text-uppercase">plan_name</th>
                                    <th class="text-muted text-small text-uppercase">duration_days</th>
                                    <th class="text-muted text-small text-uppercase">bonus_points</th>
                                    <th class="text-muted text-small text-uppercase">price</th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>