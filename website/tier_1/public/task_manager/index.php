<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager - Minimal Dark</title>
    
    <!-- Import thư viện jQuery từ CDN để xử lý DOM và events -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Import Font Awesome để sử dụng icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Import Google Fonts - Inter là font hiện đại, dễ đọc -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* CSS VARIABLES - Định nghĩa các biến màu sắc để dễ quản lý theme */
        :root {
            /* Màu nền chính - tầng background từ tối đến sáng */
            --bg-primary: #0f1419;      /* Nền chính - tối nhất */
            --bg-secondary: #1a2027;    /* Nền thứ cấp - cards, sections */
            --bg-tertiary: #242b36;     /* Nền thứ ba - inputs, buttons */
            --bg-card: #2a3441;         /* Nền card hover */
            --bg-hover: #3a4553;        /* Màu hover states */
            
            /* Màu text với các mức độ contrast khác nhau */
            --text-primary: #e8eaed;    /* Text chính - sáng nhất */
            --text-secondary: #9aa0a6;  /* Text phụ - vừa phải */
            --text-muted: #5f6368;      /* Text mờ nhất - ít quan trọng */
            
            /* Màu accent - tạo điểm nhấn và phân biệt chức năng */
            --accent-blue: #4285f4;     /* Xanh dương - primary actions */
            --accent-green: #34a853;    /* Xanh lá - success, completed */
            --accent-orange: #fbbc04;   /* Cam - warning, pending */
            --accent-red: #ea4335;      /* Đỏ - danger, high priority */
            --accent-purple: #9c27b0;   /* Tím - decorative */
            
            /* Màu border với các mức độ tương phản */
            --border-color: #3c4043;    /* Border bình thường */
            --border-hover: #5f6368;    /* Border khi hover */
            
            /* Shadow effects - tạo chiều sâu */
            --shadow-soft: 0 2px 8px rgba(0, 0, 0, 0.2);     /* Shadow nhẹ */
            --shadow-medium: 0 4px 16px rgba(0, 0, 0, 0.3);  /* Shadow trung bình */
            --shadow-strong: 0 8px 32px rgba(0, 0, 0, 0.4);  /* Shadow mạnh */
            
            /* Border radius - độ bo góc thống nhất */
            --radius-sm: 8px;           /* Góc nhỏ - buttons, inputs */
            --radius-md: 12px;          /* Góc trung - cards */
            --radius-lg: 16px;          /* Góc lớn - sections */
            --radius-xl: 20px;          /* Góc rất lớn - main containers */
        }

        /* RESET CSS - Xóa margin, padding mặc định của browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;  /* Tính toán size bao gồm padding và border */
        }

        /* BODY - Thiết lập layout và font chính */
        body {
            background: var(--bg-primary);                /* Nền tối chính */
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;  /* Font stack hiện đại */
            color: var(--text-primary);                   /* Màu text chính */
            min-height: 100vh;                           /* Chiều cao tối thiểu bằng viewport */
            padding: 20px;                               /* Padding xung quanh */
            line-height: 1.6;                           /* Khoảng cách dòng dễ đọc */
        }

        /* CONTAINER - Wrapper chính chứa toàn bộ nội dung */
        .container {
            max-width: 1400px;         /* Giới hạn độ rộng tối đa */
            margin: 0 auto;            /* Căn giữa horizontal */
        }

        /* HEADER - Phần đầu trang chứa title và description */
        .header {
            background: var(--bg-secondary);      /* Nền thứ cấp */
            border: 1px solid var(--border-color); /* Border tinh tế */
            border-radius: var(--radius-xl);      /* Bo góc lớn */
            padding: 40px;                        /* Padding rộng rãi */
            text-align: center;                   /* Căn giữa text */
            margin-bottom: 30px;                  /* Khoảng cách với element tiếp theo */
            box-shadow: var(--shadow-soft);       /* Shadow nhẹ */
            transition: all 0.3s ease;           /* Animation mượt cho hover */
        }

        /* Header hover effect - tăng shadow và border khi hover */
        .header:hover {
            box-shadow: var(--shadow-medium);
            border-color: var(--border-hover);
        }

        /* Header title - styling cho tiêu đề chính */
        .header h1 {
            font-size: 2.5em;                    /* Size lớn */
            font-weight: 600;                    /* Độ đậm vừa phải */
            margin-bottom: 12px;                 /* Khoảng cách với subtitle */
            color: var(--text-primary);         /* Màu text chính */
            display: flex;                       /* Flexbox để align icon và text */
            align-items: center;                 /* Căn giữa vertical */
            justify-content: center;             /* Căn giữa horizontal */
            gap: 15px;                          /* Khoảng cách giữa icon và text */
        }

        /* Icon trong header - màu accent để tạo điểm nhấn */
        .header i {
            color: var(--accent-blue);
        }

        /* Header subtitle - mô tả phụ */
        .header p {
            font-size: 1.1em;                   /* Size vừa phải */
            color: var(--text-secondary);       /* Màu nhạt hơn title */
            font-weight: 400;                   /* Độ đậm bình thường */
        }

        /* STATS GRID - Layout grid cho các thẻ thống kê */
        .stats-grid {
            display: grid;                                          /* Sử dụng CSS Grid */
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive columns */
            gap: 20px;                                             /* Khoảng cách giữa các items */
            margin-bottom: 30px;                                   /* Khoảng cách với section tiếp theo */
        }

        /* STAT CARD - Thẻ hiển thị từng loại thống kê */
        .stat-card {
            background: var(--bg-secondary);     /* Nền thứ cấp */
            border: 1px solid var(--border-color); /* Border nhẹ */
            border-radius: var(--radius-lg);     /* Bo góc vừa */
            padding: 30px;                       /* Padding rộng */
            text-align: center;                  /* Căn giữa nội dung */
            box-shadow: var(--shadow-soft);      /* Shadow nhẹ */
            transition: all 0.3s ease;          /* Animation mượt */
            position: relative;                  /* Để sử dụng pseudo elements */
            overflow: hidden;                    /* Ẩn các phần tử tràn ra ngoài */
        }

        /* Pseudo element tạo thanh màu ở đầu stat card */
        .stat-card::before {
            content: '';                         /* Tạo element rỗng */
            position: absolute;                  /* Định vị tuyệt đối */
            top: 0; left: 0; right: 0;          /* Kéo dài toàn bộ chiều rộng ở trên */
            height: 3px;                        /* Chiều cao thanh màu */
            background: var(--accent-blue);     /* Màu mặc định */
            transform: scaleX(0);               /* Ẩn ban đầu */
            transition: transform 0.3s ease;    /* Animation cho thanh màu */
        }

        /* Hover effects cho stat cards */
        .stat-card:hover {
            transform: translateY(-2px);        /* Nâng lên một chút */
            box-shadow: var(--shadow-medium);   /* Tăng shadow */
            border-color: var(--border-hover);  /* Đổi màu border */
        }

        /* Hiện thanh màu khi hover */
        .stat-card:hover::before {
            transform: scaleX(1);               /* Hiện thanh màu */
        }

        /* Màu thanh cho từng loại stat card */
        .stat-card.completed::before { background: var(--accent-green); }
        .stat-card.pending::before { background: var(--accent-orange); }
        .stat-card.high::before { background: var(--accent-red); }

        /* Icon trong stat card */
        .stat-icon {
            font-size: 2.5em;                  /* Size lớn */
            margin-bottom: 15px;                /* Khoảng cách với số */
            color: var(--accent-blue);          /* Màu mặc định */
        }

        /* Màu icon cho từng loại stat */
        .stat-card.completed .stat-icon { color: var(--accent-green); }
        .stat-card.pending .stat-icon { color: var(--accent-orange); }
        .stat-card.high .stat-icon { color: var(--accent-red); }

        /* Số thống kê */
        .stat-number {
            font-size: 2.5em;                  /* Size rất lớn */
            font-weight: 700;                  /* Rất đậm */
            color: var(--text-primary);        /* Màu chính */
            margin-bottom: 8px;                /* Khoảng cách với label */
        }

        /* Label mô tả thống kê */
        .stat-label {
            color: var(--text-secondary);      /* Màu nhạt */
            font-size: 0.9em;                 /* Size nhỏ */
            font-weight: 500;                 /* Hơi đậm */
            text-transform: uppercase;         /* Chữ hoa */
            letter-spacing: 0.5px;            /* Giãn chữ */
        }

        /* MAIN CONTENT - Layout chính gồm 2 cột */
        .main-content {
            display: grid;                      /* CSS Grid layout */
            grid-template-columns: 380px 1fr;  /* Cột 1 cố định 380px, cột 2 co giãn */
            gap: 30px;                         /* Khoảng cách giữa 2 cột */
            align-items: start;                /* Align từ trên xuống */
        }

        /* ADD TASK SECTION - Form thêm công việc mới */
        .add-task-section {
            background: var(--bg-secondary);   /* Nền thứ cấp */
            border: 1px solid var(--border-color); /* Border */
            border-radius: var(--radius-lg);   /* Bo góc */
            padding: 30px;                     /* Padding */
            box-shadow: var(--shadow-soft);    /* Shadow */
            position: sticky;                  /* Sticky position để luôn hiện khi scroll */
            top: 20px;                        /* Khoảng cách từ top khi sticky */
            transition: all 0.3s ease;        /* Animation */
        }

        /* Hover effect cho form section */
        .add-task-section:hover {
            box-shadow: var(--shadow-medium);
            border-color: var(--border-hover);
        }

        /* Title của từng section */
        .section-title {
            color: var(--text-primary);        /* Màu chính */
            font-size: 1.4em;                 /* Size vừa */
            font-weight: 600;                 /* Đậm */
            margin-bottom: 25px;              /* Khoảng cách với nội dung */
            display: flex;                    /* Flexbox */
            align-items: center;              /* Căn giữa vertical */
            gap: 12px;                       /* Khoảng cách icon và text */
        }

        /* Icon trong section title */
        .section-title i {
            color: var(--accent-green);       /* Màu xanh lá */
        }

        /* FORM STYLING - Styling cho form elements */
        
        /* Form group - container cho mỗi input */
        .form-group {
            margin-bottom: 20px;              /* Khoảng cách giữa các inputs */
        }

        /* Labels của form */
        .form-group label {
            display: block;                   /* Hiển thị trên một dòng */
            margin-bottom: 8px;               /* Khoảng cách với input */
            color: var(--text-secondary);     /* Màu nhạt */
            font-weight: 500;                /* Hơi đậm */
            font-size: 0.9em;                /* Size nhỏ */
        }

        /* Styling chung cho tất cả form controls */
        .form-control {
            width: 100%;                      /* Chiếm toàn bộ width */
            padding: 12px 16px;               /* Padding trong */
            background: var(--bg-tertiary);   /* Nền tối */
            border: 1px solid var(--border-color); /* Border */
            border-radius: var(--radius-sm);  /* Bo góc nhỏ */
            color: var(--text-primary);       /* Màu text */
            font-size: 14px;                 /* Size text */
            transition: all 0.3s ease;       /* Animation */
            font-family: inherit;            /* Kế thừa font từ parent */
        }

        /* Placeholder text styling */
        .form-control::placeholder {
            color: var(--text-muted);         /* Màu mờ */
        }

        /* Focus state - khi click vào input */
        .form-control:focus {
            outline: none;                    /* Bỏ outline mặc định */
            border-color: var(--accent-blue); /* Đổi màu border */
            background: var(--bg-card);       /* Sáng nền lên một chút */
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.1); /* Glow effect */
        }

        /* Styling cho dropdown options */
        .form-control option {
            background: var(--bg-tertiary);   /* Nền tối */
            color: var(--text-primary);       /* Text sáng */
        }

        /* Textarea riêng biệt */
        textarea.form-control {
            resize: vertical;                 /* Chỉ cho phép resize theo chiều dọc */
            min-height: 80px;                /* Chiều cao tối thiểu */
        }

        /* BUTTON STYLING - Styling cho tất cả buttons */
        .btn {
            background: var(--accent-blue);   /* Nền xanh dương */
            color: white;                     /* Text trắng */
            padding: 12px 24px;               /* Padding */
            border: none;                     /* Bỏ border mặc định */
            border-radius: var(--radius-sm);  /* Bo góc */
            cursor: pointer;                  /* Con trỏ pointer */
            font-size: 14px;                 /* Size text */
            font-weight: 500;                /* Hơi đậm */
            transition: all 0.3s ease;       /* Animation */
            display: inline-flex;            /* Flexbox inline */
            align-items: center;             /* Căn giữa icon và text */
            gap: 8px;                       /* Khoảng cách icon và text */
            font-family: inherit;           /* Kế thừa font */
            text-decoration: none;          /* Bỏ underline nếu là link */
        }

        /* Button hover effects */
        .btn:hover {
            transform: translateY(-1px);     /* Nâng lên */
            box-shadow: var(--shadow-soft);  /* Thêm shadow */
            opacity: 0.9;                   /* Giảm opacity một chút */
        }

        /* Button active state - khi đang click */
        .btn:active {
            transform: translateY(0);        /* Về vị trí ban đầu */
        }

        /* Các biến thể màu của button */
        .btn-success { background: var(--accent-green); }   /* Xanh lá */
        .btn-danger { background: var(--accent-red); }      /* Đỏ */
        .btn-warning { background: var(--accent-orange); }  /* Cam */
        .btn-secondary { 
            background: var(--bg-hover); 
            color: var(--text-secondary); 
        }

        /* TASKS SECTION - Phần hiển thị danh sách công việc */
        .tasks-section {
            background: var(--bg-secondary);   /* Nền */
            border: 1px solid var(--border-color); /* Border */
            border-radius: var(--radius-lg);   /* Bo góc */
            box-shadow: var(--shadow-soft);    /* Shadow */
            overflow: hidden;                  /* Ẩn nội dung tràn */
            transition: all 0.3s ease;        /* Animation */
        }

        /* Tasks section hover */
        .tasks-section:hover {
            box-shadow: var(--shadow-medium);
            border-color: var(--border-hover);
        }

        /* Header của tasks section */
        .tasks-header {
            background: var(--bg-tertiary);    /* Nền tối hơn một chút */
            padding: 20px 25px;                /* Padding */
            border-bottom: 1px solid var(--border-color); /* Border dưới */
            display: flex;                     /* Flexbox layout */
            justify-content: space-between;    /* Đẩy title và controls ra 2 đầu */
            align-items: center;               /* Căn giữa vertical */
            flex-wrap: wrap;                   /* Cho phép wrap xuống dòng */
            gap: 15px;                        /* Khoảng cách khi wrap */
        }

        /* Title trong tasks header */
        .tasks-header h2 {
            color: var(--text-primary);       /* Màu chính */
            font-size: 1.3em;                /* Size */
            font-weight: 600;                /* Đậm */
            display: flex;                   /* Flexbox */
            align-items: center;             /* Căn giữa */
            gap: 10px;                      /* Khoảng cách icon */
        }

        /* Icon trong tasks header */
        .tasks-header i {
            color: var(--accent-purple);      /* Màu tím */
        }

        /* Container chứa các nút filter */
        .filter-controls {
            display: flex;                    /* Flexbox layout */
            gap: 8px;                        /* Khoảng cách giữa các nút */
            flex-wrap: wrap;                 /* Cho phép wrap */
        }

        /* Styling cho từng nút filter */
        .filter-btn {
            background: var(--bg-hover);      /* Nền */
            color: var(--text-secondary);     /* Màu text */
            border: 1px solid var(--border-color); /* Border */
            padding: 8px 16px;                /* Padding */
            border-radius: var(--radius-sm);  /* Bo góc */
            cursor: pointer;                  /* Con trỏ pointer */
            transition: all 0.3s ease;       /* Animation */
            font-size: 13px;                 /* Size nhỏ */
            font-weight: 500;                /* Hơi đậm */
            font-family: inherit;            /* Kế thừa font */
        }

        /* Filter button hover */
        .filter-btn:hover {
            background: var(--bg-card);       /* Sáng nền */
            color: var(--text-primary);       /* Sáng text */
            border-color: var(--border-hover); /* Đổi màu border */
        }

        /* Filter button active - nút đang được chọn */
        .filter-btn.active {
            background: var(--accent-blue);   /* Nền xanh */
            color: white;                     /* Text trắng */
            border-color: var(--accent-blue); /* Border xanh */
        }

        /* TASKS LIST - Container chứa danh sách công việc */
        .tasks-list {
            padding: 25px;                    /* Padding */
            max-height: 600px;                /* Chiều cao tối đa */
            overflow-y: auto;                 /* Scroll dọc khi quá cao */
        }

        /* CUSTOM SCROLLBAR - Tùy chỉnh thanh scroll */
        .tasks-list::-webkit-scrollbar {
            width: 6px;                       /* Độ rộng scrollbar */
        }

        .tasks-list::-webkit-scrollbar-track {
            background: var(--bg-tertiary);   /* Nền track */
        }

        .tasks-list::-webkit-scrollbar-thumb {
            background: var(--border-color);  /* Màu thumb */
            border-radius: 3px;               /* Bo góc thumb */
        }

        .tasks-list::-webkit-scrollbar-thumb:hover {
            background: var(--border-hover);  /* Màu khi hover */
        }

        /* TASK ITEM - Styling cho từng công việc */
        .task-item {
            background: var(--bg-tertiary);   /* Nền */
            border: 1px solid var(--border-color); /* Border */
            border-radius: var(--radius-md);   /* Bo góc */
            padding: 20px;                    /* Padding */
            margin-bottom: 15px;              /* Khoảng cách với item tiếp theo */
            transition: all 0.3s ease;       /* Animation */
            position: relative;               /* Để sử dụng pseudo elements */
            border-left: 3px solid var(--accent-blue); /* Thanh màu bên trái */
        }

        /* Task item hover effects */
        .task-item:hover {
            background: var(--bg-card);       /* Sáng nền */
            border-color: var(--border-hover); /* Đổi màu border */
            transform: translateX(4px);       /* Trượt sang phải một chút */
            box-shadow: var(--shadow-soft);   /* Thêm shadow */
        }

        /* Styling cho task đã hoàn thành */
        .task-item.completed {
            opacity: 0.75;                   /* Giảm opacity */
            border-left-color: var(--accent-green); /* Thanh xanh lá */
        }

        /* Màu thanh bên trái theo mức độ ưu tiên */
        .task-item.high-priority { border-left-color: var(--accent-red); }
        .task-item.medium-priority { border-left-color: var(--accent-orange); }
        .task-item.low-priority { border-left-color: var(--text-muted); }

        /* TASK CONTENT STYLING */
        
        /* Tiêu đề công việc */
        .task-title {
            font-size: 1.1em;                /* Size */
            font-weight: 600;                /* Đậm */
            color: var(--text-primary);       /* Màu chính */
            margin-bottom: 8px;               /* Khoảng cách */
            line-height: 1.4;                /* Line height */
        }

        /* Tiêu đề khi task completed */
        .task-title.completed {
            text-decoration: line-through;    /* Gạch ngang */
            color: var(--text-secondary);     /* Màu nhạt */
        }

        /* Meta information - thông tin phụ của task */
        .task-meta {
            display: flex;                    /* Flexbox */
            gap: 15px;                       /* Khoảng cách giữa các items */
            font-size: 0.85em;               /* Size nhỏ */
            color: var(--text-muted);         /* Màu mờ */
            margin-bottom: 12px;              /* Khoảng cách */
            flex-wrap: wrap;                 /* Cho phép wrap */
        }

        /* Từng item trong meta */
        .task-meta span {
            display: flex;                   /* Flexbox */
            align-items: center;             /* Căn giữa */
            gap: 5px;                       /* Khoảng cách icon và text */
        }

        /* Mô tả công việc */
        .task-description {
            color: var(--text-secondary);    /* Màu nhạt */
            line-height: 1.5;                /* Line height dễ đọc */
            margin-bottom: 15px;              /* Khoảng cách */
            font-size: 0.9em;                /* Size nhỏ */
        }

        /* Container chứa các nút action */
        .task-actions {
            display: flex;                    /* Flexbox */
            gap: 8px;                        /* Khoảng cách */
            flex-wrap: wrap;                 /* Cho phép wrap */
        }

        /* Buttons trong task actions - size nhỏ hơn */
        .task-actions .btn {
            padding: 6px 12px;                /* Padding nhỏ */
            font-size: 12px;                 /* Font nhỏ */
            border-radius: 6px;              /* Bo góc nhỏ */
        }

        /* PRIORITY BADGES - Thẻ hiển thị mức độ ưu tiên */
        .priority-badge {
            display: inline-flex;            /* Inline flexbox */
            align-items: center;             /* Căn giữa */
            padding: 4px 8px;                /* Padding nhỏ */
            border-radius: 12px;             /* Bo góc tròn */
            font-size: 0.75em;               /* Font nhỏ */
            font-weight: 500;                /* Hơi đậm */
            text-transform: uppercase;        /* Chữ hoa */
            letter-spacing: 0.5px;           /* Giãn chữ */
            gap: 4px;                       /* Khoảng cách */
        }

        /* Màu sắc cho từng mức độ ưu tiên */
        .priority-high {
            background: rgba(234, 67, 53, 0.15);     /* Nền đỏ nhạt */
            color: var(--accent-red);                /* Text đỏ */
            border: 1px solid rgba(234, 67, 53, 0.3); /* Border đỏ */
        }

        .priority-medium {
            background: rgba(251, 188, 4, 0.15);     /* Nền cam nhạt */
            color: var(--accent-orange);             /* Text cam */
            border: 1px solid rgba(251, 188, 4, 0.3); /* Border cam */
        }

        .priority-low {
            background: rgba(95, 99, 104, 0.15);     /* Nền xám nhạt */
            color: var(--text-muted);                /* Text xám */
            border: 1px solid rgba(95, 99, 104, 0.3); /* Border xám */
        }

        /* STATUS BADGES - Thẻ hiển thị trạng thái */
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.75em;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            gap: 4px;
        }

        /* Màu sắc cho trạng thái */
        .status-pending {
            background: rgba(66, 133, 244, 0.15);    /* Nền xanh nhạt */
            color: var(--accent-blue);               /* Text xanh */
            border: 1px solid rgba(66, 133, 244, 0.3); /* Border xanh */
        }

        .status-completed {
            background: rgba(52, 168, 83, 0.15);     /* Nền xanh lá nhạt */
            color: var(--accent-green);              /* Text xanh lá */
            border: 1px solid rgba(52, 168, 83, 0.3); /* Border xanh lá */
        }

        /* EMPTY STATE - Hiển thị khi không có dữ liệu */
        .empty-state {
            text-align: center;              /* Căn giữa */
            padding: 50px 20px;              /* Padding lớn */
            color: var(--text-muted);        /* Màu mờ */
        }

        .empty-state i {
            font-size: 4em;                 /* Icon lớn */
            margin-bottom: 20px;             /* Khoảng cách */
            color: var(--text-muted);        /* Màu mờ */
            opacity: 0.5;                   /* Trong suốt */
        }

        .empty-state h3 {
            color: var(--text-secondary);    /* Màu nhạt */
            font-size: 1.3em;               /* Size lớn */
            margin-bottom: 10px;             /* Khoảng cách */
            font-weight: 500;               /* Hơi đậm */
        }

        /* NOTIFICATION - Thông báo popup */
        .notification {
            position: fixed;                 /* Vị trí cố định */
            top: 20px; right: 20px;         /* Góc phải trên */
            background: var(--bg-card);      /* Nền */
            color: var(--text-primary);      /* Màu text */
            padding: 12px 20px;              /* Padding */
            border-radius: var(--radius-sm); /* Bo góc */
            box-shadow: var(--shadow-medium); /* Shadow */
            z-index: 1000;                   /* Layer cao nhất */
            font-weight: 500;                /* Hơi đậm */
            font-size: 14px;                 /* Size */
            transform: translateX(350px);     /* Ẩn bên ngoài ban đầu */
            transition: all 0.3s ease;       /* Animation */
            border: 1px solid var(--border-color); /* Border */
            max-width: 300px;                /* Độ rộng tối đa */
        }

        /* Các loại notification với màu border khác nhau */
        .notification.success { border-left: 4px solid var(--accent-green); }
        .notification.warning { border-left: 4px solid var(--accent-orange); }
        .notification.info { border-left: 4px solid var(--accent-blue); }

        /* ANIMATIONS - Các hiệu ứng chuyển động */
        
        /* Fade in animation cho các elements mới */
        .fade-in {
            animation: fadeInUp 0.4s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;                  /* Bắt đầu trong suốt */
                transform: translateY(20px);  /* Bắt đầu ở dưới */
            }
            to {
                opacity: 1;                  /* Kết thúc hiện rõ */
                transform: translateY(0);     /* Kết thúc ở vị trí ban đầu */
            }
        }

        /* RESPONSIVE DESIGN - Tối ưu cho các màn hình khác nhau */
        
        /* Tablet landscape và desktop nhỏ */
        @media (max-width: 1200px) {
            .main-content {
                grid-template-columns: 350px 1fr; /* Giảm width cột trái */
            }
        }

        /* Tablet portrait */
        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;     /* Chuyển thành 1 cột */
            }
            
            .add-task-section {
                position: static;               /* Bỏ sticky */
                order: 2;                      /* Đặt xuống dưới */
            }
            
            .tasks-section {
                order: 1;                      /* Đặt lên trên */
            }
        }

        /* Mobile landscape và tablet nhỏ */
        @media (max-width: 768px) {
            body {
                padding: 15px;                 /* Giảm padding */
            }
            
            .header {
                padding: 30px 20px;            /* Giảm padding header */
            }
            
            .header h1 {
                font-size: 2em;               /* Giảm size title */
                flex-direction: column;        /* Xếp icon và text theo cột */
                gap: 10px;                    /* Giảm gap */
            }
            
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Giảm min-width */
                gap: 15px;                    /* Giảm gap */
            }
            
            .stat-card {
                padding: 20px;                /* Giảm padding */
            }
            
            .tasks-header {
                flex-direction: column;        /* Xếp theo cột */
                align-items: stretch;          /* Kéo dài full width */
            }
            
            .filter-controls {
                justify-content: center;       /* Căn giữa các nút filter */
            }
            
            .tasks-list {
                max-height: 500px;            /* Giảm chiều cao */
            }
        }

        /* Mobile portrait */
        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;   /* 1 cột duy nhất */
            }
            
            .task-meta {
                flex-direction: column;        /* Xếp meta info theo cột */
                gap: 8px;                     /* Giảm gap */
            }
            
            .task-actions {
                justify-content: center;       /* Căn giữa các nút */
            }
        }
    </style>
</head>
<body>
    <!-- MAIN CONTAINER - Chứa toàn bộ nội dung -->
    <div class="container">
        
        <!-- HEADER SECTION - Phần đầu trang -->
        <div class="header">
            <h1>
                <!-- Icon clipboard-check để tượng trưng cho task management -->
                <i class="fas fa-clipboard-check"></i> 
                Task Manager
            </h1>
            <p>Quản lý công việc hiệu quả với giao diện tối giản</p>
        </div>

        <!-- STATISTICS SECTION - Phần thống kê tổng quan -->
        <div class="stats-grid">
            
            <!-- Thống kê tổng số công việc -->
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-tasks"></i></div>
                <div class="stat-number" id="totalTasks">0</div>
                <div class="stat-label">Tổng công việc</div>
            </div>
            
            <!-- Thống kê công việc đã hoàn thành -->
            <div class="stat-card completed">
                <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
                <div class="stat-number" id="completedTasks">0</div>
                <div class="stat-label">Đã hoàn thành</div>
            </div>
            
            <!-- Thống kê công việc đang thực hiện -->
            <div class="stat-card pending">
                <div class="stat-icon"><i class="fas fa-clock"></i></div>
                <div class="stat-number" id="pendingTasks">0</div>
                <div class="stat-label">Đang thực hiện</div>
            </div>
            
            <!-- Thống kê công việc ưu tiên cao -->
            <div class="stat-card high">
                <div class="stat-icon"><i class="fas fa-exclamation-triangle"></i></div>
                <div class="stat-number" id="highPriorityTasks">0</div>
                <div class="stat-label">Ưu tiên cao</div>
            </div>
            
        </div>

        <!-- MAIN CONTENT - Nội dung chính gồm 2 cột -->
        <div class="main-content">
            
            <!-- LEFT COLUMN - Form thêm công việc mới -->
            <div class="add-task-section">
                <h2 class="section-title">
                    <i class="fas fa-plus-circle"></i> 
                    Thêm công việc mới
                </h2>
                
                <!-- FORM - Form nhập thông tin công việc -->
                <form id="taskForm">
                    
                    <!-- Input tiêu đề công việc -->
                    <div class="form-group">
                        <label for="taskTitle">Tiêu đề công việc</label>
                        <input type="text" id="taskTitle" class="form-control" 
                               placeholder="Nhập tiêu đề..." required>
                    </div>
                    
                    <!-- Textarea mô tả công việc -->
                    <div class="form-group">
                        <label for="taskDescription">Mô tả công việc</label>
                        <textarea id="taskDescription" class="form-control" 
                                  placeholder="Mô tả chi tiết..."></textarea>
                    </div>
                    
                    <!-- Dropdown chọn mức độ ưu tiên -->
                    <div class="form-group">
                        <label for="taskPriority">Mức độ ưu tiên</label>
                        <select id="taskPriority" class="form-control">
                            <option value="low">Thấp</option>
                            <option value="medium" selected>Trung bình</option>
                            <option value="high">Cao</option>
                        </select>
                    </div>
                    
                    <!-- Input chọn thời gian deadline -->
                    <div class="form-group">
                        <label for="taskDeadline">Hạn hoàn thành</label>
                        <input type="datetime-local" id="taskDeadline" class="form-control">
                    </div>
                    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> 
                        Thêm công việc
                    </button>
                    
                </form>
            </div>

            <!-- RIGHT COLUMN - Danh sách công việc -->
            <div class="tasks-section">
                
                <!-- Header của tasks section -->
                <div class="tasks-header">
                    <h2>
                        <i class="fas fa-list"></i> 
                        Danh sách công việc
                    </h2>
                    
                    <!-- Các nút lọc công việc -->
                    <div class="filter-controls">
                        <!-- Các nút lọc công việc theo trạng thái và mức độ ưu tiên -->
                        <button class="filter-btn active" data-filter="all">Tất cả</button>
                        <button class="filter-btn" data-filter="pending">Đang làm</button>
                        <button class="filter-btn" data-filter="completed">Hoàn thành</button>
                        <button class="filter-btn" data-filter="high">Ưu tiên cao</button>
                        <button class="filter-btn" data-filter="medium">Ưu tiên TB</button>
                        <button class="filter-btn" data-filter="low">Ưu tiên thấp</button>
                    </div>
                </div>
                
                <!-- Container chứa danh sách công việc -->
                <!-- Nội dung sẽ được generate bằng JavaScript -->
                <div class="tasks-list" id="tasksList">
                    <div class="empty-state">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Chưa có công việc nào</h3>
                        <p>Hãy thêm công việc đầu tiên để bắt đầu!</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>