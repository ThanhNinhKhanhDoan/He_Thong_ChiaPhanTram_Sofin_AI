<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Tag Hiện Đại</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #3498db;
            --primary-dark: #2980b9;
            --accent: #00c6ff;
            --dark: #0c1524;
            --dark-light: #162234;
            --dark-lighter: #1f2d40;
            --text: #f8f9fa;
            --text-muted: #b0b8c1;
            --border: #2a3a51;
            --success: #2ecc71;
            --hover: #217dbb;
            --button-gradient: linear-gradient(135deg, #3498db 0%, #2574a9 100%);
            --card-gradient: linear-gradient(135deg, rgba(22, 34, 52, 0.95) 0%, rgba(12, 21, 36, 0.95) 100%);
        }

        body {
            background-color: var(--dark);
            color: var(--text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background-image: linear-gradient(to bottom, rgba(10, 15, 25, 0.9) 0%, rgba(15, 25, 40, 0.9) 100%);
            background-size: cover;
        }

        .container {
            max-width: 1100px;
            padding: 2rem;
        }

        .card {
            background: var(--card-gradient);
            border-radius: 16px;
            border: 1px solid var(--border);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 
                      0 1px 3px rgba(0, 198, 255, 0.05), 
                      0 1px 2px rgba(0, 198, 255, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .card-header {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.15) 0%, rgba(41, 128, 185, 0.1) 100%);
            border-bottom: 1px solid rgba(42, 58, 81, 0.5);
            padding: 1.5rem;
        }

        .card-header h3 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .card-body {
            padding: 1.75rem;
        }

        .section-title {
            color: var(--text);
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            letter-spacing: 0.5px;
        }

        .section-title i {
            margin-right: 12px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 1.2em;
        }

        .section-heading {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 1.15rem;
            letter-spacing: 0.5px;
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }
        
        .section-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), transparent);
        }
        
        .section-heading.light {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        
        .section-heading.light::after {
            background: linear-gradient(90deg, #ffffff, transparent);
        }

        .form-control, .form-select {
            background-color: rgba(15, 25, 40, 0.6);
            border: 1px solid rgba(42, 58, 81, 0.8);
            color: var(--text);
            border-radius: 12px;
            padding: 14px 18px;
            transition: all 0.3s;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-control::placeholder {
            color: rgba(176, 184, 193, 0.8);
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(31, 45, 64, 0.8);
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25), 
                      inset 0 2px 4px rgba(0, 0, 0, 0.05);
            color: var(--text);
            transform: translateY(-1px);
        }

        .form-select option {
            background-color: var(--dark-light);
            color: var(--text);
        }

        .btn-primary {
            background: var(--button-gradient);
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .btn-primary:hover, .btn-primary:focus {
            background: linear-gradient(135deg, #217dbb 0%, #1f6da8 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(52, 152, 219, 0.4);
        }
        
        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.4);
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-primary:hover::after {
            left: 100%;
        }

        .tag-container {
            margin-top: 1.5rem;
            min-height: 100px;
            max-height: 250px;
            border-radius: 12px;
            background-color: rgba(15, 25, 40, 0.5);
            padding: 1.25rem;
            border: 1px solid rgba(42, 58, 81, 0.7);
            overflow-y: auto;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--dark-light);
        }

        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.15) 0%, rgba(41, 128, 185, 0.1) 100%);
            color: var(--text);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid rgba(52, 152, 219, 0.3);
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            letter-spacing: 0.3px;
        }

        .tag:hover {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.25) 0%, rgba(41, 128, 185, 0.2) 100%);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            border-color: rgba(52, 152, 219, 0.5);
        }
        
        .tag:active {
            transform: translateY(-1px);
        }

        .tag.selected {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.7) 0%, rgba(41, 128, 185, 0.6) 100%);
            border-color: rgba(52, 152, 219, 0.8);
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.3);
        }

        .tag.selected:hover {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.8) 0%, rgba(41, 128, 185, 0.7) 100%);
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.4);
        }

        .separator {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 2rem 0;
            opacity: 0.7;
        }

        .selected-tags-container {
            margin-top: 2rem;
        }

        .no-tags {
            color: var(--text-muted);
            font-style: italic;
            margin: 10px 0;
        }

        .search-box {
            position: relative;
        }

        .search-box i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            opacity: 0.8;
            transition: all 0.3s;
        }
        
        .search-box:focus-within i {
            color: var(--accent);
            opacity: 1;
        }

        .search-input {
            padding-left: 48px;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-light);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(var(--primary), var(--primary-dark));
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(var(--accent), var(--primary));
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(52, 152, 219, 0); }
            100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
        }

        .tag {
            animation: fadeIn 0.3s ease-out;
        }
        
        /* Apply button animation */
        #applyButton {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Hệ Thống Tag</h3>
            </div>
            <div class="card-body">
                <h4 class="section-title">
                    <i class="fas fa-tags"></i> Quản lý Tag
                </h4>

                <div class="row g-3 mb-4">
                    <div class="col-md-5">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" class="form-control search-input" id="tagSearch" placeholder="Tìm kiếm tag...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select" id="categoryFilter">
                            <option value="">Tất cả chuyên mục</option>
                            <option value="technology">Công nghệ</option>
                            <option value="business">Kinh doanh</option>
                            <option value="science">Khoa học</option>
                            <option value="health">Sức khỏe</option>
                            <option value="travel">Du lịch</option>
                            <option value="lifestyle">Phong cách sống</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100" id="resetFilters">
                            <i class="fas fa-sync-alt"></i> Đặt lại
                        </button>
                    </div>
                </div>

                <div class="tag-container">
                    <h5 class="section-heading">Danh sách tag có sẵn</h5>
                    <div class="tag-list" id="availableTags">
                        <!-- Tags will be loaded here -->
                    </div>
                    <div class="no-tags" id="noAvailableTags" style="display: none;">
                        Không tìm thấy tag nào phù hợp với tìm kiếm của bạn.
                    </div>
                </div>

                <div class="separator"></div>

                <div class="selected-tags-container">
                    <h5 class="section-heading light">Tag đã chọn</h5>
                    <div class="tag-container">
                        <div class="tag-list" id="selectedTags">
                            <!-- Selected tags will appear here -->
                        </div>
                        <div class="no-tags" id="noSelectedTags">
                            Chưa có tag nào được chọn.
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button class="btn btn-primary btn-lg" id="applyButton">
                            <i class="fas fa-check-circle me-2"></i>Áp dụng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Sample tags data with categories
            const allTags = [
                { id: 1, name: "JavaScript", category: "technology" },
                { id: 2, name: "React", category: "technology" },
                { id: 3, name: "Vue.js", category: "technology" },
                { id: 4, name: "Angular", category: "technology" },
                { id: 5, name: "Node.js", category: "technology" },
                { id: 6, name: "Python", category: "technology" },
                { id: 7, name: "Marketing", category: "business" },
                { id: 8, name: "SEO", category: "business" },
                { id: 9, name: "Đầu tư", category: "business" },
                { id: 10, name: "Khởi nghiệp", category: "business" },
                { id: 11, name: "Vật lý", category: "science" },
                { id: 12, name: "Sinh học", category: "science" },
                { id: 13, name: "Hóa học", category: "science" },
                { id: 14, name: "Toán học", category: "science" },
                { id: 15, name: "Dinh dưỡng", category: "health" },
                { id: 16, name: "Tập thể dục", category: "health" },
                { id: 17, name: "Sức khỏe tinh thần", category: "health" },
                { id: 18, name: "Giảm cân", category: "health" },
                { id: 19, name: "Châu Á", category: "travel" },
                { id: 20, name: "Châu Âu", category: "travel" },
                { id: 21, name: "Đồ ăn", category: "lifestyle" },
                { id: 22, name: "Thời trang", category: "lifestyle" },
                { id: 23, name: "Làm đẹp", category: "lifestyle" },
                { id: 24, name: "Âm nhạc", category: "lifestyle" }
            ];

            // State variables
            let availableTags = [...allTags];
            let selectedTags = [];

            // Initialize
            renderTags();

            // Event handlers
            $('#tagSearch').on('input', filterTags);
            $('#categoryFilter').on('change', filterTags);
            $('#resetFilters').on('click', resetFilters);
            
            // Xử lý nút áp dụng
            $('#applyButton').on('click', function() {
                if (selectedTags.length > 0) {
                    // Hiển thị thông báo thành công
                    alert('Đã áp dụng ' + selectedTags.length + ' tag: ' + 
                          selectedTags.map(tag => tag.name).join(', '));
                    
                    // Ở đây bạn có thể thêm code để gửi dữ liệu về server
                    console.log('Tags đã chọn:', selectedTags);
                    
                    // Hoặc chuyển hướng đến trang khác với các tag đã chọn
                    // window.location.href = 'page.html?tags=' + selectedTags.map(t => t.id).join(',');
                } else {
                    // Hiển thị thông báo nếu chưa chọn tag nào
                    alert('Vui lòng chọn ít nhất một tag để áp dụng');
                }
            });

            // Hàm chuyển đổi chuỗi có dấu thành không dấu
            function removeAccents(str) {
                return str.normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .replace(/đ/g, 'd').replace(/Đ/g, 'D');
            }

            function filterTags() {
                const searchTerm = $('#tagSearch').val().toLowerCase();
                const searchTermNoAccent = removeAccents(searchTerm);
                const categoryFilter = $('#categoryFilter').val();
                
                availableTags = allTags.filter(tag => {
                    // Exclude selected tags
                    const isNotSelected = !selectedTags.some(selectedTag => selectedTag.id === tag.id);
                    
                    // Apply search filter with accent support
                    const nameNoAccent = removeAccents(tag.name.toLowerCase());
                    const matchesSearch = 
                        tag.name.toLowerCase().includes(searchTerm) || 
                        nameNoAccent.includes(searchTermNoAccent);
                    
                    // Apply category filter
                    const matchesCategory = !categoryFilter || tag.category === categoryFilter;
                    
                    return isNotSelected && matchesSearch && matchesCategory;
                });
                
                renderTags();
            }

            function renderTags() {
                // Render available tags
                const $availableTagsContainer = $('#availableTags');
                $availableTagsContainer.empty();
                
                if (availableTags.length === 0) {
                    $('#noAvailableTags').show();
                } else {
                    $('#noAvailableTags').hide();
                    
                    availableTags.forEach(tag => {
                        const $tag = $(`<div class="tag" data-id="${tag.id}" data-category="${tag.category}">${tag.name}</div>`);
                        $tag.on('click', function() {
                            selectTag(tag.id);
                        });
                        $availableTagsContainer.append($tag);
                    });
                }
                
                // Render selected tags
                const $selectedTagsContainer = $('#selectedTags');
                $selectedTagsContainer.empty();
                
                if (selectedTags.length === 0) {
                    $('#noSelectedTags').show();
                } else {
                    $('#noSelectedTags').hide();
                    
                    selectedTags.forEach(tag => {
                        const $tag = $(`<div class="tag selected" data-id="${tag.id}" data-category="${tag.category}">${tag.name}</div>`);
                        $tag.on('click', function() {
                            unselectTag(tag.id);
                        });
                        $selectedTagsContainer.append($tag);
                    });
                }
            }

            function selectTag(tagId) {
                // Find tag from available tags
                const tagIndex = availableTags.findIndex(tag => tag.id === tagId);
                if (tagIndex !== -1) {
                    // Move tag from available to selected
                    const [tag] = availableTags.splice(tagIndex, 1);
                    selectedTags.push(tag);
                    renderTags();
                }
            }

            function unselectTag(tagId) {
                // Find tag from selected tags
                const tagIndex = selectedTags.findIndex(tag => tag.id === tagId);
                if (tagIndex !== -1) {
                    // Move tag from selected to available
                    const [tag] = selectedTags.splice(tagIndex, 1);
                    availableTags.push(tag);
                    renderTags();
                }
                
                // Re-apply filters
                filterTags();
            }

            function resetFilters() {
                $('#tagSearch').val('');
                $('#categoryFilter').val('');
                
                // Reset to show all unselected tags
                availableTags = allTags.filter(tag => 
                    !selectedTags.some(selectedTag => selectedTag.id === tag.id)
                );
                
                renderTags();
            }
        });
    </script>
</body>
</html>