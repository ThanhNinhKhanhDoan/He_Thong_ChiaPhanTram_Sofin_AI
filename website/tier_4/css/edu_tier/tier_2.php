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