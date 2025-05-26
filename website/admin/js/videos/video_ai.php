
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
            { id: 24, name: "Âm nhạc", category: "lifestyle" },
            { id: 25, name: "JavaScript", category: "technology" },
            { id: 26, name: "React", category: "technology" },
            { id: 27, name: "Vue.js", category: "technology" },
            { id: 28, name: "Angular", category: "technology" },
            { id: 29, name: "Node.js", category: "technology" },
            { id: 30, name: "Python", category: "technology" },
            { id: 31, name: "Marketing", category: "business" },
            { id: 32, name: "SEO", category: "business" },
            { id: 33, name: "Đầu tư", category: "business" },
            { id: 34, name: "Khởi nghiệp", category: "business" },
            { id: 35, name: "Vật lý", category: "science" },
            { id: 36, name: "Sinh học", category: "science" },
            { id: 37, name: "Hóa học", category: "science" },
            { id: 38, name: "Toán học", category: "science" },
            { id: 39, name: "Dinh dưỡng", category: "health" },
            { id: 40, name: "Tập thể dục", category: "health" },
            { id: 41, name: "Sức khỏe tinh thần", category: "health" },
            { id: 42, name: "Giảm cân", category: "health" },
            { id: 43, name: "Châu Á", category: "travel" },
            { id: 44, name: "Châu Âu", category: "travel" },
            { id: 45, name: "Đồ ăn", category: "lifestyle" },
            { id: 46, name: "Thời trang", category: "lifestyle" },
            { id: 47, name: "Làm đẹp", category: "lifestyle" },
            { id: 48, name: "Âm nhạc", category: "lifestyle" },
            { id: 49, name: "JavaScript", category: "technology" },
            { id: 50, name: "React", category: "technology" },
            { id: 51, name: "Vue.js", category: "technology" },
            { id: 52, name: "Angular", category: "technology" },
            { id: 53, name: "Node.js", category: "technology" },
            { id: 54, name: "Python", category: "technology" },
            { id: 55, name: "Marketing", category: "business" },
            { id: 56, name: "SEO", category: "business" },
            { id: 57, name: "Đầu tư", category: "business" },
            { id: 58, name: "Khởi nghiệp", category: "business" },
            { id: 59, name: "Vật lý", category: "science" },
            { id: 60, name: "Sinh học", category: "science" },
            { id: 61, name: "Hóa học", category: "science" },
            { id: 62, name: "Toán học", category: "science" },
            { id: 63, name: "Dinh dưỡng", category: "health" },
            { id: 64, name: "Tập thể dục", category: "health" },
            { id: 65, name: "Sức khỏe tinh thần", category: "health" },
            { id: 66, name: "Giảm cân", category: "health" },
            { id: 67, name: "Châu Á", category: "travel" },
            { id: 68, name: "Châu Âu", category: "travel" },
            { id: 69, name: "Đồ ăn", category: "lifestyle" },
            { id: 70, name: "Thời trang", category: "lifestyle" },
            { id: 71, name: "Làm đẹp", category: "lifestyle" },
            { id: 72, name: "Âm nhạc", category: "lifestyle" },
            { id: 73, name: "JavaScript", category: "technology" },
            { id: 74, name: "React", category: "technology" },
            { id: 75, name: "Vue.js", category: "technology" },
            { id: 76, name: "Angular", category: "technology" },
            { id: 77, name: "Node.js", category: "technology" },
            { id: 78, name: "Python", category: "technology" },
            { id: 79, name: "Marketing", category: "business" },
            { id: 74, name: "SEO", category: "business" },
            { id: 33, name: "Đầu tư", category: "business" },
            { id: 34, name: "Khởi nghiệp", category: "business" },
            { id: 35, name: "Vật lý", category: "science" },
            { id: 36, name: "Sinh học", category: "science" },
            { id: 37, name: "Hóa học", category: "science" },
            { id: 38, name: "Toán học", category: "science" },
            { id: 39, name: "Dinh dưỡng", category: "health" },
            { id: 40, name: "Tập thể dục", category: "health" },
            { id: 41, name: "Sức khỏe tinh thần", category: "health" },
            { id: 42, name: "Giảm cân", category: "health" },
            { id: 43, name: "Châu Á", category: "travel" },
            { id: 44, name: "Châu Âu", category: "travel" },
            { id: 45, name: "Đồ ăn", category: "lifestyle" },
            { id: 46, name: "Thời trang", category: "lifestyle" },
            { id: 47, name: "Làm đẹp", category: "lifestyle" },
            { id: 48, name: "Âm nhạc", category: "lifestyle" }
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