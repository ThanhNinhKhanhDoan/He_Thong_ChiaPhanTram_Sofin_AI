<div class="page-title-container">
    <div class="row">
        <div class="col">
            <h1 class="mb-0 pb-0 display-4" id="title">Fund</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","home","index"])?>">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?=set_route_to_link(["public","to_approve","fund"])?>">Fund</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Start of Selection -->
<div class="card mb-5 shadow-sm">
    <div class="card-header border-0 pb-0">
        <ul class="nav nav-tabs nav-tabs-line card-header-tabs" role="tablist">
            <li class="nav-item w-33 text-center" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab" aria-selected="true">Pending</a>
            </li>
            <li class="nav-item w-33 text-center" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#approved" role="tab" aria-selected="false">Approved</a>
            </li>
            <li class="nav-item w-33 text-center" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#rejected" role="tab" aria-selected="false">Rejected</a>
            </li>
        </ul>
    </div>
    <div class="card-body h-100-card">
        <div class="tab-content h-100" id="fundTabs">
            <div class="tab-pane fade h-100 scroll-out active show" id="pending" role="tabpanel">
                
                <div class="row">
                    <div class="col">
                        <div class="page-title-container">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <h1 class="mb-0 pb-0 display-4" id="title">List</h1>
                                    
                                </div>
                                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                                    <button type="button" id="approve-datatable" onclick="approveFund()" class="btn btn-outline-success btn-icon btn-icon-start w-100 w-md-auto approve-datatable me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-check undefined">
                                            <path d="M5 10l3 3 7-7"></path>
                                        </svg>
                                        <span>Approve</span>
                                    </button>
                                    <button type="button" id="reject-datatable" onclick="rejectFund()" class="btn btn-outline-danger btn-icon btn-icon-start w-100 w-md-auto reject-datatable">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-x undefined">
                                            <path d="M5 5l10 10M5 15L15 5"></path>
                                        </svg>
                                        <span>Reject</span>
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="data-table-rows slim">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                        <input class="form-control datatable-search" placeholder="Search" id="search-pending">
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
                                <table id="datatableRowsAjaxPending" class="data-table nowrap w-100 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="text-muted text-small text-uppercase">ID</th>
                                            <th class="text-muted text-small text-uppercase">status</th>
                                            <th class="text-muted text-small text-uppercase">Time</th>
                                            <th class="text-muted text-small text-uppercase">Email</th>
                                            <th class="text-muted text-small text-uppercase">Phone</th>
                                            <th class="text-muted text-small text-uppercase">amount</th>
                                            <th class="text-muted text-small text-uppercase">transaction_id</th>
                                            <th class="text-muted text-small text-uppercase">note</th>
                                            <th class="text-muted text-small text-uppercase">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
            <div class="tab-pane fade h-100 scroll-out" id="approved" role="tabpanel">
                
                <div class="row">
                    <div class="col">
                        
                        <div class="data-table-rows slim">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                        <input class="form-control datatable-search" placeholder="Search" id="search-approved">
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
                                <table id="datatableRowsAjaxApproved" class="data-table nowrap w-100 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="text-muted text-small text-uppercase">ID</th>
                                            <th class="text-muted text-small text-uppercase">status</th>
                                            <th class="text-muted text-small text-uppercase">Time</th>
                                            <th class="text-muted text-small text-uppercase">Email</th>
                                            <th class="text-muted text-small text-uppercase">Phone</th>
                                            <th class="text-muted text-small text-uppercase">amount</th>
                                            <th class="text-muted text-small text-uppercase">transaction_id</th>
                                            <th class="text-muted text-small text-uppercase">note</th>
                                            <th class="text-muted text-small text-uppercase">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="tab-pane fade h-100 scroll-out" id="rejected" role="tabpanel">
                

                <div class="row">
                    <div class="col">
                        <div class="page-title-container">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <h1 class="mb-0 pb-0 display-4" id="title">List</h1>
                                    
                                </div>
                                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                                    <button type="button" id="pending-datatable" onclick="pendingFund()" class="btn btn-outline-warning btn-icon btn-icon-start w-100 w-md-auto pending-datatable me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock undefined">
                                            <path d="M10 2v6l4 2"></path>
                                        </svg>
                                        <span>Pending</span>
                                    </button>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="data-table-rows slim">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                        <input class="form-control datatable-search" placeholder="Search" id="search-rejected">
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
                                <table id="datatableRowsAjaxRejected" class="data-table nowrap w-100 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="text-muted text-small text-uppercase">ID</th>
                                            <th class="text-muted text-small text-uppercase">status</th>
                                            <th class="text-muted text-small text-uppercase">Time</th>
                                            <th class="text-muted text-small text-uppercase">Email</th>
                                            <th class="text-muted text-small text-uppercase">Phone</th>
                                            <th class="text-muted text-small text-uppercase">amount</th>
                                            <th class="text-muted text-small text-uppercase">transaction_id</th>
                                            <th class="text-muted text-small text-uppercase">note</th>
                                            <th class="text-muted text-small text-uppercase">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- End of Selection -->
