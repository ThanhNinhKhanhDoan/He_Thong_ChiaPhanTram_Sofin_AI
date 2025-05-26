<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nội Dung Video</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- jQuery Toast CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #0f1729;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
            padding: 30px;
        }
        
        /* Header */
        .page-header {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #384166;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 600;
            position: relative;
            padding-left: 15px;
            color: #ffffff;
        }
        
        .page-title:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #7c5dfa;
            border-radius: 2px;
        }
        
        /* Cards */
        .card {
            background-color: #1a2236;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 25px;
            overflow: hidden;
        }
        
        .card-header {
            background-color: #202940;
            border-bottom: 1px solid #384166;
            padding: 16px 20px;
        }
        
        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ffffff;
        }
        
        .card-title i {
            color: #7c5dfa;
        }
        
        /* Tables */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            color: #ffffff;
            font-size: 14px;
        }
        
        .custom-table thead th {
            background-color: #171f35;
            color: #c9d1e4;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 15px;
            border: none;
            text-align: left;
            white-space: nowrap;
        }
        
        .custom-table tbody tr {
            background-color: #1e2635;
            border-bottom: 1px solid #303a56;
        }
        
        .custom-table tbody tr:hover {
            background-color: #252f42;
        }
        
        .custom-table tbody tr:last-child {
            border-bottom: none;
        }
        
        .custom-table td {
            padding: 15px;
            vertical-align: middle;
            border: none;
        }
        
        /* Badges */
        .badge {
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 13px;
            display: inline-block;
        }
        
        .badge-16-9 {
            background-color: rgba(124, 93, 250, 0.3);
            color: #b4a7fa;
        }
        
        .badge-9-16 {
            background-color: rgba(0, 210, 211, 0.3);
            color: #7deaea;
        }
        
        .badge-counter {
            display: inline-flex;
            align-items: center;
            background-color: #2a3349;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            color: #c9d1e4;
        }
        
        .badge-counter span {
            color: #ffffff;
            font-weight: 600;
            margin-left: 5px;
        }
        
        /* Forms */
        .form-container {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 15px;
            color: #ffffff;
        }
        
        .form-control {
            background-color: #2a3349;
            border: 1px solid #384166;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 15px;
        }
        
        .form-control::placeholder {
            color: #8895b3;
        }
        
        .form-control:focus {
            background-color: #2a3349;
            border-color: #7c5dfa;
            box-shadow: 0 0 0 3px rgba(124, 93, 250, 0.25);
            color: #ffffff;
        }
        
        /* Search */
        .search-box {
            display: flex;
            margin-bottom: 20px;
        }
        
        .search-box .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .search-box .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        /* Buttons */
        .btn {
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 6px;
        }
        
        .btn-primary {
            background-color: #7c5dfa;
            border-color: #7c5dfa;
            color: #ffffff;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: #6c4dea;
            border-color: #6c4dea;
            color: #ffffff;
        }
        
        .btn-dark {
            background-color: #2a3349;
            border-color: #2a3349;
            color: #c9d1e4;
        }
        
        .btn-dark:hover {
            background-color: #303a56;
            border-color: #303a56;
            color: #ffffff;
        }
        
        .btn-outline-primary {
            border-color: #7c5dfa;
            color: #b4a7fa;
        }
        
        .btn-outline-primary:hover {
            background-color: #7c5dfa;
            color: #ffffff;
        }
        
        .btn-outline-danger {
            border-color: #ff5263;
            color: #ff8e99;
        }
        
        .btn-outline-danger:hover {
            background-color: #ff5263;
            color: #ffffff;
        }
        
        .btn-icon {
            width: 32px;
            height: 32px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-group {
            display: flex;
            gap: 5px;
        }
        
        /* Upload buttons */
        .upload-btn {
            background-color: rgba(124, 93, 250, 0.2);
            color: #b4a7fa;
            border: 1px dashed #7c5dfa;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            margin-right: 8px;
        }
        
        .upload-btn:hover {
            background-color: rgba(124, 93, 250, 0.3);
            color: #ffffff;
            text-decoration: none;
        }
        
        .upload-btn.portrait {
            background-color: rgba(0, 210, 211, 0.2);
            color: #7deaea;
            border-color: #00d2d3;
        }
        
        .upload-btn.portrait:hover {
            background-color: rgba(0, 210, 211, 0.3);
            color: #ffffff;
            text-decoration: none;
        }
        
        /* Video counters */
        .video-counters {
            display: flex;
            gap: 10px;
        }
        
        .video-counter {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .video-counter .count {
            font-weight: 600;
            color: #ffffff;
            font-size: 15px;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            padding: 0;
            list-style: none;
            margin: 15px 0;
            justify-content: center;
            gap: 5px;
        }
        
        .pagination .page-item {
            margin: 0;
        }
        
        .pagination .page-link {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #2a3349;
            color: #c9d1e4;
            border: none;
            border-radius: 8px;
            text-decoration: none;
        }
        
        .pagination .page-link:hover {
            background-color: #303a56;
            color: #ffffff;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #7c5dfa;
            color: white;
        }
        
        .pagination .page-item.disabled .page-link {
            background-color: #202940;
            color: #506088;
            cursor: not-allowed;
        }
        
        @media (max-width: 767.98px) {
            body {
                padding: 15px;
            }
            
            .search-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Quản lý Nội Dung Video</h1>
        </div>
        
        <div class="row">
            <!-- Danh sách chuyên mục (bên trái) -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                            <i class="fas fa-folder"></i> Danh sách chuyên mục
                        </h5>
                        <div class="d-flex">
                            <div class="input-group" style="width: 250px;">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <button class="btn btn-dark">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div style="overflow-x: auto;">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th width="40">#</th>
                                    <th>Tên chuyên mục</th>
                                    <th>Số lượng video</th>
                                    <th>Upload Video</th>
                                    <th>Số kho</th>
                                    <th>Ngày tạo</th>
                                    <th width="80">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tin Tức</td>
                                    <td>
                                        <div class="video-counters">
                                            <div class="video-counter">
                                                <span class="badge badge-16-9">16:9</span>
                                                <span class="count">24</span>
                                            </div>
                                            <div class="video-counter">
                                                <span class="badge badge-9-16">9:16</span>
                                                <span class="count">12</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="upload-btn">
                                            <i class="fas fa-upload"></i> Video 16:9
                                        </a>
                                        <a href="#" class="upload-btn portrait">
                                            <i class="fas fa-upload"></i> Video 9:16
                                        </a>
                                    </td>
                                    <td><span class="badge-counter">Kho: <span>2</span></span></td>
                                    <td>01/05/2025</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Giải Trí</td>
                                    <td>
                                        <div class="video-counters">
                                            <div class="video-counter">
                                                <span class="badge badge-16-9">16:9</span>
                                                <span class="count">18</span>
                                            </div>
                                            <div class="video-counter">
                                                <span class="badge badge-9-16">9:16</span>
                                                <span class="count">76</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="upload-btn">
                                            <i class="fas fa-upload"></i> Video 16:9
                                        </a>
                                        <a href="#" class="upload-btn portrait">
                                            <i class="fas fa-upload"></i> Video 9:16
                                        </a>
                                    </td>
                                    <td><span class="badge-counter">Kho: <span>4</span></span></td>
                                    <td>28/04/2025</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Giáo Dục</td>
                                    <td>
                                        <div class="video-counters">
                                            <div class="video-counter">
                                                <span class="badge badge-16-9">16:9</span>
                                                <span class="count">12</span>
                                            </div>
                                            <div class="video-counter">
                                                <span class="badge badge-9-16">9:16</span>
                                                <span class="count">0</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="upload-btn">
                                            <i class="fas fa-upload"></i> Video 16:9
                                        </a>
                                        <a href="#" class="upload-btn portrait">
                                            <i class="fas fa-upload"></i> Video 9:16
                                        </a>
                                    </td>
                                    <td><span class="badge-counter">Kho: <span>1</span></span></td>
                                    <td>05/05/2025</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Thể Thao</td>
                                    <td>
                                        <div class="video-counters">
                                            <div class="video-counter">
                                                <span class="badge badge-16-9">16:9</span>
                                                <span class="count">0</span>
                                            </div>
                                            <div class="video-counter">
                                                <span class="badge badge-9-16">9:16</span>
                                                <span class="count">0</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="upload-btn">
                                            <i class="fas fa-upload"></i> Video 16:9
                                        </a>
                                        <a href="#" class="upload-btn portrait">
                                            <i class="fas fa-upload"></i> Video 9:16
                                        </a>
                                    </td>
                                    <td><span class="badge-counter">Kho: <span>0</span></span></td>
                                    <td>06/05/2025</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-3">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Tạo chuyên mục (bên phải) -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <i class="fas fa-plus-circle"></i> Tạo chuyên mục mới
                        </h5>
                    </div>
                    <div class="form-container">
                        <form id="createCategoryForm">
                            <div class="form-group">
                                <label for="categoryName" class="form-label">Tên chuyên mục <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="categoryName" required placeholder="Nhập tên chuyên mục">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-save"></i> Lưu chuyên mục
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Toast Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Save category button
            $('#createCategoryForm').on('submit', function(e) {
                e.preventDefault();
                
                if ($('#categoryName').val().trim() === '') {
                    $.toast({
                        text: "Vui lòng nhập tên chuyên mục",
                        icon: "error",
                        position: "top-right",
                        hideAfter: 3000,
                        stack: 5
                    }); 
                    return;
                }
                
                $.toast({
                    text: "Đã tạo chuyên mục thành công",
                    icon: "success",
                    position: "top-right",
                    hideAfter: 3000,
                    stack: 5
                });
                // Reset form
                $(this)[0].reset();
            });
            
            // Delete button
            $('.btn-outline-danger').click(function() {
                $.toast({
                    text: "Không tìm thấy file giọng đọc",
                    icon: "error",
                    position: "top-right",
                    hideAfter: 3000,
                    stack: 5
                });
            });
        });
    </script>
</body>
</html>